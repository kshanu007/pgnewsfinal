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
                                            <th>Collage Name</th>
                                            <th>Collage State</th>
                                            <th>Collage Type</th>
                                            <th>Collage Photo</th>
                                             <th>Collage Link</th>
                                            <th>Opeartion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `tbl_colleges`";
                                            $result = mysqli_query($conn,$query);
                                            $sr = 1;
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                            <tr>
                                                <td><?=$sr++;?></td>
                                                <td><?=$row['college_name']?></td>
                                                <td><?=$row['college_state']?></td>
                                                <td><?=$row['college_type']?></td>
                                                <td><img src="upload/<?=$row['college_photo']?>" height="100px" widtd="100px"></td>
                                                <td><?=$row['college_link']?></td>
                                                <td>
                                                    <a href="edit_college.php?college_id=<?=$row['college_id']?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                                    <a href="db/delete.php?college_id=<?=$row['college_id']?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                </td>
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