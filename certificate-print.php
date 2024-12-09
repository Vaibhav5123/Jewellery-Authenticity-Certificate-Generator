<?php
include 'header.php';

$q = "select * from certificates ";
$res = mysqli_query($link, $q);
//$count = 1;
?>
<main id="main" class="main">

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Print Certificates
                            <input class="" type="text" id="myInput" autofocus onkeyup="myFunction()" placeholder="Search for names..">
                        </h5>

                        <form action="cards.php" method="post">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col"><!--<input type="checkbox" name="certificate[];" id="select_all">--></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Shopname</th>

                                        <th scope="col"> Item</th>
                                        <th scope="col">Gross Weight</th>
                                        <th scope="col">Net Weight</th>

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
                                            <th scope="row"><input class="checkbox" type="checkbox" name="certificate[];" value="<?php echo $certificate['certificate_id']; ?>">
                                            </th>
                                            <td><?php echo date('d-m-Y', strtotime($certificate['date'])); ?></td>
                                            <td><?php echo $customer['shopname']; ?></td>

                                            <td><?php echo $certificate['item']; ?></td>
                                            <td><?php echo $certificate['gross_weight']; ?></td>
                                            <td><?php echo $certificate['net_weight']; ?></td>

                            <!-- <td>
                                <img src=" <?php echo "photo/" . $certificate['photo']; ?>" width="100px" alt="Image">
                             </td> -->

                                        </tr>




                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <div class="text-center" id="card">
                                <br>
                                <div class="text-center" >
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                            <!-- End Table with stripped rows -->
                        </form>
                        <div>
                        </div>
                    </div>
                    </section>

                    </main><!-- End #main -->
                    <?php
                    include 'footer.php';
                    ?>

                    <script>
                        function myFunction() {
                            // Declare variables
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("myTable");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[1];
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                        $(document).ready(function () {
                            $('#select_all').on('click', function () {
                                if (this.checked) {
                                    $('.checkbox:visible').each(function () {
                                        this.checked = true;
                                    });
                                } else {
                                    $('.checkbox:visible').each(function () {
                                        this.checked = false;
                                    });
                                }
                            });

                            $('.checkbox:visible').on('click', function () {
                                if ($('.checkbox:checked').length === $('.checkbox:visible').length) {
                                    $('#select_all').prop('checked', true);
                                } else {
                                    $('#select_all').prop('checked', false);
                                }
                            });
                        });
                    </script>
