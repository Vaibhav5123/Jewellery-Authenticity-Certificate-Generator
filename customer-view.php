    <?php
    include 'header.php';
    $q = "select * from customers";
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
                            <h5 class="card-title">All Customers <span>| <a href="customer-add.php">Add New Customer</a></span></h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"> Shop Name</th>
                                        <th scope="col"> Contact Name</th>
                                        <th scope="col">Contact No</th>

                                        

                                        <th scope="col">Email_id</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">State</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Pincode</th>
                                        <th scope="col">GST No</th>
                                        <th scope="col">Action</th>




                                    

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($customer = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count++; ?></th>
                                            <td><?php echo $customer['shopname']; ?></td>
                                            <td><?php echo $customer['contact_name']; ?></td>
                                            <td><?php echo $customer['contact_no']; ?></td>
                                           
                                            <td><?php echo $customer['email_id']; ?></td>
                                            <td><?php echo $customer['address']; ?></td>
                                            <td><?php echo $customer['state']; ?></td>
                                            <td><?php echo $customer['city']; ?></td>
                                            <td><?php echo $customer['pincode']; ?></td>
                                            <td><?php echo $customer['gst_no']; ?></td>
                                            <td><a href="customer-update.php?customer_id=<?php echo $customer['customer_id']; ?>"><i class="bi bi-pencil-square"></i><a>
                                                    <a onclick='return confirm("Are you Sure to delete..!")' href="customer-delete.php?customer_id=<?php echo $customer['customer_id']; ?>"><i class="bi bi-trash"></i><a></td>
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