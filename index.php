<?php
include 'header.php';
$q = "SELECT COUNT(*) FROM `customers`";
$res = mysqli_query($link, $q);
$no = mysqli_fetch_assoc($res);
$no_of_customers = $no['COUNT(*)'];

$q = "SELECT COUNT(*) as totalCertificate FROM `certificates`";
$res = mysqli_query($link, $q);
$no = mysqli_fetch_assoc($res);
// {
//      echo $no_of_certificates = ".$no['totalCertificate'];.";
// }
// else{
//         echo '<h6> NO Data </h6>';
// }
//$count = 1;
?>
<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>

        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12q">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">



                                <div class="card-body">

                                    <h5 class="card-title">Customers </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $no_of_customers; ?></h6>
                                            <!--<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                            -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title">Certificates</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-text-fill"></i>
                                        </div>
                                        <div class="ps-3">

                                            <h6><?php echo $no['totalCertificate']; ?></h6>
                                            <span class="text-muted small pt-2 ps-1"></span>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->



                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
</body>

<?php
include 'footer.php';
?>