<?php
include 'header.php';
$count = 1;
?>
<main id="main" class="main">

    <div class="pagetitle">


    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">

                <h5 class="card-title">Cutomers Report<span> </span></h5>
                </h5>
                <form class="row g-3"  action="customer-report.php" method="POST">
                    <div class="col-4">
                        <label for="inputNanme4" class="form-label"  >Customer</label> 

                        <select  class="form-control" id="inputNanme4" name="customer_id"  required  >
                            <option value="all">All</option>
                            <?php
                            $q = "select * from customers";
                            $res = mysqli_query($link, $q);
                            while ($customer = mysqli_fetch_array($res)) {
                                echo "<option value='" . $customer['customer_id'] . "'>" . $customer['shopname'] . "</option>";
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col-4">
                        <label for="inputNanme4" class="form-label">From Date</label>
                        <input type="date" class="form-control" id="inputNanme4"id="datepicker" name="fromdate" required> 
                    </div>

                    <div class="col-4">
                        <label for="inputContactNo" class="form-label">To Date</label>
                        <input type="date" class="form-control" id="inputPassword4" id="datepicker" name="todate" required>
                    </div>



                    <div class="text-center" >
                        <br>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->
                <br>
                <script>
                    $(function () {
                        $("#datepicker").datepicker({
                            dateFormat: "dd-mm-yy",
                            setDate: "10-03-2022"
                        });
                        //$("#datepicker").datepicker("setDate", new Date());
                        $("#datepicker").datepicker("option", "minDate", new Date());
                    });
                </script>


                <?php
                include 'db.php';
                if (isset($_POST['submit'])) {
                    if ($_POST['customer_id'] == 'all') {
                        $q = 'select cert.*,cust.* from certificates cert left join customers cust on cert.customer_id=cust.customer_id where  cert.date >= "' . $_POST['fromdate'] . '" and cert.date<="' . $_POST['todate'] . '"';
                    } else {
                        $q = 'select cert.*,cust.* from certificates cert left join customers cust on cert.customer_id=cust.customer_id where cert.customer_id=' . $_POST["customer_id"] . ' and cert.date >= "' . $_POST['fromdate'] . '" and cert.date<="' . $_POST['todate'] . '"';
                    }
                    $res = mysqli_query($link, $q);

                    //  echo mysqli_error($link);
                    ?>
                    <table class = "table table-striped" >
                        <thead>
                            <tr>
                                <th scope = "col">#</th>
                                <th scope = "col">Date</th>
                                <th scope = "col">Name</th>
                                <th scope = "col">Mobile No</th>
                                <th scope = "col">Item</th>
                                <th scope = "col">Gross Weight</th>
                                <th scope = "col">Net Weight</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_array($res)) {

                                // print_r($row);
                                ?>
                                <tr> 
                                    <th scope="row"><?php echo $count++; ?></th>
                                    <th scope="row"><?php echo date('d-m-Y', strtotime($row['date'])); ?></th>
                                    <th scope="row"><?php echo $row['shopname']; ?></th>
                                    <th scope="row"><?php echo $row['contact_no']; ?></th>
                                    <th scope="row"><?php echo $row['item']; ?></th>
                                    <th scope="row"><?php echo $row['gross_weight']; ?></th>
                                    <th scope="row"><?php echo $row['net_weight']; ?></th>
                                </tr>    





                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php
                }
                ?>

            </div>   

        </div>   
    </section>

    <?php
    include 'footer.php';
    ?>
