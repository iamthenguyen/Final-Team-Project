<?php
session_start();
if (isset($_SESSION['user'])){

	include 'logInHeader.php';


}else {
	header('Location : index.php', true, 302);
}
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 v-history">

                <!-- History -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-8 col-xs-12 col-sm-6">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active active">Watch history</a></li>
                                    <li><a href="#">Search history</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xs-12 col-sm-6 h-clear">
                                <a href="#"><i class="cvicon-cv-cancel"></i> Clear all Search History</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="cb-content">

                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-xs-12 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="maxresdefault.jpg" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Batman Arkham City: Hugo Strange Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        7,239,852 views. 3 years ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 84%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-2.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">No Man's Sky - What are Sentinels</a>
                                    </div>
                                    <div class="v-views">
                                        23,356 views . 6 days ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 78%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-3.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">When Time Breaks Down | Space Time | PBS Digital </a>
                                    </div>
                                    <div class="v-views">
                                        446,972 views . 4 months ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 89%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-4.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">The Witcher 3 Wild Hunt: Dragon Hunt monster contract </a>
                                    </div>
                                    <div class="v-views">
                                        4,796 views . 1 week ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 83%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-5.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Titanfall - Free The Frontier Trailer - Gamescom 2014</a>
                                    </div>
                                    <div class="v-views">
                                        813,197 views . 1 year ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 84%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-6.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">No Man's Sky: YEAR ONE! Updates and DLC! Ground </a>
                                    </div>
                                    <div class="v-views">
                                        2,200,965 views . 3 years ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 63%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-7.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">DIE ANTWOORD - UGLY BOY</a>
                                    </div>
                                    <div class="v-views">
                                        58,714,094 views . 1 year ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 95%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video1-8.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">100 Ways to Die in Fallout 4 (Part 1) mans1ay3r ver.</a>
                                    </div>
                                    <div class="v-views">
                                        1,899,380 views . 5 months ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 91%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-1.png" alt=""></a>
                                        <div class="time">2:15</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">Doom: 48 Minutes of Single-Player Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        652,056 views . 3 weeks ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 72%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="singleVideo.php"><img src="assets/images/video2-2.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="singleVideo.php">No Man's Sky's Sean Murray - IGN Unfiltered 06</a>
                                    </div>
                                    <div class="v-views">
                                        255,027 views . 3 weeks ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 86%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                            </div>
                        </div>
                        <!-- ///history video row -->
                    </div>
                </div>
                <!-- /History -->

                <div class="loadmore">
                    <form action="#" method="post">
                        <button class="btn btn-default h-btn">Load more Videos</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php 
	require 'footer.php';
?>