<?php
// session_start();
?>


    <!-- -------------main content---------------- -->
    
    <!-- ------------FORM---------------- -->
    <main class="containerpg3">    
        <div class="modal-container" id="modal-container">
        <div class="modal">
            <button class="close-btn" id="close"><i class="fa fa-times"></i></button>
            <div class="modal-content">
                <div class="header">
                    <h2 class="logo">Notice !</h2><hr>
                    <p class="tagline">If you love writing stuffs be sure to contact us also if you want<br> your personal or business website we make it here.  </p>
                </div>
                <form action="">
                    <input type="text" placeholder="Subscribe for newsletter">
                    <button class="subscribe" onclick="alertfunc()">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <form action="./Database/Query/insert.php" class="formContact" method="POST">
            <fieldset class="contactfield1">
                <legend class="contactlegend1">Send your feedback we will contact you</legend>
                
                <div>
                    <input class="frmContact" name="uname" type="text" placeholder="Name">
                </div><br>
                <div>
                    <input class="frmContact" name="ucontact" type="text" placeholder="Contact.No">
                </div><br>
                <div>
                    <input class="frmContact" name="uemail" type="text" placeholder="Email">
                </div><br>
                <div>
                    <textarea class="frmContact" name="umessage" placeholder="Message"></textarea>
                </div><br>
                <div class="frmContact">
                    <input class="frmContactSubmit" type="submit" name="Submit">
                </div >
            </fieldset>
        </form>
        <?php
            if(isset($_SESSION['success_message']) && !empty($_SESSION['success_message']) ){
        ?>
                <p class="paragra"><?php echo $_SESSION['success_message']; ?></p>
                <?php session_destroy();
            }
            else if(isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])){
            ?>

                <p class="paragra"><?php echo $_SESSION['error_message']; ?></p>
            <?php
                session_destroy();
            }
        ?>
    </div>
    <div class="connect">
       <img class="imgcontact" src="./assets/circle.png" alt="Img" height="200px"> 
       <h1>Connect</h1><hr>
       <div class="connectSocial">
        <a href="#"><i class="fab fa-facebook"></i> </a> <!--Using awesome font-->
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    </div>
    </main>

    <!-- ------------FORM---------------- -->

    <!-- -------------main content---------------- -->

     