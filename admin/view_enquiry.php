<?php
    include("header.php");
     include("db/conn.php");
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">View College</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Enquiry Name</th>
                                            <th>Enquiry Email</th>
                                            <th>Enquiry Message</th>
                                            <th>Enquiry College</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `tbl_enquiry`";
                                            $result = mysqli_query($conn,$query);
                                            $sr = 1;
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $college = $row['enquiry_college'];
                                                $query1 = "SELECT * FROM `tbl_colleges` where college_id='$college'";
                                                $result1 = mysqli_query($conn,$query1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                ?>
                                            <tr>
                                                <td><?=$sr++;?></td>
                                                <td><?=$row['enquiry_name']?></td>
                                                <td><?=$row['enquiry_email']?></td>
                                                <td><?=$row['enquiry_message']?></td>
                                                <td><?=$row1['college_name']?></td>
                                            </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include("footer.php");
?>