
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Login</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NiceAdmin - v2.2.0
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
        <style>
            .divider:after,
            .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
            }
            .h-custom {
                height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
                .h-custom {
                    height: 100%;
                }
            }
        </style>
    </head>

    <body>

        <main>
            <!--<div class="container">

                 <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                                <div class="d-flex justify-content-center py-4">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img src="assets/img/logo.png" alt="" height="450" width="100">
                                        <span class="d-none d-lg-block">Jewellery Authenticity Certificate Generator</span>
                                    </a>
                                </div>

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your Mobile No & password to login</p>
                        </div>

                        <form class="row g-3 needs-validation" action="user-login-check.php" novalidate>

                            <div class="col-12">
                                <label for="yourmobile_no" class="form-label">Mobile No</label>
                                <div class="input-group has-validation">

                                    <input type="text" name="mobile_no" class="form-control" id="yourUsername" required>
                                    <div class="invalid-feedback">Please enter your Mobile No.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

    </div>
</div>
</div>

</section>
            -->

            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-4 px-4 px-xl-5 bg-white bg-opacity-75">
                <!-- Copyright -->
                <div style="font-size:2vw;" class="text-dark mb-3 mb-md-0">
                    JEWELLERY AUTHENTICITY CERTIFICATE GENERATOR
                </div>
                <!-- Copyright -->



                <!-- Right -->
            </div>
            <div class="container-fluid h-custom">
                <section class="vh-100">

                    <div class="row d-flex justify-content-md-start align-items-center h-75">

                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form action="user-login-check.php">
                                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p style="font-size:2vw;" class=" text-center ">Login</p>

                                </div>



                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" name="mobile_no" id="yourUsername" required class="form-control form-control-lg"
                                           placeholder="Enter a valid mobile number" />
                                    <label class="form-label" for="form3Example3">Mobile No</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input type="password" name="password" class="form-control form-control-lg" id="yourPassword" required placeholder="Enter password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>



                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Forget Password ? </p>
                                </div>

                            </form>
                        </div>
                    </div>
            </div>

        </section>

    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>