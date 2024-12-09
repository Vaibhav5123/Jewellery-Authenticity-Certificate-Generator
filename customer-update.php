<?php
    include "header.php";
    $customer_id=$_REQUEST['customer_id'];

    $q="select * from customers where `customer_id`=$customer_id";

    $res=mysqli_query($link,$q);
    $customer=mysqli_fetch_array($res);

 ?>

<main id="main" class="main">

<div class="pagetitle">
<h1>Customer Update</h1>
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
            <h5 class="card-title">Update Customers<span>  </span></h5>
</h5>
            <form class="row g-3"  action="customer-update-save.php" method="POST">
                <div class="col-4">
                <input type="number" hidden name="customer_id" value="<?php echo $customer['customer_id']; ?>">

                  <label for="inputNanme4" class="form-label">Shop Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="shopname" required value="<?php echo $customer['shopname']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Contact Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="contact_name" required value="<?php echo $customer['contact_name']; ?>"> 
                </div>
                
                <div class="col-4">
                  <label for="inputContactNo" class="form-label">Contact No</label>
                  <input type="text" class="form-control" id="inputPassword4"  name="contact_no" required value="<?php echo $customer['contact_no']; ?>">
                </div>
                
                
               


                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Email Id</label>
                  <input type="email" class="form-control" id="inputNanme4" name="email_id" required value="<?php echo $customer['email_id']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputNanme4" name="address" required value="<?php echo $customer['address']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">State</label>
                  <select name="state" id="state" class="form-control" value="<?php echo $customer['state']; ?>">
                  <option value="Andhra Pradesh">Select</option>

                                <option value="Andhra Pradesh" <?php echo $customer['state']=='Andhra Pradesh'?"selected":"";  ?>>Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands"<?php echo $customer['state']=='Andaman and Nicobar Iseland'?"selected":"";  ?>>Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh"<?php echo $customer['state']=='Arunachal Pradesh'?"selected":"";  ?>>Arunachal Pradesh</option>
                                <option value="Assam"<?php echo $customer['state']=='Assam'?"selected":"";  ?>>Assam</option>
                                <option value="Bihar"<?php echo $customer['state']=='Bihar'?"selected":"";  ?>>Bihar</option>
                                <option value="Chandigarh"<?php echo $customer['state']=='Chandigarh'?"selected":"";  ?>>Chandigarh</option>
                                <option value="Chhattisgarh"<?php echo $customer['state']=='Chhattisgarh'?"selected":"";  ?>>Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli"<?php echo $customer['state']=='Dadar and Nagar Haveli'?"selected":"";  ?>>Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu"<?php echo $customer['state']=='Daman and Diu'?"selected":"";  ?>>Daman and Diu</option>
                                <option value="Delhi"<?php echo $customer['state']=='Delhi'?"selected":"";  ?>>Delhi</option>
                                <option value="Lakshadweep"<?php echo $customer['state']=='Laskswadeep'?"selected":"";  ?>>Lakshadweep</option>
                                <option value="Puducherry"<?php echo $customer['state']=='Puducherry'?"selected":"";  ?>>Puducherry</option>
                                <option value="Goa"<?php echo $customer['state']=='Goa'?"selected":"";  ?>>Goa</option>
                                <option value="Gujarat" <?php echo $customer['state']=='Gujrat'?"selected":"";  ?>>Gujarat</option>
                                <option value="Haryana"<?php echo $customer['state']=='Haryana'?"selected":"";  ?>>Haryana</option>
                                <option value="Himachal Pradesh"<?php echo $customer['state']=='Himachal Pradesh'?"selected":"";  ?>>Himachal Pradesh</option>
                                <option value="Jammu and Kashmir"<?php echo $customer['state']=='Jammu and Kashmir'?"selected":"";  ?>>Jammu and Kashmir</option>
                                <option value="Jharkhand"<?php echo $customer['state']=='Jharkhand'?"selected":"";  ?>>Jharkhand</option>
                                <option value="Karnataka"<?php echo $customer['state']=='Karnataka'?"selected":"";  ?>>Karnataka</option>
                                <option value="Kerala"<?php echo $customer['state']=='Kerala'?"selected":"";  ?>>Kerala</option>
                                <option value="Madhya Pradesh"<?php echo $customer['state']=='Madhya Pradesh'?"selected":"";  ?>>Madhya Pradesh</option>
                                <option value="Maharashtra"<?php echo $customer['state']=='Maharashtra'?"selected":"";  ?>>Maharashtra</option>
                                <option value="Manipur"<?php echo $customer['state']=='Manipur'?"selected":"";  ?>>Manipur</option>
                                <option value="Meghalaya"<?php echo $customer['state']=='Meghalaya'?"selected":"";  ?>>Meghalaya</option>
                                <option value="Mizoram"<?php echo $customer['state']=='Mizoram'?"selected":"";  ?>>Mizoram</option>
                                <option value="Nagaland"<?php echo $customer['state']=='Nagaland'?"selected":"";  ?>>Nagaland</option>
                                <option value="Odisha"<?php echo $customer['state']=='Odisha'?"selected":"";  ?>>Odisha</option>
                                <option value="Punjab"<?php echo $customer['state']=='Punjab'?"selected":"";  ?>>Punjab</option>
                                <option value="Rajasthan"<?php echo $customer['state']=='Rajasthan'?"selected":"";  ?>>Rajasthan</option>
                                <option value="Sikkim"<?php echo $customer['state']=='Sikkim'?"selected":"";  ?>>Sikkim</option>
                                <option value="Tamil Nadu"<?php echo $customer['state']=='Tamil Nadu'?"selected":"";  ?>>Tamil Nadu</option>
                                <option value="Telangana"<?php echo $customer['state']=='Telangana'?"selected":"";  ?>>Telangana</option>
                                <option value="Tripura"<?php echo $customer['state']=='Tripura'?"selected":"";  ?>>Tripura</option>
                                <option value="Uttar Pradesh"<?php echo $customer['state']=='Uttar Pradesh'?"selected":"";  ?>>Uttar Pradesh</option>
                                <option value="Uttarakhand"<?php echo $customer['state']=='Uttrakhand'?"selected":"";  ?>>Uttarakhand</option>
                                <option value="West Bengal"<?php echo $customer['state']=='West Bengal'?"selected":"";  ?>>West Bengal</option>
                                </select>
                                


                </div>
               

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputNanme4" name="city" required value="<?php echo $customer['city']; ?>"> 
                </div>   
                
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Pincode</label>
                  <input type="text" class="form-control" id="inputNanme4" name="pincode" required value="<?php echo $customer['pincode']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">GST No</label>
                  <input type="text" class="form-control" id="inputNanme4" name="gst_no" required value="<?php echo $customer['gst_no']; ?>"> 
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
 
  
 