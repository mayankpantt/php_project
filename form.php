<?php
include('formsub.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print form data
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";


    if (isset($_POST["student_name"]) && isset($_POST["user_id"]) && isset($_POST["passing_year"])) {
        // Process high school marks form data
        $student_name = $_POST["student_name"];
        $user_id = $_POST["user_id"];
        $passing_year = $_POST["passing_year"];
        $english = $_POST["english"];
        $hindi = $_POST["hindi"];
        $social_science = $_POST["social_science"];
        $maths = $_POST["maths"];
        $science = $_POST["science"];
        $physics = $_POST["physics"];
        $math = $_POST["math"];
        $comp_sci = $_POST["comp_sci"];
        $eng_com = $_POST["eng_com"];
        $chemistry = $_POST["chemistry"];
        $stream = $_POST["stream"];
        $query=mysqli_query($conn,"INSERT INTO form(student_name,user_id,passing_year,english,hindi,social_science,maths,science,physics,math,comp_sci,eng_com,chemistry,stream) VALUES('$student_name','$user_id','$passing_year','$english','$hindi','$social_science','$maths','$science','$physics','$math','$comp_sci','$eng_com','$chemistry','$stream')");
        if ($query) {
            // No need for alert here
        } else {
            // No need for alert here
        }
        //$query->close();
    } else {
        echo "Invalid form submission!";
    }
} 
// else {
//     echo "<div style='text-align: center;'>No form submitted!</div>";;
// }

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Form</title>
<style>
    body {
        background-image: radial-gradient(circle at top right, rgb(49, 157, 235) 0%, rgb(49, 157, 235) 13%,rgb(76, 166, 234) 13%, rgb(76, 166, 234) 23%,rgb(103, 176, 232) 23%, rgb(103, 176, 232) 33%,rgb(130, 185, 231) 33%, rgb(130, 185, 231) 46%,rgb(156, 194, 230) 46%, rgb(156, 194, 230) 48%,rgb(183, 203, 229) 48%, rgb(183, 203, 229) 63%,rgb(210, 213, 227) 63%, rgb(210, 213, 227) 83%,rgb(237, 222, 226) 83%, rgb(237, 222, 226) 100%);
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    h2 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"],
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    button:hover {
        background-color: #45a049;
    }

    p {
        font-style: italic;
        color: #777;
    }
    .button {
        text-align: center;
        margin-bottom: 20px;
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
<body><div class="button">
        <a href="homepage.php">Home</a>
    </div>
    <h2>Marks Form</h2>
    <form method="POST">
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" required/>

        <label for="user_id">User Id:</label>
        <input type="text" id="user_id" name="user_id" required/>

        <label for="passing_year">Passing Year:</label>
        <input type="text" id="passing_year" name="passing_year" required/>
        
        <label>10th Subjects</label>
        <label for="english">English:</label>
        <input type="text" id="english" name="english" required/>
        
        <label for="hindi">Hindi:</label>
        <input type="text" id="hindi" name="hindi" required/>
        
        <label for="social_science">Social Science:</label>
        <input type="text" id="social_science" name="social_science" required/>
        
        <label for="maths">Maths:</label>
        <input type="text" id="maths" name="maths" required/>
        
        <label for="science">Science:</label>
        <input type="text" id="science" name="science" required/>

        <label>12th Subjects:</label>
        <label for="physics">Physics:</label>
        <input type="text" id="physics" name="physics" required/>
        
        <label for="math">Math:</label>
        <input type="text" id="math" name="math" required/>
        
        <label for="comp_sci">Computer Science:</label>
        <input type="text" id="comp_sci" name="comp_sci" required/>
        
        <label for="eng_com">English:</label>
        <input type="text" id="eng_com" name="eng_com" required/>
        
        <label for="chemistry">Chemistry:</label>
        <input type="text" id="chemistry" name="chemistry" required/>

        
        <label for="">Select Stream</label>
        <select name="stream">
            <option value="">----</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">MCA</option>
        </select>
        

        <button id="submit">Submit</button>
    </form>
</html>

