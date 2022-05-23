<?php
//เรียกใช่้ไฟล์ที่มีคำสังเชื่อมต่อฐานข้อมูล
require ("dbconnect.php");
//เก็บค่าที่ submit มาจากฟอร์ม
$name = $_POST["name"];
$sname = $_POST["surname"];
$sex = $_POST["sex"];
$skills = implode(" , ",$_POST["skills"]); //implode ฟังก์ชันแปรง array เป็น String

//บันทึกข้อมูลในฐานข้อมูล OOP
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($con->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $con->error;
// }

//$conn->close();
//บันทึกข้อมูลในฐานข้อมูล Procedural
$sql = "INSERT INTO employees(em_name,em_surname,gender,skills) VALUE('$name','$sname','$sex','$skills')";

if(mysqli_query($con,$sql)){
    echo "New record created susseccfully";
    header( "location:index.php" );
 exit(0);
}else{
    echo "Error: ".$sql."<br>".mysqli_error($con);
};

mysqli_close($con);
?>