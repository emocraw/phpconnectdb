<?php
require("dbconnect.php");

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);
// mysqli_num_rows($result); //คำสังนับแถวข้อมูล mysqli_num_rows
if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
 echo "รหัสพนักงาน"."=". $row["em_id"]."<br>";
 echo "ชื่อ"."=". $row["em_name"]."<br>";
 echo "นามสกุล" ."=". $row["em_surname"]."<br>";
 echo "เพศ" ."=". $row["gender"]."<br>";
 echo "ทักษะ" ."=". $row["skills"]."<br>";
 echo "<hr>";
    }
};






?>