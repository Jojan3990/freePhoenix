<!-- -----------main-------------  -->

<main>
    <section class="site-title-main">
        <div class="site-background-forMain">
            <h1>JB Structre ,</h1>
            <h3>Gallery for all work related works</h3>
            <a href="./blogs/main.html"><button class="btn">Explore</button></a>
        </div>
    </section><br><br><br><br>

    <div class="container_isset">
                <div class="user_info">
                    <div class="top">
                        <p class="paragra">Upload your Image</p>
                    </div>
                    <div class="form">
                        <form action="./database/upload/insert.php" method="POST" enctype="multipart/form-data">
                            Image :&nbsp;&nbsp;  <input type="file" class="pic_me" name="pic_post" ><br><br>
                            Message : <input class="message_file" type="text" name="message" placeholder="Enter your message"><br><br>
                            <input class="submit" type="submit">
                        </form>
                    </div>
                </div>
            <div class="display">
            <?php
                if(isset($_SESSION['success_upload'])){
                    echo "We will upload, verify and email you";
                    unset($_SESSION['success_upload']);
                }
                if(isset($_SESSION['error_upload'])){
                    echo "there was problem in uploading Image . Try again or contact us on facebook or by mail";
                    unset($_SESSION['error_upload']);
                }
                ?>
            </div>
        </div>

    <div class="container">

        <?php 
                    $sql="SELECT * FROM upload_user";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)<=0){
                            echo "No Data in table";
                        }
                        else{
                            while($row=mysqli_fetch_assoc($query)){
                                $name=$row['img_name'];
                                $path_img='assets/upload/'.$name;
                                ?>
                                    <div class="image">
                                        <img src=<?php echo $path_img ; ?> alt="Image">
                                    </div>
                                <?php
                            }
                        }
                    }
                    else{
                        echo "error contact to administrator";
                    }
                ?>
                
        <div class="image">
            <img src="./assests/work/1.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/2.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/3.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/4.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/5.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/6.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/7.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/8.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/9.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/10.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/11.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/12.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/13.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/14.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/ll.jpg" alt="">
        </div>
        <div class="image">
            <img src="./assests/work/ll1.jpg" alt="">
        </div>
    </div>
</main>


<!-- ----------main end-----------------  -->

