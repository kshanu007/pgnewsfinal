<?php
    include("header.php");
    include("db/conn.php");
    $college_id = $_GET['college_id'];
    $query = "SELECT * FROM `tbl_colleges` where college_id='$college_id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit College</h6>
                        </div>
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data" id="myform">
                            <div class="d-flex justify-content-center row">
                                <div class="row">
                                    <div class="col-md-7" style="display: none;">
                                      <input type="text" name="college_id" class="form-control" placeholder="Enter College Name" id="college_id" value="<?=$row['college_id']?>">
                                    </div>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Name</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_name" class="form-control" placeholder="Enter College Name" id="college_name" value="<?=$row['college_name']?>">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College State</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_state" class="form-control" placeholder="Enter College Name" id="college_state" value="<?=$row['college_state']?>">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Type</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_type" class="form-control" placeholder="Enter College Name" id="college_type" value="<?=$row['college_type']?>">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Photo</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="file" name="college_photo" class="form-control" id="college_photo">
                                      <br>
                                      <img src="upload/<?=$row['college_photo']?>" height="100px" widtd="100px">
                                    </div>
                                    <br><br>
                                     <div class="col-md-3" style="text-align: right">
                                        <span>College Link</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_link" class="form-control" placeholder="Enter College link" id="college_link" value="<?=$row['college_link']?>">
                                    </div>
                                    <br><br>
                                     
                                </div>
                                <div class="col-md-3">
                                        <!-- <button class="btn btn-success btn-sm" id="register">Save</button> -->
                                        <input class="btn btn-success btn-sm" type="submit" value="Upload" id="register">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include("footer.php");
?>
<script>
$(document).ready(function(e) {
   $('#myform').on('submit', function(e) { {
        e.preventDefault();
            $.ajax({
                url: "db/update_college.php",
                type: "POST",
                data :new FormData(this),
                contentType: false,
                processData:false,
                cache: false,  

                success: function(data){
                    if(data=="Successful"){
                        alert("Data Updated succesfully");    
                        window.location.href = "view_college.php";               
                    }
                    else if(data=="UnSuccessful"){
                       alert("Error occured !");
                    }
                    
                }
            });
        }
        
    });
});
</script>