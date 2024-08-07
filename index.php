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
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="insert.php">Insert</a>
            <a href="display.php">Display</a>
        </div>
        <h1>Home page</h1>
    </div>
</body>
</html>