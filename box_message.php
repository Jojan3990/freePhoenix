<?php
require_once './Database/message/connect.php';
?>
<?php
                $sql="SELECT * FROM messageall where udelete=0 ORDER BY message_id DESC";
                $query=mysqli_query($conn,$sql);
                // if(mysqli_num_rows($query<=0)){
                //     echo "No data in table";
                // }
                // else{
                    while ($row = mysqli_fetch_assoc($query)){
                        $pro_name=$row['message_user_pic'];
                        $path_pic='assets/profile/'.$pro_name;
            ?>
                        <div class="content">
                            <img class="profile_pic_edit" src="<?php echo $path_pic ;?>" alt="profile-pic">
                            <span class="comment_edit"><?php echo $row['user_comment'] ;?></span> 
                            
                        </div><br><br>
            <?php
                    }
                // }                                                  
            ?>
