<?php
   include "db.php";
    $shopname=$_REQUEST['shopname'];
    $contact_name=$_REQUEST['contact_name'];
    $contact_no=$_REQUEST['contact_no'];
  
    $email_id=$_REQUEST['email_id'];
    $address=$_REQUEST['address'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $pincode=$_REQUEST['pincode'];
    $gst_no=$_REQUEST['gst_no'];
    

    $query="insert into customers(`shopname`,  `contact_name`,`contact_no`,`email_id`,`address`,`state`,`city`,`pincode`,`gst_no`) 
                        values('$shopname','$contact_name','$contact_no','$email_id','$address','$state','$city','$pincode','$gst_no');";
    $res=mysqli_query($link,$query);
    

   if($res)
        {
            // echo mysqli_error($link);
           echo"<script>alert('Data inserted successfully');window.location='customer-view.php';</script>";


        }
      else
      {
        //echo mysqli_error($link);
        echo"<script>alert('Data failed to insert');window.history.back();</script>";

      }

      

 ?>