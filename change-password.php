
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>change password</title>
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
    </head>

    <body>

    </div>
    <div class="container-fluid h-custom">
        <section class="vh-100">

            <div class="row d-flex justify-content-md-start align-items-center h-75">

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="change-password-save.php">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p style="font-size:2vw;" class=" text-center ">Change Password</p>

                        </div>



                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="old_password" id="yourUsername" required class="form-control form-control-lg"
                                   placeholder="Enter Old Password" />
                            <label class="form-label" for="form3Example3">Old Password</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="new_password" class="form-control form-control-lg" id="yourPassword" required placeholder="Enter New password" />
                            <label class="form-label" for="form3Example4">New Password</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" name="confirm_password" class="form-control form-control-lg" id="yourPassword" required placeholder="Re-Enter New password" />
                            <label class="form-label" for="form3Example4">Confirm Password</label>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Change Password</button>

                        </div>

                    </form>
                </div>
            </div>
    </div>

</section>



<!-- <main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <span class="d-none d-lg-block">Change Password</span>
                            </a>
                        </div>

                        <div class="card mb-3">

                            <div class="card-body">



                                <form class="row g-3 needs-validation" action="change-password-save.php" novalidate>

                                    <div class="col-12">
                                        <label for="yourmobile_no" class="form-label">Old Password</label>
                                        <div class="input-group has-validation">

                                            <input type="text" name="old_password" class="form-control" id="yourUsername" required>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">New Password</label>
                                        <input type="password" name="new_password" class="form-control" id="yourPassword" required>

                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control" id="yourPassword" required>

                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>

                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </section>

    </div>
</main>-->

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