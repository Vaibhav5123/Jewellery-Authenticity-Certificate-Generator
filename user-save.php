<?php
   include "db.php";
    $name=$_REQUEST['name'];
    $mobile_no=$_REQUEST['mobile_no'];
    $email_id=$_REQUEST['email_id'];
    $password=$_REQUEST['password'];
    $type=$_REQUEST['type'];
   

    $query="insert into admin(`name`,  `mobile_no`,`email_id`,`password`,`type`) values('$name','$mobile_no','$email_id','$password','$type');";
    $res=mysqli_query($link,$query);
    

    if($res)
        {
            echo"<script>alert('Data inserted successfully');window.location='user-view.php';</script>";


        }
      else
      {
        //echo mysqli_error($link);
        echo"<script>alert('Data failed to insert');window.history.back();</script>";

      }

      

 ?>