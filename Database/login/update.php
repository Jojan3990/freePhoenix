<?php
session_start();
require_once 'connect.php';

$name_person=$_POST['new_name'];
$email_test=$_SESSION['user_email_profile'];
if(isset($_POST['new_name']) && !empty($_POST['new_name'])){
$sql1="SELECT * FROM signininfo";
$query1=mysqli_query($log,$sql1);
while($row=mysqli_fetch_assoc($query1)){
    if($row['logname']==$name_person){
        $_SESSION['name_error_update']=true;
    }
    else{
        echo "haha";
        $sql="UPDATE signininfo
            SET
            logname='".$_POST['new_name']."'
            where logemail='$email_test'
        ";
        $_SESSION['user_name_profile']=$_POST['new_name'];
        $_SESSION['success_for_update']=true;
        mysqli_query($log,$sql);
    }
}
}


if(isset($_FILES['new_img_name']) && !empty($_FILES['new_img_name'])){
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    if ($_FILES['new_img_name']['error'] == 0) {
        //no error in file
        if ($_FILES['new_img_name']['size'] <= 10000000) {
            //file size is less than 1mb
            echo "haha";
    
            $ext = pathinfo($_FILES['new_img_name']['name'], PATHINFO_EXTENSION); //returns file extension
    
            if(in_array($ext, $allowed_ext)){
                //allowed format
                //Image-123123.jpg
                $file_name = $name_person."Image-" . time() . "." . $ext;
                $path = "../../assets/profile/". $file_name;
                move_uploaded_file($_FILES['new_img_name']['tmp_name'], $path);
                $sql="UPDATE signininfo
                    SET
                    imgProfile='$file_name'
                    where logemail='$email_test' 
                ";


                $update_message="UPDATE messageall
                    SET
                    message_user_pic='$file_name'
                    where message_email='$email_test'
                ";
                mysqli_query($conn,$update_message);

                $_SESSION['img_name']=$file_name;
                mysqli_query($log,$sql);
                $_SESSION['success_for_update']=true;
            }else{
                echo "File format not supported.";
            }
        }else{
            $_SESSION['error_update_photo']=true;
            echo "File size should be less than 1MB.";
        }
    }else{
        echo "Error in file.";
    }
}


if(isset($_POST['new_logpassword']) && isset($_POST['new_logconfirm']) && !empty(isset($_POST['new_logconfirm'])) && !empty($_POST['new_logpassword'])){
    $one=$_POST['new_logpassword'];
    $two=$_POST['new_logconfirm'];
    if($one==$two){
        $sql="UPDATE signininfo
        SET
        logpassword='".$_POST['new_logpassword']."'
        where logemail='$email_test' 
    ";
$query=mysqli_query($log,$sql);
$_SESSION['success_for_update']=true;
    }
}

header('location: ../../index.php?id=108');
?>