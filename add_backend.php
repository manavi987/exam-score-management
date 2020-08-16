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

		
		</ul>
		
</center>
</body>
</html>
<?php
	require 'connection.php';
		$Name=$_POST['Name'];
		$Mail_id=$_POST['Mail_id'];
		$Phone_number=$_POST['Phone_number'];
		$Gender=$_POST['Gender'];
		$Roll_number=$_POST['Roll_number'];
		$Standard=$_POST['Standard'];
		$Exam=$_POST['Exam'];
		$English=$_POST['English'];
		$Hindi=$_POST['Hindi'];
		$Marathi=$_POST['Marathi'];
		$Math=$_POST['Math'];
		$Science=$_POST['Science'];
		$Socialscience=$_POST['Socialscience'];		
		$totalmarks=$_POST['totalmarks'];		
		$Percentage=$_POST['Percentage'];		

		
		$query="insert into student_details(Name,Mail_id,Phone_number,Gender,Roll_number,Standard,Exam,English,Hindi,Marathi,Math,Science,Socialscience,totalmarks,Percentage) values('$Name','$Mail_id','$Phone_number','$Gender','$Roll_number','$Standard','$Exam','$English','$Hindi','$Marathi','$Math','$Science','$Socialscience','$totalmarks','$Percentage')";
		

		$result=mysqli_query($conn,$query);

		echo "<center>";
		if ($result) {
			echo "<h3>Data inserted successfully</h3>";		
		}
		else{
			echo "<h3>Some error occurred</h3>".mysqli_error($conn);
		}
		echo "</center>";
		
?>