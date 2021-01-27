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
                                            <th>News Name</th>
                                            <th>News URL</th>
                                             <th>News For</th>
                                              <th>News Date</th>
                                            <th>Opeartion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `tbl_news`";
                                            $result = mysqli_query($conn,$query);
                                            $sr = 1;
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                            <tr>
                                                <td><?=$sr++;?></td>
                                                <td><?=$row['news_name']?></td>
                                                <td><?=$row['news_url']?></td>
                                                <td><?=$row['news_for']?></td>
                                                <td><?=$row['news_date']?></td>
                                                <td>
                                                    <a href="edit_news.php?news_id=<?=$row['news_id']?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                                    <a href="db/delete.php?news_id=<?=$row['news_id']?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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