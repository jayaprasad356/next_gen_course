<?php

$servername = "localhost"; // replace with your database host
$username = "u117947056_nextgencourse"; // replace with your database username
$password = "Nextgen@2024"; // replace with your database password
$database = "u117947056_nextgencourse"; // replace with your database name


$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $referral_code = isset($_POST['referral_code']) ? $_POST['referral_code'] : '';

    $sql_query = "INSERT INTO users (name, email, mobile,location,password,referral_code) VALUES ('$name','$email', '$mobile', '$location', '$password', '$referral_code')";
    
    if ($conn->query($sql_query) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";

        echo "<script>window.location.href='index.php';</script>";
        exit();


    } else {
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
            width: 50%;
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

       
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Phone Number:</label>
                <input type="number" id="mobile" name="mobile" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Location" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <label for="referral_code"> Referral code</label>
                <input type="text" id="referral_code" name="referral_code" placeholder="Referral Code" required>
            </div>
            <button class="btn signin" name="btnAdd">Register</button>
        </form>
    </div>
</body>
</html>
