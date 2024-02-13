
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .label-yellow-bold {
      font-weight: bold;
      color: #FFFF00;
    }
  </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-12 col-sm-12" style="background-color: rgb(90, 72, 119); min-height: 100vh;">
    <div class="row justify-content-center align-items-center">
      <div class="col-10 col-sm-6">
        <div class="d-flex align-items-center mb-3">
          <a href="login.php" class="me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
  </a>
      </div>
    </div>
    <div class="row justify-content-center mt-0">
          <div class="col-8 col-sm-2 text-center">
           <p style="color:white;">Create  Account</p>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="name" id="name" class="label-yellow-bold">Name:</label>
              <input type="text" id="name" name="name" placeholder="Name" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="email" id="email" class="label-yellow-bold">email:</label>
              <input type="email" id="email" name="email" placeholder="email" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="mobile" id="mobile" class="label-yellow-bold">phone no:</label>
              <input type="number" id="mobile" name="mobile" placeholder="phone_number" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="dob" id="dob" class="label-yellow-bold">select Date of Birth:</label>
              <input type="date" id="dob" name="dob" placeholder="DOB" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="location" id="location" class="label-yellow-bold">Location:</label>
              <input type="text" id="location" name="location" placeholder="location" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="password" id="password" class="label-yellow-bold">Password:</label>
              <input type="password" id="password" name="password" placeholder="password" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="enroll_id" id="enroll_id" class="label-yellow-bold">Enrolled Under HR ID:</label>
              <input type="number" id="enroll_id" name="enroll_id" placeholder="Enroll ID" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="aadhar_number" id="aadhar_num" class="label-yellow-bold">Aadhaar Number:</label>
              <input type="number" id="aadhar_num" name="aadhar_num" placeholder="Aadhaar Number" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-8 col-sm-4 text-center">
            <button type="submit" name="btnSignup" class="btn btn-primary">Sign up</button>
          </div>
        </div>
</div>

    </div>
  </div>
</form>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    // Get the checkbox element
    var checkbox = document.getElementById('checkbox');
    // Set the "checked" attribute to true
    checkbox.checked = true;
  });
</script>


</body>
</html>
#contact p {
    margin-left:350px;
   padding-top:90px;
}
#contact p {
        margin-left:30px;
       padding-top:60px;
       position: relative;
       top:-40px;
       font-size:10px;
    }
