<?php 
session_start();
require_once 'connect.php';


if(isset($_FILES['pic_post']) && !empty($_FILES['pic_post']) && isset($_POST['message']) && !empty($_POST['message'])){
    $message=$_POST['message'];
    $ext = pathinfo($_FILES['pic_post']['name'], PATHINFO_EXTENSION);
    $file_name="Image-" . time() . "." . $ext;
    $path = "../../assests/upload/". $file_name;

    $sql="INSERT INTO upload_user
    SET 
    img_name='$file_name',
    img_message='$message',
    udelete=0
";
$query=mysqli_query($conn,$sql);

if($query){
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

        $check=compressImage($_FILES['pic_post']['tmp_name'], $path, 55);
        if($check){
            echo "success";
            $_SESSION['success_upload']=true;
            header("location: ../../index.php?id=2");
        }
        else{
            echo "fatal error IDK";
        }
}
else{
    echo "some error occured contact to administrator";
}
}
else{
    $_SESSION['error_upload']=true;
    header("location: ../../index.php?id=2");
}


?>