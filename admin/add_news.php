<?php
    include("header.php");
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add News</h6>
                        </div>
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data" id="myform">
                            <div class="d-flex justify-content-center row">
                                <div class="row">
                                    <div class="col-md-3" style="text-align: right">
                                        <span>News Heading</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" name="news_name" class="form-control" placeholder="Enter News Heading" id="news_name">
                                    </div>
                                    <br><br>
                                    <!-- <div class="col-md-3" style="text-align: right">
                                        <span>Complete News</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="news_complete" class="form-control" placeholder="Enter Complete News" id="news_complete">
                                    </div>
                                    <br><br> -->
                                    <div class="col-md-3" style="text-align: right">
                                        <span>News URL</span>
                                    </div>
                                    <div class="col-md-7">
                                         <input type="text" name="news_url" class="form-control" placeholder="Enter News URL" id="news_url">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>News For</span>
                                    </div>
                                    <div class="col-md-7">
                                       <select class="form-control" id="news_for" name="news_for">
                                            <option>---Select Type---</option>
                                            <option value="AIIMS">AIIMS</option>
                                            <option value="JIPMER">JIPMER</option>
                                            <option value="PGIMER">PGIMER</option>
                                            <option value="MCC(UG)">MCC(UG)</option>
                                            <option value="MCC(UG)">MCC(PG)</option>
                                             <option value="NBE">NBE</option>
                                            <option value="State/Government/Deemed">State/Government/Deemed</option>
                                      </select>
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>News Date</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="news_date" class="form-control" id="news_date">
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>News Type</span>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="news_for" name="news_type">
                                            <option>---Select Type---</option>
                                            <option value="New">New</option>
                                            <option value="Urgent">Urgent</option>
                                             <option value="Blank">Blank</option>
                                      </select>
                                    </div>
                                    <br><br>
                                    <div class="col-md-3" style="text-align: right">
                                        <span>College Photo</span>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="file" name="news_photo" class="form-control" id="news_photo">
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
                url: "db/insert_news.php",
                type: "POST",
                data :new FormData(this),
                contentType: false,
                processData:false,
                cache: false,  

                success: function(data){
                    if(data=="Successful"){
                        alert("Data Added succesfully");    
                        window.location.href = "add_news.php";               
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