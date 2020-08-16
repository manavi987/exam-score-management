<?php
	require 'connection.php';
	if(count($_POST)>0) {
		mysqli_query($conn,"update student_details set  Name='" . $_POST['Name'] . "', Mail_id='" . $_POST['Mail_id'] . "', Phone_number='" . $_POST['Phone_number'] . "' ,Gender='" . $_POST['Gender'] . "', Roll_number='" . $_POST['Roll_number'] . "', Standard='" . $_POST['Standard'] . "', Exam='" . $_POST['Exam'] . "', English='" . $_POST['English'] . "', Hindi='" . $_POST['Hindi'] . "', Marathi='" . $_POST['Marathi'] . "', Math='" . $_POST['Math'] . "', Science='" . $_POST['Science'] . "', Socialscience='" . $_POST['Socialscience'] . "'    WHERE Name='" . $_POST['Name'] . "'");


		$message = "Details Updated Successfully";
	}
	$res = mysqli_query($conn,"select * from student_details where ID='" . $_GET['ID'] . "'");
	$row= mysqli_fetch_array($res);
	echo mysqli_error($conn);
	
?>	
	

<!DOCTYPE html>
<html>
<head>
	<title>Update student details</title>
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



input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

	<center>
		<h2>UPDATE STUDENT DETAILS</h2>
		<p><a href="index.html">Home Page</a>
		
			 <a href="add.php">Add</a>
			 <a href="view.php">View</a>
		     <a href="display.php">Display based on various factors</a></p></p>
	</center>
	<center>
	
	<form name="update_student"  method="POST" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="Name"  required placeholder="Add full name" value="<?php echo $row['Name']; ?>"></td>
			</tr>
			<tr>
				<td>Mail Id:</td>
				<td><input type="email" name="Mail_id" required placeholder="Enter your email address" value="<?php echo $row['Mail_id']; ?>"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>	
				<td><input type="number" name="Phone_number" required value="<?php echo $row['Phone_number'];?>"></td>
			</tr>
			<tr>
				<td>Gender:<br>
				<td><input type="radio" id="male" name="Gender" value="male" <?php if ($row['Gender']=="male"){ echo "checked"; } ?>/>Male</td>
  				<td><input type="radio" id="female" name="Gender" value="female" <?php if ($row['Gender']=="female"){ echo "checked";} ?>/>Female</td>
  				<td><input type="radio" id="other" name="Gender" value="other" <?php if ($row['Gender']=="other"){ echo "checked";} ?>/>other</td>
  		
			</tr>
			<tr>
				<td>Roll Number:</td>
				<td><input type="text" name="Roll_number" required value="<?php echo $row['Roll_number']; ?>"></td>
				
			</tr>
			<tr>
				<td>Standard:</td>
				<td><select name="Standard">
					<option   <?php if ($row['Gender']=="1"){ echo "selected"; } ?>>1</option>
					<option <?php if ($row['Gender']=="2"){ echo "selected"; } ?>>2</option>
  					<option <?php if ($row['Gender']=="3"){ echo "selected";} ?>>3</option>
  					<option <?php if ($row['Gender']=="4"){ echo "selected";} ?>>4</option>
  					<option <?php if ($row['Gender']=="5"){ echo "selected"; } ?>>5</option>
  					<option <?php if ($row['Gender']=="6"){ echo "selected";} ?>>6</option>
  					<option <?php if ($row['Gender']=="7"){ echo "selected";} ?>>7</option>
  					<option <?php if ($row['Gender']=="8"){ echo "selected"; } ?>>8</option>
  					<option <?php if ($row['Gender']=="9"){ echo "selected";} ?>>9</option>
  					<option <?php if ($row['Gender']=="10"){ echo "selected";} ?>>10</option>
  				</select></td>
			</tr>
			<tr>
				<td>Exam:</td>
				<td><input type="radio" name="Exam" value="First Unit Test" <?php if ($row['Exam']=="First Unit Test"){ echo "checked"; } ?>/>First Unit Test</td>
  				<td><input type="radio" name="Exam" value="Second Unit Test" <?php if ($row['Exam']=="Second Unit Test"){ echo "checked";} ?>/>Second Unit Test</td>
  				<td><input type="radio" name="Exam" value="Third Unit Test" <?php if ($row['Exam']=="Third Unit Test"){ echo "checked";} ?>/>Third Unit Test</td>
  				<td><input type="radio" name="Exam" value="Fourth Unit Test" <?php if ($row['Exam']=="Fourth Unit Test"){ echo "checked"; } ?>/>Fourth Unit Test</td>
  				<td><input type="radio" name="Exam" value="First Semester" <?php if ($row['Exam']=="First Semester"){ echo "checked";} ?>/>First Semester</td>
  				<td><input type="radio" name="Exam" value="Second Semester" <?php if ($row['Exam']=="Second Semester"){ echo "checked";} ?>/>Second Semester</td>
  		
			</tr>
			<tr>
				<td>English:</td>	
				<td><input type="number" name="English" required value="<?php echo $row['English'];?>"></td>
			</tr>
			<tr>
				<td>Hindi:</td>	
				<td><input type="number" name="Hindi" required value="<?php echo $row['Hindi'];?>"></td>
			</tr>
			<tr>
				<td>Marathi:</td>	
				<td><input type="number" name="Marathi" required value="<?php echo $row['Marathi'];?>"></td>
			</tr>
			<tr>
				<td>Math:</td>	
				<td><input type="number" name="Math" required value="<?php echo $row['Math'];?>"></td>
			</tr>
			<tr>
				<td>Science:</td>	
				<td><input type="number" name="Science" required value="<?php echo $row['Science'];?>"></td>
			</tr>
			<tr>
				<td>Social Science:</td>	
				<td><input type="number" name="Socialscience" required value="<?php echo $row['Socialscience'];?>"></td>
			</tr>
			<tr>
				<td>Total Marks:</td>	
				<td><input type="number" name="totalmarks" required value="<?php echo $row['totalmarks'];?>"></td>
			</tr>
			<tr>
				<td>Percentage:</td>	
				<td><input type="decimal" name="Percentage" required value="<?php echo $row['Percentage'];?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="button"></td>
			</tr></table></div></form>
</body>
</html>
  	
 

