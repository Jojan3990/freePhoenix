<?php
    require_once "database/connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JB Struct</title>

    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- --------for icon at top---------- -->
    <link rel="icon" href="./assests/LOGO.png" type="image/x-ixon">

    

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- --------owl-caresoul----------- -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/Style.css">
    

    <!-- ------------bootstrap------------------- -->
</head>
<body>

    <!-- ------------------ Navigation --------------------- -->
    <div class="info">
        <p class="paragra">
            <i class="fas fa-phone-volume"></i> &nbsp;+977 9849166906 &nbsp; <i class="fas fa-envelope-open-text"></i>&nbsp; raizozan2443@gmail.com
        </p>
    </div>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <!-- of we click this it will display whole page -->
                <a href="./index.html" class="text-gray" ><img class="logon" src="./assests/LOGO.png" alt="logo"> </a> 
               
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
                        <a href="#" onclick="alertfunc()">Product & services</a>
                    </li>
                    <li class="nav-link">
                        <!-- <a href="#" onclick="alertfunc()">Contents</a> -->
                        <a href="index.php?id=2">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" onclick="alertfunc()">About Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="index.php?id=3">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="stick">
                <!-- This is for Icons -->
                <div class="social text-gray">
                    <a href="#"><i class="fab fa-facebook"></i> </a> <!--Using awesome font-->
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ------------------ Navigation --------------------- -->

<?php 
    if(!isset($_GET['id'])){
        require_once 'main.php';
    }
    else{
        $i=$_GET['id'];
        if($i==1){
            require_once 'main.php';
        }
        else if($i==2){
        ?>
        <link rel="stylesheet" href="./css/image.css?v=<?php echo time(); ?>">
        <?php
            require_once 'image.php';
        }
        else if($i==3){
        ?>
        <link rel="stylesheet" href="./css/contact.css?v=<?php echo time(); ?>">
        <?php
            require_once 'contact.php';
        }
    }
?>


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
        </div><br>
        <div class="rights">
            <h2>Copyright ??2020 All rights reserved | raizozan2443@gmail.com | <br>+977 9813951823</h3>
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
    </script>
    

</body>
</html>