<?php
    session_start();
    if(isset($_SESSION['id'])){
        require "../../php/conn.php";
        $name = htmlspecialchars($_POST['nombre']);
        $data = [];
        $sql = "SELECT * FROM tmaper WHERE perNom LIKE '%$name%' ORDER BY perNom, perApe;";
        $result = mysqli_query($conn, $sql);
        if(!mysqli_num_rows($result)){
            echo "";
        }
        else{
            for($i = 0 ;$i < mysqli_num_rows($result); $i++){
                $citizen = mysqli_fetch_assoc($result);
                $sql_dir = "SELECT * FROM taedir WHERE dirCod = ".$citizen['dirCod'].";";
                $direccion = mysqli_fetch_assoc(mysqli_query($conn, $sql_dir));
                $persona = array(
                    'id' => $citizen['perCod'],
                    'first_name' => $citizen['perNom'],
                    'second_name' => $citizen['perNo2'],
                    'last_name' => $citizen['perApe'],
                    'direccion' => array(
                        'street' => $direccion['calCod'],
                        'house' => $direccion['dirNca']
                    ),
                    'phone' => $citizen['perTel'],
                    'home_number' => 'XXXXXXXX'
                );
    
                array_push($data, $persona);
            }
            echo json_encode($data);
        }
    }
    else{
        session_abort();
        header('Location: ../../index.html');
    }

?>