<?php
	require 'connection.php';
	$res = mysqli_query($conn,"select * from student_details");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
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
}
h2{
		color: blue;
		font-family: cursive;
	}
	</style>
</head>
<body>
	<center>
		<h2 >VIEW STUDENT DETAILS</h2><br>
		<p><a href="index.php">Home Page</a>
		
			 <a href="add.php">Add</a>
			 <a href="display.php">Display based on various factors</a></p>
			 <br><br>
			
	<table id="user">
	
			<tr>
				<th>Sr no.</th>
				<th>Name</th>
				<th>Mail id</th>
				<th>Phone number</th>
				<th>Gender</th>
				<th>Roll number</th>
				<th>Standard</th>
				<th>Exam</th>
				<th>English</th>
				<th>Hindi</th>
				<th>Marathi</th>
				<th>Math</th>
				<th>Science</th>
				<th>Social Science</th>
				<th>Total Marks</th>
				<th>Percentage</th>
				<th>View</th>
				<th>Delete</th>
			</tr>
		
		<tbody>
			<?php
				
				$count=1;
				
				while($row = mysqli_fetch_assoc($res)) { ?>
					<tr class="<?php if(isset($ID)) echo $ID;?>">
						<td align="center"><?php echo $count; ?></td>
						<td align="center"><?php echo $row["Name"]; ?></td>
						<td align="center"><?php echo $row["Mail_id"]; ?></td>
						<td align="center"><?php echo $row["Phone_number"]; ?></td>
						<td align="center"><?php echo $row["Gender"]; ?></td>
						<td align="center"><?php echo $row["Roll_number"]; ?></td>
						<td align="center"><?php echo $row["Standard"]; ?></td>
						<td align="center"><?php echo $row["Exam"]; ?></td>
						<td align="center"><?php echo $row["English"]; ?></td>
						<td align="center"><?php echo $row["Hindi"]; ?></td>
						<td align="center"><?php echo $row["Marathi"]; ?></td>
						<td align="center"><?php echo $row["Math"]; ?></td>
						<td align="center"><?php echo $row["Science"]; ?></td>
						<td align="center"><?php echo $row["Socialscience"]; ?></td>
						<td align="center"><?php echo $row["totalmarks"]; ?></td>
						<td align="center"><?php echo $row["Percentage"]; ?></td>
						<td align="center"><a href="update.php?ID=<?php echo $row['ID']; ?>">Edit</a></td>
						<td align="center"><a href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>
					</tr>
				<?php $count++; } 
			?>
</tbody>
</table>
</div>
</body>
</html>