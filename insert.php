<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Insert data into the student table
    $sql = "INSERT INTO student (id, name, roll, age, address) VALUES ('$id', '$name', '$roll', '$age', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted into student table successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url('connect1.jpg');
            height: 100vh;
            min-height: 100vh;
            background-size: cover;
            display: flex;
            opacity:  800%;

            flex-direction: column;
            align-items: center;
            justify-content: center;
            quotes: auto;
        }
        .container {
            width: 80%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: inline-block;
            text-align: left;
            color: white;
            height: auto;
            width: 30%;
            background-color: #fff;
            padding: 30px;
            border-radius: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: url(connect1.jpg);
        }
         
        h2 {
            color: wheat;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            
            
        }
        input {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            background-color: aquamarine;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Insert Data</h2>
        <form action="" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="roll">Roll No:</label>
            <input type="text" id="roll" name="roll" required>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <button type="submit">Insert Data</button>
        </form>
    </div>
</body>
</html>
