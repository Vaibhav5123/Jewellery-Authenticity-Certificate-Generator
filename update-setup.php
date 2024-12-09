<?php
include 'header.php';
$q="select * from setup where `id`=3";
$res=mysqli_query($link,$q);
$id=mysqli_fetch_array($res);
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Setup Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                 <div class="card info-card ">
                        <div class="card-body">
                              <h5 class="card-title">Update Setup</h5>
                             
                                <!-- Vertical Form -->
                            <form class="row g-3" action='update-setup-save.php'>
                                <div class="col-6">
                                    <input type="number" hidden name="id" value="<?php echo $id['id']; ?>">
                                <label for="BussinessName" class="form-label"> Bussiness Name</label>
                                <input type="text" class="form-control" id="inputYourName" required name="bussiness_name" value="<?php echo $id['bussiness_name']; ?>">
                                </div>
                                <div class="col-6">
                                <label for="inputEmail4" class="form-label">Mobile No</label>
                                <input type="text" class="form-control" id="inputEmail4" required name="mobile_no" value="<?php echo $id['mobile_no']; ?>">
                                </div>
                               
                                <div class="col-4">
                                  <label for="inputNanme4" class="form-label">Email Id</label>
                                  <input type="email" class="form-control" id="inputNanme4" name="email" required  value="<?php echo $id['email']; ?>"> 
                                </div>

                                <div class="col-4">
                                  <label for="inputNanme4" class="form-label">Address</label>
                                  <input type="text" class="form-control" id="inputNanme4" name="address" required  value="<?php echo $id['address']; ?>"> 
                                </div>

                                <div class="col-4">
                                  <label for="inputNanme4" class="form-label">State</label>
                                  <select name="state" id="state" class="form-control"  value="<?php echo $id['state']; ?>">
                                  <option value="Andhra Pradesh">Select</option>

                                <option value="Andhra Pradesh" <?php echo $id['state']=='Andhra Pradesh'?"selected":"";  ?>>Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands"<?php echo $id['state']=='Andaman and Nicobar Iseland'?"selected":"";  ?>>Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh"<?php echo $id['state']=='Arunachal Pradesh'?"selected":"";  ?>>Arunachal Pradesh</option>
                                <option value="Assam"<?php echo $id['state']=='Assam'?"selected":"";  ?>>Assam</option>
                                <option value="Bihar"<?php echo $id['state']=='Bihar'?"selected":"";  ?>>Bihar</option>
                                <option value="Chandigarh"<?php echo $id['state']=='Chandigarh'?"selected":"";  ?>>Chandigarh</option>
                                <option value="Chhattisgarh"<?php echo $id['state']=='Chhattisgarh'?"selected":"";  ?>>Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli"<?php echo $id['state']=='Dadar and Nagar Haveli'?"selected":"";  ?>>Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu"<?php echo $id['state']=='Daman and Diu'?"selected":"";  ?>>Daman and Diu</option>
                                <option value="Delhi"<?php echo $id['state']=='Delhi'?"selected":"";  ?>>Delhi</option>
                                <option value="Lakshadweep"<?php echo $id['state']=='Laskswadeep'?"selected":"";  ?>>Lakshadweep</option>
                                <option value="Puducherry"<?php echo $id['state']=='Puducherry'?"selected":"";  ?>>Puducherry</option>
                                <option value="Goa"<?php echo $id['state']=='Goa'?"selected":"";  ?>>Goa</option>
                                <option value="Gujarat" <?php echo $id['state']=='Gujrat'?"selected":"";  ?>>Gujarat</option>
                                <option value="Haryana"<?php echo $id['state']=='Haryana'?"selected":"";  ?>>Haryana</option>
                                <option value="Himachal Pradesh"<?php echo $id['state']=='Himachal Pradesh'?"selected":"";  ?>>Himachal Pradesh</option>
                                <option value="Jammu and Kashmir"<?php echo $id['state']=='Jammu and Kashmir'?"selected":"";  ?>>Jammu and Kashmir</option>
                                <option value="Jharkhand"<?php echo $id['state']=='Jharkhand'?"selected":"";  ?>>Jharkhand</option>
                                <option value="Karnataka"<?php echo $id['state']=='Karnataka'?"selected":"";  ?>>Karnataka</option>
                                <option value="Kerala"<?php echo $id['state']=='Kerala'?"selected":"";  ?>>Kerala</option>
                                <option value="Madhya Pradesh"<?php echo $id['state']=='Madhya Pradesh'?"selected":"";  ?>>Madhya Pradesh</option>
                                <option value="Maharashtra"<?php echo $id['state']=='Maharashtra'?"selected":"";  ?>>Maharashtra</option>
                                <option value="Manipur"<?php echo $id['state']=='Manipur'?"selected":"";  ?>>Manipur</option>
                                <option value="Meghalaya"<?php echo $id['state']=='Meghalaya'?"selected":"";  ?>>Meghalaya</option>
                                <option value="Mizoram"<?php echo $id['state']=='Mizoram'?"selected":"";  ?>>Mizoram</option>
                                <option value="Nagaland"<?php echo $id['state']=='Nagaland'?"selected":"";  ?>>Nagaland</option>
                                <option value="Odisha"<?php echo $id['state']=='Odisha'?"selected":"";  ?>>Odisha</option>
                                <option value="Punjab"<?php echo $id['state']=='Punjab'?"selected":"";  ?>>Punjab</option>
                                <option value="Rajasthan"<?php echo $id['state']=='Rajasthan'?"selected":"";  ?>>Rajasthan</option>
                                <option value="Sikkim"<?php echo $id['state']=='Sikkim'?"selected":"";  ?>>Sikkim</option>
                                <option value="Tamil Nadu"<?php echo $id['state']=='Tamil Nadu'?"selected":"";  ?>>Tamil Nadu</option>
                                <option value="Telangana"<?php echo $id['state']=='Telangana'?"selected":"";  ?>>Telangana</option>
                                <option value="Tripura"<?php echo $id['state']=='Tripura'?"selected":"";  ?>>Tripura</option>
                                <option value="Uttar Pradesh"<?php echo $id['state']=='Uttar Pradesh'?"selected":"";  ?>>Uttar Pradesh</option>
                                <option value="Uttarakhand"<?php echo $id['state']=='Uttrakhand'?"selected":"";  ?>>Uttarakhand</option>
                                <option value="West Bengal"<?php echo $id['state']=='West Bengal'?"selected":"";  ?>>West Bengal</option>
                                </select>
                                

                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputNanme4" name="city" required value="<?php echo $id['city']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Pincode</label>
                  <input type="text" class="form-control" id="inputNanme4" name="pincode" required value="<?php echo $id['pincode']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">GST No</label>
                  <input type="text" class="form-control" id="inputNanme4" name="gst_no" required value="<?php echo $id['gst_no']; ?>"> 
                </div>
 
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Bank Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="bank_name" required value="<?php echo $id['bank_name']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Branch_name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="branch_name" required value="<?php echo $id['branch_name']; ?>"> 
                </div>
                 
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">IFSC Code</label>
                  <input type="text" class="form-control" id="inputNanme4" name="IFSC_code" required value="<?php echo $id['IFSC_code']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Account No</label>
                  <input type="text" class="form-control" id="inputNanme4" name="account_no" required value="<?php echo $id['account_no']; ?>"> 
                </div>

                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Account Type</label>
                  <input type="text" class="form-control" id="inputNanme4" name="account_type" required value="<?php echo $id['account_type']; ?>"> 
                </div>
                                
                                <div class="text-center">
                                <br>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                
                            
                                </div>
                            </form><!-- Vertical Form -->


                        </div>
                    </div>
            </div> 
      </div>

    </section>

</main>
<?php
    include "footer.php";

 ?>
 
  
 