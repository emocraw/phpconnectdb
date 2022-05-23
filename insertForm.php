<?php
require("header.php");
require("dbconnect.php");
?>
<div class="container ">
<h2 class="mb-3 mt-3 text-center">Infomation Form</h2>
<form action="insertData.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" id="name" name ="name">
  </div>
  <div class="mb-3">
    <label for="surname" class="form-label">นามสกุล</label>
    <input type="text" class="form-control" id="surname" name="surname">
  </div>
  <div class="form-group mb-3">
    <label for="sex" class="form-label">เพศ</label>
    <input type="radio" id="sex" name="sex" value="male">ชาย
    <input type="radio" id="sex" name="sex" value="female">หญิง
    <input type="radio" id="sex" name="sex" value="other">อื่นๆ
  </div>
  <div class="form-group mb-3">
    <label for="skill" class="form-label">เพศ</label>
    <input type="checkbox" id="sex" name="skills[]" value="Java">Java
    <input type="checkbox" id="sex" name="skills[]" value="Phyton">Phyton
    <input type="checkbox" id="sex" name="skills[]" value="PHP">PHP
    <input type="checkbox" id="sex" name="skills[]" value="JS">JS
  </div>
  <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
  <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
</form>

</div>
    
<?php
require("footer.php");
?>