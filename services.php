<?php 
$json = file_get_contents("content.json");
$json_data = json_decode($json,true); 
// echo "<pre>";
// print_r($json_data);
// exit;
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> <?php echo $json_data['services']['title']; ?> </title>
      <meta name="description" content="<?php echo $json_data['services']['description']; ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/animate.min.css">
      <link rel="icon" type="image/png" href="img/ras-fav.png"/>
   </head>
   <body>
      <!-- ==========top bar start========== -->
      <section class="top-bar">
         <div class="top-black-bar">           
         </div>
         <div class="top-orange-bar"></div>
         <div class="container call-area">
            <div class="row">
               <div class="col-md-12">
                  <div class="phone text-end">
                     <p class="mb-0"><i class="fa fa-phone pe-2" aria-hidden="true"></i>
                        <a href="tel:0411 398 142">Ph: 0411 398 142</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==========top bar end========== -->
      <!-- ==========navbar section start========== -->
      <section class="my-nav">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
               <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="myDIV">
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"><?php echo $json_data['nav'][0]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="services.php"><?php echo $json_data['nav'][1]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="qualifications.php"><?php echo $json_data['nav'][2]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="projects.php"><?php echo $json_data['nav'][3]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo $json_data['nav'][4]; ?></a>
                     </li>
                  </ul>
                  <ul class="header-media mb-0">
                     <li><a href=""><img src="img/Facebook.png"></a></li>
                     <li><a href=""><img src="img/Instagram.png"></a></li>
                     <li><a href=""><img src="img/Linked.png"></a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </section>
      <!-- ==========navbar section end========== -->

   
      <!-- ==========ras qualifications page start========== -->
      <section class="ras-qualifications services">
         <div class="project-title text-center">
         <div class="lg-dark-bar"></div>
         
         <div class="big-dark-bar-qualifications">
            <h2 class="mb-0 ras-title font-md">Services</h2>
         </div>




      <div class="pull-up-service">
            <div class="orange-bar qualifications"></div>
         <div class="qualifications-background">
            <div class="container">
               <div class="row justify-content-center pb-5">
                  <div class="col-md-10 text-center">
                     <p class="fs-30 white">Be covered with Regional Asphalting Services</p>
                     


                    <p class="white"> At Regional Asphalting Services all staff have the relevant safety training and qualification, and our company has an extensive OHS, quality system in which staff complies.  We also recognize our obligation to the environment and comply with all relevant environment acts, regulation as well as obligations and community expectations
</p>
<p class="white">
Our machinery range is broad which allow us to undertake all aspects of the job from the necessary preparation through to the completion of works.</p>
<p class="white">
We believe communication is the key to getting it right and we strive to fully discuss your needs and offer solutions  for the best possible outcome we can achieve whilst keeping you fully informed, before, during and completion or works.  We want clients to be completely satisfied with the workmanship and service they receive from us and welcome discussion at all times.  Our company actively seeks and encourages development of long term relationships with our customers and we offer ongoing customised service that will meet your needs. </p>
                  </div>
               </div>
            
               <div class="row">
                  <div class="col-md-12 pb-4">
                     <div class="black-with-orange">
                        <div class="black-bar"></div>
                        <div class="orange-bar qualifications"></div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <img src="img/More-than-just-asphalting.png" class="img-fluid">
                  </div>
                  <div class="col-md-3">
                     <p class="white">Many years of knowledge and experience in the local and surrounding areas.</p>
                     <p class="white mb-0">
                        Ballarat based, working throughout Regional Victoria.
                     </p>
                  </div>
                  <div class="col-md-3">
                     <p class="white"> Our own fleet of vehicles and equipment for small to large jobs.</p>
                     <p class="white mb-0">Success with state and local government panel contracts, ensuring our systems and processes are continually monitored and updated accordingly.</p>
                  </div>
                  <div class="col-md-3">
                     <p class="white">
                        Management systems in quality, safety and the environment, for the protection of our people and clients.
                     </p>
                     <p class="white mb-0">
                        A maintenance and mechanical department to minimise downtime due to a poorly maintained fleet.
                     </p>
                  </div>
                  <div class="col-md-12 pt-4">
                     <div class="black-with-orange">
                        <div class="black-bar"></div>
                        <div class="orange-bar qualifications"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>






      </section>
      <!-- ==========ras qualifications page end========== -->
      <section class="single-truck">
         <div class="container-truck">
            <img src="img/os.png" class="w-100">
         </div>
      </section>
      <section class="plus-bar text-center">
         <div class="plus-sign">
            <span class="real-plus"></span>
         </div>
      </section>
      <!-- ===========footer section start=========== -->
      <section class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer-logo mb-4">
                     <img src="img/footer-logo.png" class="img-fluid">
                  </div>
                  <div class="footer-contact text-center">
                     <p class="footer-call fs-20 mb-1"><a href="tel:0411 398 142">Ph: 0411 398 142</a></p>
                     <p class="footer-email"><img src="img/email-icon.png"><a href="mailto:admin@regionalasphaltingservices.com.au">admin@regionalasphaltingservices.com.au</a></p>
                  </div>
                  <ul class="footer-social">
                     <li><a href=""><img src="img/fb.png"></a></li>
                     <li><a href=""><img src="img/insta.png"></a></li>
                     <li><a href=""><img src="img/in.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="orange-border">
      </section>
      <!-- ===========footer section end=========== -->
      <!-- =========quote request========= -->
      <div class="quote">
         <a href="" class="quote-btn">quote request</a>
      </div>
      <!-- =========quote request end========= -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
      <script type="text/javascript" src="js/proper.min.js"></script>
   </body>
</html>