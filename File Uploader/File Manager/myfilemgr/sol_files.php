<?php session_start(); ?>

<html>
<title>File|Mgr</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<?php
date_default_timezone_set("Asia/Calcutta");

?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=myweb', 'root', '') or die(mysqli_error($conn));
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $branch=$_POST['branch'];
  $sem = $_POST['sem'];
  $date = date('Y-m-d H:i:s');

  
  
  move_uploaded_file($temp,"files/".$name);

$query=$conn->query("INSERT INTO sol_upload (name,dept,sem,date) VALUES ('$name','$branch','$sem','$date')");
if($query){
header("location:sol_files.php");
}
else{
die(mysqli_error($conn));
}
}
?>


<html>
<body>
<?php include('header.php')?>
<?php include('dbcon.php'); ?>
<style>
.table tr th{
	
	border:#eee 1px solid;
	
	position:relative;
	font-family:"Times New Roman", Times, serif;
	font-size:12px;
	text-transform:uppercase;
	}
	table tr td{
	
	border:#eee 1px solid;
	color:#000;
	position:relative;
	font-family:"Times New Roman", Times, serif;
	font-size:12px;
	
	text-transform:uppercase;
	}
	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 1px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
}
</style>

	<div class="alert alert-info" style="background-color:#3a3845;">
                              
                               
		&nbsp;&nbsp;SCHOLARWISE/ File Manager/ SOL
        </div>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<tr>
				<td>
					<form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
				
						<input type="file" name="photo" id="photo"  required="required">
				</td>

				<td style="padding-top:15px; padding-left: 20px">	
						<label for="branch" style="font-size: 1.4rem; font-weight:800">Department: </label>
						<input type="text" name="branch" id="branch" required="required">

						<label for="sem" style="font-size: 1.4rem; font-weight:800; margin-left:30px">Sem: </label>
						<input type="number" name="sem" id="sem" required="required" min="1" max="12">
				</td>

				<td>
						<input type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
					</form><strong>SUBMIT HERE</strong></tr></td></table>

			<div class="col-md-18">
				<div class="container-fluid" style="margin-top:0px;">
   					<div class = "row">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<form method="post" action="sol_delete.php" >
                        				<table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            				<thead>
												<tr>
                                    				<th>ID</th>
                                    				<th>Date</th>
                                   					<th>File Name</th>
                                   					<th>Department</th>
                                   					<th>Semester</th>
													<th>Download</th>
													<th>Remove</th>
                                				</tr>
                            				</thead>
                            				<tbody>
												<?php 
													$query=mysqli_query($conn,"select * from sol_upload ORDER BY id")or die(mysqli_error($conn));
													while($row=mysqli_fetch_array($query)){
														$name=$row['name'];
														$id=$row['id'];
														$date=$row['date'];
														$dept = $row['dept'];
														$semester = $row['sem'];
														$entries = mysqli_num_rows($query)
												?>
                              
												<tr>
										
                                         			<td><?php echo $row['id'] ?></td>
													<td><?php echo $row['date'] ?></td>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $dept ?></td>
													<td><?php echo $semester ?></td>
													<td>
														<a href="download.php?filename=<?php echo $name;?>" title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a>
													</td>
													<td>
														<a href="sol_delete.php?del=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
													</td>
                                				</tr>
                         
						          				<?php } ?>
                            				</tbody>
                        				</table>
										 
          
									</form>

        						</div>
        					</div>
        				</div>
    				</div>
				</div>


</body>
</html>


