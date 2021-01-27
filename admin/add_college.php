<?php
    include("header.php");
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add College</h6>
                        </div>
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data" id="myform">
                            <div class="d-flex justify-content-center row">
                                <div class="row">
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Name</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_name" class="form-control" placeholder="Enter College Name" id="college_name">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College State</span>
                                    </div>
                                    <div class="col-md-7">
                                      <select class="form-control" id="college_state" name="college_state">
                                            <option selected="" disabled="">---Select State---</option>
                                      </select>
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Type</span>
                                    </div>
                                    <div class="col-md-7">
                                      <select class="form-control" id="college_type" name="college_type">
                                            <option>---Select Type---</option>
                                            <option value="Government">Government</option>
                                            <option value="Private">Private</option>
                                            <option value="Deemed">Deemed</option>
                                      </select>
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Photo</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="file" name="college_photo" class="form-control" id="college_photo">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Link</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="college_link" class="form-control" placeholder="Enter College link" id="college_link">
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
                url: "db/insert.php",
                type: "POST",
                data :new FormData(this),
                contentType: false,
                processData:false,
                cache: false,  

                success: function(data){
                    if(data=="Successful"){
                        alert("Data Added succesfully");    
                        window.location.href = "add_college.php";               
                    }
                    else if(data=="UnSuccessful"){
                       alert("Error occured !");
                    }
                    
                }
            });
        }
        
    });

   var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");

stateSel = document.getElementById("college_state");
for (country in state_arr) {
stateSel.options[stateSel.options.length] = new Option(state_arr[country], state_arr[country]);
}
});
</script>