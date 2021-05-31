<main>
    <div class="address-all">
        <div class="info-add">
            <i class="fas fa-address-card"></i>
        </div>
        <div class="info-con">
            <div class="address">
                <p class="paragra"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;
                    Khotang,Diktel<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Hat,Dadha 56200
                </p> 
            </div>
            <div class="mail">
                <p class="paragra">
                    <i class="fas fa-mail-bulk"></i>&nbsp;&nbsp;
                    raijozan2443@gmail.com
                </p>
            </div>
            <div class="phone">
                <p class="paragra">
                    <i class="fas fa-phone"></i>&nbsp;&nbsp;
                    +977 9849166906<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +977 9811726077
                </p>
            </div>
            <div class="hours">
                <p class="paragra">
                    <i class="far fa-clock"></i>&nbsp;&nbsp;
                    Open 24 hours any time a day 
                </p>
            </div>
        </div>
    </div>
    <div class="form-con">
                    <form action="database/insert.php" method="POST">
                        <input type="text" name="uname" class="formhere" placeholder="Enter Name"><br><br>
                        <input type="text" name="uphone" class="formhere" placeholder="Phone No."><br><br>
                        <input type="email" name="uemail" class="formhere" placeholder="Email"><br><br>
                        <input type="submit" class="submitform" value="SUBMIT">
                    </form>
    </div><br><br>
    <div class="session_query">
        <?php
            if(isset($_SESSION['query_success'])){
                echo "Thank you for your time";
                unset($_SESSION['query_success']);
            }
            if(isset($_SESSION['query_error'])){
                echo "Wrong information or enter all information";
                unset($_SESSION['query_error']);
            }
        ?>
    </div>
</main>
