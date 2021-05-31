<?php
session_start();
    require_once "connect.php";

    $sql="INSERT INTO query 
        SET
        uname='".$_POST['uname']."',
        uphone='".$_POST['uphone']."',
        uemail='".$_POST['uemail']."',
        udelete=0
    ";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:../index.php?id=3");
        $_SESSION['query_success']=true;
    }
    else{
        header("location:../index.php?id=3");
        $_SESSION['query_error']=true;
    }
?>