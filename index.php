<?php
session_start();

require_once "./Database/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix</title>

    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- --------for icon at top---------- -->
    <link rel="icon" href="./assets/LOGO.png" type="image/x-ixon">

    

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- --------owl-caresoul----------- -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    
    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/Style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/pop.css?v=<?php echo time(); ?>">
    

    <script data-ad-client="ca-pub-4206967270523120" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    

    <!-- ------------bootstrap------------------- -->
</head>
<body>
    <!-- ----------------messanger--------------------  -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="103833591536046">
      </div>
    <!-- ------------------ messanger end------------ -->

    <!-- ------------------ Navigation --------------------- -->
  
    <nav class="nav">
    <div class="nav-menu flex-row">
        <div class="nav-brand">
            <!-- of we click this it will display whole page -->
            <a href="./index.html" class="text-gray" ><img class="logon" src="./assets/LOGO.png" alt="logo"> </a> 
           
        </div>
        <!-- This is for Nav Items -->
        <div class="toggle-collapse">
            <div class="toggle-icons">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div>
            <ul class="nav-items">
                <li class="nav-link">
                    <a href="index.php?id=1">Home</a>
                </li>
                <li class="nav-link">
                    <a href="index.php?id=2">Blogs</a>
                </li>
                <li class="nav-link">
                    <!-- <a href="#" onclick="alertfunc()">Contents</a> -->
                    <a href="index.php?id=3">Gallery</a>
                </li>
                <li class="nav-link">
                    <a href="index.php?id=4">About</a>
                </li>
                <li class="nav-link">
                    <a href="index.php?id=5">Contact</a>
                </li>
            </ul>
        </div>
        <div class="stick">
            <!-- This is for Icons -->
            <div class="social text-gray">
            
                <?php
                    // unset($_SESSION['logSuccess']);
                    
                    if(isset($_SESSION['logSuccess'])){
                    $pro_name=$_SESSION['img_name'];
                    $path='assets/profile/'.$pro_name;
                    // echo $path;
                ?>
                        <a href="index.php?id=108"><img class="pic-profile" src=<?php echo $path ;?>  alt="logo"></a>
                        <a href="index.php?id=109"><i class="far fa-comment-alt"></i></a>
                        
                        <!-- <a href=""> <div class="pic-profile"></div> </a> -->
                        <a href="./Database/login/logout.php"><i class="fas fa-sign-out-alt">Logout</i></a> 
                        <?php
                    }
                    else if(isset($_COOKIE,$_COOKIE['isCookie'])){
                        ?>
                        <a href="index.php?id=109"><i class="far fa-comment-alt"></i></a>
                        <a href="index.php?id=108"><img class="pic-profile" src=<?php echo $path ;?>  alt="logo"></a>
                        <a href="./Database/login/logout.php"><i class="fas fa-sign-out-alt">Logout</i></a> 
                        <?php
                    }
                    else{
                        ?>
                        <a href="#"  id="loginEvent"><i class="fas fa-user-circle"></i></a>
                        <?php
                    }
                ?>
                <?php
                    if(isset($_SESSION['log_signin_error'])){
                ?>
                <div class="cre_error">
                    <p class="paragra">Credentials Didn't Match</p>
                </div>
                <?php
                        unset($_SESSION['log_signin_error']);
                    }
                ?>
                <?php 
                    if(isset($_SESSION['logError'])){
                ?>
                        <div class="cre_error">
                    <p class="paragra">Enter all details</p>
                    </div>
                <?php
                unset($_SESSION['logError']);
                    }
                ?>
                <?php 
                    if(isset($_SESSION['logError_unique'])){
                ?>
                        <div class="cre_error">
                    <p class="paragra">Enter Unique Name</p>
                    </div>
                <?php
                unset($_SESSION['logError_unique']);
                    }
                ?>
            </div>
        </div>
    </div>
</nav>

 <main>
    <!-- ----------for pop up-------------------->
    <!-- <div class="modal-container" id="modal-container">
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
    </div> -->
    <!-- ----------------------pop up end-------------------  -->

    <!-- -----------for account login--------  -->

    <div class="login-container" id="login-container">
        <div class="login">
            <button class="close-btn" id="close-login"><i class="fa fa-times"></i></button>
            <div class="login-content">
                <div class="header">
                    <div class="logo-login">
                        <img src="./assets/LOGO.png" height="90vh" alt="">
                    </div><hr>
                    <p class="paragra">
                        <b>Welcome to freePhoenix</b><br>
                        <span class="check">create your ideas</span> 
                    </p>
                </div>
            <form action="./Database/login/insert.php" method="POST" enctype="multipart/form-data">
                <input class="wid-specify" name="logname" type="text" placeholder="Enter Name"><br>
                <input class="wid-specify" name="logemail" type="email" placeholder="Enter email"><br>
                <input class="wid-specify" name="logpassword" type="password" placeholder="Enter password"><br>
                <input class="wid-specify" name="logage" type="text" placeholder="Age"><br><br>
                Image : <input type="file" name="pro_image" ><br><br>
                <input class="wid-specify conti" type="submit" value="Continue">
            </form>
            <div class="foot">
                <div class="paragra">
                    or<br>
                    <div class="signup-login" id="signup-login">SignIn</div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- -------------account login end------------  -->

    <!-- ---------------sign up--------------  -->
    <div class="signup-container" id="signup-container">
        <div class="signup">
            <button class="close-btn" id="close-signup"><i class="fa fa-times"></i></button>
            <div class="signup-content">
                <div class="header">
                    <div class="logo-login">
                        <img src="./assets/LOGO.png" height="90vh" alt="">
                    </div><hr>
                    <p class="paragra">
                        <b>Welcome to freePhoenix</b><br>
                        <span class="check">create your ideas</span> 
                    </p>
                </div>
            <form action="./Database/login/signin/signval.php" method="POST">
                <input class="wid-specify" name="signName" type="text" placeholder="Enter UserName"><br>
                <input class="wid-specify" name="signPass" type="password" placeholder="Enter password"><br>
                <div class="forget"> <p class="paragra">Forget Password ? <br> contact on facebook for now</p> </div>
                <input class="wid-specify conti" type="submit" value="Continue">
            </form>
            <div class="foot">
                <div class="paragra">
                    or<br>
                    <div class="signin-login" id="signin-login">SignUp</div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- sign up end ---  -->
</main>

<!-- ------------------ Navigation --------------------- -->
<?php
    if(!isset($_GET['id'])){
        require_once './Pages/one.html';
    }
    else{
        $i=$_GET['id'];
        if($i==1){
            require_once './Pages/one.html';
        }
        else if($i==2){
        ?>
            <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/main.html';
        }
        else if($i==3){
            ?>
            <link rel="stylesheet" href="./css/Image.css?v=<?php echo time(); ?>">
            <?php
            require_once 'Image.php';
        }
        else if($i==4){
            ?>
            <link rel="stylesheet" href="./css/Style2.css?v=<?php echo time(); ?>">
            <?php
            require_once 'about.html';
        }
        else if($i==5){
            ?>
            <link rel="stylesheet" href="./css/contactStyle3.css?v=<?php echo time(); ?>">
            <?php
            require_once 'contact.php';
        }
        else if($i==100){
            ?>
            <link rel="stylesheet" href="./css/std6.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std6.html';
        }
        else if($i==101){
            ?>
            <link rel="stylesheet" href="./css/std3.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std3.html';
        }
        else if($i==102){
            ?>
            <link rel="stylesheet" href="./css/std1.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std1.html';
        }
        else if($i==103){
            ?>
            <link rel="stylesheet" href="./css/std5.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std5.html';
        }
        else if($i==104){
            ?>
            <link rel="stylesheet" href="./css/std7.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std7.html';
        }
        else if($i==105){
            ?>
            <link rel="stylesheet" href="./css/pep1.css?v=<?php echo time(); ?>">
            <link rel="stylesheet" href="./css/Database/comment.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/pep1.php';
        }
        else if($i==106){
            ?>
            <link rel="stylesheet" href="./css/std2.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std2.html';
        }
        else if($i==107){
            ?>
            <link rel="stylesheet" href="./css/std4.css?v=<?php echo time(); ?>">
            <?php
            require_once './blogs/std4.html';
        }
        else if($i==108){
            ?>
            <link rel="stylesheet" href="./css/profile.css?v=<?php echo time(); ?>">
            <?php
            require_once './profile.php';
        }
        else if($i==109){
            ?>
            <link rel="stylesheet" href="./css/message.css?v=<?php echo time(); ?>">
            <?php
            require_once './message.php';
        }
        else if($i==110){
            ?>
            <?php
            require_once 'admin.php';
        }
    }
    
?>

    <!-- /* ------------- Main Section site ----------- */ -->


    <!-- ------------------footer---------------------- -->

    <footer class="container">
        <div class="newsletter">
            <h1>News letter</h1>
            <p class="txfooterHome">Stay updated with our latest</p>
            <form action="#">
            <input class="emfooterHome" type="text" placeholder="Email">
                <input class="emfooterHome" type="submit" name="Submit" onclick="alertfunc()">
            </form>
        </div>
        <div class="follow"><h1>Follow</h1>
        <p class="txfooterHome">Let us be Social</p>
        <div class="footerStyle">
            <a class="fb" href="https://www.facebook.com/Free-Phoenix-103833591536046/?modal=admin_todo_tour&notif_id=1604329347320347&notif_t=page_invite&ref=notif"><i class="fab fa-facebook"></i> </a> <!--Using awesome font-->
            <a href="https://www.youtube.com/channel/UCpiXKQm3Pj9BHcqDdf-WxVg"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="rights">
            
            <h2>Copyright ©2020 All rights reserved | raizozan2443@gmail.com | <br>+977 9813951823</h3>
        </div>
        </div>
       
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- ------------------footer---------------------- -->

    <!-- Jquery Libaryfile -->
    <script src="./js/Jquery3.4.1.min.js"></script>


    <!-- -owl-caresoul js------- -->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- Custom JS file -->
    <script src="./js/main.js"></script>
    <script type="text/javascript">
        function alertfunc(){
            var alt=confirm("we are working here");
        }
        function alertMessage(){
            window.alert("If you love to read and write stuffs be sure to connect to us also if you want website for your perosnal use or business we desgin your website .");
        }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="./js/script.js"></script>
    <script src="./js/login.js"></script>
    <script src="./js/signup.js"></script>
</body>
</html>