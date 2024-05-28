<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #45a049;
            background-image: url('delete.jpg');
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }
        input:focus {
            border-color: #4CAF50;
        }
        button {
            background-color: aqua;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: aqua;
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

    // Delete data from the 'student' table based on ID
    $sql = "DELETE FROM student WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Data deleted successfully</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>
    <br>
    <button type="submit">Delete Data</button>
</form>

</body>
</html>
