<?php
include 'header.php';
$q = "select * from admin";
$res = mysqli_query($link, $q);
$count = 1;
?>
<main id="main" class="main">

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Users <span>| <a href="user-add.php">Add New User</a></span></h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Name</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Email_id</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Type</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($admin = mysqli_fetch_array($res)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count++; ?></th>
                                        <td><?php echo $admin['name']; ?></td>
                                        <td><?php echo $admin['mobile_no']; ?></td>
                                        <td><?php echo $admin['email_id']; ?></td>
                                        <td><?php echo $admin['password']; ?></td>
                                        <td><?php echo $admin['type']; ?></td>
                                        
                                        
    <?php
}
?>
                                                        </tbody>
                                                        </table>
                                                        <!-- End Table with stripped rows -->

                                                        <div>			  
                                                        </div>
                                                        </div>
                                                        </section>

                                                        </main><!-- End #main -->
<?php
include 'footer.php';
?>