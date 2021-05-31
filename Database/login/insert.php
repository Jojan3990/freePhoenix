<?php
session_start();
require_once "connect.php";



$name_person=$_POST['logname'];
if(isset($_POST['logname']) && isset($_FILES['pro_image']) && isset($_POST['logemail']) && isset($_POST['logpassword']) && isset($_POST['logage']) && !empty($_POST['logname']) && !empty($_POST['logemail']) && !empty($_POST['logpassword'])  && !empty($_POST['logage'])){
    
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    if ($_FILES['pro_image']['error'] == 0) {
        //no error in file
        if ($_FILES['pro_image']['size'] <= 1000000000000) {
            //file size is less than 1mb
    
            $ext = pathinfo($_FILES['pro_image']['name'], PATHINFO_EXTENSION); //returns file extension
            
    
            if(in_array($ext, $allowed_ext)){
                //allowed format
                //Image-123123.jpg
                $file_name =$name_person."Image-" . time() . "." . $ext;
                $path = "../../assets/profile/". $file_name;
            }else{
                echo "File format not supported.";
            }
        }else{
            echo "File size should be less than 1MB.";
        }
    }else{
        echo "Error in file.";
    }
    

    $sql="INSERT INTO signininfo
        SET
        logname='".$_POST['logname']."',
        logemail='".$_POST['logemail']."',
        logpassword='".$_POST['logpassword']."',
        logage='".$_POST['logage']."',
        imgProfile='$file_name',
        logudelete=0
    ";
    
    

    $query=mysqli_query($log,$sql);
    if($query){
        // move_uploaded_file($_FILES['pro_image']['tmp_name'], $path);
           // Compress image
     function compressImage($source, $destination, $quality) {  
        $info = getimagesize($source);
        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);  
        elseif ($info['mime'] == 'image/gif') 
            $image = imagecreatefromgif($source);  
        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);  
            imagejpeg($image, $destination, $quality);    
  }

        $check=compressImage($_FILES['pro_image']['tmp_name'], $path, 75);
        if($check){
            echo "success";
        }
        else{
            echo "fatal error IDK";
        }
     

        // this is for session storing all info user 
        $_SESSION['user_name_profile']=$_POST['logname'];
        $_SESSION['user_email_profile']=$_POST['logemail'];
        $_SESSION['user_img_name']=$file_name;
        // this is for session storeing all info user end 
        $_SESSION['logSuccess']=true;
        $_SESSION['img_name']=$file_name;
        setcookie('isCookie' , true , time() +86400);
        header("location: ../../index.php?id=1");
        // echo "haha";
    }
    else{
        $_SESSION['logError_unique']=true;
        header("location: ../../index.php?id=1");
    }
}
else{
    $_SESSION['logError']=true;
    echo "haha";
    header("location: ../../index.php?id=1");
}
?>