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
      <title> <?php echo $json_data['home']['title']; ?> </title>
      <meta name="description" content="<?php echo $json_data['home']['description']; ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/animate.min.css">
      <link rel="icon" type="image/png" href="img/ras-fav.png"/>
      <link rel="preload" href="fonts/AkzidenzGroteskStd-Regular.woff2" as="font">
       
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
                        <a href="tel:0411 398 142">Ph:0411 398 142</a>
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
                        <a class="nav-link active" aria-current="page" href="index.php"><?php echo $json_data['nav'][0]; ?></a>
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
      <!-- ========== banner section start========== -->
	
      <section class="banner-background">
	  <div class="bg-overlay animate__animated animate__bounce animate__delay-2s  2s animate__fadeInLeft">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8">
                  <div class="banner-content text-center animate__animated animate__bounce animate__delay-2s  2s animate__fadeInLeft">
                     <h1 class="white font-bold">Knowledge & Experience</h1>
                     <p class="white fs-25">
                        A skilled team, bring years of experience to ensure your project
                        runs as smoothly as the asphalt we lay
                     </p>
                  </div>
               </div>
            </div>
         </div></div>
      </section>
      <!-- ========== banner section end========== -->
      <!-- ==========ras service page start========== -->
      <section class="ras-services">
         <div class="project-title text-center">
         <div class="mini-dark-bar"></div>
         <div class="lg-dark-bar"></div>
         <div class="big-dark-bar">
            <h2 class="mb-0 ras-title font-md">Regional Asphalting Services</h2>
         </div>
         <div class="services-background">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-10 text-center">
                     <p class="white">Regional Asphalting Services is a regionally based business, capable of handling most large projects, yet small enough to work collaboratively, smart enough to know how to get the job done right, with minimal fuss, saving you time and money. It takes a dedicated team of skilled people, with each member dedicated to providing the best outcome for you, the client. It is essential in an industry such as this , you have a team that understands the importance of accurate quantities and the necessity of the project timings. As a team, Regional Asphalting understands the importance of delivering a high-quality product quickly and efficiently for our clientele.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==========ras service page end========== -->
      <!-- ============ our project section start============ -->
      <section class="our-projects">
         <div class="project-title text-center">
            <div class="mini-dark-bar projects"></div>
            <div class="orange-bar"></div>
            <div class="lg-dark-bar"></div>
            <div class="big-dark-bar">
               <h2 class="mb-0 ras-title font-md">our projects</h2>
            </div>
         </div>
         <div class="project-background">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-10 text-center">
                     <p class="white font-bold fs-20 mb-1">Need quality asphalt paving and patching?</p>
                     <p class="white">Servicing Greater Ballarat and Regional Western Victoria Regional Asphalt Services (RAS) are a highly skilled and passionate team. In the business of laying new and patching existing asphalt surfaces.</p>
                  </div>
               </div>
               <div class="row project-col">
                  <div class="col-md-3">
				  <div class="projects-imgs">
				  <div class="projects-overlay"></div>
                     <img src="img/p1.png" class="w-100"></div>
                     <h3 class="project-subtitle orange">Roads/Maintenance</h3>
                  
                  </div>
                  <div class="col-md-3">
				  <div class="projects-imgs">
				  <div class="projects-overlay"></div>
                     <img src="img/p2.png" class="w-100"></div>
                     <h3 class="project-subtitle orange">Footpaths</h3>
                  </div>
                  <div class="col-md-3">
				  <div class="projects-imgs">
				  <div class="projects-overlay"></div>
                     <img src="img/p3.png" class="w-100"></div>
                     <h3 class="project-subtitle orange">Cross Overs/Driveways</h3>
                  </div>
                  <div class="col-md-3">
				  <div class="projects-imgs">
				  <div class="projects-overlay"></div>
                     <img src="img/p4.png" class="w-100"></div>
                     <h3 class="project-subtitle orange">Government Contracts</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ============ our project section end============ -->
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