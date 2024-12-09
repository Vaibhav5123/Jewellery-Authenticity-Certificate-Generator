<?php
	include 'db.php';
	$id=$_REQUEST['id'];
	$bussiness_name=$_REQUEST['bussiness_name'];
    $mobile_no=$_REQUEST['mobile_no'];
    $email=$_REQUEST['email'];
    $address=$_REQUEST['address'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $gst_no=$_REQUEST['gst_no'];
    $bank_name=$_REQUEST['bank_name'];
    $branch_name=$_REQUEST['branch_name'];
    $IFSC_code=$_REQUEST['IFSC_code'];
    $account_no=$_REQUEST['account_no'];
    $account_type=$_REQUEST['account_type'];


    




	$q="UPDATE `setup` SET `bussiness_name`='$bussiness_name',`mobile_no`=' $mobile_no',`email`='$email',`address`='$address',`state`='$state',`city`='$city',`gst_no`='$gst_no', `bank_name`='$bank_name',`branch_name`='$branch_name',`IFSC_code`='$IFSC_code',`account_no`='$account_no',`account_type`='$account_type' WHERE `id`=$id";
	$res=mysqli_query($link,$q);
	
	if($res)
	{
		echo "<script> alert('Data updated Successfully');window.location='setup-view.php'; </script>";
	}
	
	else
	{
		echo "<script>alert('Data failed to update');window.history.back;</script>";
	}
	
 
 
 
 ?>