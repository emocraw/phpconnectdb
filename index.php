<?php
require("header.php");
require("dbconnect.php");

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);
?>
<div class="container-sm">
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5 mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DashBord Employee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="insertForm.php">เพิ่มพนักงาน</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ค้นหาพนักงาน</button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="container">
<table class="table ">
  <thead>
    <tr>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">เพศ</th>
      <th scope="col">สกิล</th>
      <th scope="col">แก้ไข-ลบ</th>
    </tr>
  </thead>
  <tbody>
      
<?php 

// mysqli_num_rows($result); //คำสังนับแถวข้อมูล mysqli_num_rows
if (mysqli_num_rows($result)>0){
    while($row2 = mysqli_fetch_assoc($result)){ ?> 
     <tr>
     <th scope = row ><?php echo $row2["em_name"]?></th></a>
     <td><?php echo $row2["em_surname"]?></td>
     <td><?php echo $row2["gender"]?></td>
     <td><?php echo $row2["skills"]?></td>
     <td> <a href="edit.php?id=<?php echo $row2["em_id"]?>" class="btn btn-warning">แก้ไข</a></td>
     <td></td>
   </tr> 
   
   <?php  }
};?>   
  </tbody>
</table>
</div>

<?php
require("footer.php")
?>