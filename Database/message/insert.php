<?php
session_start();
require_once 'connect.php';
$pic_name=$_SESSION['img_name'];
$name=$_SESSION['user_name_profile'];
$mailMessage=$_SESSION['user_email_profile'];
if(isset($_POST['comment_user']) && !empty($_POST['comment_user']) && isset($_SESSION['logSuccess'])){
    $sql="INSERT INTO messageall
    SET
    message_email='$mailMessage',
    message_user_name='$name',
    message_user_pic='$pic_name',
    user_comment='".$_POST['comment_user']."',
    udelete=0
    ";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location: ../../index.php?id=109");
        exit();
        }
        else{
            echo "Error";
            $_SESSION['special_char_error']=true;
            header("location: ../../index.php?id=109");
        }
    }
else{
    header("location: ../../index.php?id=109");
}
?>