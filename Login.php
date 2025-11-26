<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

            background-image: url('login.jpg');
            height: 100vh;
            min-height: 101vh;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            quotes: auto;

        }
        .container {
            width: 350px;
            margin: 100px auto;
            padding: 38 px;
            
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333333;
            background-color:black;


        }
        label{

            color:blueviolet;
            opacity: 4000;
            size: 30px;
            border: #333333;
            font-style: bold;
            font-size: larger;
            font-display:  block;
        
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: lightgreen;
            color: #333333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php
        // Check if form is submitted...
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // for email and password validation
            if ($email === 'sudin@gmail.com' && $password === 'qwerty') {
                // Redirect to connect.php upon successful login
                header('Location: connect.php');
                exit();
            } else {
                // Redirect back to the login form with an error message
                header('Location: login.php?error=1');
                exit();
            }
        }
        ?>
    </div>
</body>
</html>

