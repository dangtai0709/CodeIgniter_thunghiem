<!DOCTYPE html>
<html>
<head>
	<title>Danh Sách Sinh Viên</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 

</head>
<body>
	<h2 style="justify-content: center; display: flex;"> Danh Sách Sinh Viên </h2>
<div style="padding: 50px;">
  <a href="./add" class="btn btn-primary float-right">Thêm sinh viên</a>

	</div>
  <div class="container-fluid" >
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Class</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0;$i<count($sv);$i++){ 


    ?>
    <tr>
    	<th scope='row' id="id" ><?php echo $sv[$i]['ID']; ?></th>
      <td><?php echo $sv[$i]['Name']; ?></td>
      <td><?php echo $sv[$i]['Date']; ?></td>
      <td><?php echo $sv[$i]['Class']; ?></td>
    <td style="display: flex;"> 
<form action="./edit">
  <?php 
  echo " <input type='type' name='ID'  hidden='hidden' value='".$sv[$i]['ID']."'>";
   ?>
<button type="submit" class="btn btn-primary">Edit</button>
</form>
<form action="./delete">
   <?php 
  echo " <input type='type' name='ID'  hidden='hidden' value='".$sv[$i]['ID']."'>";
   ?>
<button type="submit" class="btn btn-primary">Delete</button>
</form>
</td>  
    </tr>
    <?php } ?>
  </tbody>
</table>


</div>
</body>
</html>