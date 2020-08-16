<?php

    require 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Number of Rankers,Achievers and Defaulters in Particular Standard</title>
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
  width: 250px%;
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
  width: 750px;
}
#user {
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  border-collapse: collapse;
  width: 750px%;
}

#user td, #user th {
  border: 1px solid #ddd;
  padding: 6px;
  text-align: center;
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
</style>
<body>
    <center>
         <h2>Number of Rankers,Achievers and Defaulters in Particular Standard</h2>
    <p>
        <a href="index.php">Home Page</a>
         <a href="display_by_exam.php" target="_self">By Exam Type</a>
        <a href="display_by_student.php" target="_self">By Student</a>
         <a href="displaysort.php">By academics</a>
         <a href="displayrank.php">Rankers Achievers and Defaulters</a></p><br><br>
    <div>
    <form method="post" action="">
       
        <br><br>
        <table>
            <tr>
                <td>
                    <label for="Standard">Select Standard:</label>
                    <select name="Standard" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>8</option>
                            <option>10</option>
                            
                        <br><br>
                    </select>
                </td>
                 </tr>
        </table>
                
                        <input type="submit" value="Get Data" name="submit">
                
            
    </form></div>

    <?php 
    if(isset($_POST['submit'])) {
        $Standard=$_POST['Standard'];
        

        $result = mysqli_query($conn,"select count(Percentage) from student_details where Standard='$Standard' and Percentage>=80");
        $cnt = mysqli_fetch_assoc($result)['count(Percentage)'];
        mysqli_error($conn);
       
       
            echo "<br><br>";
            echo "<table id='user'>
            <tr>
            <th>Standard</th>
            <th>Rankers Count</th>
            </tr>";

      
            echo "<tr>";
            echo "<td>".$Standard."</td>";
            echo "<td>".$cnt."</td>";
            echo "</tr>";
       echo "</table>";
    echo "</center>";
      
    ?>
<?php
}?>
<?php
if(isset($_POST['submit'])) {
        $Standard=$_POST['Standard'];
 $result = mysqli_query($conn,"select count(Percentage) from student_details where Standard='$Standard' and Percentage<80 and 40<=Percentage");
        $cnt = mysqli_fetch_assoc($result)['count(Percentage)'];
        mysqli_error($conn);
       
      
            echo "<br><br>";
            echo "<center>";
            echo "<table id='user'>
            <tr>
            <th>Standard</th>
            <th>Achievers Count</th>
            </tr>";

            echo "<tr>";
            echo "<td>".$Standard."</td>";
            echo "<td>".$cnt."</td>";
            echo "</tr>";

echo "</table>";
    echo "</center>";
                 
     
    ?>
<?php
}?>
<?php
if(isset($_POST['submit'])) {
        $Standard=$_POST['Standard'];
 $result = mysqli_query($conn,"select count(Percentage) from student_details where Standard='$Standard' and 40>Percentage");
        $cnt = mysqli_fetch_assoc($result)['count(Percentage)'];
        mysqli_error($conn);
       
    
            echo "<br><br>";
            echo "<center>";
            echo "<table id='user'>
            <tr>
            <th>Standard</th>
            <th>Defaulters Count</th>
            </tr>";

       
            echo "<tr>";
            echo "<td>".$Standard."</td>";
            echo "<td>".$cnt."</td>";
            echo "</tr>";
      

    echo "</table>";
    echo "</center>";
      

    ?>
<?php
}?>
</center>
</body>
</div>
</html>