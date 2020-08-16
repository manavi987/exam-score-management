<!DOCTYPE html>
<html>
<head>
	<title>Details Sorted Type Of Exam</title>
	

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
  width: 100%;
}

#user td, #user th {
  border: 1px solid #ddd;
  padding: 6px;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}

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
		<h2>Details Sorted Type Of Exam</h2><br>
	<p><a href="index.html">Home Page</a>
		
	<a href="display_by_student.php" target="_self">By Student</a>
		 <a href="displaysort.php">By academics</a>
		 <a href="displayrank.php">Rankers Achievers and Defaulters</a>
		 <a href="display_count.php">Count of Rankers Achievers and Defaulters</a></p><br><br>

	
	<?php
	echo "<center>";
	require 'connection.php';

	$query="select * from student_details order by Exam";

	$res=mysqli_query($conn, $query);

	echo "<table id='user'>
	<tr>
			<th>Name</th>
			<th>Exam</th>
  			<th>English</th>
  			<th>Hindi</th>
  			<th>Marathi</th>
  			<th>Math</th>
  			<th>Science</th>
  			<th>Social Science</th>
  			<th>total Marks</th>
  			<th>Percentage</th>
  			</tr>";

	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Exam']."</td>";
			echo "<td>".$row['English']."</td>";
			echo "<td>".$row['Marathi']."</td>";
			echo "<td>".$row['Math']."</td>";
			echo "<td>".$row['Science']."</td>";
			echo "<td>".$row['Socialscience']."</td>";
			echo "<td>".$row['Hindi']."</td>";
			echo "<td>".$row['totalmarks']."</td>";
			echo "<td>".$row['Percentage']."</td>";
		echo "</tr>";
	}

	echo "</table>";
	echo "</center>";

?>
</center>
</body>
</html>


		


		