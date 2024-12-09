<?php
    include "header.php";
    $certificate_id=$_REQUEST['certificate_id'];
    $customer_id=$_REQUEST['customer_id'];


    $q="select * from certificates where `certificate_id`=$certificate_id";

    $res=mysqli_query($link,$q);
    $certificate=mysqli_fetch_array($res);

 ?>

<main id="main" class="main">

<div class="pagetitle">
<h1>Certificate Update</h1>
<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
  
  
</div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Certificate<span>  </span></h5>
</h5>
            <form class="row g-3"  action="certificate-update-save.php" method="POST">
                <div class="col-4">
                <input type="number" hidden name="certificate_id" value="<?php echo $certificate['certificate_id']; ?>">
                <input type="number" hidden name="customer_id" value="<?php echo $customer['customer_id']; ?>">

                <label for="inputNanme4" class="form-label">Item</label>
                <input type="text" class="form-control" id="inputNanme4" name="item" required value="<?php echo $certificate['item']; ?>">


                </div>

                
                
                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Gross Weight</label>
                  <input type="text" class="form-control" id="inputPassword4"  name="gross_weight" required value="<?php echo $certificate['gross_weight']; ?>">
                </div>

                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Net Weight</label>
                  <input type="text" class="form-control" id="inputPassword4"  name="net_weight" required value="<?php echo $certificate['net_weight']; ?>">
                </div>
                
                
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Carrat</label>
                  <input type="text" class="form-control" id="inputNanme4" name="carrat" required value="<?php echo $certificate['carrat']; ?>"> 
                </div>


                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Purity</label>
                  <input type="text" class="form-control" id="inputNanme4" name="purity" required value="<?php echo $certificate['purity']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">HUID</label>
                  <input type="text" class="form-control" id="inputNanme4" name="huid" required value="<?php echo $certificate['huid']; ?>"> 
                </div>
               
                
                
               

                <div class="text-center" >
                    <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->


        </div>

        </div>   

        </div>   
    </section>
<?php
    include "footer.php";

 ?>
 
  
 