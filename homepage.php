<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            background-image: linear-gradient(45deg, rgba(254, 246, 210, 0.53) 0%, rgba(254, 246, 210, 0.53) 14.286%,rgba(221, 240, 216, 0.53) 14.286%, rgba(221, 240, 216, 0.53) 28.572%,rgba(188, 233, 223, 0.53) 28.572%, rgba(188, 233, 223, 0.53) 42.858%,rgba(156, 227, 229, 0.53) 42.858%, rgba(156, 227, 229, 0.53) 57.144%,rgba(123, 220, 235, 0.53) 57.144%, rgba(123, 220, 235, 0.53) 71.42999999999999%,rgba(90, 214, 242, 0.53) 71.43%, rgba(90, 214, 242, 0.53) 85.71600000000001%,rgba(57, 207, 248, 0.53) 85.716%, rgba(57, 207, 248, 0.53) 100.002%),linear-gradient(135deg, rgb(246, 99, 200) 0%, rgb(246, 99, 200) 12.5%,rgb(223, 98, 196) 12.5%, rgb(223, 98, 196) 25%,rgb(199, 97, 192) 25%, rgb(199, 97, 192) 37.5%,rgb(176, 96, 188) 37.5%, rgb(176, 96, 188) 50%,rgb(152, 95, 184) 50%, rgb(152, 95, 184) 62.5%,rgb(129, 94, 180) 62.5%, rgb(129, 94, 180) 75%,rgb(105, 93, 176) 75%, rgb(105, 93, 176) 87.5%,rgb(82, 92, 172) 87.5%, rgb(82, 92, 172) 100%);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            padding: 10%;
        }
        .logout-container {
            position: absolute;
            top: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
        }
        .logout-button {
            background-color: pink; /* Changed button color to pink */
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
        }
        .logout-button:hover {
            background-color: #ffcccc; /* Light pink on hover */
        }
        .welcome {
            font-size: 2em;
            font-weight: bold;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .label {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: pink; /* Changed button color to pink */
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }
        .button:hover {
            background-color: #ffcccc; /* Light pink on hover */
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
    <div class="container">
        <p class="welcome">
            Hello <?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row = mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'].' logged in as: '.$row['useroradmin'];
                }
            }
            ?>
            :)
        </p>
        <div class="label">Click on the button below to go to the form page.</div>
        <a href="form.php" class="button">Go To Form</a>
        <div class="label">Click the button below to know your allotted Stream.</div>
        <a href="stream.php" class="button">Stream</a>
    </div>
</body>
</html>
