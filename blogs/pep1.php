<?php
// intitializing page no for form
$_SESSION['value_page']=1;
// require_once "connect.php";
?>

<main>
    <section class="st">
        <div class="topPart">
            <h1 class="heading">Indigenous Peoples-Newar-Indigenous voice</h1>
            <p class="paragra">
            Who are Newar or Nepami ,<br>
            Newar or Nepami, are the historical inhabitants of the Kathmandu Valley and its surrounding areas in Nepal and the creators of its historic heritage and civilisation.
        </p>
        <div class="pic1"></div>
        </div>

        <div class="mainAll">
            <div class="forLeft">
                <p class="paragra">
                    <img src="../assets/People/Newari/pro.jpg" alt="img" height="100px" class="mainpictop"><br>
                    
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subin Tuladhar</b><br>
                <em>&nbsp;&nbsp;&nbsp;Student,Bachelors</em><br>&ensp;&nbsp;&nbsp;<em>March 15th,2021</em><br>&emsp;
                <a href="https://www.facebook.com/sub.tul.75/"> On Facebook<i class="fab fa-facebook"></i></a>
                <hr>
                </p>
                <p class="paragra">
                    Nepal was surrounded by Himalayas, hilly and flat lands. There are different kind of caste, Religions and culture.
                    There are different kind of caste and religion. In total there are 126 according to census 2011.
                    <br><br>
                    Among them Newar is one of the caste. There are 26 caste. Below is a list of 26 Newar castes, their sub-caste groups and clans, along with their traditional occupations and the most common surnames in their respective hierarchical positions. Also listed is the approximate percentages of the major castes of Newars sampled within Kathmandu Valley.
                    <br><br>
                    Long ago, Kathmandu Valley was fully occupied with People’s called Newar. Newar is a caste . Actually its not a Newar its a Newa. Nowadays all of the community pronounce its Newar .
                    The Kathmandu Valley and surrounding territories constituted the former Newar kingdom of the Nepal Mandala.Newa is one of the caste origin of Nepal.
                </p>
                <div class="forpicwithcon">
                    <div class="con1">
                        <p class="paragra">
                            Newar is also rich in culture. The newar celebrates diffrerent ceremonies (Jatra).on these jatra we celebrate by playing music by traditional drums flute and dancing . we prepare a feast (Bhoj) to the closefamily members.
                            One of the main jatras as follows:-<br>
                            <div class="list1">
                                <dl>
                                    <dt> <b>Gunla</b> </dt>
                                    <dd>:- On this jatra local newar people go to Swambhunath temple for 1 months.</dd>
                                </dl>
                                <dl>
                                    <dt> <b>Indrajatra</b> </dt>
                                    <dd>On this day local newar people celebrarte it by playing drums and local instruments (dhimae,bhushya,basuri,).this jatra will held in bansantpur . </dd>
                                </dl>
                                <dl>
                                    <dt> <b>Monhi &sunti(dashain and tihar)</b></dt>
                                </dl>
                                <dl>
                                    <dt> <b>Pancharya</b> </dt>
                                </dl>
                            </div>
                        </p>
                        <p class="paragra">
                            Each and every Jatras has their own story and way to celebrate it .It’s not compulsory to celebrate these Jatra in same way . each of them has their own way to celebrate. Newar’s are mainly follow a Buddhism but there is also Newar’s that follows a Hinduism. there are 3 types of Buddhist they are: -<br>
                            <div class="list1">
                                <ol>
                                    <li>Mahayana</li>
                                    <li>Therewada</li>
                                    <li>bajarayana</li>
                                </ol>
                            </div>  
                        </p>
                        <p class="paragra">On the any ritual worshipping ceremony we don’t offer chicken eggs  chicken meats and porks etc . Its strictly prohibited .</p>
                        <div class="piccon1"></div>
                    </div>
                </div>
                <div class="connect">
                    <h1>Connect</h1>
                    <div class="connectSocial">
                     <a href="#"><i class="fab fa-facebook"></i> </a> <!--Using awesome font-->
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                 </div>
                    <img class="imgcontact" src="./assets/LOGO.png" alt="Img" height="160px"> 
                 </div>
            </div>
    
            <div class="forRight">
                <div class="sidebar2">
                    <div class="notice-pic"></div>
                    <h3>---Notice---</h3>
                    <p class="paragra">This is for the Notice that we post your content Here
                        freely. Contents can be of anything you love to write, like poems, story, Game reviews,
                        Fictional thoughts e.t.c. Be sure to contact on <a href="https://www.facebook.com/Free-Phoenix-103833591536046/?modal=admin_todo_tour&notif_id=1604329347320347&notif_t=page_invite&ref=notif">Facebook <i class="fab fa-facebook"></i></a> for further query.
                    </p>
                </div>
                <div class="sidebar3">
                    <div class="fb1">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F103833591536046%2Fvideos%2F473646913664884%2F&show_text=true&width=560" width="420" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </div><br>
                <div class="sidebar4">
                    <h3>----Wanna contact Subin----</h3>
                    <p class="paragra"><b>Follow Subin Here</b> : 
                        <a href="https://www.facebook.com/sub.tul.75/"> On Facebook<i class="fab fa-facebook"></i></a><br>
                        Or you can contact Us on our Facebook page directly for forther query.
                    </p>
                </div><br>
                <div class="sidebar5">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/2BEATsAvouU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3>Newari Song</h3>
                </div>
            </div>
        </div>

        

        <div class="comment_section">
            <div class="form">

            <div class="comment_people_section">
                <p class="paragra"><i class="fas fa-comments"></i> Recent Comments</p><hr><br><br>
                    <?php
                        $sql="SELECT * from comment_here where udelete=0 AND page_no=1";
                        $query= mysqli_query($conn,$sql);

                        if(mysqli_num_rows($query)<=0){
                            echo "No data in table";
                        }
                        else{
                            while ($row = mysqli_fetch_assoc($query)){
                    ?>
                        <div class="all_person">
                            <div class="person">
                                 <p class="paragra"> <i class="fas fa-users"></i> <b><?php echo $row['uname'] ; ?></b>
                                    <?php echo $row['date_curr'] ;?> </p> 
                            </div>
                            <div class="person_comment">
                               <p class="paragra"><?php echo $row['ucomment']?></p>
                               <div class="right_align">
                               <a href="../Database/delete.php?id=<?php echo $row['uuid'] ;?>">Inappropriate Message</a>
                               </div>
                                  
                            </div>
                        </div>

                    <?php
                        echo "<br><br>";
                            }
                        }
                    ?>
            </div>

                <form action="./Database/insert.php" class="comment_form" method="POST">
                    <fieldset>
                        <legend class="legend1">Any Comments?</legend><br>
                        <div class="comm_comm">
                            <input class="comm" type="text" name="uname" placeholder="Enter Name"><br>
                        </div>
                        <div class="comm_comm">
                            <input class="comm" type="email" name="uemail"  placeholder="Enter Email"><br>
                        </div>
                        <div class="comm_comm">
                            <textarea class="comm" name="ucomment" cols="30" rows="3" placeholder="Enter comment"></textarea>
                        </div>
                        <div class="comm_comm">
                            <input class="frmContactSubmit" type="submit" name="Submit">
                        </div >
                    </fieldset>
                </form>
            </div>
            
            <div class="temp"></div>
        </div>
    </section>
</main>

