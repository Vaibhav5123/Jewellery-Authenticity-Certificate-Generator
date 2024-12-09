<?php
    session_start();
    $admin=$_SESSION['admin'];
    include 'db.php';
    $customer_id=$_REQUEST['customer_id'];

	$certificate_id=$_REQUEST['certificate_id']; 
    

    $item=$_REQUEST['item'];
    $gross_weight=$_REQUEST['gross_weight'];
    $net_weight=$_REQUEST['net_weight'];

    $carrat=$_REQUEST['carrat'];

    $purity=$_REQUEST['purity'];
    $huid=$_REQUEST['huid'];
    $updated_by=$admin['id'];
    //$updated_on=$_REQUEST['updated_on'];



   
  /* $q2="insert into  certificates(`updated_by`,`updated_on`)
                            values('$updated_by','$updated_on');";
	$res2=mysqli_query($link,$q2);
    $id=mysqli_insert_id($link);*/

    $q="UPDATE `certificates` SET `gross_weight`='$gross_weight',`net_weight`='$net_weight',`item`= '$item', `carrat`='$carrat',`purity`='$purity',`huid`='$huid',`updated_by`='$updated_by' WHERE `certificate_id`=$certificate_id";
	$res=mysqli_query($link,$q);


	


   
    
	
	if($res)
	{
		echo "<script> alert('Data updated Successfully');window.location='certificate-view.php'; </script>";
	}
	
	else
	{
		echo "<script>alert('Data failed to update');window.history.back();</script>";
	}
	
 
 
 
 ?>