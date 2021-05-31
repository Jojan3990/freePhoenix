<?php
session_start();
require_once 'connect.php';
$signname=$_POST['signName'];
$signpassword=$_POST['signPass'];

$sql="SELECT * FROM signininfo";
$query=mysqli_query($log,$sql);
if($query){
    
    if (mysqli_num_rows($query) <= 0) {
        $_SESSION['log_signin_error']=true;
        header('location: ../../../index.php?id=1');
    }
    else if(mysqli_num_rows($query) != 0){
        while($row=mysqli_fetch_assoc($query)){
            if($row['logname']==$signname && $row['logpassword']==$signpassword){
                // this is for session storing all info user 
                $_SESSION['user_name_profile']=$row['logname'];
                $_SESSION['user_email_profile']=$row['logemail'];
                // $_SESSION['user_profileimg_profile']=$row['imgProfile'];
                // this is for session storeing all info user end
                // $_SESSION['user_name_profile']=$_POST['logname'];
                $_SESSION['img_name']=$row['imgProfile'];
                $_SESSION['logSuccess']=true;
                $_SESSION['check_matched']=true;
                header('location: ../../../index.php?id=1');
            }
        }
    }
    else{
        $_SESSION['log_signin_error']=true;
        header('location: ../../../index.php?id=1');
    }
}
else{
    header('location: ../../../index.php?id=1');
}
if(!isset($_SESSION['check_matched'])){
    $_SESSION['log_signin_error']=true;
    header('location: ../../../index.php?id=1');
}

?>