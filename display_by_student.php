<?php

    require 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display marks in each subject, their total marks and percentage in each type of exam for particular student</title>
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
#user tr{
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
   width: 750px;
}</style>
<body>
    <center>
         <h2>Display marks in each subject, their total marks and percentage in each type of exam for particular student</h2><br><br>
        <p><a href="index.php">Home Page</a>
         

         <a href="display_by_exam.php" target="_self">By Exam Type</a>
         <a href="displaysort.php">By academics</a>
         <a href="displayrank.php">Rankers Achievers and Defaulters</a>
         <a href="display_count.php">Count of Rankers Achievers and Defaulters</a></p><br><br>
 
    <div>
    <form method="post" action="">
       
        <br><br>
        <table>
            <tr>
                <td>
                    <select name="Name">
                        <?php 
                            $res=mysqli_query($conn,"select Name from student_details");
                            while ($row=mysqli_fetch_array($res)) {
                            echo "<option>";
                            echo $row['Name'];
                            echo "</option>";    
                        }
                        ?>
                        <br><br>
                    </select>
                </td>
              </tr></table><br>
                        <input type="submit" value="Get Data" name="submit">
               
           
    </form>   </center>

    <?php 
    if(isset($_POST['submit'])) {
        $Name=$_POST['Name'];
       
      

       $query="select * from student_details where Name='$Name'";
       $res=mysqli_query($conn,$query);
       if ($res) {
           if (mysqli_num_rows($res) > 0){ 
            echo "<br><br>";
            echo "<center>";
            echo "<table id='user'>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Standard</th>";
            echo "<th>Exam</th>";
            echo "<th>English</th>";
            echo "<th>Hindi</th>";
            echo "<th>Marathi</th>";
            echo "<th>Math</th>";
            echo "<th>Science</th>";
            echo "<th>Socialscience</th>";
            echo "<th>totalmarks</th>";
            echo "<th>Percentage</th>";
            echo "</tr>";
            echo "</center>";

        while($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Standard']."</td>";
            echo "<td>".$row['Exam']."</td>";
            echo "<td>".$row['English']."</td>";
            echo "<td>".$row['Hindi']."</td>";
            echo "<td>".$row['Marathi']."</td>";
            echo "<td>".$row['Math']."</td>";
            echo "<td>".$row['Science']."</td>";
            echo "<td>".$row['Socialscience']."</td>";
            echo "<td>".$row['totalmarks']."</td>";
            echo "<td>".$row['Percentage']."</td>";
            echo "</tr>";
         }

    echo "</table>";
    echo "</center>";
       }

       else {
            echo "<br><br>";
            echo "No Data Found";
       }    
}
    ?>
<?php
}

?>
</div>
</html>