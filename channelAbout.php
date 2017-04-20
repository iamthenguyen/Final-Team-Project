<?php
session_start();
if (isset($_SESSION['user'])){

	include 'logInHeader.php';


}else {
	header('Location : index.php', true, 302);
}
?>

<!-- channel -->
<div class="chanal">
    <div class="row2">
        <div class="img">
            <img src="assets/images/user-banners/<?= $userBanner ?>" alt="" class="c-banner" >
            <div class="c-avatar">
                <a href="#"><img src="./assets/images/user-pictures/<?= $userPic?>" alt="" ></a>
            </div>
        </div>
    </div>
</div>
<!-- ///channel -->


<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="channel-details">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-2 col-xs-12">
                            <div class="c-details">
                                <div class="c-name">
                                    <?= $userName ?>
                                </div>
                                <div class="c-nav">
                                    <ul class="list-inline">
                                        <li><a href="channel.php">Videos</a></li>
                                        <li><a href="channelPlaylist.php">Playlist</a></li>
                                        <li><a href="channelLikedChannels.php">Channels</a></li>
                                        <li><a href="channelDiscusion.php">Discussion</a></li>
                                        <li><a href="#">About</a></li>
                                    </ul>
                                </div>
                                <div class="c-sub pull-right">
                                    <div class="c-sub-wrap">
                                    	<div class="c-f"> Subscribers</div>
                                        <div class="c-s">
                                            <?= $subscribers ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured Videos -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-8 col-xs-12 col-sm-6">
                                <div class="btn-group bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Uploads <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-4 col-xs-12 col-sm-6">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Date Added ( Newest ) <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="maxresdefault.jpg" alt="" ></a>
                                        <div class="time">3:50</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Man's Sky: 21 Minutes of New Gameplay - IGN First</a>
                                    </div>
                                    <div class="v-views">
                                        27,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-2.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">GTA 5: Michael, Franklin, and Trevor in the Flesh</a>
                                    </div>
                                    <div class="v-views">
                                        8,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-3.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Battlefield 3: Official Fault Line Gameplay Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        2,729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-4.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Batman Arkham City: Hugo Strange Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        7,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-5.png" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">BATTALION 1944: TAKING ON BATTLEFIELD 5</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php">
                                            <img src="assets/images/video1-6.png" alt="">
                                            <div class="time">7:27</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                                    </div>
                                    <div class="v-views">
                                        185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-7.png" alt=""></a>
                                        <div class="time">12:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Amazing Facts About Nebulas Inside Deep Universe</a>
                                    </div>
                                    <div class="v-views">
                                        203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-8.png" alt=""></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-1.png" alt=""></a>
                                        <div class="time">54:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">There Can Only Be One! Introducing Tanc & Hercules</a>
                                    </div>
                                    <div class="v-views">
                                        127,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-2.png" alt=""></a>
                                        <div class="time">47:12</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Pokémon 3: The Movie - Spell Of The Unown: Entei HD...</a>
                                    </div>
                                    <div class="v-views">
                                        18,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-3.png" alt=""></a>
                                        <div class="time">19:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Bullet Trains and Octopus Balls in South Korea</a>
                                    </div>
                                    <div class="v-views">
                                        729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-4.png" alt=""></a>
                                        <div class="time">21:18</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Top 10 NEW 3DS Games Of 2016 that blew our mind</a>
                                    </div>
                                    <div class="v-views">
                                        79,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-5.png" alt=""></a>
                                        <div class="time">1:23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Mirror's Edge Catalyst Beta: PS4 vs Xbox One Frame-Rate... </a>
                                    </div>
                                    <div class="v-views">
                                        519,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-6.png" alt=""></a>
                                        <div class="time">8:27</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">THE MAGNIFICENT SEVEN - Teaser Trailer (HD)</a>
                                    </div>
                                    <div class="v-views">
                                        15,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-7.png" alt=""></a>
                                        <div class="time">6:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Game of Thrones Season 6: Event Promo (HBO)</a>
                                    </div>
                                    <div class="v-views">
                                        43,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-8.png" alt=""></a>
                                        <div class="time">5:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">CHAPPIE Movie – Die Antwoord Featurette...</a>
                                    </div>
                                    <div class="v-views">
                                        3,202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/playlist-1.png" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">BATTALION 1944: TAKING ON BATTLEFIELD 5</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php">
                                            <img src="assets/images/playlist-2.png" alt="">
                                            <div class="time">7:27</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                                    </div>
                                    <div class="v-views">
                                        185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/playlist-3.png" alt=""></a>
                                        <div class="time">12:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Amazing Facts About Nebulas Inside Deep Universe</a>
                                    </div>
                                    <div class="v-views">
                                        203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/playlist-4.png" alt=""></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/playlist-4.png" alt=""></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class=" col-lg-3 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/playlist-4.png" alt=""></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->

                <!-- pagination -->
                <div class="v-pagination">
                    <ul class="list-inline">
                        <li><a href="#">
                            <div class="pages"><i class="cv cvicon-cv-previous"></i></div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">1</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">2</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages active">3</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">4</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">5</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">...</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">10</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages"><i class="cv cvicon-cv-next"></i></div>
                        </a></li>
                    </ul>
                </div>
                <!-- /pagination -->

            </div>
        </div>
    </div>
</div>

<?php 
	require 'footer.php';
?>
