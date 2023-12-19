<?php
    require_once('../../php/conn.php');
    session_start();

    function tablaUser($conn, $first_name, $second_name, $last_name, $fna, $phone, $email, $rol, $voto, $carnet, $numdir, $id){
        $sql = "UPDATE tmaper SET perNom = '$first_name', perNo2 = '$second_name', perApe = '$last_name', perFna = '$fna', perTel = '$phone', perCor = '$email', rolCod = '$rol', votCod = '$voto', perPat = '$carnet', carCod = 2 WHERE perCod = $id;";
        mysqli_query($conn, $sql);
    }
    function tablaDir($conn, $numdir, $calle, $direccion, $casa, $id){
        $sqldir = "INSERT INTO taedir(dirCod, dirNca, calCod, dirDet) VALUES($numdir, '$casa', '$calle', '$direccion');";
        mysqli_query($conn, $sqldir);
        $sql = "UPDATE tmaper SET dirCod = $numdir WHERE perCod = $id;";
        mysqli_query($conn, $sql);
    }

    function tablaBom($conn, $id){

        if(isset($_POST['10Kg'])){
            if($_POST['0'] == ""){
                
                $cantidad10 = 1;
            }
            else{
                $cantidad10 = htmlspecialchars($_POST['0']);
            }
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM taebom WHERE bomNom = '10Kg';"));
            $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
            $a = $result['bomCod'];
            $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad10, $numbom);";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['18Kg'])){
            if($_POST['1'] == ""){
                $cantidad18 = 1;
                
            }
            else{
                $cantidad18 = htmlspecialchars($_POST['1']);
            }
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM taebom WHERE bomNom = '18Kg';"));
            $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
            $a = $result['bomCod'];
            $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad18, $numbom);";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['27Kg'])){
            if($_POST['2'] == ""){
                $cantidad27 = 1;
            }
            else{
                
                $cantidad27 = htmlspecialchars($_POST['2']);
            }
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM taebom WHERE bomNom = '27Kg';"));
            $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
            $a = $result['bomCod'];
            $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad27, $numbom);";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['43Kg'])){
            if($_POST['3'] == ""){
                $cantidad43 = 1;
            }
            else{
                
                $cantidad43 = htmlspecialchars($_POST['3']);
            }
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM taebom WHERE bomNom = '43Kg';"));
            $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
            $a = $result['bomCod'];
            $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad43, $numbom);";
            mysqli_query($conn, $sql);
        }
    }

    $first_name = htmlspecialchars($_POST['first_name']); 
    $second_name = htmlspecialchars($_POST['second_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $fna = htmlspecialchars($_POST['fna']);
    $carnet = htmlspecialchars($_POST['Carnet']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $rol = htmlspecialchars($_POST['rol']);
    $calle = $_POST['calle'];
    $direccion = htmlspecialchars($_POST['direccion']);
    $casa = htmlspecialchars($_POST['n_casa']);
    $voto = htmlspecialchars($_POST['voto']);
    $id = htmlspecialchars($_POST['id']);

    $numdir = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM taedir;"));

    tablaUser($conn, $first_name, $second_name, $last_name, $fna, $phone, $email, $rol, $voto, $carnet, $numdir, $id);
    if(!mysqli_errno($conn)){
        tablaDir($conn, $numdir, $calle, $direccion, $casa, $id);
        if(!mysqli_errno($conn)){
            tablaBom($conn, $id);
            if(mysqli_errno($conn)){
                die("ha habido un error: ". mysqli_errno($conn));
            }
        }
        else{
            die('ha habido un error: '. mysqli_errno($conn));
        }
    }
    else{
        die('ha habido un error: '. mysqli_errno($conn));
    }
?>