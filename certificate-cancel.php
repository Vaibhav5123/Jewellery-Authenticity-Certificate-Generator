<?php
include "header.php";
 $certificate_id=$_REQUEST['certificate_id'];

?>

<main id="main" class="main">


  
</div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cancel Certificate<span>  </span></h5>
</h5>
            <form class="row g-3"  action="certificate-cancel-save.php" method="POST">
               
                <input type="number" hidden name="certificate_id" value="<?php echo $certificate_id; ?>">
                


                 
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Cancelled Reason</label>
                  <input type="textarea" class="form-control" id="inputNanme4" name="cancelled_reason" required > 
                </div>
               
                
                
               

                <div class="text-center" >
                    <br>
                  <button type="submit"  value="Delete" name="Submit" class="btn btn-primary">Submit</button>
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
 