<?php
session_start();


$servername = "localhost";
$username = "u117947056_ngcourse";
$password = "Ngcourse@2024";
$database = "u117947056_ngcourse";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $referred_by = isset($_POST['referred_by']) ? $_POST['referred_by'] : '';


    $check_query = "SELECT * FROM users WHERE mobile='$mobile'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "<script>alert('Mobile number is already registered. Please use a different mobile number.');</script>";
    } else {
        $sql_query = "INSERT INTO users (name, email, mobile, location, password, referred_by) 
                      VALUES ('$name','$email', '$mobile', '$location', '$password', '$referred_by')";
        
        if ($conn->query($sql_query) === TRUE) {
            $user_id = $conn->insert_id;

            $refer_code = '';
            if (empty($referred_by)) {
                $refer_code = 'CMDS' . $user_id; 
            } else {
                $admincode = substr($referred_by, 0, -5); 
                $sql = "SELECT refer_code FROM admin WHERE refer_code='$admincode'";
                $result = $conn->query($sql);
                $num = $result->num_rows;
                if ($num >= 1) {
                    $refer_code = $admincode . $user_id;
                } else {
                    $refer_code = 'CMDS' . $user_id;
                }
            }

            $sql_query_refer = "UPDATE users SET refer_code='$refer_code' WHERE id = $user_id";
            $conn->query($sql_query_refer);

            echo "<script>alert('New record created successfully');</script>";
            echo "<script>window.location.href='login.php';</script>";
            exit();
        } else {
            echo "Error: " . $sql_query . "<br>" . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6f5de5, #7497f3, #62d2e8);
        }
        .custom-container {
            width: 450px; 
            margin: 0 auto;
            padding: 40px;
            border: 2px solid #9de45f;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
            background: rgb(255, 255, 255);
        }
        .btn-custom {
            width: 100%;
            margin-top:25px;
            border-radius: 15px;
        }
        .btn-customs {
            width: 100%;
            border-radius: 15px;
           
        }
        @media (max-width: 576px) {
            .nowrap-mobile {
                white-space: nowrap;
                font-size: 10px;
            }
        }

    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="custom-container">
            <h2 class="text-center">Register</h2>
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Phone Number:</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="referred_by">Referred By:</label>
                    <input type="text" class="form-control" id="referred_by" name="referred_by" placeholder="Referred By">
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-custom">Register</button>
                    </div>
                    <div class="col-6 text-right">
                    <p class="mb-1 small nowrap-mobile">Already have an account?</p>
                        <a href="login.php" class="btn btn-success btn-customs">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


