<?php
    require_once('conn.php');

    $first_name = strtoupper(htmlspecialchars($_POST['nombre']));
    $second_name = strtoupper(htmlspecialchars($_POST['nombre2']));
    $last_name = strtoupper(htmlspecialchars($_POST['apellido']));
    $tipo_documento = strtoupper(htmlspecialchars($_POST['id']));
    $id = htmlspecialchars($_POST['cedula']);
    $email = strtolower(htmlspecialchars($_POST['correo']));
    $password = password_hash( trim($_POST['password']), PASSWORD_DEFAULT);

    $sql = "SELECT * FROM tmaper WHERE perCod = $id AND perNom IS NULL;";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        $sql1 = "UPDATE tmaper SET perCon = '$id', perNom = '$first_name', perNo2 = '$second_name', perApe = '$last_name', perTid = '$tipo_documento', perCor = '$email', perCon = '$password' WHERE perCod = '$id';";
        $result1 = mysqli_query($conn, $sql1);
        if($result1){
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $first_name;
            $_SESSION['password'] = $password;
            header('Location: ../admin/home.php');
        }
        else{
            header('Location: ../signup.php');
        }
    }
    else{
        header('Location: ../signup.php');             
    }

?>sdgfsdgsdgsd