<?php
include 'header.php';
//$customer_id = $_REQUEST['customer_id'];

$q = "select * from certificates where `iscancelled`='0';";
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
                        <h5 class="card-title">All Certificates <span>| <a href="certificate-add.php">Add New Certificates</a></span></h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Shopname</th>

                                    <th scope="col"> Item</th>
                                    <th scope="col">Gross Weight</th>
                                    <th scope="col">Net Weight</th>

                                    <th scope="col"> Carrat</th>

                                    <th scope="col">Purity</th>
                                    <th scope="col">HUID</th>
                                   <!-- <th scope="col">Photo</th> -->

                                    <th scope="col">Action</th>






                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($certificate = mysqli_fetch_array($res)) {

                                    $q2 = "select * from customers where `customer_id`=" . $certificate['customer_id'];
                                    $res2 = mysqli_query($link, $q2);
                                    $customer = mysqli_fetch_array($res2);
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count++; ?></th>
                                       <td><?php echo date('d-m-Y', strtotime($certificate['date'])); ?></td> 
                                       <td><?php echo $customer['shopname']; ?></td>
                                        
                                       <td><?php echo $certificate['item']; ?></td>
                                        <td><?php echo $certificate['gross_weight']; ?></td>
                                        <td><?php echo $certificate['net_weight']; ?></td>
                                        <td><?php echo $certificate['carrat']; ?></td>
                                        <td><?php echo $certificate['purity']; ?></td>
                                        <td><?php echo $certificate['huid']; ?></td>
                                      <!--  <td>
                                           <img src=" <?php echo "photo/" . $certificate['photo']; ?>" width="100px" alt="Image">
                                        </td> -->

                                        <td><a href="certificate-update.php?certificate_id=<?php echo $certificate['certificate_id']; ?>"><i class="bi bi-pencil-square"></i><a>
                                                    <a  href="certificate-cancel.php?certificate_id=<?php echo $certificate['certificate_id']; ?>"><i class="bi bi-trash"></i><a></td>
                                                            </tr>




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