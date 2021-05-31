<?php
require_once './Database/admin/connect.php';
echo "Displaying login information <br><br>";
$i=0;
$j=0;
$sql="SELECT * FROM signininfo";
$query=mysqli_query($login,$sql);
if($query){
    if(mysqli_num_rows($query)<=0){
        echo "No Data in table";
    }
    else{
        while($row=mysqli_fetch_assoc($query)){
            echo ++$i." ".") ";
            echo $row['logname']." ";
            echo $row['logemail']." ";
            echo $row['logpassword']." ";
            echo $row['logage']." ";
            echo $row['imgProfile']." ";
            echo "<br><br>";
        }
    }
}
else{
    echo "error occured contact to administrator";
}
echo "<br><br><br><br>";
echo "Displaying upload picture information<br><br>";
$sql2="SELECT * FROM upload_user";
$query2=mysqli_query($upload,$sql2);
if($query2){
    if(mysqli_num_rows($query2)<=0){
        echo "No Data in table";
    }
    else{
        while($row2=mysqli_fetch_assoc($query2)){
            echo ++$j." ".") ";
            echo $row2['user_name']." ";
            echo $row2['user_message']." ";
            echo $row2['user_mail']." ";
            echo $row2['user_link']." ";
            echo $row2['user_pic_show']." ";
            echo $row2['user_pic']." ";
            echo "<br><br>";
        }
    }
}
else{
    echo "error occured contact to administrator";
}

?>