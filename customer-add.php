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
            <h5 class="card-title">Add New Cutomers<span> | <a href="customer-view.php">View All Customers</a></span></h5>
</h5>
            <form class="row g-3"  action="customer-save.php" method="POST">
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Shop Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="shopname" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Contact Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="contact_name" required> 
                </div>
                
                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Contact No</label>
                  <input type="text" class="form-control" id="inputPassword4"  name="contact_no" required>
                </div>
                
                
               


                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Email Id</label>
                  <input type="email" class="form-control" id="inputNanme4" name="email_id" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputNanme4" name="address" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">State</label>
                  <select name="state" id="state" class="form-control">
                  <option value="Andhra Pradesh">Select</option>

                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                </select>

                </div>
               

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputNanme4" name="city" required> 
                </div>   
                
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Pincode</label>
                  <input type="text" class="form-control" id="inputNanme4" name="pincode" required> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">GST No</label>
                  <input type="text" class="form-control" id="inputNanme4" name="gst_no" required> 
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
 
  
 