
<?php
session_start(); // Start the session if not already started

$servername = "localhost";
$username = "u117947056_ngcourse";
$password = "Ngcourse@2024";
$database = "u117947056_ngcourse";


$conn = new mysqli($servername, $username, $password, $database);

// Check if refercode is passed via GET parameter and store it in session
if(isset($_GET['refercode'])) {
    $_SESSION['refercode'] = $_GET['refercode'];
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $user_id = $_SESSION['user_id'];
    
    // Fetch user details from the database using user_id
    $sql = "SELECT name, mobile ,refer_code FROM users WHERE id='$user_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $mobile = $row['mobile'];
        $refer_code = $row['refer_code'];
    }
} else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
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
            max-width: 600px;
            height:790px;
            margin: 0 auto;
            padding: 40px;
            border: 2px solid #9de45f;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
        }
        .card p{
          color: white;
        }
        
        .card-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .card-buttons a {
            margin: 0 5px;
        }
        .btn-with-icon {
            display: inline-flex;
            align-items: center;
        }
        .btn-with-icon .icon {
            margin-right: 5px;
        }
        .white-bg {
            background-color: white;
            color: blue; /* Text color */
            border-color: white; /* Border color (optional) */
        }
        .blue-bg {
            background-color: #181d83;
            color: white; /* Text color */
            border-color: #181d83; /* Border color (optional) */
        }
        .profile p{
          margin-left:110px;
          position: relative;
          bottom:10px;
        }
        .profile svg{
          position: relative;
          top:50px;
          left:40px;
        }
        .profile-container {
          position: relative;
          }

.button-container {
    position: absolute;
    top: 0;
    right: 0;
}

.image{

width: 400px;
margin-left:40px;

}

.profile_button {
            background-color: #2743ff;
            color: white; /* Text color */
            border-color: #2743ff; /* Border color (optional) */
            position: relative;
            left:100px;
            top:20px;
        }
        .bank_button {
            background-color: #2743ff;
            color: white; /* Text color */
            border-color: #2743ff; /* Border color (optional) */
            position: relative;
            left:-50px;
            bottom:-80px;
        }
        .green-bg {
            background-color: #2743ff;
            color: white; /* Text color */
            border-color: #2743ff; /* Border color (optional) */
            position: relative;
            top:55px;
            right:45px;
        }
        .wallet-container {
    display: flex;
    align-items: center; /* Center items vertically */
    margin-top:20px;
}

.wallet-container i {
   position: relative;
   left:10px;
   bottom:10px;
}
.wallet-container h6 {
   position: relative;
   left:30px;
   bottom:30px;
}
.transaction-container {
    display: flex;
    align-items: center; /* Center items vertically */
    margin-top:10px;
}

.transaction-container i {
   position: relative;
   left:10px;
   bottom:30px;
}
.transaction-container h6 {
   position: relative;
   left:28px;
   bottom:50px;
}
.friends-container {
    display: flex;
    align-items: center; /* Center items vertically */
    margin-top:10px;
}

.friends-container i {
   position: relative;
   left:10px;
   bottom:50px;
}
.friends-container h6 {
   position: relative;
   left:29px;
   bottom:70px;
}
.logout-container {
    display: flex;
    align-items: center; /* Center items vertically */
    margin-top:10px;
}

.logout-container i {
   position: relative;
   left:380px;
   bottom:190px;
}
.logout-container h6 {
   position: relative;
   left:400px;
   bottom:210px;
}

.icon svg {
        position: relative;
        top: 35px;
        left: 30px;
        width: 26px;
    }
       /* Existing styles */

/* Styles for smaller screens */
@media (max-width: 768px) {
    .profile_button {
    position: relative;
    left: 0;
    right: 0;
    top: 0;
    bottom: 20px;
    font-size: 14px !important; /* Adjust the font size as needed */
}

.bank_button {
    position: relative;
    left: 2px;
    right: 0;
    top: 0;
    font-size:14px  !important; /* Adjust the font size as needed */
} 
    .container {
            background: rgb(255, 255, 255);
            max-width: 600px;
            height:720px;
            margin: 0 auto;
            padding: 40px;
            border: 2px solid #9de45f;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    .container h2{
       font-size:25px;
       margin-left:30px;
    }
    .profile p {
        margin-left: 150px;
        position: relative;
        bottom: 10px;
        right: 90px;
        font-size:12px;
    }
    .profile svg {
        position: relative;
        top: 40px;
        left: 0px;
        width: 50px;
    }
    .icon svg {
        position: relative;
        top: 35px;
        left: 10px;
        width: 26px;
    }
    /* Adjust button styles for smaller screens */
    .button-container {
        margin-top: 15px; /* Reduce top margin */
        display: flex;
        flex-direction: column; /* Stack buttons vertically */
        align-items: center; /* Center buttons horizontally */
        
    }
    .button-container a {
        margin: 5px 0; /* Adjust margin for buttons */
        padding: 5px 10px; /* Decrease padding */
        font-size: 14px; /* Decrease font size */
        font-size:9px;
    }
    .violet-bg{
        position: relative;
        left: 0;
        right: 0;
        top: 0;
        margin-bottom: 10px; /* Add some space between buttons */
        font-weight:bold;
        
    }
  
        .white-bg {
            background-color: white;
            color: blue; /* Text color */
            border-color: white; /* Border color (optional) */
            font-size:11px;
        }
        .blue-bg {
            background-color: #181d83;
            color: white; /* Text color */
            border-color: #181d83; /* Border color (optional) */
            font-size:11px;
        }
        .image{

    width:300px;
    margin-left:-30px;
    
}


.logout-container i {
   position: relative;
   left: 190px;
   bottom:190px;
}
.logout-container h6 {
   position: relative;
   left:210px;
   bottom:210px;
}


}

        
    </style>
</head>
<body>
<div class="container">
<div class="icon">
<a href="index.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
    </svg>
</a>
</div>
<h2>Profile</h2>
<div class="card-body">
    <div class="image">
        <img src="refers.jpeg" class="img-fluid">
    </div>
    <br>
    <center>
    <button onclick="copyLink()" style="color:blue;font-weight:bold; background-color:white;border:2px solid black; border-radius:10px; font-size:17px; padding:10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
            </svg> copy
</button>
        <a href="#" style="color:white;font-weight:bold; background-color:blue;border:2px solid black; border-radius:10px; margin-left:10px; font-size:17px; padding:10px; display: inline-block; text-decoration: none;">Refer friends</a>
    </center>
</div>

        <div class="profile-container">
    <div class="profile">
        <svg xmlns="http://www.w3.org/2000/svg"  width="55" height="55" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
        <?php if(isset($name) && isset($mobile)): ?>
        <p><?php echo $name; ?></p>
        <p><?php echo $mobile; ?></p>
    <?php endif; ?>
    </div>
    <div class="button-container">
    <a href="#" class="profile_button" style="color:white;font-weight:bold; background-color:blue;border:2px solid black; border-radius:10px; margin-left:20px;  padding:10px; display: inline-block; text-decoration: none;">Update Profile</a>
    <a href="#"  class="bank_button" style="color:white;font-weight:bold; background-color:blue;border:2px solid black; border-radius:10px; margin-left:20px; padding:11px; display: inline-block; text-decoration: none;">Update Bank</a>
    </div>
</div>
<br>
<hr>
<div class="wallet-container">
    <a href="wallet.php">
        <i class="bi bi-wallet2"></i>
        <h6>wallet</h6>
    </a>
</div>
<div class="transaction-container">
    <a href="#">
        <i class="bi bi-file-check"></i>
        <h6>Transaction</h6>
    </a>
</div>
<div class="friends-container">
    <a href="refer_friends.php">
    <i class="bi bi-person-circle"></i>
        <h6>Your Friends</h6>
    </a>
</div>
<div class="logout-container">
    <a href="logout.php">
    <i class="bi bi-person-circle"></i>
        <h6>Logout</h6>
    </a>
</div>

<script>
function copyLink() {
    var refer_code = "<?php echo urlencode($refer_code); ?>";
    var link = "http://localhost/next_gen_course/?refercode=" + refer_code;
    var tempInput = document.createElement("input");
    tempInput.value = link;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("Link copied successfully!");
}
</script>


<script>
    function redirectToWallet() {
        // Redirect to the wallet page
        window.location.href = "index.html";
    }

    function redirectToTransaction() {
        // Redirect to the transaction page
        window.location.href = "index.html";
    }
</script>

    </div>
</body>
</html>
