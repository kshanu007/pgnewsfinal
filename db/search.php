
<?php
                       include("conn.php");
                      $search = $_POST['search'];
                       $echo ='';
                          $query = "SELECT * FROM `tbl_college` where college_state LIKE '%$search%' or college_name LIKE '%$search%'"; 
                        $result = mysqli_query($conn,$query);
                        $sr = 1;
                          
                            while($row = mysqli_fetch_assoc($result))
                        {
                           $images = 'admin/upload/'. $row['college_photo'];
                           $name = $row['college_name'];
                           $id = $row['college_id'];
                          
        
                    echo '<section id="link" class="link" style="height:85px">
                     <div class="row">
                          <img alt="" class="img-fluid" src="'.$images.'" height="100px" width="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">  
                           <h2 style="font-size:18px">'.$row['college_name'].'-'.$row['college_city'].',&nbsp;'.$row['college_state'].'</h2>
                       </div>
                     </div>
                </section>';
                 }
                 ?>