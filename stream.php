<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allotted Stream</title>
    <style>
        body {
            background-image: radial-gradient(circle at center center, transparent,rgb(0,0,0)),linear-gradient(114deg, rgba(59, 59, 59,0.05) 0%, rgba(59, 59, 59,0.05) 50%,rgba(63, 63, 63,0.05) 50%, rgba(63, 63, 63,0.05) 100%),linear-gradient(186deg, rgba(173, 173, 173,0.05) 0%, rgba(173, 173, 173,0.05) 50%,rgba(237, 237, 237,0.05) 50%, rgba(237, 237, 237,0.05) 100%),linear-gradient(98deg, rgba(191, 191, 191,0.05) 0%, rgba(191, 191, 191,0.05) 50%,rgba(119, 119, 119,0.05) 50%, rgba(119, 119, 119,0.05) 100%),linear-gradient(58deg, rgba(95, 95, 95,0.05) 0%, rgba(95, 95, 95,0.05) 50%,rgba(189, 189, 189,0.05) 50%, rgba(189, 189, 189,0.05) 100%),linear-gradient(259deg, rgba(31, 31, 31,0.05) 0%, rgba(31, 31, 31,0.05) 50%,rgba(110, 110, 110,0.05) 50%, rgba(110, 110, 110,0.05) 100%),linear-gradient(41deg, rgba(142, 142, 142,0.05) 0%, rgba(142, 142, 142,0.05) 50%,rgba(84, 84, 84,0.05) 50%, rgba(84, 84, 84,0.05) 100%),linear-gradient(134deg, rgba(96, 96, 96,0.05) 0%, rgba(96, 96, 96,0.05) 50%,rgba(198, 198, 198,0.05) 50%, rgba(198, 198, 198,0.05) 100%),linear-gradient(46deg, rgba(12, 12, 12,0.05) 0%, rgba(12, 12, 12,0.05) 50%,rgba(71, 71, 71,0.05) 50%, rgba(71, 71, 71,0.05) 100%),radial-gradient(circle at center center, hsl(227,81%,21%),hsl(227,81%,21%));
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            background-color: white;
            padding: 50px;
            border-radius: 10px;
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
            align-items: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        .result {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 3px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .result p {
            margin: 10px 0;
        }
        .button {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .button a {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="button">
        <a href="homepage.php">Home</a>
    </div>
    <div class="container">
        <h1>Allotted Stream</h1>
        <form method="post">
            <label for="user_id">User Id:</label>
            <input type="text" id="user_id" name="user_id">
            <input type="submit" value="Fetch Data">
        </form>
        <?php
            $servername = "localhost";
            $username = "root"; 
            $password = "";
            $dbname = "formsub";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_id = $conn->real_escape_string($_POST['user_id']);
                $sql = "SELECT * FROM form WHERE user_id = '$user_id'";
                $result = $conn->query($sql);

                if ($result !== false && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='result'>";
                        echo "<p>NAME: " . $row["student_name"] . "</p>";
                        echo "<p>User Id: " . $row["user_id"] . "</p>";
                        echo "<p>Stream: " . $row["stream"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='result'>0 results</div>";
                }
            }
            $conn->close();
        ?>
    </div>
</body>
</html>
