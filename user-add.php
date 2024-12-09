<?php
    include "header.php";

 ?>

<main id="main" class="main">

<div class="pagetitle">
  
  
</div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New Users<span> | <a href="user-view.php">View All Users</a></span></h5>
</h5>
            <form class="row g-3"  action="user-save.php" method="POST">
                <div class="col-4">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="name" required> 
                </div>
                
                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Mobile No</label>
                  <input type="number" class="form-control" id="inputPassword4"  name="mobile_no" required>
                </div>
                
                

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Email Id</label>
                  <input type="email" class="form-control" id="inputNanme4" name="email_id" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputNanme4" name="password" required> 
                </div>

               

                <div class="col-4">
					  <label for="inputMode" class="form-label">Type</label>
						<select name="type" class="form-control">
							<option>Admin</option>
							<option>User</option>
                 

						</select>
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
 
  
 