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
            height:550px;
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
        .card {
            padding: 20px;
            background-color:#760851;
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
          bottom:40px;
        }
        .profile svg{
          position: relative;
          top:20px;
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


.violet-bg {
            background-color: #2743ff;
            color: white; /* Text color */
            border-color: #2743ff; /* Border color (optional) */
            position: relative;
            left:80px;
            top:10px;
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
   bottom:7px;
}
.wallet-container h6 {
   position: relative;
   left:20px;
   bottom:5px;
}
.transaction-container {
    display: flex;
    align-items: center; /* Center items vertically */
    margin-top:10px;
}

.transaction-container i {
   position: relative;
   left:10px;
   bottom:7px;
}
.transaction-container h6 {
   position: relative;
   left:20px;
   bottom:5px;
}

       /* Existing styles */

/* Styles for smaller screens */
@media (max-width: 768px) {
    .profile p {
        margin-left: 150px;
        position: relative;
        bottom: 30px;
        right: 80px;
        font-size: 13px;
    }
    .profile svg {
        position: relative;
        top: 20px;
        left: 10px;
        width: 50px;
    }
    /* Adjust button styles for smaller screens */
    .button-container {
        margin-top: 10px; /* Reduce top margin */
        display: flex;
        flex-direction: column; /* Stack buttons vertically */
        align-items: center; /* Center buttons horizontally */
    }
    .button-container a {
        margin: 5px 0; /* Adjust margin for buttons */
        padding: 5px 10px; /* Decrease padding */
        font-size: 14px; /* Decrease font size */
    }
    .violet-bg,
    .green-bg {
        position: relative;
        left: 0;
        right: 0;
        top: 0;
        margin-bottom: 10px; /* Add some space between buttons */
    }
}

        
    </style>
</head>
<body>
<div class="container">
        <h2>Profile</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text text-center">Hire(Refer) candidate Get ₹500 Incentives + 500 Orders ₹100 = Total ₹600.</p>
                <div class="card-buttons">
                <a href="#" class="btn btn-primary btn-with-icon white-bg"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                        </svg>
                        HR1000
                    </a>
                    <a href="#" class="btn btn-primary btn-with-icon blue-bg"> Refer Friends</a>
                </div>
            </div>
        </div>
        <div class="profile-container">
    <div class="profile">
        <svg xmlns="http://www.w3.org/2000/svg"  width="55" height="55" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
        <p>gshyusg</p>
        <p>87898765</p>
    </div>
    <div class="button-container">
    <a href="#" class="btn btn-primary btn-with-icon violet-bg">Update Profile</a>
    <a href="#" class="btn btn-primary btn-with-icon green-bg">Update Bank</a>
    </div>
</div>
<hr>
<div class="wallet-container">
    <i class="bi bi-wallet2"></i>
    <h6>wallet</h6>
</div>
<div class="transaction-container">
<i class="bi bi-file-check"></i>
    <h6>Transaction</h6>
</div>
    </div>
</body>
</html>
