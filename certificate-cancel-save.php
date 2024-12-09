
    <?php
    session_start();
    $admin=$_SESSION['admin'];

	include 'db.php';
	
	$certificate_id=$_REQUEST['certificate_id'];
    $cancelled_by=$admin['id'];
    //$cancelled_on=new DateTime("$_SERVER['REQUEST_TIME']");
    $cancelled_reason=$_REQUEST['cancelled_reason'];
	
	
	$q="UPDATE `certificates` SET `iscancelled`='1',`cancelled_by`='$cancelled_by',`cancelled_reason`=' $cancelled_reason' WHERE `certificate_id`=$certificate_id";
    echo $q;
    
	$res=mysqli_query($link,$q);
	
	if($res)
	{
		echo "<script> alert('Data Cancel Successfully');window.location='certificate-view.php'; </script>";
	}
	
	else
	{
		echo "<script>alert('Data failed to Cancel');window.history.back();</script>";
	}
	
 
 
 
 ?>




  
 