<?php
    include_once 'Conexion.php';
    $user = $_POST["user"];
    $pw = md5($_POST["pw"]);
        
    $sql = "SELECT usuario, contrasena, nombres, apellidos FROM usuarios WHERE usuario = '".$user."' and contrasena = '".$pw."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($user == $row["usuario"] && $pw == $row["contrasena"]){
                echo "Bienvenido " . $row["nombres"] . " " . $row["apellidos"];
            }
        }
    } else {
        header("location: /Seminario/LoginColegio/Login.html");
        //echo "0 results";
    }
    mysqli_close($conn);
?>