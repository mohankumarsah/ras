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
      <title> <?php echo $json_data['contact']['title']; ?> </title>
      <meta name="description" content="<?php echo $json_data['contact']['description']; ?>">
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
                        <a class="nav-link" href="services.php"><?php echo $json_data['nav'][1]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="qualifications.php"><?php echo $json_data['nav'][2]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="projects.php"><?php echo $json_data['nav'][3]; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="contact.php"><?php echo $json_data['nav'][4]; ?></a>
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
      <!-- ============ our project section start============ -->
      <section class="our-projects">
         <div class="project-title text-center">
            <div class="mini-dark-bar"></div>
            
            <div class="lg-dark-bar"></div>
            <div class="big-dark-bar">
               <h2 class="mb-0 ras-title font-md">Contact/Quote Request</h2>
            </div>
         </div>
         <div class="project-background">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-11 text-center">
                     <p class="white">Call or submit our online form to request an estimate or for general questions about Regional Asphalting and our services. We look forward to serving you with your next project, regardless of the scale. We just simply love working with people to achieve great results.

</p>
<p class="white font-bold">
By providing us with all the requested information we will be able to generate a detailed and tailored quote.
Regional Asphalt Services is the first choice for Ballarat and Regional Victoria for all asphalting , repair and maintenance work.</p>
<p class="white font-bold">
Our skilled team has many years of experience in local government and the private sector. We have extensive experience working within the Civil Construction and Asphalting is just one of the many things we do</p>
                  </div>



               </div>
               <div class="row pt-3 pb-3">
                  <div class="col-md-6">
                     <form>
                        <div class="mb-1">
                           <input type="text" class="form-control" name="" placeholder="Full Name:">
                        </div>
                         <div class="mb-1">
                           <input type="email" class="form-control" name="" placeholder="Email:">
                        </div>

                         <div class="mb-1">
                           <input type="text" class="form-control" name="" placeholder="Company Name:">
                        </div>
                        
                       
                        <div class="mb-1">
                           <input type="text" class="form-control" name="" placeholder="Location:">
                        </div>
                        <div class="mb-1">
                           <input type="number" class="form-control" name="" placeholder="Phone:">
                        </div>
                        <div class="mb-1">
                           <textarea rows="5" placeholder="Details about your project:" class="form-control"></textarea>
                        </div>
                        <div class="mb-1 text-end">
                           <input type="submit" value="Submit" name="" class="primary-btn">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 contact-detail">
                     <h3 class="fw-bold black">Contact</h3>
                     <div class="mb-3">
                        <p class="black mb-0 fs-18"><strong>Michael <a href="" class="black">0411 398 142</a></strong></p>
                        <a class="white" href="mailto:michael@regionalasphaltingservice.com.au">michael@regionalasphaltingservice.com.au</a>
                     </div>
                     <div class="mb-3">
                        <p class="mb-0 black fs-18"><strong><a href="" class="black">Graeme 0404 015 201</a></strong></p>
                        <a class="white" href="mailto:graeme@regionalasphaltingservice.com.au">graeme@regionalasphaltingservice.com.au</a>
                     </div>
                     <div class="mb-3">
                        <p class="mb-0 black fs-18"><strong>Address Details</strong></p>
                        <p class="white">423 Clunes Road, Creswick, Victoria, 3363</p>
                     </div>
                     <a href="https://goo.gl/maps/DbLUSajQ4FMhzrc4A" target="_blank" class="white fs-18">Click here to get directions</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ============ our project section end============ -->
      <section class="map-area">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25360.198418185617!2d143.8567313959544!3d-37.38924572111307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad1399d1eb07f19%3A0x7c87e86b6c92c19f!2s423%20Clunes%20Rd%2C%20Creswick%20VIC%203363%2C%20Australia!5e0!3m2!1sen!2sin!4v1663667180221!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      <!-- ==========ras qualifications page start========== -->
      <section class="ras-qualifications">
         <div class="project-title text-center">
         <div class="lg-dark-bar"></div>
         
         <div class="big-dark-bar-qualifications">
            <h2 class="mb-0 ras-title font-md">Qualifications</h2>
         </div>

         <div class="pull-up">
         <div class="orange-bar qualifications"></div>         
         <div class="qualifications-background">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-10 text-center">
                     <p class="fs-30 white">Need quality asphalt paving and patching?</p>
                     <p class="white">Servicing Greater Ballarat and Regional Western Victoria Regional Asphalt Services (RAS) are a highly skilled and passionate team. In the business of laying new and patching existing asphalt surfaces.</p>
                  </div>
               </div>
               <div class="row pb-4 pt-3">
                  <div class="col-md-12">
                     <a href="" class="view-our hide-on-mobile"> <img src="img/View-our-qualifications.png" class="w-100"></a>
                     <a href="" class="view-our hide-on-desktop"> <img src="img/View-our-qualifications-mobile.png" class="w-100"></a>
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
      <script type="text/javascript" src="js/custom.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/proper.min.js"></script>
   </body>
</html>