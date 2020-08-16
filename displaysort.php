<!DOCTYPE html>
<html>
<head>
	<title>Details Of Students Sorted By Marks In Each Subject, Total Marks and Percentage</title>
	

</head>
<style type="text/css">
	h2{
        color: blue;
        font-family: cursive;
    }

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
#user {
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  border-collapse: collapse;
  width: 550px;
}

#user td, #user th {
  border: 1px solid #ddd;
  padding: 6px;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}
#user tr{
	text-align: center;
}
#user th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #002b5e;
  color: white;
  text-align: center;
}</style>
<body>
	<center>
		<h2>Details Of Students Sorted By Marks In Each Subject, Total Marks and Percentage</h2><br><br>
	<p>
		<a href="index.php">Home Page</a>
		
		<a href="display_by_exam.php">By Exam Type</a>
		 <a href="display_by_student.php">By Student</a>
		 
		 <a href="displayrank.php">Rankers Achievers and Defaulters</a>
		 <a href="display_count.php">Count of Rankers Achievers and Defaulters</a></p><br><br>
	
	<?php
	echo "<center>";
	require 'connection.php';

	$query="select * from student_details order by English desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>English</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['English']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	
	echo "<br>";
	echo "<br>";


	$query="select * from student_details order by Hindi desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Hindi</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Hindi']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	

	echo "<br>";
	echo "<br>";

	$query="select * from student_details order by Marathi desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Marathi</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Marathi']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	
	echo "<br>";
	echo "<br>";

	$query="select * from student_details order by Math desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Math</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Math']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	
	echo "<br>";
	echo "<br>";

	$query="select * from student_details order by Science desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Science</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Science']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	

	echo "<br>";
	echo "<br>";

	$query="select * from student_details order by Socialscience desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Social Science</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Socialscience']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	

	echo "<br>";
	echo "<br>";

	$query="select * from student_details order by totalmarks desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Total Marks</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['totalmarks']."</td>";
			
		echo "</tr>";
	}

	echo "</table>";
	
	echo "<br>";
	echo "<br>";
	

	$query="select * from student_details order by Percentage desc";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Percentage</th>
  			
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Percentage']."</td>";
			
		echo "</tr>";
	}
	echo "</table>";
	echo "</center>";


?>
</center>
</body>
</html>


		

