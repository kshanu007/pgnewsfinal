<?php
    include("db/conn.php");
    include("header.php");
?>
 <section id="hero" class="d-flex align-items-center">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/img/bgimage2.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                            <h1>MCC News</h1>
                            <!--<a href="tel:18002668555" class="btn-get-started btn-success" style="border-color: #28a745;">Talk TO Doctor</a>-->
                         </div>
                    </div>
                </div>    
            </div>
  </section> 
  <main id="main">
    <section class="inner-page">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-lg-12">
          <table id="table_id" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>News</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
              <?php
                            $query = "SELECT * FROM `tbl_news` where news_for='MCC(UG)' ORDER BY news_date DESC"; 
                            $result = mysqli_query($conn,$query);
                            $sr=1;
                             while($row = mysqli_fetch_assoc($result))
                                    {
                        ?>
                <tr>
                    <td><?=$sr++;?></td>
                    <td><a target="_blank" href="<?=$row['news_url']?>"><?=$row['news_name']?></a></td>
                    <td><?=$row['news_date']?></td>
                </tr>
                <?php
                          }
                        ?>
            </tbody>
        </table>
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
                  <p><h4><a href="tel:18002668555">18002668555</a></h4></p>
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
 <div style="width: 150px;position: fixed;bottom:15px;left:15px;"><a href="tel:+919019671789"><img src="assets/img/calling.png" height="70px" width="70px;"></a></div>
  </main><!-- End #main -->
<?php
  include("footer.php");
?>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>