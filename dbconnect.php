<?php
// Create connection OOP
//$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($con->connect_error) {
//  die("Connection failed: " . $con->connect_error);
//}
// Create connection Procedural
$con = mysqli_connect("localhost","root","","mydata");

if(!$con){   
    die("Connection failed: ".mysqli_connect_error());
};



?>