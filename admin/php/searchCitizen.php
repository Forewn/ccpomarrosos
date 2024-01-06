<?php
    session_start();
    if(isset($_SESSION['id'])){
        require "../../php/conn.php";
        $name = htmlspecialchars($_POST['nombre']);
        $output = "";
        $sql = "SELECT * FROM tmaper WHERE perNom LIKE '$name' ORDER BY perNom, perApe;";
        while($citizen = mysqli_fetch_assoc(mysqli_query($conn, $sql))){
            $output .= "<tr>";
            $output .= "<td>".$citizen['perNom']."</td>";
            $output .= "<td>".$citizen['perApe']."</td>";
            $output .= "</tr>";
        }
        echo $output;
    }
    else{
        session_abort();
        header('Location: ../../index.html');
    }

?>