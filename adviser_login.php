<?php
session_start();
$message="Hello Admin";
    $con = mysqli_connect('localhost', 'root', '','u_reg') or die('Unable To connect');


    if(isset($_POST['login']))  
    {  
        $adv_name=$_POST['adv_name'];  
        $adv_pass=$_POST['adv_pass'];
  
        $check_user="select * from adv_login WHERE adv_name='$adv_name'AND adv_pass='$adv_pass'";  
  
        $run=mysqli_query($con,$check_user);  
  
        if(mysqli_num_rows($run))  
        {  
            $row = mysqli_fetch_assoc($run);
            $prog = $row['program']; 

            echo "<script>window.open('adviser/index.php','_self')</script>";  
  
            $_SESSION['adv_name']=$adv_name;
            $_SESSION['program']=$prog;//here session is used and value of $user_email store in $_SESSION.  
  
        }  
        else  
        {  
            echo "<script>alert('Username or password is incorrect!')</script>";  
        }  
    }  
?>  