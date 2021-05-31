<?php
$pro_name=$_SESSION['img_name'];
$path='assets/profile/'.$pro_name;
?>
<main>
    <div class="container">
    <div class="head-bio">
        <div class="profile-pic">
        <img class="pro-pic-panel" src=<?php echo $path ;?> alt="Profile pic">
        </div>
        <div class="body-here">
            <div class="top">
                <p class="paragra">Edit your profile</p>
            </div>
            <div class="form-here">
                <form action="./Database/login/update.php" method="POST" enctype="multipart/form-data">
                    <input class="mar_pad" type="text" name="new_name" value="<?php echo $_SESSION['user_name_profile']; ?>">
                    <input class="mar_pad  email_color" type="text" name="new_logemail" value="<?php echo $_SESSION['user_email_profile'] ;?>"><br><br>
                    <input class="mar_pad_pass" type="password" name="new_logpassword" placeholder="Password">
                    <p class="paragra">Strong password is recommended</p>
                    <input class="mar_pad_pass" type="password" name="new_logconfirm" placeholder="Confirm Password"><br>
                    <p class="paragra">profile picture:<input name="new_img_name" type="file"><br></p> 
                    <input class="info_submit" type="submit" value="Update Profile">
                    <p class="paragra color"> <?php 
                                                    if(isset($_SESSION['error_update_photo'])) {
                                                        echo "error while uploading picture<br><br>";
                                                    }
                                                    unset($_SESSION['error_update_photo']);
                                                    
                                                    if(isset($_SESSION['name_error_update'])){
                                                        echo "Enter unique name<br><br>";
                                                    }
                                                    unset($_SESSION['name_error_update']);

                                                    if(isset($_SESSION['success_for_update'])) { 
                                                    echo "Sucessfully Updated<br><br>";
                                                     } 
                                                    unset($_SESSION['success_for_update']);
                                                
                                                     
                                        ?> 
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="foot-bio">
        <p class="paragra">
            Thank you for taking your time to visit freePhoenix<br>New features will be added soon.
        </p>
    </div>
    </div>
</main>