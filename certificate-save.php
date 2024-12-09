<?php
    session_start();
    $admin=$_SESSION['admin'];
   include "db.php";

    $customer_id=$_REQUEST['customer_id'];
    $item=$_REQUEST['item'];
    $gross_weight=$_REQUEST['gross_weight'];
    $net_weight=$_REQUEST['net_weight'];
    $carrat=$_REQUEST['carrat'];
    $purity=$_REQUEST['purity'];
    $huid=$_REQUEST['huid'];
    $photo=$_FILES['photo']['name'];
    //print_r($_REQUEST);
   // $isprint=$_REQUEST['isprint'];
   // $iscancelled=$_REQUEST['iscancelled'];
    $added_by=$admin['id'];
   // $added_on=$_REQUEST['added_on'];
    //$updated_by=$_REQUEST['updated_by'];
    //$updated_on=$_REQUEST['updated_on'];
    //$cancelled_by=$_REQUEST['cancelled_by'];
    //$cancelled_on=$_REQUEST['cancelled_on'];
    //$cancelled_reason=$_REQUEST['cancelled_reason'];


     $query="insert into certificates(`customer_id`,  `item`,`gross_weight`,`net_weight`,`carrat`,`purity`,`huid`,`added_by`) 
                        values('$customer_id',  '$item','$gross_weight','$net_weight','$carrat','$purity','$huid','$added_by');";
    $res=mysqli_query($link,$query);

    $id=mysqli_insert_id($link);

   $dest="uploads/$id-".$_FILES['photo']['name'];

if(move_uploaded_file($_FILES['photo']['tmp_name'],$dest))  
{
	$q2="update certificates set  photo='$dest' where certificate_id=$id";
	mysqli_query($link,$q2);
}
    

   if($res)
        {
           
            // echo mysqli_error($link);
          echo"<script>alert('Data inserted successfully');window.location='certificate-view.php';</script>";


        }
      else
      {
        //echo mysqli_error($link);
        echo"<script>alert('Data failed to insert');window.history.back();</script>";

      }

      

 ?>