<?php
// require_once './Database/message/connect.php';
?>
<!-- <meta http-equiv="refresh" content="4" /> -->
<script type="text/javascript">
    window.onload = setupRefresh;
    function setupRefresh()
    {
        setInterval(refreshBlock); //Call function like this
    }
    function refreshBlock()
    {
       $('#test_show').load('box_message.php');
    }
  </script>
  
<main>
    <div class="con_main">
    <div class="container">
        <div class="header">
            <h3 class="heading">Positive Thinking</h3>
        </div>
        <div class="body" id="test_show">
        </div>
        <div class="foot-type">
            <form action="./Database/message/insert.php" method="POST">
                <textarea class="comment_user" name="comment_user" cols="10"  placeholder="Aa"></textarea>
                <input class="submit_edit" type="submit">
            </form>
        </div>
    </div>
    <div class="container_second">
        <div class="pic"></div>
    </div>
    </div>
</div>
<div class="error_show"> 
<?php
    if(isset($_SESSION['special_char_error'])){
        echo "No special characters or complex characters for now";
    }
    unset($_SESSION['special_char_error']);
?>
</div>
<!-- <script src="./js/bottomScrool.js"></script> -->
