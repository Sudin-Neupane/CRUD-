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

// Fetch data from student table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url('connect2.jpg');
            height: 101vh;
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
            margin: 40  px auto;
            padding: 16px;
            
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4caf50;
        }
        table {
            width: 100%;
            font-style: bold;
            color: #ddd;

            
            margin-bottom: 30px;
        }
        th, td {
            padding: 10px;  
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        button {
            padding: 10px;
            background-color: brown;
            color :white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Data</h2>
        
        <!-- Display data in a table -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['roll']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No data available</td></tr>";
            }
            ?>
        

        <button onclick="openInsertPage()">INSERT</button>
    </div>

    <script>
        function openInsertPage() {
            window.open('insert.php', '_blank');
        }
    </script>
    <button onclick="openRenamePage()">RENAME</button>
</div>

<script>
function openRenamePage() {
    window.open('rename.php', '_blank');
}
</script>



<button onclick="opendeletePage()">DELETE</button>
</div>

<script>
function opendeletePage() {
    window.open('delete.php', '_blank');
}
</script>
     </table>


<
    
</body>
</html>

<?php

$conn->close();
?>

