<!DOCTYPE html>
<html>
<head>
	<title>Display Name Of Rankers, Achievers and Defaulters</title>
	

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
		<h2>Display Name Of Rankers, Achievers and Defaulters</h2><br><br>
	<p>
		<a href="index.php">Home Page</a>
		
		 <a href="display_by_exam.php">By Exam Type</a>
		 <a href="display_by_student.php">By Student</a>
		 <a href="displaysort.php">By academics</a>
		 <a href="display_count.php">Count of Rankers Achievers and Defaulters</a></p><br><br>
	
	<?php
	echo "<center>";
	require 'connection.php';
	$query="select * from student_details order by Percentage desc";
	$res=mysqli_query($conn, $query);
	
	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Percentage</th>
  	</tr>";
  	echo "<h5>Rankers</h5>";
 
	while($row=mysqli_fetch_array($res)){

		if ($row['Percentage']>="80") {
			
			echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Percentage']."</td>";
			echo "</tr>";
			
		}
	
	
	}
	echo "</table>";

	$query="select * from student_details order by Percentage desc";
	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Percentage</th>
  	</tr>";
  	echo "<h5>Achievers</h5>";
 
	while($row=mysqli_fetch_array($res)){
		if ($row['Percentage']>="40" and $row['Percentage']<"80" ) {
				echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Percentage']."</td>";
		echo "</tr>";
		}
	
	}
	echo "</table>";

	$query="select * from student_details order by Percentage desc";
	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Standard</th>
  			<th>Percentage</th>
  	</tr>";
  	echo "<h5>Defaulters</h5>";
 
	while($row=mysqli_fetch_array($res)){
		if ($row['Percentage']<"40") {
				echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Standard']."</td>";
			echo "<td>".$row['Percentage']."</td>";
		echo "</tr>";
		}
	
	}
	echo "</table>";


	echo "</center>";

?>
</center>
</body>
</html>




		