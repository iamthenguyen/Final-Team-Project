
<!-- channel -->
<div class="chanal">
    <div class="row2">
        <div class="img">
            <img src="assets/images/user-banners/<?= $channelBanner ?>" alt="" class="c-banner" >
            <div class="c-avatar">
                <a href="#"><img src="./assets/images/user-pictures/<?= $channelPic?>" alt="" ></a>
            </div>
        </div>
    </div>
</div>
<!-- ///channel -->

<div class="content-wrapper">
    <div class="container " >
        <div class="row">
            <div class="col-lg-12 channels v-history">

                <div class="channel-details">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-2 col-xs-12">
                            <div class="c-details">
                                 <div class="c-name" id="channel-name"> <?= $channelName ?></div>
                                <input type="hidden" id="@gdsfdY42$" value="<?= $userId ?>"  />
                                <input type="hidden" id="EfdsJs@4" value="<?= $sessuionUserId ?>"  />
                                <div class="c-nav">
                                       <ul class="list-inline">
                                        <li><a href="./ChannelController.php?@$^^%@@^@^$^@=<?= $userId ?>&page=Video" >Videos</a></li>
                                        <li><a href="./ChannelController.php?@$^^%@@^@^$^@=<?= $userId ?>&page=Playlist" >Playlist</a></li>
                                        <li><a href="./ChannelController.php?@$^^%@@^@^$^@=<?= $userId ?>&page=LikedChannels" id="channels">Channels</a></li>
                                        <li><a href="./ChannelController.php?@$^^%@@^@^$^@=<?= $userId ?>&page=Discusion" >Discussion</a></li>
                                        <li><a href="#">About</a></li>
                                    </ul>
                                </div>
                                <div class="c-sub pull-right">
                                    <div class="c-sub-wrap">
                                     	<button class="c-f" id="subscribers"> Subscribe </button>
                                        <div class="c-s" id="suscribers"><?= $subscribers ?></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You Liked Chennels -->
                <div class="content-block">
                    <div class="channels-content">
                        <h4>Liked Channels </h4>
                        <div class="clearfix"></div>
                        <div class="theme-section">
                            <div class="row" id="row-channels-container">
 
<!--                                 <div class="col-md-3 col-sm-4 col-xs-6"> -->
<!--                                     <div class="cns-block"> -->
<!--                                         <a href="#" class="cns-image"> -->
<!--                                             <img src="assets/images/video2-5.png" alt="image"> -->
<!--                                         </a> -->
<!--                                         <div class="cns-img-small"> -->
<!--                                             <div class="cns-small-wrapp"> -->
<!--                                                 <img src="assets/images/user-pictures/default-user.jpg" alt="small"> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="cns-info"> -->
<!--                                             <h5>Immense</h5> -->
<!--                                             <span>66,007 Subscribers</span> -->
<!--                                             <span>34 Videos</span> -->
<!--                                             <span>20 Million Views</span> -->
<!--                                             <span class="cv-percent"> -->
<!--                                                 <span class="cv-circle"></span> 73% -->
<!--                                             </span> -->
<!--                                         </div> -->
<!--                                     </div> -->
<!--                                 </div> -->
                                  
                            </div>
                        </div>
                    </div>
                </div>
               <!-- /You Liked Chennals -->

             		<div class="loadmore">
                    <form action="#" method="post" onsubmit="event.preventDefault();" >
                        <button class="btn btn-default h-btn" id="bnt-more-channels">Load more Videos</button>
                        <input type="hidden" id="assaeac2"  value="0" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
	require 'view/footer.php';?>
