<?php
// Check if the form has been submitted
if(isset($_POST["submit"]))
{
     // Retrieve the roll number from the form
    $rollno=$_POST["rno"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            margin: 0 5px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #ddd;
            border-radius: 4px;
        }


        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 4px;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input[type="text"] {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .form-container button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-container
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="insert.php">Insert</a>
            <a href="display.php">Display</a>
            <a href="search.php">Search</a>
            <a href="update.php">Update</a>
        </div>
        <h1>Search page</h1>
    </div>
    <div class="form-container">
    <form action="search.php" method="post">
        <label >Enter Rollno</label>
        <input type="text" name="rno" />
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Rollno</th>
                <th>name</th>
                <th>city</th>
                <th>fees</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if form has been submitted and process the input
            if(isset($_POST["submit"]))
            {
                  // Establish database connection
                $con = new mysqli("localhost", "root", "", "student");

                 // Prepare SQL query to fetch student data based on roll number
                $qry ="select * from student where rollno=$rollno";

                $result=$con->query($qry);

                 // Fetch and display results in table rows
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["rollno"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["city"]."</td>";
                    echo "<td>".$row["fees"]."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>

    </table>
</body>
</html>