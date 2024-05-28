<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rename Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-image: url('rename1.jpg');
            height: 100vh;
            min-height: 100vh;
            background-size: cover;
            display: flex;
            opacity:  800%;
            color: beige;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            quotes: auto;
        }
        form {
            display: inline-block;
            text-align: left;
            color: white;
            height: auto;
            width: 30%;
            background-color: #fff;
            padding: 30px;
            border-radius: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: url(rename1.jpg);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: wheat;
        }
        input {
            width: 100%;
            padding: 10px;
            color: black;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color:#ccc;
            transition: border-color 0.3s ease-in-out;
        }
        input:focus {
            border-color: blue;
        }
        button {
            background-color: black;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $newName = $_POST["newName"];
    $newRoll = $_POST["newRoll"];
    $newAge = $_POST["newAge"];
    $newAddress = $_POST["newAddress"];
    // Update data in the 'student' table
    $sql = "UPDATE student SET name='$newName', roll='$newRoll', age='$newAge', address='$newAddress' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Data updated successfully</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br>
    <label for="newName">New Name:</label>
    <input type="text" id="newName" name="newName" required><br>
    <label for="newRoll">New Roll:</label>
    <input type="text" id="newRoll" name="newRoll" required><br>
    <label for="newAge">New Age:</label>
    <input type="text" id="newAge" name="newAge" required><br>
    <label for="newAddress">New Address:</label>
    <input type="text" id="newAddress" name="newAddress" required><br>
    <button type="submit">Rename Data</button>
</form>
</body>
</html>
