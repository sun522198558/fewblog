<!-- BEGIN IMAGE SLIDER
================================================== -->
<section id="slider-wrapper">

    <div class="flexslider">
        <ul class="slides">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <li>
                    <?php
                    echo $this->Html->image('00' . $i . '.jpg', array('url' => '#',
                        'taget' => "_blank",
                        'id' => 'image' . $i,
                        'class' => 'slide-image'));
                    ?>
                </li>					
            <?php endfor; ?>
        </ul>
    </div>

</section>
<!-- End #slider-wrapper
================================================== -->	
<section id="content-wrapper">
    <div id="content">
        <div id="timeline">
            <div id="time-line">
                <div class="timeline-icon-bottom">
                    <a href="#" class="icon-totop"></a>
                    <span class="tophov">Back to top</span>
                </div>   
            </div>

            <div id="picture-profile">
                <?php
                echo $this->Html->image('my_pic.png', array('url' => '#',
                    'alt' => __('作者的照片')
                ));
                ?>
            </div>

            <div id="profile-description">
                <div class="timeline-preview">
                    <div class="timeline-icon-pp"><a href="/" class="icon-profile"></a></div>
                    <div class="timeline-pointer-pp"><span class="tl-pointer"></span></div>
                    <div class="timeline-content">
                        <p class="description">
                            Hello everyone, <br />
                            my name is Timeline. Tech enthusiast, gadget freak, amazed by anything mobile. This blog is dedicated to pictures mainly taken by mobile devices. Although sometimes when the needs arise, a more dedicated device will be used. 
                        </p>
                    </div>
                    <div class="timeline-bar">

                        <div class="button-ask">
                            <a href="/ask">Message Me</a>
                        </div>

                        <div class="social-links">

                            <a href="http://twitter.com/tofuthemes" class="twitter"></a>


                            <a href="http://facebook.com/envato" class="facebook"></a>


                            <a href="http://gplus.to/#" class="gplus"></a>


                            <a href="http://dribbble.com/syinaction" class="dribbble"></a>


                            <a href="http://www.youtube.com/user/#" class="youtube"></a>


                            <a href="http://flickr.com/photos/59105255@N06" class="flickr"></a>


                            <a href="http://vimeo.com/#" class="vimeo"></a>


                            <a href="callto://#" class="skype"></a>

                        </div>
                    </div>
                </div>
            </div><!-- End #profile-description -->

            <!-- 
            =======================================
            BEGIN POSTS
            =======================================
            -->

            <div id="blogpost">

                <div class="post">
                    <div class="timeline-preview">
                        <div class="timeline-icon">
                            <a href="http://timeline-theme.tumblr.com/post/17587162833" class="icon-photo"></a>

                        </div>
                        <div class="timeline-pointer"><span class="tl-pointer"></span></div>

                        <div class="timeline-content">

                            <!--========== PHOTO POST ==========-->
                            <div class="photopost">
                                <a href="http://timeline-theme.tumblr.com/image/17587162833">
                                    <img src="http://25.media.tumblr.com/tumblr_lzd3drQ7v71rpzj0eo1_500.jpg" alt="" />
                                </a>
                                <div class="caption-post">

                                </div>
                            </div>

                        </div> <!-- End .timeline-content -->

                        <div class="timeline-bar">

                            <div class="datelike-bar">

                                <a href="/day/2012/02/13/" class="post-time">
                                    February 13, 2012
                                </a>



                                <a href="http://timeline-theme.tumblr.com/post/17587162833#notes" class="liked-count">9</a>

                            </div>

                            <div class="button-viewpost">
                                <a href="http://timeline-theme.tumblr.com/post/17587162833" class="view-post">View Post</a>
                            </div>

                            <div class="button-viewdetails">
                                <a href="http://timeline-theme.tumblr.com/post/17587162833" class="view-details">View Post</a>
                            </div>

                            <div class="button-share">
                                <div class="share-icon">
                                    <span class="share-btn"></span>
                                    <a href="http://twitter.com/home?status=http://tmblr.co/ZX_3yvGOHixH" class="share-twitter" target="_blank"></a>
                                    <a href="http://www.facebook.com/sharer.php?u=http://tmblr.co/ZX_3yvGOHixH" class="share-facebook" target="_blank"></a>
                                </div>
                            </div>		

                        </div> <!-- End .timeline-bar -->
                    </div> <!-- End .timeline-preview -->
                </div> <!-- End .post -->				
            </div>
        </div>
</section>
<!-- End #content-wrapper
================================================== -->	
<!-- 
    =======================================
    PERMALINK POSTS
    =======================================
-->
<div id="permalink_desktop">
    <div id="popupPages">
        <div id="popupBG"></div>
        <div id="post_box_wrap">
            <div id="permalink-wrapper">
            </div>
        </div>
    </div><!-- End #popupPages -->
</div>
