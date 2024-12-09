<?php
session_start();
include 'db.php';
$q = "select * from setup ";
$res = mysqli_query($link, $q);
$business = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $business['bussiness_name']; ?></title>

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



        <link rel="stylesheet"  href="style3.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>

        <script type="text/javascript" src="assets/js/jquery-barcode.js"></script>

    </head>
    <body>
        <?php
        //$certificate_id =$_REQUEST['certificate_id'];
        // $arr = [86, 87, 88, 89, 90];

        $arr = $_REQUEST['certificate'];
        include 'db.php';
        $q = 'select * from certificates where certificate_id in (' . implode(',', $arr) . ')';
        $res = mysqli_query($link, $q);
// $certificate=mysqli_fetch_array($res);

        $q22 = "select * from setup ";
        $res22 = mysqli_query($link, $q22);
        $business = mysqli_fetch_array($res22);
        ?>
        <div class="">
            <table>
                <tr>
                    <?php
                    $count = 1;
                    while ($certificate = mysqli_fetch_array($res)) {
                        $q2 = "select * from customers where `customer_id`=" . $certificate['customer_id'];
                        $res2 = mysqli_query($link, $q2);
                        $customer = mysqli_fetch_array($res2);
                        ?>

                        <td>

                            <div class="cards">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <img id='company_logo' src=images/1.jpg  width="100px">
                                        </td>
                                        <td>
                                            <div class="bussinessname">
                                                <?php echo "Jewellery Authenticity Certificate"; ?><br>
                                                <small style="font-size:10px;font-family: monospace;">BIS Recognised hallmarking center</small>
                                            </div>
                                        </td>

                                        <td>
                                            <img id='hallmark_logo' src=images/hallmark.png  width="80px">
                                        </td>
                                    </tr>
                                </table>

                                <h5 style="color:white;">Purity Smart Card</h5>


                                <table class="card-contents" width="100%" border="0">

                                    <tr>
                                        <td colspan="2">Certificate No:<?php echo $certificate['certificate_id']; ?></td>
                                        <td style="width:30%;"><span>Issuing Date : <?php echo date('d-m-Y', strtotime($certificate['date'])); ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Name: <?php echo $customer['shopname']; ?><span></td>

                                        <td><span>Item : <?php echo $certificate['item']; ?></span></td>
                                        <td rowspan="4" style="text-align: center;">
                                            <img src="<?php echo $certificate['photo']; ?>" height="100px" width="100px">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><span>Gross Weight : <?php echo $certificate['gross_weight']; ?></span></td>
                                        <td><span>Purity : <?php echo $certificate['purity']; ?></span></td>



                                    </tr>
                                    <tr>
                                        <td><span>Net Weight : <?php echo $certificate['net_weight']; ?></span></td>
                                        <td><span>Carrat : <?php echo $certificate['carrat']; ?></span></td>

                                    </tr>
                                    <tr>
                                        <td><span>HUID : <?php echo $certificate['huid']; ?></span></td>
                                        <td><img src="http://www.barcode-generator.org/zint/api.php?bc_number=20&bc_data=<?php echo $certificate['huid']; ?>" width="120" height="40" alt="alt"/></td>

                                    </tr>
                                    <tr>
                                        <td colspan="3"><p>The Card Is Subject To Terms & Conditions Of Company In Force From Time To Time</p></td>


                                    </tr>
                                </table>





                                <?php
                                ?>



                            </div>

                        </td>




                        <?php
                        if ($count % 2 == 0) {
                            echo '</tr><tr>';
                        }
                        $count++;
                    }
                    ?>

                    </div>
                <script>
                    var settings = {
                        barWidth: 1.5,
                        barHeight: 35,
                        moduleSize: 5,
                        showHRI: false,
                        addQuietZone: true,
                        marginHRI: 5,
                        bgColor: "#FFFFFF",
                        color: "#000000",
                        fontSize: 15,
                        output: "css",
                        posX: 0,
                        posY: 0
                    };
                    $(document).ready(function () {
                        $('.barcode').each(function () {
                            // alert($(this).data('id'));
                            let barcode = $(this).data('id');
                            $(this).barcode('1234567123456', "ean13", settings);

                        });
                    });







                </script>

                </body>
                </html>