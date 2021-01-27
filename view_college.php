<?php
    include("db/conn.php");
    include("header.php");
?>
 <section id="hero1" class="d-flex align-items-center">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/img/368843.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                            <h1>List Of Top Colleges</h1>
                            <!--<a href="tel:18002668555" class="btn-get-started btn-success" style="border-color: #28a745;">Talk TO Doctor</a>-->
                         </div>
                    </div>
                </div>    
            </div>
  </section> 
  <br>
  <main id="main">
      <section>
           <div class="row justify-content-center">
        <div class="col-lg-3">
            <select class="form-control" id="state" name ="state" >
              <option disabled="" selected value="">--Select State--</option>
              <!-- <option>All</option> -->
            </select>
        </div>&nbsp;
        <div class="col-lg-3">
            <select class="form-control" id="type" name="type" selected>
               <option value="" disabled="" selected="">---Select Type---</option>
               <!-- <option>All</option> -->
               <option>Government</option>
               <option>Private</option>
                <option>Deemed</option>
            </select>
        </div>
    </div>
      </section>
   
 <!-- ======= Portfolio Section ======= -->
     <section class="property-section spad portfolio" id="portfolio">
        <div class="container">

             <div class="section-title" data-aos="fade-left">
          <h2>Top Colleges</h2>
          <p>As the universe of knowledge domain expands, the sciences supply many exciting opportunities for study and research</p>
        </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".Government">Government</li>
              <li data-filter=".Private">Private</li>
              <li data-filter=".Deemed">Deemed</li>
            </ul>
          </div>
        </div>
            <div class="row portfolio-container" data-aos="fade-up" id="part-1" data-aos-delay="200">
               <?php
                        $query = "SELECT * FROM `tbl_college`";
                        $result = mysqli_query($conn,$query);
                        $sr = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                <div class="col-lg-3 col-md-6 portfolio-item <?=$row['college_type']?>" >
                    <div class="property-item" style="padding: 5px 5px;background:#e0ecef">
                        <div class="pi-pic set-bg" >
                          <img src="admin/upload/<?=$row['college_photo']?>" class="img-fluid" alt="Medical College">
                            <?php
                                if($row['college_type']=="Government"){
                                  ?>
                                    <!--<div class="label c-magenta"><?=$row['college_type']?></div>-->
                                  <?php
                                }
                                elseif($row['college_type']=="Private"){
                                  ?>
                                    <!--<div class="label c-red"><?=$row['college_type']?></div>-->
                                  <?php
                                }
                                else{
                                  ?>
                                     <!--<div class="label "><?=$row['college_type']?></div>-->
                                  <?php
                                }
                            ?>
                            
                        </div>
                       <div class="pi-text" >
                           <div style="width:100%;height:65px;overflow:hidden;padding-top: 10px;padding-bottom:0px;">
                            <div class="text-center">
                              <p style="font-size: 13px;font-weight: bold;"><a><?=$row['college_name'];?></a></p>
                            </div>
                          </div>
                          <hr style="margin-top: 10px; margin-bottom: 5px;">
                           <p style="margin-bottom: 5px;font-size: 12px;font-weight: bold;" class="text-center"><span class="fa fa-check-circle"></span>&nbsp;MCI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-map-marker" style="color:red"></span>&nbsp;<?=$row['college_city']?>,&nbsp;<?=$row['college_state']?></p>
                           <hr style="margin-top: 0; margin-bottom: 0;">
                            <ul>
                                <?php
                                $facility = $row['college_facility'];
                                $i=explode(",",$facility);
                                for ($j=0; $j <count($i) ; $j++) {
                                    if($i[$j]=='Hostel'){
                                        $hostel="1";
                                    }
                                    elseif($i[$j]=='Cafeteria'){
                                        $cafeteria="1";
                                    }
                                    elseif($i[$j]=='Sports' || $i[$j]=='Gym'){
                                        $sports="1";
                                    }
                                     elseif($i[$j]=='Laboratories' || $i[$j]=='Labs' ||  $i[$j]=='Laboratary'){
                                        $lab="1";
                                    }
                                    elseif($i[$j]=='Medical'){
                                        $capsules="1";
                                    }
                                    elseif($i[$j]=='Hospital'){
                                        $hospital="1";
                                    }
                                    elseif($i[$j]=='Cinema Theatre' || $i[$j]=='Auditoriam'){
                                        $cinema="1";
                                    }
                                }
                                if($hostel=="1"){
                                    ?>
                                    <li><i class="fa fa-building" style="color:green" ></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fa fa-building"></i></li>
                                    <?php
                                }
                                if($sports=="1"){
                                    ?>
                                    <li><i class="fa fa-futbol-o" style="color:green"></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fa fa-futbol-o"></i></li>
                                    <?php
                                }
                                if($capsules=="1"){
                                    ?>
                                    <li><i class="fas fa-pills" style="color:green"></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fas fa-pills"></i></li>
                                    <?php
                                }
                                 if($lab=="1"){
                                    ?>
                                    <li><i class="fa fa-flask" style="color:green"></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fa fa-flask"></i></li>
                                    <?php
                                }
                                
                                if($hospital=="1"){
                                    ?>
                                    <li><i class="fa fa-hospital-o" style="color:green"></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fa fa-hospital-o"></i></li>
                                    <?php
                                }
                                
                                 if($cinema=="1"){
                                    ?>
                                    <li><i class="fa fa-film" style="color:green"></i></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li><i class="fa fa-film"></i></li>
                                    <?php
                                }
                                
                                ?>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                   <div class="pa-text text-center" style="position: relative;">
                                        <button type="submit" id="enquiry" style="left:0;top:0;padding: 0px 20px;background: green;color: #fff;transition: 0.4s;border: 0px; " onclick="openmodal('<?=$row['college_id']?>','<?=$row['college_photo']?>','<?=$row['college_name']?>')"><i class="fa fa-download"></i>Broucher</button>
                                        <button type="submit" id="enquiry" style="left:0;top:0;background: #002b62;padding: 0px 25px;color: #fff;transition: 0.4s;border: 0px; " onclick="openmodal('<?=$row['college_id']?>','<?=$row['college_photo']?>','<?=$row['college_name']?>')">Know More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
              }
              ?>  
            </div>
                
                 <div class="row portfolio-container1" data-aos="fade-up" id="part-2" data-aos-delay="200" style="display: none;">
            
            
        </div>
            
             <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
             <a href="view_college.php" style="background: #002b62;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 50px;" title="More Details">Load More</a>
          </div>
        </div>
        </div>
    </section>
    
  <!-- End Portfolio Section -->
      

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
                  <a href="tel:18002663555"><i class="icofont-phone"></i></a>
                  <h4>Call:</h4>
                  <p><h4><a href="tel:18002663555">18002663555</a></h4></p>
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
 <section>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal" style="padding-right: 10px;">
  <div class="modal-dialog modal-lg" role="urlument" style="border: 2px solid #002b62;">
    <div class="modal-content" >
     <!-- <div class="modal-header" style="margin: 0 auto;">-->
     <!--<img alt="" class="img-fluid" id="header_image1" height="300px" width="300px">-->
     <!-- </div>-->
      <div class="modal-body">
                         <form method="post">
                               <input type="text" name="type" id="type" style="display: none">
                               <!--<div class="col-md-12 form-row">-->
                               <!--    <div class="col-md-4 form-row">-->
                               <!--      How PG-News Help You For your Bright Future-->
                                    
                               <!--         <div class="col-md-6 form-row">-->
                               <!--          <div class="grid-container">-->
                               <!--               <div class="grid-item">-->
                               <!--                  <img alt="" class="img-fluid" src="images/first-aid-kit.png">-->

                               <!--               </div>-->
                               <!--               <div class="grid-item">-->
                               <!--                 <img alt="" class="img-fluid" src="images/gloves.png">-->
                               <!--               </div>-->
                               <!--               <div class="grid-item">-->
                               <!--               <img alt="" class="img-fluid" src="images/gloves.png">-->
                               <!--               </div>  -->
                               <!--               <div class="grid-item">-->
                               <!--               <img alt="" class="img-fluid" src="images/first-aid-kit.png">-->
                               <!--               </div>-->
                                              
                               <!--        </div>-->
                               <!--      </div>-->
                                    
                                    

                               <!--  </div>-->
                                  <!--<div class="col-md-12 ">-->
                                      <div class="col-md-12 form-row row justify-content-center">
                                         <div class="col-md-5 input-group">
                                             <img alt="" class="img-fluid" id="header_image1" height="100px" width="100px" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
                                        </div>
                                        <div class="col-md-7 input-group">
                                            <div class="col-md-12 form-row"><span style="font-size:18px;font-weight:bold;color:#f8cf40;">Fill Up form For more info about</span></div>
                                            <div class="col-md-12 form-row"><h4 style="font-size:14px;font-weight:bold;text-aligh:justify" id="header_name"></h4></div>
                                        </div>
                                        <div class="col-md-6 input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-user" id="inputGroup-sizing-sm"></span>
                                          </div>
                                          <input type="text" class="form-control" aria-label="Small" id="name1" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 input-group">
                                             <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-envelope" id="inputGroup-sizing-sm"></span>
                                          </div>
                                          <input type="email" class="form-control" id="email1" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                          <div class="validate"></div>
                                        </div>
                                          <div class="col-md-6 input-group">
                                               <div class="input-group-prepend">
                                                <span class="input-group-text fa fa-phone" id="inputGroup-sizing-sm"></span>
                                              </div>
                                              <input type="text" class="form-control" id="number1" placeholder="Your Mobile Number" data-rule="maxlen:10" data-msg="Please enter a valid Number" />
                                              <div class="validate"></div>
                                            </div>
                                        
                                        <div class="col-md-6 input-group">
                                             <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-list" id="inputGroup-sizing-sm"></span>
                                          </div>
                                          <select name="course1" class="form-control">
                                              <option active value="">--Select Course--</option>
                                              <option value="MBBS">MBBS</option>
                                              <option value="MS">MS</option>
                                              <option value="MD">MD</option>
                                              <option value="BHMS">BHMS</option>
                                              <option value="BAMS">BAMS</option>
                                              <option value="BDS">BDS</option>
                                              <option value="MDS">MDS</option>
                                          </select>
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 input-group">
                                             <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-list" id="inputGroup-sizing-sm"></span>
                                          </div>
                                          <select name="study1" class="form-control">
                                              <option active value="">--Study In--</option>
                                              <option value="India">India</option>
                                              <option value="Abroad">Abroad</option>
                                          </select>
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 input-group"></div>
                                      <div class=" col-md-12 input-group">
                                           <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-comments" id="inputGroup-sizing-sm"></span>
                                          </div>
                                         <textarea class="form-control" rows="2" data-rule="required" data-msg="Please write something for us" id="message1" placeholder="Your Enquiry"></textarea>
                                        <div class="validate"></div>
                                      </div>
                                    <div class="col-md-6 input-group ">
                                            <button type="submit" id="register" class="form-control btn btn-sm btn-success" data-dismiss="modal">Send Enquiry</button>
                                    </div>
                              </div>
                              <!--</div>-->
                              <!--</div>-->
                          </form>
                </div>
      </div>
  </div>
</div>
</section>

     <div id="WAButton"></div>  
 <div class="calling"><a href="tel:18002663555"><img src="assets/img/calling.png" height="70px" width="70px;"></a></div>
  </main><!-- End #main -->
 
<?php
  include("footer.php");
?>
 <script type="text/javascript">
    function openmodal(id,photo,name){
         $("#myModal").modal("show");
        $("#type").val(id);
         $("#header_image1").prop("src", "admin/upload/"+photo);
         $("#header_name").text(name);
   }

   $('#register').on('click', function() {
        var name =$('#name1').val();
        var email =$('#email1').val();
        var message =$('#message1').val();
        var type =$('#type').val();

        if(name!="" && email!="" && message!=""){
           $.ajax({
                url: "db/insert.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    message: message,  
                    type : type            
                },
                dataType:'json',
                cache:false,
                success: function(data){
                     var data = JSON.parse(data);
                    if(data.statusCode==200){
                        alert("Data Added succesfully");    
                        window.location.href = "index.php";                   
                    }
                    else if(data.statusCode==201){
                       alert("Error occured !");
                    }
                    
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
    });

      $("#contact").on('submit', function(){
        var name =$('#name').val();
        var email =$('#email').val();
        var message =$('#message').val();
        var subject =$('#subject').val();
           $.ajax({
                url: "db/insert_contact.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    message: message,  
                    subject : subject,            
                },
                    dataType: 'json',
            
            cache: false,

                success: function(data){
                    var data = JSON.parse(data);
                    if(data.statusCode==200){
                        alert("Data Added succesfully");    
                        // window.location.href = "index-2.html";                   
                    }
                    else if(data.statusCode==201){
                       alert("Error occured !");
                    }
                    
                }
            });
    });

 $('#state').on('change', function() {
  var college_type = $("#type").val();
  var college_state = this.value;
     
      $.ajax({
                url: "db/select_college.php",
                type: "POST",
                data: {
                    college_state: college_state,
                    college_type: college_type,          
                },
                cache: false,
                // dataType:'json',
           success:function(data){
            $("#part-1").hide();
            $("#part-2").show();
             $('#part-2').html(data);
          }
      });
});

  $('#type').on('change', function() {
  var college_state = $("#state").val();
  var college_type = this.value;
      $.ajax({
                url: "db/select_college.php",
                type: "POST",
                data: {
                    college_state: college_state, 
                    college_type: college_type,          
                },
                cache: false,
                // dataType:'json',
           success:function(data){
            $("#part-1").hide();
            $("#part-2").show();
             $('#part-2').html(data);
          }
      });
});


var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");

stateSel = document.getElementById("state");
for (country in state_arr) {
stateSel.options[stateSel.options.length] = new Option(state_arr[country], state_arr[country]);
}


</script>