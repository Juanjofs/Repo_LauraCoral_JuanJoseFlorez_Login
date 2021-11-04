<?php
///conexion a MYSQL
   $conn = mysqli_connect('localhost', 'root', '', 'colegiodb');
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
   //echo "Connected successfully <br><hr>";
?>