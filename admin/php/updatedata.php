<?php
    require_once('../../php/conn.php');
    session_start();

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

    $sql = "UPDATE tmaper SET perNom = '$first_name', perNo2 = '$second_name', perApe = '$last_name', perFna = '$fna', perTel = '$phone', perCor = '$email', rolCod = '$rol', votCod = '$voto', perPat = '$carnet' WHERE perCod = $id;";
    $result = mysqli_query($conn, $sql);

    $numdir = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM taedir;"));

    $sqldir = "INSERT INTO taedir(dirCod, dirNca, calCod, dirDet) VALUES($numdir, $casa, $calle, $direccion);";
    mysqli_query($conn, $sqldir);

    $bombona10 = htmlspecialchars($_POST['10Kg']);
    $cantidad10 = htmlspecialchars($_POST['Cant_10Kg']);
    $bombona18 = htmlspecialchars($_POST['18Kg']);
    $cantidad18 = htmlspecialchars($_POST['Cant_18Kg']);
    $bombona27 = htmlspecialchars($_POST['27Kg']);
    $cantidad27 = htmlspecialchars($_POST['Cant_27Kg']);
    $bombona43 = htmlspecialchars($_POST['43Kg']);
    $cantidad43 = htmlspecialchars($_POST['Cant_43Kg']);

    if(isset($bombona10)){
        $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM ttrbom WHERE bomNom = '$bombona10';"));
        $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
        $a = $result['bomCod'];
        $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad10, $numbom);";
        mysqli_query($conn, $sql);
    }
    if(isset($bombona18)){
        $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM ttrbom WHERE bomNom = '$bombona18';"));
        $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
        $a = $result['bomCod'];
        $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad18, $numbom);";
        mysqli_query($conn, $sql);
    }
    if(isset($bombona27)){
        $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM ttrbom WHERE bomNom = '$bombona27';"));
        $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
        $a = $result['bomCod'];
        $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad27, $numbom);";
        mysqli_query($conn, $sql);
    }
    if(isset($bombona43)){
        $result = mysqli_fetch_array(mysqli_query($conn, "SELECT bomCod FROM ttrbom WHERE bomNom = '$bombona43';"));
        $numbom = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ttrbom;"));
        $a = $result['bomCod'];
        $sql = "INSERT INTO ttrbom(perCod, bomCod, bomCan, botCod) VALUES($id, $a, $cantidad43, $numbom);";
        mysqli_query($conn, $sql);
    }
?>