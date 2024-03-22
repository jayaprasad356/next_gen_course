<?php
session_start();

$servername = "localhost";
$username = "u117947056_ngcourse";
$password = "Ngcourse@2024";
$database = "u117947056_ngcourse";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT question, answer FROM faq ORDER BY id LIMIT 6";
$result = $conn->query($sql);

$faqs = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faqs[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXTGEN COURSES</title>
    <link rel="stylesheet" href="new.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
   #information {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color:#0d6efd;
    justify-content: center;
  }
  .faq-item {
    display: flex;
    flex-direction: column;
    text-align: left;
    color: white;
    margin-bottom: 20px; /* Adjust margin as needed */
    width: 80%; /* Adjust width as needed */
    max-width: 600px; /* Adjust max-width as needed */

  }
  .faq-item h5 {
    margin-bottom: 10px; /* Adjust margin as needed */
  }
    #information img {
    width: 150px;
    height: 150px;
    border-radius: 90px;
    display: flex;

}

@media (max-width: 768px) {
.container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
}

.container iframe {
    width: 100%;
    height: auto;
}
.faq-item h5 {
                font-size: 15px; /* decrease font size for smaller screens */
            }

            .faq-item ul li {
                font-size: 13px; /* decrease font size for smaller screens */
            }
}
</style>
<body>
<section id="information">
    <center>
  <img src="faq.jpeg" data-aos="fade-up" class="img-fluid">
  <br>
  <?php $counter = 1; ?>
<?php foreach ($faqs as $faq) { ?>
  <div class="faq-item">
    <h5><?php echo $counter++; ?>. <?php echo $faq['question']; ?></h5>
    <ul>
      <li><?php echo $faq['answer']; ?></li>
    </ul>
  </div>
<?php } ?>
  </center>
</section>
<section id="videos">
    <div class="container">
        <h3><u>How To Register??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <h3><u>How To Enroll??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <h3><u>How To withdraw??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <h3><u>How To Refer friend??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
</body>
</html>