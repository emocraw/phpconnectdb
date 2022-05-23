<?php
require("dbconnect.php");
$id = $_POST["id"];
$name = $_POST["name"];
$sname = $_POST["surname"];
$sex = $_POST["sex"];
$skills = implode(" , ",$_POST["skills"]);

$sql = "UPDATE `employees` SET `em_name`='$name',`em_surname`='$sname',`gender`='$sex',`skills`='$skills' WHERE em_id = 1";
// mysqli_num_rows($result); //คำสังนับแถวข้อมูล mysqli_num_rows
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
    header( "location:index.php" );
 exit(0);
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }
  
  mysqli_close($con);





?>