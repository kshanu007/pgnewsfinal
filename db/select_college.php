
<?php
                       include("conn.php");
                      $college_state = $_POST['college_state'];
                      $college_type = $_POST['college_type'];
                       $echo ='';
                       if($college_type ==''){
                          $query = "SELECT * FROM `tbl_college` where college_state='$college_state'"; 
                       }
                       elseif($college_state =='')
                       {
                           $query = "SELECT * FROM `tbl_college` where college_type='$college_type'";
                       }
  
                       else{
                           $query = "SELECT * FROM `tbl_college` where college_state='$college_state' and college_type='$college_type'";
                       }
                        
                        $result = mysqli_query($conn,$query);
                        $sr = 1;
                          
                            while($row = mysqli_fetch_assoc($result))
                        {
                           $images = 'admin/upload/'. $row['college_photo'];
                           $name = $row['college_name'];
                           $id = $row['college_id'];
                          
        
                    echo '<div class="col-lg-3 col-md-6 portfolio-item '.$row['college_type'].'" >
                    <div class="property-item" style="padding: 5px 5px;background:#e0ecef">
                        <div class="pi-pic set-bg" >
                          <img src="'.$images.'" class="img-fluid" alt="Medical College">
                          
                        </div>
                        <div class="pi-text" >
                           <div style="width:100%;height:65px;overflow:hidden;padding-top: 10px;padding-bottom:0px;">
                            <div class="text-center">
                              <p style="font-size: 13px;font-weight: bold;"><a>'.$row['college_name'].'</a></p>
                            </div>
                          </div>
                          <hr style="margin-top: 10px; margin-bottom: 5px;">
                           <p style="margin-bottom: 5px;font-size: 12px;font-weight: bold;" class="text-center"><span class="fa fa-check-circle"></span>&nbsp;MCI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-map-marker" style="color:red"></span>&nbsp;'.$row['college_city'].',&nbsp;'.$row['college_state'].'</p>
                           <hr style="margin-top: 0; margin-bottom: 0;">
                            <ul>';
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
                              echo '<li><i class="fa fa-building" style="color:green" ></i></li>';
                                }
                                else{
                                   echo '<li><i class="fa fa-building"></i></li>';
                                }
                                if($sports=="1"){
                                   echo '<li><i class="fa fa-futbol-o" style="color:green" ></i></li>';
                                }
                                else{
                                   echo '<li><i class="fa fa-futbol-o"></i></li>';
                                }
                                if($capsules=="1"){
                                    echo '<li><i class="fa fa-pills" style="color:green" ></i></li>';
                                }
                                else{
                                   echo '<li><i class="fa fa-pills" ></i></li>';
                                }
                                 if($lab=="1"){
                                   echo '<li><i class="fa fa-flask" style="color:green" ></i></li>';
                                }
                                else{
                                   echo '<li><i class="fa fa-flask" ></i></li>';
                                }
                                
                                if($hospital=="1"){
                                   echo '<li><i class="fa fa-hospital-o" style="color:green" ></i></li>';
                                }
                                else{
                                   echo '<li><i class="fa fa-hospital-o" ></i></li>';
                                }
                                
                                 if($cinema=="1"){
                                   echo '<li><i class="fa fa-film" style="color:green" ></i></li>';
                                }
                                else{
                                    echo '<li><i class="fa fa-film" ></i></li>';
                                }
                                
                           echo '</ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-text text-center" style="position: relative;">
                                       <button type="submit" id="enquiry" style="left:0;top:0;padding: 0px 20px;background: green;color: #fff;transition: 0.4s;border: 0px; " onclick="openmodal('.$row['college_id'].','.$row['college_photo'].','.$row['college_name'].')"><i class="fa fa-download"></i>Broucher</button>
                                        <button type="submit" id="enquiry" style="left:0;top:0;background: #002b62;padding: 0px 25px;color: #fff;transition: 0.4s;border: 0px; "  onclick="openmodal('.$row['college_id'].','.$row['college_photo'].','.$row['college_name'].')">Know More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                 }
                 ?>