<?php
	include 'db.php';
	$customer_id=$_REQUEST['customer_id']; 
	$shopname=$_REQUEST['shopname'];
    $contact_name=$_REQUEST['contact_name'];
    $contact_no=$_REQUEST['contact_no'];
    

    $email_id=$_REQUEST['email_id'];
    $address=$_REQUEST['address'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $pincode=$_REQUEST['pincode'];

    $gst_no=$_REQUEST['gst_no'];

	$q="UPDATE `customers` SET `shopname`='$shopname',`contact_name`=' $contact_name',`contact_no`=' $contact_no',`email_id`='$email_id',`address`='$address',`state`='$state',`city`='$city',`pincode`='$pincode',`gst_no`='$gst_no' WHERE `customer_id`=$customer_id";
	$res=mysqli_query($link,$q);
	
	if($res)
	{
		echo "<script> alert('Data updated Successfully');window.location='customer-view.php'; </script>";
	}
	
	else
	{
		echo "<script>alert('Data failed to update');window.history.back();</script>";
	}
	
 
 
 
 ?>