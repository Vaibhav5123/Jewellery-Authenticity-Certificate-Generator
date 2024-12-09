<?php
	include 'db.php';
	
	$customer_id=$_REQUEST['customer_id'];
	
	
	$q="delete from `customers` where `customer_id`=$customer_id";
	$res=mysqli_query($link,$q);
	
	if($res)
	{
		echo "<script> alert('Data deleted Successfully');window.location='customer-view.php'; </script>";
	}
	
	else
	{
		echo "<script>alert('Data failed to delete');window.history.back();</script>";
	}
	
 
 
 
 ?>