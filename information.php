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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
 

section {
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


    #information h5{
   text-align: center;
   position: absolute;
      left:43%; 
      top:140px;
      font-weight: bold;
      color: #06002e;
}
.panel {
    border: 1px solid #171818;
    border-radius: 5px;
    margin-bottom: 10px;
    width:500px; /* Adjust as needed */
    position: relative;
    top:80px;
    right:50px;
    
  }
  
  .panel-header {
    position: relative;
    background-color: #f9f5f5;
    color:#191010;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
  }

  .panel-content {
    padding: 10px;
    background-color: #f1e5e5;
    color:#191010;
    font-weight: bold;
  }
  .hidden {
    display: none;
  }
  .container-4 {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
#information img{
  width:150px;
  height:150px;
  margin-bottom:430px;
  border-radius:90px;
  position: relative;
  left:270px;
  top:30px;
}

  @media (max-width: 768px) {
    #information img{
  width:150px;
  height:150px;
  bottom:120px;
  border-radius:90px;
  position: absolute;
  left:110px;
}
    #information h5{
        text-align: center;
        position: absolute;
           left: 33%;
           font-size:1rem;
           font-weight: bold;
     }
    

    .panel {
        border: 1px solid #171818;
        border-radius: 5px;
        margin-bottom: 10px;
        width:300px; /* Adjust as needed */
        position: relative;
        top:50px;
        left:0px;
      }
      
      .panel-header {
        position: relative;
        background-color: #f1e8e8;
        color:black;
        padding: 10px;
        cursor: pointer;
        font-weight: bold;
      }
    
      .panel-content {
        padding: 10px;
        background-color: #f1ecec;
        color: black;
        font-weight: bold;
      }
      
      .hidden {
    display: none;
  }
  .container-4 {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
      iframe {
    width: 100%; 
    height: auto;
  }
  #register {
    position:absolute;
    top:750px;
  }
  #enroll {
    position:absolute;
    top:1000px;
  }
  #withdraw {
    position:absolute;
    top:1250px;
  }
  #refer {
    position:absolute;
    top:1480px;
  }
    }
</style>
<body>
<section id="information" class="bg-primary text-white">
    <img src="faq.jpeg" data-aos="fade-up" class="img-fluid">
    <div class="container-4">
        <div class="accordion">
            <?php foreach ($faqs as $faq) { ?>
                <div class="panel panel">
                    <div class="panel-header" onclick="togglePanel(this)"><?php echo $faq['question']; ?></div>
                    <div class="panel-content hidden"><?php echo $faq['answer']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

  <div id="register" >
    <div class="container">
        <h3><u>How To Register??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div id="enroll">
    <div class="container">
        <h3><u>How To Enroll??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div id="withdraw">
    <div class="container">
        <h3><u>How To withdraw??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div id="refer">
    <div class="container">
        <h3><u>How To Refer friend??</u></h3>
        <br>
        <iframe id= "video" width="50%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>  

  <script>
    function togglePanel(panelHeader) {
      var panel = panelHeader.parentNode;
      var panelContent = panel.querySelector('.panel-content');
      var allPanels = document.querySelectorAll('.panel');
    
      // Close all panels and reset symbols
      allPanels.forEach(function(item) {
        var content = item.querySelector('.panel-content');
        if (content !== panelContent && !content.classList.contains('hidden')) {
          content.classList.add('hidden');
          item.querySelector('.panel-header').textContent = item.querySelector('.panel-header').textContent.replace('−', '+');
        }
      });
    
      // Toggle the clicked panel and update symbol
      if (panelContent.classList.contains('hidden')) {
        panelContent.classList.remove('hidden');
        panelHeader.textContent = panelHeader.textContent.replace('+', '−');
      } else {
        panelContent.classList.add('hidden');
        panelHeader.textContent = panelHeader.textContent.replace('−', '+');
      }
    }
    
    
    </script>
</body>
</html>