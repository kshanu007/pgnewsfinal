<?php 
                date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

            ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PG-News</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo3.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="whatsapp/floating-wpp.min.css">  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
   <script src="assets/js/cities.js"></script>
   <style>
      .blink {
        animation: blinker 0.8s linear infinite;
        color: #28a745;
        font-size: 16px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .blink-one {
        animation: blinker-one 1s linear infinite;
        color: #002b62;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker-one {
        0% {
          opacity: 0;
        }
      }
      .blink-two {
        animation: blinker-two 1.4s linear infinite;
        color: #002b62;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
      }
    </style>
   <style type="text/css">
  
    .modal-dialog-full-width {
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        max-width:none !important;

    }

    .modal-content-full-width  {
        height: auto !important;
        /*min-height: 100% !important;*/
        min-height:fit-content;
        border-radius: 0 !important;
        background-color: #ececec !important 
    }

    .modal-header-full-width  {
        border-bottom: 1px solid #9ea2a2 !important;
    }

    .modal-footer-full-width  {
        border-top: 1px solid #9ea2a2 !important;
    }

   </style>
</head>

<body>
  <!-- ======= #hero ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">

    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <!--<h1 class="text-light"><a href="index.php"><span>PG-News</span></a></h1>-->
          <!-- Uncomment below if you prefer to use an image logo -->
             <div class="row">
             <a href="index.php"><img src="assets/img/whitelogo1.png" alt="" class="img-fluid"></a>&nbsp;
           <!-- <h1 class="text-light"><a href="index.php"><span>PG-News</span></a></h1> -->
          </div>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="view_college.php">Top Medical Colleges</a></li>
            <li><a href="blog.php">Medical Blog</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#" data-toggle="modal" data-target="#search_modal"><span class="fa fa-search"></span></a></li> 
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
  <section id="counts" class=" d-flex counts" style="height: 30px">
      <div class="container">
        <div class="row" >
            <!--<div class="col-md-3 text-center" id="timestamp">-->
            <!--    <p style="color:#002b62;font-size:15px;font-weight:bold" ><?php echo date('l d-m-Y H:i');?></p>-->
            <!--</div>-->
        <div class="col-md-12">
            <marquee onmouseover="this.stop();" onmouseout="this.start();">
        <ul style="display:flex;">
            <!--<p style="color:#002b62;font-size:15px;font-weight:bold" ><?php echo date('l d-m-Y H:i');?></p>-->
            <li style="color:#002b62;margin-right:30px;font-weight: bold;"><?php echo date('l d-m-Y H:i');?></li>
            <li style="list-style-type: disk;color:red;margin-right:30px;font-weight: bold;"><a onMouseOver="this.style.color='#002b62'" onMouseOut="this.style.color='red'" style="color:red;" href="tel:18002668555">TOLL FREE-18002663555</a></li>
            <li style="list-style-type: disk;color:red;margin-right:30px;font-weight: bold;"><a onMouseOver="this.style.color='#002b62'" onMouseOut="this.style.color='red'" style="color:red;" href="tel:18002668555">Direct Admission in MD/ MS/ PG&nbsp;&nbsp;&nbsp;<span class="blink">2021</span></a></li>
            <li style="list-style-type: disk;color:red;margin-right:30px;font-weight: bold;"><a onMouseOver="this.style.color='#002b62'" onMouseOut="this.style.color='red'" style="color:red;" href="tel:18002668555">Direct Admission in MBBS&nbsp;&nbsp;&nbsp;<span class="blink">2021</span></a></li>
        </ul>
         </marquee>
        </div>
       
        </div>
       
      </div>
  </section>
  
  