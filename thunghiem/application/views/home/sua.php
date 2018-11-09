<!DOCTYPE html>
<html>
<head>
	<title>Thêm sinh viên</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
	<h1 style="text-align: center;">Sửa sinh viên</h1>
	<div class="container">
<form action="./edit">
  <div class="form-group">
      <?php 
echo "    <input type='type' hidden='hidden' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='ID'  value='".$sv[0]['ID']."'>
";
     ?>
    <label for="exampleInputEmail1">Name</label>
    <?php 
echo "    <input type='type' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='name'  value='".$sv[0]['Name']."'>
";
     ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
   <?php 
echo "    <input type='type' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='date'  value='".$sv[0]['Date']."'>
";
     ?>
  <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
  <?php 
echo "    <input type='type' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='class'  value='".$sv[0]['Class']."'>
";
     ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>