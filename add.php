
<!DOCTYPE html>
<html>
<head>
	<title>add student details</title>
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
	<h2 >ADD STUDENT DETAILS</h2><br>
	<center><p><a href="index.php" class="home">Home Page</a>

			<a href="view.php" class="view">View</a>
		     <a href="display.php" class="display">Display based on various factors</a></p>
			
<div>
	<form method="post" action="add_backend.php">
		<table class=table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="Name" required placeholder="Add full name" autofocus></td>
			</tr>
			<tr>
				<td>Mail Id:</td>
				<td><input type="email" name="Mail_id" required placeholder="Enter your email address"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>	
				<td><input type="number" name="Phone_number" required maxlength="10"></td>
			</tr>
			<tr>
				<td>Gender:<br>
				<td><input type="radio" id="male" name="Gender" value="male">Male</td>
  				<td><input type="radio" id="female" name="Gender" value="female">Female</td>
  				<td><input type="radio" id="female" name="Gender" value="other">Other</td>
  		
			</tr>
			<tr>
				<td>Roll Number:</td>
				<td><input type="number" name="Roll_number" required></td>
			</tr>
			<tr>
				<td>Standard:</td>
				<td><select name="Standard">
					<option>1</option>
					<option>2</option>
  					<option>3</option>
  					<option>4</option>
  					<option>5</option>
  					<option>6</option>
  					<option>7</option>
  					<option>8</option>
  					<option>9</option>
  					<option>10</option>
  				</select></td>
			</tr>
			

			<tr>
				<td>Exam:</td>
				<td><input type="radio" name="Exam" value="First Unit Test">First Unit Test</td>
  				<td><input type="radio" name="Exam" value="Second Unit Test">Second Unit Test</td>
  				<td><input type="radio" name="Exam" value="Third Unit Test">Third Unit Test</td>
  				<td><input type="radio" name="Exam" value="Fourth Unit Test">Fourth Unit Test</td>
  				<td><input type="radio" name="Exam" value="First Semester">First Semester</td>
  				<td><input type="radio" name="Exam" value="Second Semester">Second Semester Test</td>
			</tr>
			<table>
				<tr>
					<td><p>-------------Marks-------------</p><td>
				</tr>
				<tr>
					<td>English:</td>
					<td><input type="text" name="English" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Hindi:</td>
					<td><input type="text" name="Hindi" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Marathi:</td>
					<td><input type="text" name="Marathi" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Math:</td>
					<td><input type="text" name="Math" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Science:</td>
					<td><input type="text" name="Science" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Social Science:</td>
					<td><input type="text" name="Socialscience" required placeholder="Enter Marks"></td>
				</tr>
				<tr>
					<td>Total Marks:</td>
					<td><input type="number" name="totalmarks" required placeholder="Enter Total Marks"></td>
				</tr>
				<tr>
					<td>Percentage:</td>
					<td><input type="decimal" name="Percentage" required placeholder="Enter Percentage Without % symbol"></td>
				</tr>
			</table>
			<br><br>
				<td><input type="submit" value="Submit"></td>
			</tr>

			
		</form></div>
	</center>

</body>
</html>


