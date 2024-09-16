<?php

// for false output;
error_reporting(E_ERROR | E_PARSE);

include 'include.php';

// use php mailer

  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");


    // send function
    $mail = new PHPMailer(true);
    $to = 'example@gmail.com';

    if(isset($_POST['submit'])){
      $nam = $_POST['1name'];
      $email = $_POST['email'];
      $msg =  $_POST['message'];


      // check and send

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Please input correct Email.";
      }
      elseif(strlen($nam) <= 4){
        $error = " Please input your Full Name.";
      }
      else{
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'example@gmail.com';                     //SMTP username
        $mail->Password   = 'iecavzquwgkqmci11m';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
        //Recipients
        // $mail->setFrom($email, $nam);
        $mail->setFrom('example@gmail.com', 'Portfolio Mail : '.$nam);
        $mail->addAddress($to);     //Add a recipient
       
        
      
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Received mail from portfolio from : '.$nam;
        $mail->Body   = 'From : '.$email.'<br> Sender  : '.$nam.'<br> Message : <br>'.$msg;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
        $mail->send();
        header('Location:index');
    
      }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Bikram Kumal" />
    <meta name="description" content="Bikram" />
    <meta name="description" content="Bikramkumal" />
    <meta name="description" content="Bikram Jaquard" />
    <meta name="description" content="Bikramkumal.com.np" />
    <meta name="description" content="Bikram Kumal Portfolio" />
    <meta name="description" content="Bikram Portfolio" />

    <title>Bikram Kumal</title>

    <!-- link css -->
    <link rel="stylesheet" href="style.css?v=<?=$version?>">

   


    <!-- logo -->
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">

    <!-- text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Changa:wght@400;600;700&family=Noticia+Text:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Changa:wght@400;600;700&family=Noticia+Text:ital,wght@0,400;1,400;1,700&family=Space+Mono:ital@0;1&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Changa:wght@400;600;700&family=Nothing+You+Could+Do&family=Noticia+Text:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Changa:wght@400;600;700&family=Instrument+Serif:ital@1&family=Nothing+You+Could+Do&family=Noticia+Text:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">



 

<!-- connect front awosem -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


<body>

  <!-- ============   SECTION  0 (NAV  //  MENU  SECTION) ======== -->
  <section id="section0" class="navbar_1">
    <nav class="navbar">
        <header>
            <!-- logo -->
            <a href="#sec1" class="head">
                <img src="img/logo.png" alt="" class="logo">
                <p class="logotxt"> Bikram</p>
            </a>

            <!-- menu bar -->
            <input  type="checkbox" name="" id="menu-bar" class="menu_bar">
            <label class="menu" for="menu-bar" style="color: white;"><i class="fa-solid fa-bars"></i></label>
            <label class="menu2"  style="color: white;"><i class="fa-solid fa-xmark"></i></label>

        <!--  menu  list -->
            <nav class="lists">
                <ul>
                    <li><a href="#sec2">About</a></li>
                    <li><a href="#service">Service</a></li>
                    <!-- <li><a href="#">Service</a></li> -->
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </nav>
  </section>


    <!-- ============   SECTION  1 (TOP SECTION) ======== -->
    <section id="sec1" >
      
    <div class="body1" >

      
      
      <nav class="body-a">
        <hav class="txt">
          <p class="main">Bikram<br>Kumal</p>
        <h2>
          I am a website designer.</h2> 
          <h2>
          I like to do coding.
        </h2>
        </hav>
        <nav class="pic">
          <img id="image" src="img/pic.png">
        </nav>
          
      </nav>
      
    </div>

  </section>


    <!-- ========== SECTION FOR GLOWING HEART =========== -->
  <section id="top1">
        <canvas id="canvas" class="canvas1" ></canvas>
  </section>
  
  <!-- ============   SECTION  FOR  PARTICLE  ======== -->
       <section id="particles-js"></section>
<!-- ========= particle . js -->
       <script src="particle/particles.js"></script>
<!-- === app . js ======== -->
       <script src="particle/app.js"></script>


       <!-- ============   SECTION  2 (ABOUT SECTION) ======== -->

    <section id="sec2" class="sec2">
        <div class="body2">
          <nav class="text">
            <h2>About me</h2>
          </nav>
        </div>
        <nav id="cont">
        <div class="container">
          
          <div class="box">
            <div class="cir1">
              <div class="info">
                <p> Bikram Kumal - Coder - Learner - Designer - Developer - </p>
              </div>
            </div>
            <div class="circle">
              <!-- <img src="img/biku.png" alt="" srcset=""> -->
            </div>
            
          
            <img src="img/biku1.png" alt="image of bikram kumal" srcset="">
        </div>
      </nav>
        <div class="abut_right" >
          <h2>Hello my name is <span> Bikram Kumal. </span><h2>
            <br>
            <p>
              I'm studying website design. 
              I have a passion for building stunning, useful websites that offer wonderful user experiences. 
              I am presently pursuing a degree in web design and development, and I have already finished a number of projects that highlight my abilities and creativity.
              <br> <br>
              My main goal is to build responsive websites that function well on all devices. 
              I've worked with HTML, CSS, JavaScript, and PHP before, and I'm always learning and putting new talents to use. 
              I think that building websites should focus on both aesthetic appeal and a smooth user experience that captivates and enthralls viewers.
              <br><br>
              I'm excited to work with clients who want a website that satisfies their unique wants and specifications. 
              I am open to comments and criticism, and I work closely with my customers to make sure that their vision is realized.
            </p>
        </div>
        </div>
    </section>


    <!-- ========= timeline -->
    <section class="sec2_timeline">
      <div class="flow_div">
        
      <div class="timeline ">

          <h5>EDUCATION || EXPERIENCE</h5>

        <!-- =====  EDUCATION  ======  -->

        <div class="timeline-container edu">

        <i class="fa-solid fa-user-graduate "></i>
          <div class="timeline-txt-box edu_space">
            <h2>EDUCATION </h2>
            <span class="container-arrow"></span>
          </div>
        </div>

        <div class="timeline-container ">
          <i class="fa-solid fa-user-graduate"></i>
          <div class="timeline-txt-box">
            <h2>10 || (S.E.E) </h2>
            <small>2018</small>
            <p>
              Completed S.E.E in 2018 with 3.8 GPA, gaining strong academic skills and knowledge</p>
            <span class="container-arrow"></span>
          </div>
        </div>

        <div class="timeline-container">
          <i class="fa-solid fa-user-graduate"></i>
          <div class="timeline-txt-box">
            <h2>+2 || (N.E.B) </h2>
            <small>2020</small>
            <p> 
              Completed Science Stream education at NEB level with 3.7 GPA, 
              showcasing my commitment to excellence and passion for learning.</p>
            <span class="container-arrow"></span>
          </div>
        </div>


        <div class="timeline-container">
          <i class="fa-solid fa-user-graduate"></i>
          <div class="timeline-txt-box">
            <h2>POKHARA UNIVERSITY </h2>
            <small>2021- (now)</small>
            <p>
              Studying IT at Pokhara University, 
              doing well with a strong base in programming, database management, web development, and networking.</p>
            <span class="container-arrow"></span>
          </div>
        </div>
        
        <!-- ========== EXPERIENCE ======== -->
        <div class="timeline-container exp">
          <i class="fa-solid fa-briefcase"></i>
          <div class="timeline-txt-box exp_space">
            <h2>EXPERIENCES</h2>
            <span class="container-arrow"></span>
          </div>
        </div>

        <div class="timeline-container">
          <i class="fa-solid fa-briefcase"></i>
          <div class="timeline-txt-box">
            <h2>Different Websites</h2>
            <small>2022</small>
            <p>Created several websites, some of which are finished and others that are still ongoing.</p>
            <span class="container-arrow"></span>
          </div>
        </div>

        <div class="timeline-container">
          <i class="fa-solid fa-briefcase"></i>
          <div class="timeline-txt-box">
            <h2>Notes Website : 
              <!-- <a href="https://kbikram.com.np">( kbikram.com.np )</a> -->
            </h2>
            <small>2022</small>
            <p>Collaborated with my friend Binam Pathak to create a student-focused website providing study materials and resources, reflecting our dedication to education.</p>
            <span class="container-arrow"></span>
          </div>
        </div>


      </div>
<!-- =============  Right Part ================ -->
      <div class="p2">
          <!-- ================ skills ========== -->
          <div class="skill">
            <div class="sec-title">
              <h1>My Skill</h1>
            </div>
            
            <div class="lists_for_skill">
              <li><h3>HTML</h3>
              <span class="bar"><span class="html"></span></span>
            </li>
            <li><h3>CSS</h3>
              <span class="bar"><span class="css"></span></span>
            </li>
            <li><h3>JAVASCRIPT</h3>
              <span class="bar"><span class="java_script"></span></span>
            </li>
            <li><h3>PHP</h3>
              <span class="bar"><span class="p_hp"></span></span>
            </li>
            </div>
          </div>
          <!-- connect with me -->
          <div class="conn-me">
            <hr>
            <h4>I <span> <i class="fa-solid fa-heart"></i> </span> working on team.</h4>
            <p>I am interested and have experience in website design, and I am eager to work with a team. 
              I am constantly learning and expanding my skills to keep up with the latest trends and technologies. 
              If you are looking for someone who is dedicated and enthusiastic, I would be happy to join your team.</p>
          </div>
          <div class="connect-me">
            <hr>
            <h3>
              <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
            </h3>

          </div>
      </div>
    </div>
    </section>

    <section class="service" id="service">
      <div class="service_body">
      <div class="title">
        <h1 class="service_title">Service</h1>
      </div>
      <p class="l1">
        I am a web development student offering services in website design, development, optimization, and maintenance. 
        I have experience building static sites using HTML, CSS,  JavaScript, and PHP, and can improve your site's performance and fix any issues that arise. 
        My services showcase my passion for web development, and 
        I am dedicated to providing innovative solutions to help you meet your goals.
      </p>
      <div class="service_list">
        <div class="list2">
        <li>
          <h1>
            <i class="fa fa-earth-americas"></i>
            Website Design
          </h1>
          <hr>
          <p>
            I specialize in designing user-friendly and modern website interfaces that align with your brand and engage your target audience.
          </p>
        </li>
      
        <li>
          <h1>
            <i class="fa fa-code"></i>
              Website Development
          </h1>
          <hr>
          <p>
            I have hands-on experience building static websites using HTML, CSS, and JavaScript. 
            Whether you need a simple landing page or a more complex website,
             I can help you create a responsive, user-friendly site that meets your needs.
          </p>
        </li>
      </div>
      <div class="list2">
        <li>
          <h1>
            <i class="fa fa-clock"></i>
            Website Optimization
          </h1>
          <hr>
          <p>
            Slow load times and poor site speed can harm your website's user experience. 
            As a web development student, I can help optimize your website's performance by minimizing load times and improving site speed, 
            so your visitors have a fast and seamless experience.
          </p>
        </li>
        <li>
          <h1>
            <i class="fa fa-screwdriver-wrench"></i>
            Website Maintenance
          </h1>
          <hr>
          <p>
            Keeping your website up-to-date and running smoothly is crucial for maintaining your online presence. 
           I can help you to maintain your website by updating content, fixing any bugs or issues that arise, 
            and ensuring your site stays secure and up-to-date.
          </p>
        </li>
      </div>
      </div>
    </div>
    </section>

    <!--
      <i class="fa fa-location-dot"></i>
            
      <i class="fa fa-envelope"></i>
      
      <i class="fa fa-phone"></i>
    -->

    <!-- ====================== section for Contact us ==========================    -->
    <section class="contact" id="contact">

      <div class="s_contact">
        <!-- *** title *** -->
        <div class="c_title">
          <h1>CONTACT</h1>
        </div>

        <!-- =*** body part *=== -->
        <div class="contact_body">

          <!--  contact left part -->
          <div class="c_left">

            <div class="c_left1">

            <!-- location -->
              <div class="l1">
                  <div class="c_icon">
                    <i class="fa fa-location-dot"></i>
                </div>
                <div class="c_text">
                  <h2>Location</h2>
                  <p>Balaju -16, Kathmandu . (Nepal)</p>
                </div>
              </div>
                <!-- phone -->
              <div class="l1">
                <div class="c_icon">
                  <i class="fa fa-phone"></i>
              </div>
              <div class="c_text">
                <h2>Phone</h2>
                <p>+9779866312458</p>
              </div>
            </div>
              <!-- email -->
                <div class="l1">
                <div class="c_icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="c_text">
                  <h2>Email</h2>
                  <p>bikutech44@gmail.com</p>
                </div>
              </div>

            </div>
               
          </div>

          <!-- CONTACT RIGHT -->
          <div class="c_right">
            <div class="c_right1">
            <form method="post">
              <h2>SEND MESSAGE</h2>
                      <p style=" color:red; margin-top: 12px; margin-bottom:10px; text-align:center;">
                  <?php
                      if(isset($error)){
                        echo $error;
                      }
                  ?>
                </p>
              <div class="input_box first">
                <input type="text" name="1name" required>
                <span>Full Name</span>
              </div>

              <div class="input_box">
                <input class="mail" type="email" name="email" required>
                <span class="mail111">Email</span>
              </div>

              <div class="input_box">
                <textarea required name="message" ></textarea>
                <span>Type your message here..</span>
              </div>

              <button type="submit" name="submit" class="submit">Send Message</button>
            </form>
          </div>
          </div>
          
        </div>
      </div>

    </section>

    <footer>
    <div class="footer-content">
            <h2> <span><img src="img/logo.png" alt="" srcset=""></span> Bikram Kumal</h2> 
            <h3>
              <a href="https://www.facebook.com/bikram.kumal.02" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.twitter.com/jaq_bk" target="_blank"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.instagram.com/jaquard.bikram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://github.com/bikutech44/html_portfolio"><i class="fa-brands fa-github"></i></a>
            </h3>

            <br>
            <p>This is a personal portfolio website created by myself Bikram Kumal.
            <br>
            Copyright <span> &copy; </span> 2023 Bikram Kumal 
            </p>
          </div>
    </footer>

</body>

 <!-- connect js -->
<script src="script.js?v=<?=$version?>"></script>




</html>

