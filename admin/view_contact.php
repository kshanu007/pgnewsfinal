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
                                            <th>Contact Name</th>
                                            <th>Contact Email</th>
                                            <th>Contact Subject</th>
                                            <th>Contact Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `tbl_contact`";
                                            $result = mysqli_query($conn,$query);
                                            $sr = 1;
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                            <tr>
                                                <td><?=$sr++;?></td>
                                                <td><?=$row['contact_name']?></td>
                                                <td><?=$row['contact_email']?></td>
                                                <td><?=$row['contact_subject']?></td>
                                                <td><?=$row['contact_message']?></td>
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