
<?php
extract($_REQUEST);
include('db.php');

$sql=mysqli_query($conn,"select * from som_upload where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("files/$row[name]");

mysqli_query($conn,"delete from som_upload where id='$del'");

header("Location:som_files.php");

?>