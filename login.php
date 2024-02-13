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
        <div class="text-center py-4">
          <img src="img.jpeg" alt="" width="130" height="130" style="border-radius: 50%; position: relative; top: 40px; left: 10px;">
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="mobile" id="mobile" class="label-yellow-bold">Mobile:</label>
              <input type="text" id="mobile" name="mobile" placeholder="Enter mobile" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <div class="form-group mb-3">
              <label for="password" id="password" class="label-yellow-bold">Password:</label>
              <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required />
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-8 col-sm-4 text-center">
            <button type="submit" name="btnSignin" class="btn btn-primary">Sign in</button>
            <!-- Use anchor tag to redirect to register.php -->
            <a href="register.php" class="btn btn-success">Create</a>
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
