<?php
session_start();
$message="Hello Admin";
    $con = mysqli_connect('localhost', 'root', '','u_reg') or die('Unable To connect');


    if(isset($_POST['login']))  
    {  
        $user_name=$_POST['username'];  
        $user_pass=$_POST['password'];
  
        $check_user="select * from admin_login WHERE admin_name='$user_name'AND admin_pass='$user_pass'";  
  
        $run=mysqli_query($con,$check_user);  
  
        if(mysqli_num_rows($run))  
        {  
            $row = mysqli_fetch_assoc($run);
            $position = $row['position']; 

            echo "<scrip>window.open('admin/index.php','_self')</script>";  
  
            $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
            $_SESSION['position'] = $position;
           
        }  
        else  
        {  
          
            echo '<script>alert("This is an alert message!");</script>';
            header('Location: admin_index.php');
            
        }  
    }  
?>  