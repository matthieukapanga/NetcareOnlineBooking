<?php

$conn = mysqli_connect('localhost','root','','contact_bd') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a href="#" class="logo">
        <img src="image/logo-removebg-preview.png" alt="Logo" />
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="image">
        <img src="image/home-img.svg" alt="" />
      </div>

      <div class="content">
        <h3>Welcome To Netcare Online Services</h3>
        <p>
          We are dedicated to providing exceptional healthcare services and
          ensuring the well-being of our patients. Explore our site to learn
          more about our state-of-the-art facilities, highly skilled medical
          professionals, and the comprehensive range of medical treatments and
          services we offer.
        </p>
        <a href="#appointment" class="btn">
          appointment us <span class="fas fa-chevron-right"></span>
        </a>
      </div>
    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">
      <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
      </div>

      <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
      </div>

      <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
      </div>

      <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
      </div>
    </section>

    <!-- icons section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading"><span>about</span> us</h1>

      <div class="row">
        <div class="image">
          <img src="image/about-img.svg" alt="" />
        </div>

        <div class="content">
          <h3>Why should you choose the Netcare?</h3>
          <p>
            Netcare offers you a unique and comprehensive range of private
            healthcare services and products across the healthcare spectrum,
            throughout South Africa. This enables us to provide you with care
            every step of your life journey. website.
          </p>
          <p>
            Our promise is to provide you with the best and safest care, centred
            around your unique needs and circumstances. Netcare supports
            transparency, so we continuously measure the quality of our care and
            share the results on our
          </p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-notes-medical"></i>
          <h3>free checkups</h3>
          <p>Receive complimentary checkups to ensure your well-being.</p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>

        <div class="box">
          <i class="fas fa-ambulance"></i>
          <h3>24/7 ambulance</h3>
          <p>Access emergency medical assistance anytime, anywhere.</p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>

        <div class="box">
          <i class="fas fa-user-md"></i>
          <h3>expert doctors</h3>
          <p>
            Consult with our highly skilled and experienced doctors for
            top-notch care.
          </p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>

        <div class="box">
          <i class="fas fa-pills"></i>
          <h3>medicines</h3>
          <p>
            Benefit from a comprehensive range of medicines for your health
            needs.
          </p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>

        <div class="box">
          <i class="fas fa-procedures"></i>
          <h3>bed facility</h3>
          <p>
            Rest comfortably in our well-equipped and comforting hospital beds.
          </p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>

        <div class="box">
          <i class="fas fa-heartbeat"></i>
          <h3>total care</h3>
          <p>
            Enjoy personalized and attentive care to address all your health
            concerns.
          </p>
          <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>

    <!-- services section ends -->

    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">
      <h1 class="heading">our <span>doctors</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Louise Coleman</h3>
          <span>OBSTETRICIAN AND GYNAECOLOGIST</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Farouk Mamdoo</h3>
          <span>PHYSICIAN - CARDIOLOGIST </span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Jean-Paul Theron</h3>
          <span>PHYSICIAN - CARDIOLOGIST </span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr David Kwabena</h3>
          <span>NEUROLOGIST</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Carla Basson</h3>
          <span>PAEDIATRICIAN</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Dominique Somwe</h3>
          <span>SURGEON</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Ravi Bhagar</h3>
          <span>ORTHOPAEDIC SURGEON</span>
          <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr David Klevansky</h3>
          <span>DERMATOLOGIST</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
        <div class="box">
          <img src="image/avatar-provider.svg" alt="" />
          <h3>Dr Mark Rodney Baleta</h3>
          <span>GENERAL PRACTITIONER</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>
    </section>

    <!-- doctors section ends -->

    <!-- appointmenting section starts   -->

    <section class="appointment" id="appointment">
      <h1 class="heading"><span>appointment</span> now</h1>

      <div class="row">
        <div class="image">
          <img src="image/appointment-img.svg" alt="" />
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
         
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
          <h3>make appointment</h3>
          <input type="text" name="name" placeholder="your name" class="box" />
          <input
            type="number"
            name="number"
            placeholder="your number"
            class="box"
          />
          <input
            type="email"
            name="email"
            placeholder="your email"
            class="box"
          />
          <input type="date" name="date" class="box" />
          <input
            type="submit"
            name="submit"
            value="appointment now"
            class="btn"
          />
        </form>
      </div>
    </section>

    <!-- appointmenting section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">
      <h1 class="heading">client's <span>review</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="image/pic-2.png" alt="" />
          <h3>Armand</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">
            Linmed hospital cannot be complimented enough. My wife was there for
            a month, beause of a serious Stroke. Most of this time was spent in
            ICU. We thought we had lost her ona couple of occasions, but thanks
            to the Staff, from trainee nurse to Neurosurgeon and Neurologist ,
            oUr fears came to nought. Thanke you Linmed
          </p>
        </div>

        <div class="box">
          <img src="image/pic-2.png" alt="" />
          <h3>Marius</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">
            What amazing staff in the CCU (section 3) at Sunninghill Hospital,
            They are kind, have a sense of humour and friendly. Sadly, the noise
            outside the ward is disturbingly loud, stories exchanged, cell phone
            calls, laughing etc. All by the staff. This is a hospital, patients
            need quiet time. One asks respectively to be quiet, to no avail. No
            management available either!
          </p>
        </div>

        <div class="box">
          <img src="image/pic-1.jpg" alt="" />
          <h3>Yajna</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">
            Thank you Natcare for all the years off Best patient care. Covid was
            a sad part of a lot of patients sublings.. After nearly 2 years your
            Doctors and all staff were the best teams ever. Take care and
            continue with the best patient care.
          </p>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">
      <h1 class="heading">our <span>blogs</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="image/blog-1.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> 11 May, 2023 </a>
              <a href="#">
                <i class="fas fa-user"></i>by Netcare Akeso Gqeberha
              </a>
            </div>
            <h3>Nursing from the heart</h3>
            <p>Paediatric ICU team united in family centred care</p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="image/blog-2.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> 21 May, 2022 </a>
              <a href="#"> <i class="fas fa-user"></i>by Farih Cooper </a>
            </div>
            <h3>New Innovations in Medical Technology:</h3>
            <p>
              Stay up-to-date with the latest breakthroughs in medical
              technology and how they are revolutionizing patient care and
              treatment options.
            </p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="image/blog-3.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> 21 April, 2023 </a>
              <a href="#"> <i class="fas fa-user"></i>by Liz Ntomani </a>
            </div>
            <h3>
              The Importance of Regular Checkups: Prioritizing Preventive Care
            </h3>
            <p>
              Learn about the significance of regular checkups and how they
              contribute to maintaining optimal health and preventing potential
              medical issues.
            </p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="image/blog-4.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> 21 May, 2023 </a>
              <a href="#"> <i class="fas fa-user"></i> by Arthur McGrady </a>
            </div>
            <h3>Healthy Lifestyle Tips: Small Changes, Big Impact</h3>
            <p>
              Explore practical tips and strategies for adopting a healthier
              lifestyle, including exercise, nutrition, stress management, and
              overall well-being.
            </p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="image/blog-5.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#">
                <i class="fas fa-calendar"></i> 28 February, 2023
              </a>
              <a href="#"> <i class="fas fa-user"></i> by Nathalie Campbell </a>
            </div>
            <h3>
              Navigating Mental Health: Breaking the Stigma and Seeking Support
            </h3>
            <p>
              Explore the importance of mental health awareness, breaking the
              stigma surrounding it, and the available resources for seeking
              support and treatment.
            </p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="image/blog-6.jpg" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> 1 June, 2023 </a>
              <a href="#"> <i class="fas fa-user"></i> by Dane Forrester </a>
            </div>
            <h3>The Power of Compassionate Care: Empathy in Healthcare</h3>
            <p>
              Discover the profound impact of compassionate care in the
              healthcare industry and how empathy and understanding enhance the
              patient experience and contribute to positive outcomes.
            </p>
            <a href="#" class="btn">
              learn more <span class="fas fa-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
          <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
          <a href="#services">
            <i class="fas fa-chevron-right"></i> services
          </a>
          <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
          <a href="#appointment">
            <i class="fas fa-chevron-right"></i> appointment
          </a>
          <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
          <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
          <h3>our services</h3>
          <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
          <a href="#">
            <i class="fas fa-chevron-right"></i> ambulance service
          </a>
        </div>

        <div class="box">
          <h3>appointment info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +274953691 </a>
          <a href="#"> <i class="fas fa-phone"></i> +1199917622 </a>
          <a href="#">
            <i class="fas fa-envelope"></i> netcareAbout@gmail.com
          </a>
          <a href="#"> <i class="fas fa-envelope"></i> register@gmail.com </a>
          <a href="#">
            <i class="fas fa-map-marker-alt"></i> Johannesburg, South Africa
          </a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#">
            <i class="fab fa-faceappointment-f"></i> faceappointment
          </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
      </div>

      <div class="credit">
        created by <span>Matthieu Kapanga</span> | all rights reserved
      </div>
    </section>

    <!-- footer section ends -->

    <!-- js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
