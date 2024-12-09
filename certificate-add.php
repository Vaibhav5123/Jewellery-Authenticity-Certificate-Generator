<?php
    
    //$customer_id=$_REQUEST['customer_id'];

    include "header.php";

    

 ?>

<main id="main" class="main">

<div class="pagetitle">
  
  
</div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New Certificates<span> | <a href="certificate-view.php">View All Certificates</a></span></h5>
</h5>
            <form class="row g-3"  action="certificate-save.php" method="POST" enctype="multipart/form-data">
            
            
            
            <div class="col-4">
					  <label for="inputCustomerName" class="form-label">Customer Name</label>
					  <select  class="form-control" id="inputLedgerName" required name='customer_id'>
						<option value="">Select Customer Name</option>
						<?php
						$q="select * from customers";
						$res=mysqli_query($link,$q);
						while($customer=mysqli_fetch_array($res))
						{
							echo "<option value='".$customer['customer_id']."'>".$customer['shopname']."</option>";
						}
						
						?>
						
					  </select>
					</div>


               
                
                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Item</label>
                  <input type="text" class="form-control" id="inputPassword4"  name="item" required>
                </div>
                
                

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Gross Weight</label>
                  <input type="text" class="form-control" id="inputNanme4" name="gross_weight" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Net Weight</label>
                  <input type="text" class="form-control" id="inputNanme4" name="net_weight" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Carrat</label>
                  <input type="text" class="form-control" id="inputNanme4" name="carrat" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Purity</label>
                  <input type="text" class="form-control" id="inputNanme4" name="purity" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">HUID</label>
                  <input type="text" class="form-control" id="inputNanme4" name="huid" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Photo</label>
                  <input type="file" class="form-control" id="inputNanme4" name="photo"  accept=".jpg/.jpeg/.png"required> 
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
 
  
 