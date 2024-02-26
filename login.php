<?php
session_start();

$servername = "localhost"; // replace with your database host
$username = "u117947056_nextgencourse"; // replace with your database username
$password = "Nextgen@2024"; // replace with your database password
$database = "u117947056_nextgencourse"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql_query = "SELECT * FROM users WHERE mobile='$mobile' AND password='$password'";
    $result = $conn->query($sql_query);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['mobile'] = $mobile;
        header("Location: index.php"); 
        exit();
    } else {
        $error = "Invalid mobile number or password";
        echo "<script>alert('$error');</script>"; 
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(
        to right,
        #6f5de5,
        #7497f3,
        #62d2e8
    );
        }
        .container {
            background: rgb(255, 255, 255);
            max-width: 400px; 
            margin: 0 auto;
            padding: 40px;
            border: 2px solid #9de45f;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        .container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #40e95c;
            border-radius: 10px;
        }
        .btn {
            width: 48%; /* Adjusted width to fit two buttons in one line */
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 15px;
            color: #fff;
            cursor: pointer;
            margin-top: 20px; 
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }
        .register-btn {
            width: 48%; 
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 15px;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
            float: right; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="form-group">
                <label for="mobile">Phone number:</label>
                <input type="number" id="mobile" name="mobile" placeholder="Mobile" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <!-- Register button placed before the Login button -->
            <button type="submit" class="btn">Login</button>
            <a href="register.php" ><button type="button"  class="btn register-btn">Register</button></a>
        </form>
    </div>
</body>
</html>