<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<style type="text/css">
	a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #006400;

}
h3{
	color: #002b5e;
}


</style>
<body>
	<center>
			<p><a href="index.php">Home Page</a>
			   <a href="add.php">Add</a>
			    <a href="view.php">View</a>
			    <a href="display.php">Display based on various factors</a></p>

		
		
</center>
</body>
</html>
<?php
	require 'connection.php';
	$ID=$_GET['ID'];
	$query="delete from student_details where ID='$ID'";
	$res=mysqli_query($conn,$query);
	echo "<br>";
	echo "<center>";
	if ($res){
		echo "<h3>Record Deleted</h3>";
	}
	else{
		echo "<h3>Failed to delete record</h3>";
	}
	echo "</center>";
?>