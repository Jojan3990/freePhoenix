<?php
session_start();
require_once "connect.php";

$sql="INSERT INTO comment_here
    SET 
    uname='".$_POST['uname']."',
    uemail='".$_POST['uemail']."',
    ucomment='".$_POST['ucomment']."',
    page_no='".$_SESSION['value_page']."'
";

$query=mysqli_query($conn,$sql);
if($query){
header("location: ../index.php?id=105");
exit();
}
else{
    echo "Error";
}
?>