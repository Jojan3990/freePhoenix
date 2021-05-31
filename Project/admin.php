<?php
    require_once "database/connect.php";
    echo "Showing Data <br>";
    $sql="SELECT * FROM query";
    $i=0;
    $query=mysqli_query($conn,$sql);
    if($query){
        if(mysqli_num_rows($query)<=0){
            echo "No Data in table";
        }
        
        else{
            while($row=mysqli_fetch_assoc($query)){
                echo "data no .".++$i."<br>";
                echo $row['uname']." ";
                echo $row['uphone']." ";
                echo $row['uemail']." ";
                echo "<br><br>";
            }
        }
    }
    else{
        echo "error";
    }

?>

