<?php
    include("db/conn.php");
    include("header.php");
?>

  <section id="hero" class="d-flex align-items-center">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/img/368843.jpg" alt="images not found" style="background-position: center;background-repeat: no-repeat; background-size: cover; height: 70vh ">
                    <div class="cover">
                        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200"><br/><br/><br/><br/>
                            <h1>For Admission in MD/MS/PG</h1>
                            <a href="tel:18002668555" class="btn-get-started btn-success" style="border-color: #28a745;">Talk TO Our Expert Doc</a><hr>
                             <a href="#" data-toggle="modal" data-target="#myModal1" class="btn-get-started btn-success" style="border-color: #28a745;">AIIMS</a>
                            <a href="#" data-toggle="modal" data-target="#myModal1"  class="btn-get-started btn-success" style="border-color: #28a745;">MCC</a>
                            <a href="#" data-toggle="modal" data-target="#myModal1"  class="btn-get-started btn-success" style="border-color: #28a745;">JIPMER</a>
                             <a href="#" data-toggle="modal" data-target="#myModal1"  class="btn-get-started btn-success" style="border-color: #28a745;">PGIMER</a>
                            <a href="#" data-toggle="modal" data-target="#myModal1"  class="btn-get-started btn-success" style="border-color: #28a745;">NBE</a>

                         </div>
                    </div>
                </div>    
                   
            </div>
  </section> 
  
   

  <main id="main">

    <section id="link" class="link">
            <div class="section-title" data-aos="fade-right" style="padding-bottom: 0px;">
              <h2 style="font-size: 32px;font-weight: bold;text-transform: uppercase;margin-bottom: 20px;padding-bottom: 20px;position: relative;color:#002b62;">state medical council</h2>
            </div>
       <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <a href="https://info.mahacet.org/cet2020/pgm/neetug20.html" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">Maharashtra</a>
            <a href="https://dme.mponline.gov.in/Portal/Services/DMEMP/DMEUG/Profile/ProfileLoginHome.aspx" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">MP</a>
            <a href="https://cetonline.karnataka.gov.in/kea/" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">Karnataka</a>
            <a href="https://upneet.gov.in/" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">UP</a>
            <a href="https://tnmedicalselection.net/" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">Tamilnadu</a>
            <a href="https://bceceboard.bihar.gov.in/UGMACexIndex.php" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">Bihar</a>
            <a href="http://www.rajprepg2020.com/" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">Rajsthan</a>
            <a href="https://wbmcc.nic.in/ug/HomePage.aspx" target="_blank" class="btn-get-started btn-success" style="border-color: #28a745;">West Bangal</a>
       </div>
    </section>
    
    <section id="inforamtion" class="information">
      <div class="container" style="max-width:95%;">
        <div class="icon-boxes d-flex flex-column justify-content-center">
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                 <div class="col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
                  <div class="icon-box mt-4 mt-xl-0" >
                    <h4 style="text-align: center;padding-top:10px;">NBE</h4>
                    <ul style="color: #000080;width: 95%;">
                        <?php
                            $query = "SELECT * FROM `tbl_news` where news_for='NBE' ORDER BY news_date DESC LIMIT 7"; 
                            $result = mysqli_query($conn,$query);
                             while($row = mysqli_fetch_assoc($result))
                                    {
                                        if($row['news_type']=="New"){
                        ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                        <?php
                                        }
                                        elseif($row['news_type']=="Urgent"){
                                            ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                            <?php
                                        }
                                        else{
                                            ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                          }
                           if(mysqli_num_rows($result)>=7){
                        ?>
                         <h6 style="color: #000080;"><a href="nbe_news.php" style="float: right">Read More>>></a></h6><br><br>
                        <?php
                      }
                      else if(mysqli_num_rows($result)==0){
                          ?>
                           <h5 style="text-align: center;padding-top:60px;">No News Available</h5>
                      <?php
                      }
                        ?>
                    </ul>
                     <br>
                  </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
                  <div class="icon-box mt-4 mt-xl-0" >
                    <h4 style="text-align: center;padding-top:10px;">AIIMS/JIPMER/PGIMER</h4>
                    <ul style="color: #000080;width: 95%;">
                        <?php
                            $query = "SELECT * FROM `tbl_news` where news_for='AIIMS' OR news_for='PGIMER'  OR news_for='JIPMER' ORDER BY news_date DESC LIMIT 7"; 
                            $result = mysqli_query($conn,$query);
                             while($row = mysqli_fetch_assoc($result))
                                    {
                                if($row['news_for']=='AIIMS'){        
                                    if($row['news_type']=="New"){
                                    ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(AIIMS)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                                    <?php
                                                    }
                                                    elseif($row['news_type']=="Urgent"){
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(AIIMS)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(AIIMS)</b>&nbsp;<?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                                }
                                elseif($row['news_for']=='JIPMER'){
                                     if($row['news_type']=="New"){
                                    ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(JIPMER)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                                    <?php
                                                    }
                                                    elseif($row['news_type']=="Urgent"){
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(JIPMER)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(JIPMER)</b>&nbsp;<?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                                }
                                else{
                                    if($row['news_type']=="New"){
                                    ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PGIMER)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                                    <?php
                                                    }
                                                    elseif($row['news_type']=="Urgent"){
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PGIMER)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                    <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PGIMER)</b>&nbsp;<?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                                }
                          }
                           if(mysqli_num_rows($result)>=7){
                        ?>
                          <h6 style="color: #000080;"><a href="aiims_jipmer_pgimer_news.php" style="float: right">Read More>>></a></h6><br><br>
                        <?php
                      }
                      elseif(mysqli_num_rows($result)==0){
                          ?>
                           <h5 style="text-align: center;padding-top:60px;">No News Available</h5>
                      <?php
                      }
                    ?>
                        
                    </ul>
                    <br>
                  </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4 style="text-align: center;padding-top:10px;">MCC (UG/PG)</h4>
                    <ul style="color: #000080;width: 95%;">
                        <?php
                            $query = "SELECT * FROM `tbl_news` where news_for='MCC(UG)' or news_for='MCC(PG)' ORDER BY news_date DESC LIMIT 7"; 
                            $result = mysqli_query($conn,$query);
                             while($row = mysqli_fetch_assoc($result))
                                    {
                                 if($row['news_for']=='MCC(UG)'){    
                                    if($row['news_type']=="New"){
                                        
                                    ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(UG)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                                        <?php
                                        }
                                        elseif($row['news_type']=="Urgent"){
                                            ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(UG)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                            <?php
                                        }
                                        else{
                                            ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(UG)</b>&nbsp;<?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                                 }
                                 else{
                                     if($row['news_type']=="New"){
                                        
                                    ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PG)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                                        <?php
                                        }
                                        elseif($row['news_type']=="Urgent"){
                                            ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PG)</b>&nbsp;<?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                            <?php
                                        }
                                        else{
                                            ?>
                                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><b style="color:red">(PG)</b>&nbsp;<?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                                 }
                          }
                          if(mysqli_num_rows($result)>=7){
                        ?>
                          <h6 style="color: #000080;"><a href="mcc_news.php" style="float: right">Read More>>></a></h6><br><br>
                       <?php
                      }
                      else if(mysqli_num_rows($result)==0){
                          ?>
                           <h5 style="text-align: center;padding-top:60px;">No News Available</h5>
                      <?php
                      }
                        ?>
                    </ul>
                  </div>
                </div>

                
                <!---------->
                 <div class="col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4 style="text-align: center;padding-top:10px;">Gov./Private/Deemed</h4>
                    <ul style="color: #002b62;width: 95%;">
                        <?php
                            $query = "SELECT * FROM `tbl_news` where news_for='State/Government/Deemed' ORDER BY news_date DESC LIMIT 7"; 
                            $result = mysqli_query($conn,$query);
                             while($row = mysqli_fetch_assoc($result))
                                    {
                                      // if(mysqli_num_rows($result)>=7)
                         if($row['news_type']=="New"){
                        ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?><img src="assets/img/new.gif" height="15%" width="15%"></h6></a></li>
                        <?php
                                        }
                                        elseif($row['news_type']=="Urgent"){
                                            ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?><img src="assets/img/urgent.gif" height="10%" width="10%"></h6></a></li>                    
                                            <?php
                                        }
                                        else{
                                            ?>
                        <li><a target="_blank" href="<?=$row['news_url']?>"><h6 style="color: #000080;"><?=$row['news_name']?></h6></a></li>                    
               
                                            <?php
                                        }
                          }
                           if(mysqli_num_rows($result)>=7){
                        ?>
                           <h6 style="color: #000080;"><a href="government_private_news.php" style="float: right;">Read More>>></a></h6><br><br>
                       <?php
                      }
                      else if(mysqli_num_rows($result)==0){
                          ?>
                          <h5 style="text-align: center;padding-top:60px;">No News Available</h5>
                      <?php
                      }
                        ?>
                    </ul>
                    <?php
                     
                    ?>
                  </div>
                </div>
                <!---------->
                
               
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

     <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" data-aos="fade-right">
              <h2>Admission in UG/PG - 2020/21<a href="tel:18002668555" style="color:red;font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;TOLL FREE-18002668555</a></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500" >
            <div class="owl-carousel testimonials-carousel" >
              <div class="testimonial-item">
                <h3>Direct Admission in MBBS</h3>
                   <p>
                    <ul>
                        <li>It`s Quite a Challenge to secure a seat in government medical colleges.</li>
                        <li>The MBBS course fee is comparatively less in government colleges if
                       we compare IT to Non-Public Colleges & Universities.</li>
                        <li>Hence, The extent of competition for MBBS in Government Colleges is remarkably high.</li>
                        <li>Proportional seats are also reserved for various categories such as :
                        SC/ST & OBC category students economically weaker section(EWS) for general
                        category students reserved for state domicile students.</li>
                        <li>First, Secure good marks in the NEET UG exam.</li>
                        <li>If not then, Take direct admission & be ready for paying the upper tuition fee.</li>
                        <li>Even with the low NEET rank,you can take direct admission & study MBBS through NRI & Management Quota seats.</li>
                    </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>
              
              <div class="testimonial-item">
                <h3>Direct Admission in MD/MS/PG</h3>
                <p><ul>
                <li> The MBBS graduates who wish to go for their professional career to the next level and become a specialist urltor has got to pursue MD or MS.</li>
                <li> To get admission in MD/MS in India, an aspirant has got to qualify NEET-PG entrance test conducted by the National Board of Examination(NBE) per annum in January each year.</li>
                <li> To apply for NEET-PG, The Aspirant must have permanent or provisional registration with the Medical Council of India(MCI) recognized medical college/institute with a 1-year compulsory internship.</li>
                <li> After successfully qualifying NEET-PG entrance test the students have to go through the central level and state level NEET-PG counselling.</li>
                <li> One can also take direct admission in MD/MS/PG & become a specialist urltor through NRI & Management Quota Seats</li>
                </ul></p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

              <div class="testimonial-item">
                <h3>Spot/Extended Round Counselling</h3>
                <p>
                 <ul>
                    <li> Spot Round counselling is conducted if there are any vacant seats available in the counselling process.</li>
                    <li> It is on the basis of first-cum-first-serve.</li>
                    <li> Spot Round or MoP-UP round is the physical round in the counselling process which occurs after the two rounds of online counselling ends by different medical colleges in India.</li>
                    <li> In Spot Round, You have to participate in the counselling offline at the centre where you have to pay a particular amount is fixed if you get any colleges.</li>
                    <li> There you will have the choice to select between vacant seats in various colleges.</li>
                    <li> The spot counselling shall be done for vacancies remaining after reporting of allocated candidates to schools/colleges/institutions occurred.</li>
                    <li> The vacancies created at the time of spot admission will be filled up then & there itself according to merit & eligibility.</li>     
                    </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

              

              <div class="testimonial-item">
                <h3>PG/ MD/ MS Admission Through Management Quota 2021</h3>
                <p>
                <ul>
                <li>This is a post regarding admission guidance for MD and MS aspirants.</li>
                <li>Here may be a piece of complete information about MD MS admission through management quota in 2021.</li>
                <li>It is mandatory to qualifying the NEET-PG entrance examination to urge admission to any Medical colleges in India.</li>
                <li>You would like to also register for the counseling procedures in MCC for DEEMED UNIVERSITIES and also that state you want to require MD or MS admission.</li>
                <li>Some states in India invites applications for college students of other state domicile students also to require part within the counseling procedure of their state medical private colleges under private and NRI quotas.</li>
                <li>However, you've got to use separately regardless of applying in MCC so as to be eligible for participation within the counseling process.</li>
                <li>For example, if you would like to require MD MS admission in any State, you want to register for online counseling on their State Examination Authority’s official website.</li>
                <li>Without attending online counseling you can't take any seat in any medical college in India.</li>
                <li>Even for direct admission for MD MS, you want to register for counseling. Unregistered candidates won’t be eligible for taking admission to any medical college in India.</li>
                </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>
              
               <div class="testimonial-item">
                <h3>MD MS admission/ Management Quota Seats in MD MS/ MD MS admission NRI quota.</h3>
                <p>
                <ul>
                    <li>After MBBS course, Candidates can choose their post-graduation based on their interests as Clinical or NON-Clinical.</li>
                    <li>MD or MS depending on your choice of branches and in any Top Medical Colleges in India.</li> 
                    <li>Post Graduation may be a 3-year course.</li>
                    <li>There are different branches for MD and MS courses.</li>
                    <li>The major demanded MD/MS branches consistent with the preference among the scholars within the current era is:</li>
                    <ul style="list-style-type:circle;">
                    <li>MD Radiology.</li>
                    <li>MD Dermatology / Skin.</li>
                    <li>MD Pediatrics.</li>
                    <li>MD Medicine.</li>
                    <li>MS Orthopedics.</li>
                    <li>MS OBG.</li>
                    <li>MD Anesthesia.</li>
                    <li>MD Chest & TB ( Respiratory and Pulmonary medicine).</li>
                    <li>MS General Surgery.</li>
                    <li>MD Radiotherapy (Interventional Radiologist).</li>
                    <li>MS Opthalmology.</li>
                    <li>MD Psychiatry.</li>
                    <li>MS ENT (Ear Nose & Throat).</li>
                    <li>MD Pathology.</li>
                    <li>MD in Emergency Medicine.</li>
                    <li>MD Biochemistry.</li>
                    <li>MD Anatomy.</li>
                    <li>MD Physiology.</li>
                    <li>MD Pharmacology.</li>
                    <li>MD Forensic Medicine.</li>
                    <li>MD Microbiology.</li>
                    <li>MD SPM (Social and Preventive.</li>
                    </ul>
                    <li>Most of the universities have converted their seats of two-year diploma courses into three years master seats via Government Order.</li>
                    <li>Most of the universities have stopped offering these diploma courses now, albeit available, in my knowledge, there are only 3-5 colleges (both government & private included) who are offering this course.</li>
                
                </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

              <div class="testimonial-item">
                <h3>Direct in Spot Round</h3>
                <p>
                <ul>
                 <li>There are few points on which candidate should focus:-</li>
                 <ul style="list-style-type:circle;">
                 <li>There is no spot counselling in NEET.</li>
                 <li>Spot counselling stands for the 4th round of counselling which is held just to fill all the vacant seats.</li> 
                 <li>After the 3rd round of counselling, CBSE reverts all the vacant seats to the respective states. The states then have a spot round of counselling i.e. the 4th round after the traditional 3.</li>
                 <li>This time, however, CBSE isn't even conducting 3 rounds of counselling. it's limited it to 2.</li> 
                 <li>This suggests that after the 2nd and final round of counselling, all the seats are going to be reverted to the states.</li>   
                  </ul>
                 </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

              <!--<div class="testimonial-item">-->
              <!--  <h3>Without Donation Admission in PG/MD/MS</h3>-->
              <!--  <p>-->
              <!--    <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
              <!--    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
              <!--    <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
              <!--  </p>-->
              <!--  <h4> <a href="tel:18002668555">Click Here>>></a></h4>-->
              <!--</div>-->

              <div class="testimonial-item">
                <h3>NRI Quota Direct Admission in MBBS/PG/MD/MS</h3>
                <p>
                  <ul>
                    <li> Quota for NRIs varies from 3-15% among different institutes.</li>
                    <li> NRI Seats are open not only to NRIs but also those to the sponsor.</li>
                    <li>5 State (Gujurat, Rajasthan, Punjab, Haryana & Himachal Pradesh) and a Union Territory (Puducherry) have government medical colleges with NRI Quotas</li>
                    <li> Thus many can use this quota if they have a brother, sister, or parents who is an NRI willing to give the undertaking to sponsor the enter course fee.</li>
                    <li>If a student has no parents or is taken as a ward by near relatives, even uncles, aunts and grandparents can be sponsors.</li>
                    <li> Persons of Indian origin(POI) & overseas citizens of India(OCI) are included in the NRI quota.</li>
                    <li>Important for NRI candidates:-</li>
                    <li>The aspirant must be of Indian Origin and Settled in a foreign country children of Indian citizens staying aboard for employment & business</li>
                    <li>candidates who are children of state/central government employees who are staying abroad on deputation are considered as NRI candidates who born abroad but parents are of Indian origin</li>

                  </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

              <!--<div class="testimonial-item">-->
              <!--  <h3>NRI Quota Direct Admission in PG/MD/MS</h3>-->
              <!--  <p>-->
              <!--    <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
              <!--    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
              <!--    <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
              <!--  </p>-->
              <!--  <h4> <a href="tel:18002668555">Click Here>>></a></h4>-->
              <!--</div>-->

              <!--<div class="testimonial-item">-->
              <!--  <h3>NRI Quota Direct Spot Round</h3>-->
              <!--  <p>-->
              <!--    <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
              <!--    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
              <!--    <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
              <!--  </p>-->
              <!--  <h4> <a href="tel:18002668555">Click Here>>></a></h4>-->
              <!--</div>-->
              
               <div class="testimonial-item">
                <h3>Documents Required For Admission in MBBS/MD/MS/PG Through Management Quota</h3>
                <p>
                 <ul>
                 <li>This is the list of documents you would like to stay ready before taking PG medical admissions:</li>
                    <ul style="list-style-type:circle">
                    <li>NEET Scorecard and Admit Card</li>
                    <li>All year Marks Card</li>
                    <li>Internship Completion Certificate</li>
                    <li>Provisional Registration Certificate</li>
                    <li>Attempt Certificate</li>
                    <li>Transcript Certificate</li>
                    <li>Eligibility Certificate</li>
                    <li>State Medical Council Registration Certificate</li>
                    <li>Migration Certificate</li>
                    <li>Transfer Certificate</li>
                    <li>12th Marks card</li>
                    <li>10th Marks card</li>
                    <li>Aadhar Card</li>
                    <li>Pan Card</li>
                    <li>Address Proof</li>
                    <li>Passport Size Photos – 4 nos</li></ul>
                    <li> You must also provide all the original documents to complete the admission procedures. The duplicate copies won’t be approved.</li>
                    <li>Provide valid Mobile number and E-mail address while you register for NEET or online counseling procedures.</li>
                   
                  </ul>
                </p>
                <h4> <a href="tel:18002668555">Click Here>>></a></h4>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
     <!-- ======= Portfolio Section ======= -->
     <section class="property-section spad portfolio" id="portfolio">
        <div class="container">

             <div class="section-title" data-aos="fade-left">
          <h2>Top Medical Colleges</h2>
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
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
               <?php
                        // $query = "SELECT * FROM `tbl_college` where college_id IN ('1','2','21','19','161','163','284','285')";
                        $query = "SELECT * FROM `tbl_college` where college_id IN ('284','285','1','2','161','163','19','21') ORDER BY FIELD(college_id,'284','285','1','2','161','163','19','21')";
                        $result = mysqli_query($conn,$query);
                        $sr = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                <div class="col-lg-3 col-md-6 portfolio-item <?=$row['college_type']?>" >
                    <div class="property-item" style="padding: 5px 5px;background:#e0ecef">
                        <div class="pi-pic set-bg" >
                          <img src="admin/upload/<?=$row['college_photo']?>" class="img-fluid" alt="">
                           <div class="label">&starf;&starf;&starf;&starf;&star;</div>
                           <div class="label1">ESTD:<?=$row['college_start']?></div>
                        </div>
                        <div class="pi-text" >
                            <div style="width:100%;height:65px;overflow:hidden;padding-top: 10px;padding-bottom:0px;">
                            <div class="text-center">
                              <p style="font-size: 13px;font-weight: bold;"><a href=""><?=$row['college_name'];?></a></p>
                            </div>
                          </div>
                          <hr style="margin-top: 10px; margin-bottom: 5px;">
                           <p style="margin-bottom: 5px;font-size: 12px;font-weight: bold;" class="text-center"><span class="fa fa-check-circle"></span>&nbsp;MCI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-map-marker" style="color:red"></span>&nbsp;<?=$row['college_city']?>,&nbsp;<?=$row['college_state']?></p>
                           <hr style="margin-top: 0; margin-bottom: 0;">
                            <ul style="margin-bottom:0px" >
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
                            <div class="pi-agent  text-center" style="padding-top:0px;padding-left:0px">
                                <div class="pa-item  text-center">
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
          <div class="col-lg-12 d-flex justify-content-center">
             <a href="view_college.php" style="background: #002b62;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 50px;" title="More Details">Load More</a>
          </div>
        </div>
    </section>
    
  <!-- End Portfolio Section -->
    
    
    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">
         <div class="section-title" data-aos="fade-left" style="padding-bottom:20px;">
          <h2>WHY WE ARE HERE?</h2>
          <p>Meet Our Skilled Expert Counsellor</p>
        </div>
        <div class="row"  data-aos="fade-up" data-aos-delay="100">
          <!--<div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right" style="width:100%">-->
          <!--  <div class="content">-->
          <!--    <h3>WHY CHOOSE US?</h3>-->
          <!--    <p>-->
          <!--      Meet Our Skilled Expert Counsellor-->
          <!--    </p>-->
          <!--  </div>-->
          <!--</div>-->
          <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-chart"></i>
                    <h4>Top Colleges</h4>
                    <p>The dream of getting admission to best MBBS Private and Government colleges is straightforward but making it true is sort of tough!
                        Here, Our best counsellors offer you to urge MBBS admission in top colleges.
                        Top colleges are always best to provide placements and a better experience.
                        The high quality of education and various certifications, internships, and live practicals make you the best in your career.
                        The colleges offered by our counsellors are enough to form your success in your journey.
                        Get the best advice regarding your career and admission confirmation by contacting our Counsellors.
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-sort-a-z"></i>
                    <h4>Best Palacement</h4>
                    <p>After MBBS you're your own master.
                        There is nothing called campus interviews or placement after MBBS in Medicine.
                        People start working while doing internships some start even before that.
                        Medicine as a profession is quite employment .
                        Practically speaking, There are tons of vacancies available after MBBS and you'll be 100% sure of getting one it's up to your skills to urge the great and best ones.
                        </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-list-ul"></i>
                    <h4>List of Courses to Study MD/MS in India</h4>
                    <p>MD/MS Courses Total Intake (Seats) in India<br>
                        Anaesthesia 2463 seats<br>
                        BioChemistry(636 seats)<br>
                        Community Medicine (919 seats)<br>
                        Dermatology, Venerology & Leprosy (707 seats)<br>
                        Forensic Medicine (415 seats)<br>
                        General Medicine (3188 seats)<br>
                        General Surgery (2901 seats)<br>
                        Microbilogy (908 seats)<br>
                        M.D./M.S. Anatomy (830 seats)<br>
                        M.S. ENT (784 seats)<br>
                        M.S. Orthopedics (1489 seats)<br>
                        M.D. Pathology (1533 seats)<br>
                        M.D. Pediatrics (1672 seats)<br>
                        M.D. Physiology(815 seats)</br>
                        M.D. Pharmacology (839 seats)<br>
                        M.D. Psychiatry (652 seats)<br>
                        Obstetrics & Gynaecology (2013 seats)<br>
                        Ophthalmology (1174 seats)<br>
                        Radiotherphy (303 seats)<br>
                        Radiology/Radio Diagnosis (1212 seats)<br>
                        Respiratory Medicine (491 seats)<br></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    
     

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Call To Our Expert For Bright Future</h3>
          <p></p>
          <a class="cta-btn" href="tel:18002668555">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
    

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
                <div class="col-md-6 input-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 input-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="input-group">
                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><input type="submit" style="background: #002b62;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 50px;" value="Send Message"/></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  /*background-color: #2196F3;*/
  padding: 10px;
  grid-column-gap: 40px;
  grid-row-gap: 10px;
  margin-top: -92px;
}
.grid-item {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  /*border: 1px solid rgba(0, 0, 0, 0.8);*/
  /*padding: 20px;*/
  font-size: 30px;
  text-align: center;
  /*width:100px;*/
}
</style>
    
<div class="modal fade" tabindex="-1" role="dialog" id="myModal" style="padding-right: 10px;">
  <div class="modal-dialog modal-lg" role="urlument" style="border: 2px solid #002b62;">
    <div class="modal-content" >
     <!-- <div class="modal-header" style="margin: 0 auto;">-->
     <!--<img alt="" class="img-fluid" id="header_image1" height="300px" width="300px">-->
     <!-- </div>-->
      <div class="modal-body">
        <div class="container">
                <div class="row">
                         <form method="post">
                               <input type="text" name="type" id="type" style="display: none">
                               <!--<div class="col-md-12 form-row">-->
                                 <!--  <div class="col-md-4 form-row">-->
                                 <!--    How PG-News Help You For your Bright Future-->
                                    
                                        <!--<div class="col-md-6 form-row">-->
                                 <!--        <div class="grid-container">-->
                                 <!--             <div class="grid-item">-->
                                 <!--                <img alt="" class="img-fluid" src="images/first-aid-kit.png">-->

                                 <!--             </div>-->
                                 <!--             <div class="grid-item">-->
                                 <!--               <img alt="" class="img-fluid" src="images/gloves.png">-->
                                 <!--             </div>-->
                                 <!--             <div class="grid-item">-->
                                 <!--             <img alt="" class="img-fluid" src="images/gloves.png">-->
                                 <!--             </div>  -->
                                 <!--             <div class="grid-item">-->
                                 <!--             <img alt="" class="img-fluid" src="images/first-aid-kit.png">-->
                                 <!--             </div>-->
                                              
                                 <!--      </div>-->
                                     <!--</div>-->
                                    
                                    

                                 <!--</div>-->
                                  <!--<div class="col-md-12 ">-->
                                      <div class="col-md-12 form-row row justify-content-center">
                                         <div class="col-md-6 input-group">
                                             <img alt="" class="img-fluid" id="header_image1" height="100px" width="100px" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
                                        </div>
                                        <div class="col-md-6 input-group">
                                            <div class="col-md-6 row"><span style="font-size:18px;font-weight:bold;color:#f8cf40;">Fill Up form For more info about</span></div>
                                            <div class="col-md-6 row"><h4 style="font-size:14px;font-weight:bold;text-aligh:justify" id="header_name"></h4></div>
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
                                          <select name="course" class="form-control">
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
                                      <div class=" col-md-12 input-group">
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
  </div>
</div>

  
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal1">
  <div class="modal-dialog modal-xl" role="urlument" style="border: 2px solid #002b62;box-shadow: 0 7px 11px #002b62;">
    <div class="modal-content" >
      <div class="modal-body">
        <div class="container">
                <div class="row">
                         <form method="post">
                               <input type="text" name="type" id="type" style="display: none">
                               <div class="col-md-12 form-row">
                                 <div class="col-md-4 input-group">
                                     How PG-News Help You For your Bright Future
                                 </div>
                                  <div class="col-md-7 input-group">
                                      <div class="col-md-12 form-row">
                                      <div class="col-md-6 input-group">
                                          <input type="text" class="form-control" id="name1" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 input-group">
                                          <input type="email" class="form-control" id="email1" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                          <div class="validate"></div>
                                        </div>
                                       <div class="col-md-6 input-group">
                                          <input type="text" class="form-control" id="number1" placeholder="Your Mobile Number" data-rule="maxlen:10" data-msg="Please enter a valid Number" />
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 v">
                                          <input type="text" class="form-control" id="location1" placeholder="Your Location" data-rule="minlen:4" data-msg="Please enter a valid Location" />
                                          <div class="validate"></div>
                                        </div>
                                      <div class=" col-md-12 input-group">
                                         <textarea class="form-control" rows="3" data-rule="required" data-msg="Please write something for us" id="message1" placeholder="Message"></textarea>
                                        <div class="validate"></div>
                                      </div>
                                        <div class="col-md-12 input-group">
                                          <center>
                                         <button type="submit" id="register1" data-dismiss="modal" style="background: #002b62;border: 0;padding: 5px 15px;color: #fff;transition: 0.4s;border-radius: 50px;">Send Enquiry</button>&nbsp;
                                          <button type="button" data-dismiss="modal" style="background: #002b62;border: 0;padding: 5px 15px;color: #fff;transition: 0.4s;border-radius: 50px;">Cancel</button></center>
                                        </div>
                                      </div>
                                      </div>
                                 </div>
                                
                          </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

 <div class="whatsapp" id="WAButton"></div>  
 <div class="calling"><a href="tel:18002668555"><img src="assets/img/calling.png"></a></div>
  </main><!-- End #main -->
  <?php
include("footer.php");
?>
<script type="application/javascript">

    function openmodal(id,photo,name){
         $("#myModal").modal("show");
        $("#type").val(id);
        $("#header_image1").prop("src", "admin/upload/"+photo);
        $("#header_name").text(name);
   }

  $(document).ready(function(){
      
   $('#register').on('click', function() {
        var name =$('#name1').val();
        var email =$('#email1').val();
        var message =$('#message1').val();
        var number =$('#number1').val();
        var location =$('#location1').val();
        var type =$('#type').val();
        if(name!="" && email!="" && message!=""){
           $.ajax({
                type: "POST",
                async:false,
                url: "db/insert.php",
                // contentType: 'application/json',
                // dataType: 'json',
                
                data: {
                    name: name,
                    email: email,
                    message: message,  
                    type : type            
                },
                
                success: function(data){
                    if(data!=""){
                        alert("Thank You!!!!!");  
                        redirect(data);
                    }
                    else if(data=="UnSuccessful"){
                       alert("Error occured !");
                    }
                    
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
    });
 });

   function redirect(url){
    // alert("hii");
    window.location.replace(url);
   }
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

  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:true,
    autoplay:true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInDown',
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
var owl = $(".owl-carousel");    
$('.testimonial-item').on('mouseover',function(e){
    owl.trigger('play.owl.autoplay');
})
$('.testimonial-item').on('mouseleave',function(e){
    owl.trigger('stop.owl.autoplay');
})

</script>


