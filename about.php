<?php
    include("db/conn.php");
    include("header.php");
?>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto ;
  /*background-color: #2196F3;*/
  padding: 10px;
}
.grid-item {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  /*border: 1px solid rgba(0, 0, 0, 0.8);*/
  padding: 20px;
  font-size: 30px;
  text-align: center;
  
  
}
.grid-item img{
    width:100%;
}
</style>
 <section id="hero1" class="d-flex align-items-center">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/img/368843.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                            <h1>About Us</h1><br>
                            <h3>A leading digital platform for solutions for medical education in India and Abroad</h3>
                            <!--<a href="tel:18002668555" class="btn-get-started btn-success" style="border-color: #28a745;">Talk TO Doctor</a>-->
                         </div>
                    </div>
                </div>    
            </div>
  </section> 
  <br>
  <main id="main">
    <section class="inner-page">
      <div class="container">
        <div class="row content">
            
         
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>About Us</h2>
            <h3>Welcome to PG-News</h3>
          </div>
           <div class="row">
          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
              <div class="grid-container">
                  <div class="grid-item"> <img class="img1" src="images/a14.jpg"></div>
                  <div class="grid-item"> <img class="img1" src="images/b1.jpg"></div>
                  <div class="grid-item"> <img class="img1" src="images/c11.jpg"></div>  
                  <div class="grid-item"><img class="img1" src="images/d1.jpg"></div>
                 
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-3"><img class="img1" src="images/a1.jpg"></div>-->
                <!--    <div class="col-md-3"><img class="img1" src="images/b1.jpg"></div>-->
                <!--</div>-->
                <!--<div class="row">-->
                <!--    <div class="col-md-3"><img class="img1" src="images/c11.jpg"></div>-->
                <!--    <div class="col-md-3"><img class="img1" src="images/d1.jpg"></div>-->
                <!--</div>-->

            </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify;"><br>
                PG-News is a leading digital platform for solutions for medical education in India and Abroad.<br>
                PG-News nurtures the aspirations of students who dream of a career in medicine.<br>
                We are offering them the best support and advisory in order to get their admission to the best admission colleges for MBBS/PG/MS/MD etc. through various medical entrance exams or through direct admission via NRI & Management Quota Seats.<br>
                PG-News is identified with every single question associated with medical programs in India & Abroad.<br>
                We help the student & parents with proper planning in all their preparing years & afterwards and also assist them with the checklists of essential prerequisites which would be necessary for a successful medical career.<br>
                A large number of students have benefitted from our support and services for their admission to top medical institutes through various medical entrance exams or through direct admission via NRI & Management Quota Seats.<br>
                Through our focussed approach, we would be servicing students fraternity every year & help the students to get admitted to their dream medical colleges through various medical entrance exams or through direct admission via NRI & Management Quota Seats.<br>
            </p>
          </div>
          </div>
        </div>
      </div>
    </section>

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
               <!--<p>Contact to our expert for guidence, enquiry, process, critetia ragarding admission in MBBS/ PG/ MD/ MS. Our expert will contact you as soon as possible.</p>-->
                <img src="assets/img/map2.png"  width="350" height="300">
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
           <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@pg-news.com"><i class="icofont-envelope"></i></a>
                  <h4>Email:</h4>
                  <p><h4><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@pg-news.com">info@pg-news.com</a></h4></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <a href="tel:18002668555"><i class="icofont-phone"></i></a>
                  <h4>Call:</h4>
                  <p><h4><a href="tel:18002668555">18002663555</a></h4></p>
                </div>
              </div>
            </div>
            <br>
            <form method="post" id="contact" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><input type="submit" style="background: #002b62;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 50px;" value="Send Message"/></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
     <div id="WAButton"></div>  
 <div class="calling"><a href="tel:+919019671789"><img src="assets/img/calling.png" height="70px" width="70px;"></a></div>
  </main><!-- End #main -->
<?php
  include("footer.php");
?>