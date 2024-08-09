<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
        }

        .form-container div {
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 1.2em;
            margin: 0 5px;
        }

        a:hover {
            color: #333;
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
        <h1>Update page</h1>
        <table>
            <thead>
                <tr>
                <th>Rollno</th>
                <th>Name</th>
                <th>City</th>
                <th>Fees</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $con = new mysqli("localhost", "root", "", "student");
                $qry = "select * from student";        
                $result = $con->query($qry);
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["rollno"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["city"]."</td>";
                    echo "<td>".$row["fees"]."</td>";
                    echo "<td>
                            <a href='edit.php?rno=".$row["rollno"]."'>
                            <i class='fa-solid fa-pen-to-square'></i>
                            </a>
                            </td>";
                    echo "<td>
                            <a href='delete.php?rno=".$row["rollno"]."'>
                            <i class='fa-solid fa-trash'></i>
                            </a>
                            </td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <?php
     if (isset($_GET["update"]))
     {
        echo "<script>";
        echo "alert('Data succesfully updated!!!')";
        echo "</script>";
        
     }
    ?>
</body>
</html>