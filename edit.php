<?php 
  $rollno=$_GET["rno"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
          body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        #mydata {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        td:first-child {
            font-weight: bold;
            width: 30%;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>
<body>
<div id="mydata">
    <h1> Update Recors</h1>

    <?php 
            $con = new mysqli("localhost", "root", "", "student");
      $sql="select *  from student where rollno=$rollno";
      $result=$con->query($sql);
      while($row=$result->fetch_assoc())
      {
        echo "<form method='post' action='updatesave.php'>";
        echo "<table>";
        echo "<tr>";
         echo "<td> Rollno </td>";
         echo "<td>  <input type='text' value='".$row["rollno"]."'  name='rno'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> name </td>";
        echo "<td><input type='text' value='".$row["name"]."'  name='nm'></td>";
       echo "</tr>";
       echo "<tr>";
       echo "<td> City </td>";
       echo "<td><input type='text' value='".$row["city"]."'  name='ct'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Fees </td>";
      echo "<td><input type='text' value='".$row["fees"]."'  name='fs'></td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> </td>";
     echo "<td><input type='submit' value='update'></td>";
    echo "</tr>";
     echo "</table>";
    echo "</form>";
      }
   ?>
 </div>
</body>
</html>