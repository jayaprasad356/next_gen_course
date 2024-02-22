<?php
// Function to initiate payment
$redirectUrl = 'payment-success.php'; // Replace 'payment-success.php' with your actual redirect URL
$apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
function initiatePayment($amount, $description, $redirectUrl, $apiKey) {
    $merchantId = 'PGTESTPAYUAT';
    $order_id = uniqid();
    $name = "Tutorials Website";
    $email = "ashokkumar7hitter@gmail.com";
    $mobile = 8056896831;

    $paymentData = array(
        'merchantId' => $merchantId,
        'merchantTransactionId' => $order_id,
        "merchantUserId" => "MUID123",
        'amount' => $amount * 100,
        'redirectUrl' => $redirectUrl,
        'redirectMode' => "POST",
        'callbackUrl' => $redirectUrl,
        "merchantOrderId" => $order_id,
        "mobileNumber" => $mobile,
        "message" => $description,
        "email" => $email,
        "shortName" => $name,
        "paymentInstrument" => array(
            "type" => "PAY_PAGE",
        )
    );

    $jsonencode = json_encode($paymentData);
    $payloadMain = base64_encode($jsonencode);
    $salt_index = 1; //key index 1
    $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
    $sha256 = hash("sha256", $payload);
    $final_x_header = $sha256 . '###' . $salt_index;
    $request = json_encode(array('request' => $payloadMain));

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $request,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-VERIFY: " . $final_x_header,
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $res = json_decode($response);

        if (isset($res->success) && $res->success == '1') {
            $paymentCode = $res->code;
            $paymentMsg = $res->message;
            $payUrl = $res->data->instrumentResponse->redirectInfo->url;
            return $payUrl;
        }
    }
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXTGEN COURSES</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        /* Hide the spinner */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
       
        body {
            margin: 0;
            padding: 0;
        }
        
        .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    top: 20%;
}

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<!---home--> 
<section id="home" class="py-5">
    <div class="container">
        <div class="text-center">
            <h4>NextGen</h4>
            <p>Building Your Future</p>
            <p1>With career Building Course</p1>
        </div>
        <h2><a href="login.html">login</a></h2>
        <h3><a href="register.html">register</a></h3>   
        <h5><a href="profile.php">Profile</a></h5>     
        <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
        <div class="dropdown-menu" id="myDropdown">
            <a href="demand.html">Print in demand</a>
            <a href="digital.html">Digital Marketing Course</a>
            <a href="business.html">E commerce Own Business Course</a>
            <a href="information.html">FAQ</a>
        </div>
        <img src="new.jpeg" data-aos="fade-up"  class="img-fluid">
        <div class="paragraph">
        <h1>About us</h1> 
        <p1> Welcome to NextGen, your trusted partner in career building and online earning opportunities! For four years, we've been dedicated to empowering individuals to kickstart their online journey and unleash their potential in the digital realm.

            At NextGen, we understand the evolving landscape  of career development and the increasing demand for diverse skill sets. That's why we offer a range of cutting-edge courses designed to equip you with the knowledge and skills needed to thrive in the digital age.<a href="about.html"><button type="button" class="btn btn-primary">More Info</button></a></p1>
    </div>
</div>
</section>
<!---home-end--> 
<!---course--> 
<section id="course" class="py-5">
    <div class="container">
        <div class="text-center">
            <h4>Course Details</h4>
        </div>
      
        <div class="course-details">
            <div class="course-info">
                <h1>1) Print on Demand</h1>
                <h1>2) Digital Marketing</h1>
                <h1>3) Own Business Ecommerce</h1>
            </div>
            <div class="course-prices">
            <h2>Now ₹999/-</h2>Old <span class="old-price">₹1999</span>

    <?php
    $payUrl = initiatePayment(999, 'Payment for Course 1', $redirectUrl, $apiKey);
    echo "<a href='" . $payUrl . "' class='btn btn-success' style='border-radius: 30px;'>Pay & Enroll</a>";

    ?>
    <h3>Now ₹2499/-</h3> Old <span class="old-price"> ₹4999</span>
    <?php
    $payUrl = initiatePayment(2499, 'Payment for Course 2', $redirectUrl, $apiKey);
    echo "<a href='" . $payUrl . "' class='btn btn-success' style='border-radius: 30px;'>Pay & Enroll</a>";
    ?>
    <p>Now ₹4999/-</p>Old <span class="old-price"> ₹9999</span>
    <?php
    $payUrl = initiatePayment(4999, 'Payment for Course 3', $redirectUrl, $apiKey);
    echo "<a href='" . $payUrl . "' class='btn btn-success' style='border-radius: 30px;'>Pay & Enroll</a>";
    ?>
</div>

   
            <img src="https://png.pngtree.com/png-vector/20230318/ourmid/pngtree-book-clipart-vector-png-image_6653535.png" data-aos="fade-up"  class="img-fluid">
            <img  src="https://static.vecteezy.com/system/resources/previews/023/366/090/original/back-to-school-happy-pupils-children-learning-computer-reading-books-concept-png.png" id="images" data-aos="fade-up"  class="img-fluid">
        </div>
      <!---<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>-->
    </div>
</section>
<section id="demand" class="py-5">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h4>Print on Demand</h4>
                <p>What You Learn - How You Earn</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="https://png.pngtree.com/png-vector/20220707/ourmid/pngtree-t-shirt-print-on-demand-services-png-image_5741452.png" data-aos="fade-up"  class="img-fluid">
              </div>
            <div class="col-lg-6">
                    <h5>Dive into the world of creative expression with NextGen's T-shirt Designing Course for Print on Demand Sales, now available at an exclusive rate of Rs 999, a 50% discount from the original Rs 1999. Our course equips you with the skills to craft captivating T-shirt designs and effectively promote them on various online platforms <a href="demand-information.html"><button type="button" class="btn btn-primary">More Info</button></a></h5>
            </div>
        </div>
    </div>
</section>
<section id="Marketing" class="py-5">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h4>Digital Marketing</h4>
                <p>What You Learn - How You Earn</p>
            </div>
            <div class="col-lg-6">
                <h5> Welcome to NextGen's Digital Marketing Course, your pathway to mastering the art of online sales and social media marketing! Priced at just Rs 2499, with a generous 50% discount from the original Rs 4999, our comprehensive course equips you with the skills to succeed in the digital marketplace.Learn how to leverage digital marketing and social media <a href="digital-information.html"><button type="button" class="btn btn-primary">More Info</button></a></h5>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="https://freepngimg.com/save/24871-marketing-transparent-image/501x393" data-aos="fade-up"  class="img-fluid">
          </div>
        </div>
    </div>
</section>
<section id="Business" class="py-5">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h4>Own Business - Ecommerce</h4>
                <p>What You Learn - How You Earn</p>
            </div>
              <div class="col-lg-6 col-md-6 col-12">
                <img src="https://freepngimg.com/save/15307-online-marketing-transparent/500x408" data-aos="fade-up"  class="img-fluid">
              </div>
            <div class="col-lg-6">
                    <h5>Welcome to NextGen's revolutionary Ecommerce & Reselling Business Course, where we offer you the keys to unlock boundless earning potential in the digital marketplace. Enroll now at an exclusive rate of just Rs 4999, a 50% discount from the original Rs 9999, and receive a complimentary website for your business.<a href="business-information.html"><button type="button" class="btn btn-primary">More Info</button></a></h5>
            </div>
        </div>
    </div>
</section>
<section id="ready" class="py-5">
    <div class="container box">
        <div class="row">
        <h1 class="my-5" style="color:black; font-weight:bold;" data-aos="fade-up">Ready to work with us??</h1>
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="img.png" data-aos="fade-up"  class="img-fluid">
                </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h1 style="color:black; font-size: 2.5em;" data-aos="fade-up">APPLY NOW</h1>
        <form method="post"  href="index.php" enctype="multipart/form-data" data-aos="fade-up">
    <input type="text"  class="form-control" id="name" name="name" placeholder="enter your name" required>
    <input type="mail"  class="form-control" id="email" name="email" placeholder="enter your mail" name="email" required>
    <input type="number"  class="form-control" id="mobile" name="mobile" placeholder="enter your Contact Number" name="mobile" required>
    <input type="text"  class="form-control" id="location" name="location" placeholder="enter your Location" name="location" required>
    <button type="submit" class="btn signin" name="btnAdd">Enroller Now</button>
</form>
        </div>
   </div>
   </div>
    </section>
<section id="contact" class="py-5">
    <div class="container">
        <div class="text-center">
            <h4>Contact Us</h4>
        </div>
        <div class="contact-details">
            <div class="contact-info">
                <h1>Phone Number:</h1>
                <h1>Email ID:</h1>
                <h1>Address:</h1>
            </div>
            <div class="contact-prices">
                <h3>+91 86187 19941</h3>
                <h2>support@slveenterprises.org.</h2>
                <h6>#9,2nd Floor,A3,NBA Tower, Thillainagar, 11th Cross W, Tennur, Tiruchirappalli, Tamil Nadu 620018</h6>
            </div>
        </div>
        <p1><a href="privacy_policy.html">Privacy Policy</a></p1>
        <p2><a href="terms_conditions.html">Terms & Conditions</a></p2>
        <p3><a href="refund_policy.html">Refund Policy</a></p3>
        
        <p>Copyright 2024. Powered by SLVE Enterprise APP</p>
      <!---<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>-->
    </div>
</section>


<!---home--> 
<script>
    document.getElementById("dropdown-icon").addEventListener("click", function() {
        document.getElementById("myDropdown").classList.toggle("show");
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('#dropdown-icon')) {
            var dropdowns = document.getElementsByClassName("dropdown-menu");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>
</html>