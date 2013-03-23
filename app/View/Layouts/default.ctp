<!DOCTYPE html>    
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="imagetoolbar" content="false">
    <title>Timeline</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1" />


    <!-- Description -->
    <meta name="description" content="Hello everyone, my name is Timeline. Tech enthusiast, gadget freak, amazed by anything mobile. This blog is dedicated to pictures mainly taken by mobile devices. Although sometimes when the needs..."/>


    <meta name="generator" content="tofuthemes (tofuthemes.com)">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta property="og:site_name" content="Timeline">
    <meta property="og:title" content="Timeline">
    <meta property="og:description" content="Hello everyone, my name is Timeline. Tech enthusiast, gadget freak, amazed by anything mobile. This blog is dedicated to pictures mainly taken by mobile devices. Although sometimes when the needs...">

    <!-- Color Option -->
    <meta name="color:Background" content="#e4e6e9" />
    <meta name="color:Link" content="#4785d5" />
    <meta name="color:Timeline" content="#c8cbd6" />

    <!-- Upload Images Option -->
    <meta name="image:Background" content="" />
    <meta name="image:Favicon" content="" />
    <meta name="image:Logo" content="" />
    <meta name="image:Slider 1" content="" />
    <meta name="image:Slider 2" content="" />		    		    
    <meta name="image:Slider 3" content="" />	

    <!-- Link Image SLider -->
    <meta name="text:URL Image Slider 1" content="#" />
    <meta name="text:URL Image Slider 2" content="#" />
    <meta name="text:URL Image Slider 3" content="#" />

    <!-- Social Media Icon -->
    <meta name="text:Twitter Account" content="#" />
    <meta name="text:Facebook Account" content="#" />		    
    <meta name="text:Google Plus Account" content="#" />
    <meta name="text:Flickr Account" content="#" />
    <meta name="text:Dribbble Account" content="#" />
    <meta name="text:Vimeo Account" content="#" />		    
    <meta name="text:Youtube Account" content="#" /> 
    <meta name="text:Skype Account" content="#" />
    <meta name="text:Instagram Account" content="" />

    <meta name="if:Fixed Background Image" content="1" />
    <meta name="if:Enabled Image Slider" content="0" />
    <meta name="if:Enabled Facebook Widget" content="1" />
    <meta name="if:Enabled Tag Cloud Widget" content="1" />
    <meta name="if:Enabled Likes Widget" content="1" />
    <meta name="if:Enabled Following Widget" content="1" />	
    <meta name="if:Enabled Flickr Widget" content="1" />
    <meta name="if:Enabled Instagram Widget" content="" />	
    <meta name="if:Enabled Popup View Post" content="1" />	

    <!-- Disqus Shortname -->
    <meta name="text:Disqus Shortname" content="" />

    <!-- Google Analytics -->
    <meta name="text:Google Analytics ID" content="" />

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
    <!-- TWITTER TAGS -->
    <meta charset="utf-8">
    <meta name="twitter:site" content="tumblr" />
    <meta name="twitter:creator" content="tofuthemes" />
    <meta http-equiv="x-dns-prefetch-control" content="off"/>
    <meta name="keywords" content="photoset,instagram,quote,Steve Job,Wetsuit" />

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('flexslider', 'popup-style', 'reset', 'skin'));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <style>
        /* 
        ================================================
        TIMELINE TUMBLR THEME - by Tofuthemes 
        (http://tofuthemes.com) 
        ================================================ 
        */

        /* =============================================
        GENERAL STYLE
        ================================================ */
        * {margin: 0; padding: 0;}

        body {
            background-color: #e4e6e9;

            background-image: url('http://static.tumblr.com/bygdzhm/2Yhlyc6b8/bg-pattern.png');



            background-attachment: fixed;

            font-family: Helvetica, sans-serif;
            font-size: 11px;
            font-weight: normal;
            color: #626a76;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Armata', sans-serif;
            font-weight: normal;
        }
        a {
            color: #9fa2aa;
            text-decoration: none;
        }
        a:hover {
            color: #4785d5;
        }
        a img {border: none;}
        p {font-weight: normal;}


        /* =============================================
        LAYOUT POSITION
        ================================================ */
        #container {
            position: relative;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        #top-content {
            position: fixed;
            width: 100%;
            float: left;
            margin: 0;
            z-index: 1000;
        }


        /* =============================================
        HEADER SECTION
        ================================================ */
        #header-wrapper {
            position: fixed;
            width: 100%;
            height: auto;
            margin: 0;
            float: left;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            background: #2d2f39 url('http://static.tumblr.com/bygdzhm/UlKlz10nr/bg-top-header.png') repeat-x left bottom;
            -webkit-box-shadow: 0px 1px 1px #000, inset 0px 1px 0px #575961;
            -moz-box-shadow: 0px 1px 1px #000, inset 0px 1px 0px #575961;
            box-shadow: 0px 1px 1px #000, inset 0px 1px 0px #575961;
            z-index: 100;
        }
        #header {
            position: relative;
            margin: 0 auto;
        }

        /*========== LOGO/TITLE ==========*/
        #logo-title {
            position: relative;
            height: 30px;
            margin: 10px;
            float: left;
            overflow: hidden;
        }
        #logo-title a h1 {
            float: left;
            font-family: 'Armata', sans-serif;
            font-size: 26px;
            font-weight: normal;
            line-height: 30px;
            color: #bbb;
            -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, 
                from(rgba(0,0,0,1)), color-stop(100%, rgba(0,0,0,.5)), to(rgba(0,0,0,1)));
            text-shadow: 1px 1px 0 #000;
        }
        #logo-title a h1:after {
            color: #fff;  
            text-shadow: 0 1px 0 white;
        }
        #logo-title a img {
            max-width: 200px;
            max-height: 30px;
            border: none;
        }

        /*========== SEARCH FORM ==========*/
        #search {
            position: relative;
            width: 160px;
            height: 32px;
            margin: 10px 5px 10px 0;
            padding: 0;
            float: right;
        }
        #search #searchInput {
            position: relative;
            width: 100px;
            height: 12px;
            margin: 0;
            padding: 10px 38px 8px 12px;
            font-size: 11px;
            line-height: 12px;
            color: #acb3bf;
            text-shadow: 0 1px 0 #2c323c;
            background: #3e4754;
            border: 1px solid #13151c;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            outline: none;
        }
        #search #searchBtn {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 34px;
            height: 32px;
            text-indent: -10000px;
            background: url('http://static.tumblr.com/bygdzhm/M0mlyndxn/btn-search.png') no-repeat left top;
            border: none;
            cursor: pointer;
        }
        #search #searchBtn:hover {
            background: url('http://static.tumblr.com/bygdzhm/M0mlyndxn/btn-search.png') no-repeat left bottom;
        }



        /*========== MENU NAVIGATION ==========*/
        #nav-menu {
            position: relative;
            height: 32px;
            margin: 10px 5px 10px 0;
            padding: 0;
            float: right;
        }
        #nav-menu ul.menu-top-list,
        #nav-menu ul.menu-top-icon {
            margin: 0;
            padding: 0;
            height: 32px;
            float: left;
        }


        /*========== 320px OR LESS ==========*/
        #nav-menu ul.menu-top-icon li.menu {
            list-style: none;
            float: left;
            width: 32px;
            height: 32px;
        }
        #nav-menu ul.menu-top-icon li.menu a.menu {
            position: relative;
            float: left;
            width: 32px;
            height: 32px;
            background-image: url('http://static.tumblr.com/bygdzhm/eVolz10ut/btn-menu-dropdown.png'); 
            background-repeat: no-repeat; 
            background-position: left top;
        }
        #nav-menu ul.menu-top-icon li.menu a.menu:hover {
            background-position: left center;
        }
        #nav-menu ul.menu-top-icon li.menu a.menu:active {
            background-position: left bottom;
        }



        /*========== 640px OR MORE ==========*/
        #nav-menu ul.menu-top-list li.menu {
            list-style: none;
            float: left;
            height: 32px;
            background: url('http://static.tumblr.com/bygdzhm/jyxlyndzd/btn-menu-bg.jpg') repeat-x left top;
        }
        #nav-menu ul.menu-top-list li.menu:first-child {
            height: 32px;
            background: url('http://static.tumblr.com/bygdzhm/QKklyne0b/btn-menu-bgfirst.png') no-repeat left top;
        }
        #nav-menu ul.menu-top-list li.menu:hover:first-child {
            background: url('http://static.tumblr.com/bygdzhm/QKklyne0b/btn-menu-bgfirst.png') no-repeat left center;
        }
        #nav-menu ul.menu-top-list li.menu:active:first-child {
            background: url('http://static.tumblr.com/bygdzhm/QKklyne0b/btn-menu-bgfirst.png') no-repeat left bottom;
        }

        #nav-menu ul.menu-top-list li.menu:last-child {
            width: ;
            height: 32px;
            background: url('http://static.tumblr.com/bygdzhm/4Wnlyne29/btn-menu-bglast.png') no-repeat right top;
        }
        #nav-menu ul.menu-top-list li.menu:hover:last-child {
            background: url('http://static.tumblr.com/bygdzhm/4Wnlyne29/btn-menu-bglast.png') no-repeat right center;
        }
        #nav-menu ul.menu-top-list li.menu:active:last-child {
            background: url('http://static.tumblr.com/bygdzhm/4Wnlyne29/btn-menu-bglast.png') no-repeat right bottom;
        }

        #nav-menu ul.menu-top-list li.menu:hover {
            background: url('http://static.tumblr.com/bygdzhm/jyxlyndzd/btn-menu-bg.jpg') repeat-x left center;
        }
        #nav-menu ul.menu-top-list li.menu:active {
            background: url('http://static.tumblr.com/bygdzhm/jyxlyndzd/btn-menu-bg.jpg') repeat-x left bottom;
        }
        #nav-menu ul.menu-top-list li.menu a.menu {
            position: relative;
            float: left;
            font-size: 12px;
            font-weight: normal;
            line-height: 12px;
            color: #858994;
            text-shadow: 0px 1px 0 #121317;
            padding: 10px 15px;
            background: url('http://static.tumblr.com/bygdzhm/4Fblyne3v/menu-spliter.png') no-repeat right top;
        }
        #nav-menu ul.menu-top-list li.menu:last-child a {
            background: none;
        }
        #nav-menu ul.menu-top-list li.menu a:hover {
            color: #858994;
            text-shadow: 0px 1px 0 #121317;
        }
        #nav-menu ul.menu-top-list li.pages {

        }
        #nav-menu ul.menu-top-list li.menu a.pages-menu {
            line-height: 18px;
            padding: 7px 40px 7px 15px;
        }
        #nav-menu ul.menu-top-list li.menu a.pages-menu span.menu-triger {
            position: absolute;
            top: 7px;
            right: 10px;
            width: 20px;
            height: 20px;
            background: url('http://static.tumblr.com/bygdzhm/OJFlyne4j/btn-dropdown.png') no-repeat left top;
            float: left;
        }

        span.pointer-sub {
            position: absolute;
            top: -7px;
            width: 12px;
            height: 9px;
            background-image: url('http://static.tumblr.com/bygdzhm/6Kvlyne57/menu-pointer.png');
            background-repeat: no-repeat;
            background-position: left top;
            float: left;
            z-index: -1;
        }

        #pages-list {
            display: none;
            position: absolute;
            height: auto;
            padding: 0;
            background-color: #282b34;
            border: 1px solid #000000;
            z-index: 200;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: inset 0px 0px 1px 1px #40424a, 0px 1px 5px #000;
            -moz-box-shadow: inset 0px 0px 1px 1px #40424a, 0px 1px 5px #000;
            box-shadow: inset 0px 0px 1px 1px #40424a, 0px 1px 5px #000;
        }
        #pages-list ul.submenu-top {
            display: block;
            margin: 0;
            padding: 1px;
            width: 116px;
            float: left;
        }
        #pages-list ul.submenu-top li.submenu {
            list-style: none;
            width: 116px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/Romlyne6a/divider.png') repeat-x left bottom;
        }
        #pages-list ul.submenu-top li.submenu:last-child {
            background: none;
        }
        #pages-list ul.submenu-top li.submenu a {
            float: left;
            overflow: ;
            padding: 6px 15px;
            margin-bottom: 2px;
            width: 86px;
            height: auto;
            font-size: 12px;
            line-height: 16px;
            color: #858994;
            text-shadow: 0px 1px 0 #121317;
        }
        #pages-list ul.submenu-top li.submenu:first-child a {
            -webkit-border-radius: 3px 3px 0px 0px;
            -khtml-border-radius: 3px 3px 0px 0px;
            -moz-border-radius: 3px 3px 0px 0px;
            border-radius: 3px 3px 0px 0px;
        }
        #pages-list ul.submenu-top li.submenu:last-child a {
            margin-bottom: 0px;
            -webkit-border-radius: 0px 0px 3px 3px;
            -khtml-border-radius: 0px 0px 3px 3px;
            -moz-border-radius: 0px 0px 3px 3px;
            border-radius: 0px 0px 3px 3px;
        }
        #pages-list ul.submenu-top li.submenu a:hover {
            background: url('http://static.tumblr.com/bygdzhm/flylz10zh/btn-submenu-bg.png') repeat-x left bottom;
        }


        /* =============================================
        WIDGETS SECTION
        ================================================ */
        /*========== WIDGET PANEL BUTTON ==========*/
        #widget-button {
            position: relative;
            width: 32px;
            height: 32px;
            margin: 10px 10px 10px 0;
            float: right;
        }
        #widget-button a {
            float: left;
            width: 32px;
            height: 32px;
            background-image: url('http://static.tumblr.com/bygdzhm/Uu6lzht36/btnwidget-deactive.png'); 
            background-repeat: no-repeat; 
            background-position: left top;
        }
        #widget-button a:hover {
            background-position: left center;
        }
        #widget-button a:active, #widget-button a:focus {
            background-position: left bottom;
        }

        /*========== WIDGETS CONTAINER ==========*/
        #widgets-wrapper {
            position: absolute;
            width: 100%;
            height: 350px;
            margin-top: 50px;
            background: #24262e url('http://static.tumblr.com/bygdzhm/r7Clyne73/widget-bgbottom.png') repeat-x left bottom;
            border-bottom: 1px solid #2b2b2b;
            -webkit-box-shadow: 0px 1px 5px #000;
            -moz-box-shadow: 0px 1px 5px #000;
            box-shadow: 0px 1px 5px #000;
            float: left;
            z-index: 1;
        }
        .panel {
            display: none;
        }

        #widgets-content {
            position: relative;
            margin: 0 auto;
        }
        .widgets {
            overflow: hidden;
            width: 220px;
            margin: 10px;
            float: left;
        }
        .widget-divider {
            float: left;
            width: 100%;
            height: 2px;
            margin-left: 0px;
            margin-bottom: 10px;
            background: url('http://static.tumblr.com/bygdzhm/eGElyne7n/widget-divider.png') repeat-x left top;
        }
        h3.widget-title {
            width: 220px;
            font-size: 14px;
            line-height: 20px;
            text-align: center;
            text-shadow: 0px 2px 0px #000000;
            margin-top: 10px;
            padding-bottom: 10px;
            color: #bdbdbd;
        }
        .widget_content {
            width: 100%;
            height: 100%;
            margin: 0;
            float: left;
        }
        .widget_content p {
            color: #acb4c9;
            font-size: 11px;
            font-weight: lighter;
            line-height: 14px;
            text-shadow: 0 1px 0 #000000;
        }
        .widget_content a {
            color: #4785d5;
            text-decoration: none;
        }

        #widgets-content a.prev {
            position: absolute;
            top: 130px;
            left: 10px;
            width: 30px;
            height: 30px;
            float: left;
            background-color: ;
            background-image: url('http://static.tumblr.com/bygdzhm/n8tlz112h/btn-arrow-left.png');
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-indent: -10000px;
        }
        #widgets-content a.next {
            position: absolute;
            top: 130px;
            right: 10px;
            width: 30px;
            height: 30px;
            float: left;
            background-color: ;
            background-image: url('http://static.tumblr.com/bygdzhm/Qsmlz1132/btn-arrow-right.png');
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-indent: -10000px;
        }
        #widgets-content a.prev:hover,
        #widgets-content a.next:hover {
            background-color: #1d1e25;
        }


        /*========== TWEETROLL ==========*/
        .stream {
            width: 220px;
            height: 260px;
            margin: 0;
            float: left;
        }
        .stream p {
        }
        .stream ul li {
            list-style: none;
            width: 220px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 10px;
            background: url('http://static.tumblr.com/bygdzhm/eGElyne7n/widget-divider.png') repeat-x left bottom;
            float: left;
        }
        .stream ul li:last-child {
            _background: none;
        }
        .stream ul li a.tweet-time {
            font-size: 11px;
            text-decoration: none;
            float: right;
            margin-top: 5px;
            color: #4e555a;
        }
        .stream ul li a.tweet-time:hover {
            color: #4785d5;
        }


        /*========== LIKED POST ==========*/
        li.likes {
            overflow: hidden;
            width: 220px;
            height: 280px;
            padding: 0;
            float: left;
        }
        li.like_post {
            list-style: none;
            overflow: hidden;
            margin-top: 0px;
            font-size: 11px;
        }
        li.like_post img {
            max-width: 205px;
            max-height: 160px;
            padding: 5px;
            margin-bottom: 10px;
            background: #1c1e26;
            border: 1px solid #33353d;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }
        li.like_post blockquote {
            margin: 0;
            padding: 0 0 0 10px;
            border-left: 1px solid #eee;
        }
        li.like_post ol, li.like_post ul {
            margin: 0;
            padding: 0;
        }
        li.like_post .like_link a {
            font-weight: normal;
        }
        li.like_post .like_title {
            font-weight: bold;
        }
        li.like_post .like_caption {
            margin: 0 0 10px 0;
            display: block !important;
            padding: 0px;
        }
        li.like_post .like_caption p {
            font-size: 11px;
            margin-bottom: 10px;
        }
        li.like_post .post_info_bottom {
            margin: 0 0 10px 0;
            display: block !important;
            padding: 0px;
        }


        /*========== FACEBOOK PAGES ==========*/
        .facebook_like {
            overflow: hidden;
            width: 220px;
            height: 230px;
            margin: 0;
            float: left;
        }


        /*========== DRIBBBLE ==========*/
        #dribbble-widget{
            margin-left: 5px;
        }
        .dribbble-shot {
            overflow: hidden;
            width: 220px;
        }
        .dribbble-shot ul li {
            list-style: none;
            float: left;
            margin-bottom: 10px;
        }
        .dribbble-shot ul li a {
            text-decoration: none;
            border: none; 
            margin: 5px;
            float: left;         
        }
        .dribbble-shot ul li a img {
            width: 60px;
            height: 55px;
            border: none;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;        
        }



        /*========== FOLLOWING ==========*/
        .following {
            overflow: hidden;
            width: 220px;
            height: 220px;
            margin-left: 5px;
        }
        .following ul li {
            list-style: none;
            float: left;
            margin-bottom: 10px;
        }
        .following ul li a {
            text-decoration: none;
            border: none; 
            margin: 5px;
            float: left;         
        }
        .following ul li a img {
            width: 60px;
            height: 55px;
            border: none;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;         
        }


        /*========== FLICKR PHOTOSTREAM ==========*/
        .flickr_widget {
            overflow: hidden;
            width: 220px;
            height: 220px;
        }
        #photos {
            overflow: hidden;
            width: 220px;
            height: 220px;
            float: left;
            margin-left: 5px;
        }
        #photos a {
            text-decoration: none;
            border: none; 
            margin: 5px 5px 15px 5px;
            float: left;         
        }
        #photos a img {
            width: 60px;
            height: 55px;
            border: none;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;         
        }

        .show_photo {
            margin-top: 15px;
            margin-left: 5px;
            float: left;
        }


        /*========== INSTAGRAM ==========*/
        #instagram-widget {
            overflow: hidden;
            width: 220px;
            height: 220px;
            float: left;
            margin-left: 5px;
        }
        #instagram-widget img {
            border: none; 
            margin: 5px 5px 18px 5px;
            float: left;         
        }
        #instagram-widget img.instagramPhoto {
            width: 60px;
            height: 55px;
            border: none;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;         
        }
        #instagram-widget .more {display:none;}


        /*========== TAG CLOUD ==========*/
        #taglist {
            overflow: hidden;
            height: 240px;
            float: left;
        }
        #tag_list {
            position: relative;
            overflow: hidden;
            width: 220px;
            height: 237px;
            margin: 0;
            float: left;
        }
        #tag_list li {
            list-style: none;
            background-color: #1b1d26;    
            padding: 6px 10px;
            margin: 3px 3px;
            float: left;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -khtml-border-radius: 5px;
            font-size: 12px !important; 
            line-height: 12px;
        }
        #tag_list li:hover {
            background-color: #4785d5;     
        }
        #tag_list li a, #tag_list li a:hover {
            color: #ffffff;
        }


        /*========== SLIDES CAROUSEL ==========*/
        .slides_container {
            width:220px;
            margin-left: 50px;
            display:none;
        }
        .slides_container div.widgets {
            width:220px;
            height:280px;
            display:block;
        }
        .item {
            float:left;
            width:135px;
            height:135px;
            margin:0 10px;
            background:#efefef;
        }
        .pagination {display: none;}
        .pagination .current a {color:red;}



        /* =============================================
        IMAGE SLIDER SECTION
        ================================================ */
        #slider-wrapper {
            position: relative;
            overflow: hidden !important;
            width: 100%;
            max-height: 400px;		
            margin-top: 50px;
            float: left;
            background: ;
            z-index: 0;
        }
        #slider {
            position: relative;
            width: 100%;
            margin: 0 auto;
        }

        /*========== SLIDER IMAGES ==========*/
        #slider a {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            float: left;
            overflow: hidden;
            visibility: hidden;
        }
        #slider a.slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            float: left;
        }
        #slider a.slide-image img {
            width: 100%;
            height: 100%;
            border: none;
        }

        #slider-buttons {   
            position: absolute;   
            display: block;     
            bottom: 20px; 
            right: 47%;   
        }
        #slider-buttons li {
            list-style: none;
            padding: 0;
            margin: 10px;
            float: left;
        }    
        #slider-buttons li a {   
            float: left;   
            display: block;     
            width: 12px;   
            height: 12px;      
            outline: none;   
            background-image: url('http://static.tumblr.com/bygdzhm/jkllycuad/slide-btn-netral.png'); 
            background-repeat: no-repeat;
            background-position: left top;    
        }   
        #slider-buttons li.active a, #slider-buttons li a:hover {   
            background-position: left bottom;   
        } 



        /* =============================================
        CONTENT BLOG
        ================================================ */
        #content-wrapper {
            position: relative;
            width: 100%;
            height: auto;
            margin: 0;

            float: left;
        }
        #content {
            position: relative;
            margin: 0 auto;
        }

        #timeline {
            position: relative;
            height: auto;
            margin-bottom: 40px;
            padding-bottom: 80px;
            float: left;
        }
        #time-line {
            position: absolute;
            top: 0;
            width: 3px;
            height: 100%;
            background: #c8cbd6;
            float: left;
            z-index: 0;
        } 
        .timeline-icon, .timeline-icon-pp {
            position: relative;
            width: 46px;
            height: 46px;
            background: #c8cbd6;
            -webkit-border-radius: 50%;
            -khtml-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border-radius: 23px;
            float: left;
            z-index: 10;
        }
        .timeline-icon-bottom {
            position: absolute;
            bottom: 0px;
            left: -13px;
            width: 30px;
            height: 30px;
            float: left;
            z-index: 1;
        }
        .timeline-icon-bottom a.icon-totop {
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 30px;
            height: 30px;
            margin: 0;
            background: #c8cbd6;
            background-image: url('http://static.tumblr.com/bygdzhm/lHylylgnf/icon-totop.png');
            background-repeat: no-repeat;
            background-position: center center; 
            -webkit-border-radius: 50%;
            -khtml-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border-radius: 15px;
            float: left;
            z-index: 100;
        }
        .timeline-icon-bottom span.tophov {
            display: none;
            position: absolute;
            top: 4px;
            left: 35px;
            width: 78px;
            height: 22px;
            padding-left: 10px;
            font-family: 'Armata', sans-serif;
            font-size: 10px;
            line-height: 22px;
            color: #fff;
            background: url('http://static.tumblr.com/bygdzhm/tsalz25w7/tophov-bg.png') no-repeat left top;
            float: left;
        }

        .timeline-icon-pp a.icon-profile {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/CUKlynu56/icon-profile.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-photo {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/Nqjlylgq9/icon-photo.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-photoset {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/zculylgqy/icon-photoset.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-audio {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/TGolylgri/icon-audio.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-video {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/3PNlylgsb/icon-video.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-text {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/ulwlylgt9/icon-text.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-chat {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/Z5Glylgtx/icon-chat.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-quote {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/dXOlylgun/icon-quote.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-link {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/Tdglylgvc/icon-link.png') no-repeat center center;
            float: left;
        }
        .timeline-icon a.icon-answer {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/IUmlylgw0/icon-answer.png') no-repeat center center;
            float: left;
        }
        .timeline-icon span.icon-searchpost {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/eoFlyntr2/icon-searchpostype.png') no-repeat center center;
            float: left;
        }
        .timeline-icon span.icon-taggedpost {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/7OSlynv1i/icon-taggedpostype.png') no-repeat center center;
            float: left;
        }
        .timeline-icon span.icon-datepost {
            width: 46px;
            height: 46px;
            margin: 0;
            background: url('http://static.tumblr.com/bygdzhm/zQMlynuyf/icon-datepostype.png') no-repeat center center;
            float: left;
        }

        .timeline-preview {
            position: relative;
            float: left;
            margin-left: 80px;
        }
        .timeline-content {
            position: relative;
            overflow: hidden;
            float: left;
            min-height: 60px;
            margin-left: 0px;
            padding: 0px;
            background: #ebedf0;
            border: 1px solid #c8cbd6;
            -webkit-border-radius: 5px 5px 0 0;
            -khtml-border-radius: 5px 5px 0 0;
            -moz-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
            -webkit-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            -moz-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            box-shadow: inset 0px 0px 0px 1px #f5f6f7;
        }
        .timeline-content-page {
            position: relative;
            overflow: hidden;
            float: left;
            margin-left: 0px;
            padding: 0px;
            background: #ebedf0;
            border: 1px solid #c8cbd6;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            -moz-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            box-shadow: inset 0px 0px 0px 1px #f5f6f7;
        }


        /*========== POSTBAR ==========*/
        .timeline-bar {
            position: relative;
            overflow: hidden;
            height: auto;
            margin-top: -2px;
            padding: 10px;
            background: #dee2e9;
            float: left;
            border: 1px solid #c8cbd6;
            -webkit-border-radius: 0 0 5px 5px;
            -khtml-border-radius: 0 0 5px 5px;
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
            -webkit-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            -moz-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            box-shadow: inset 0px 0px 0px 1px #f5f6f7;
        }

        .datelike-bar {
            position: relative;
            overflow: hidden;
            width: 250px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/B6blz34i0/bg-datelike.png') no-repeat left top;
        }
        .datelike-bar a.liked-count {
            float: right;
            height: 20px;
            line-height: 20px;
            font-size: 10px;
            color: #777b89;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 6px;
            margin-left: 10px;
            margin-right: 20px;
            padding-left: 18px;
            background: url('http://static.tumblr.com/bygdzhm/vDGlylhq9/icon-liked.png') no-repeat left center;
        }
        .datelike-bar a.post-time {
            float: left;
            height: 20px;
            line-height: 20px;
            font-size: 10px;
            color: #777b89;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 6px;
            margin-left: 15px;
            margin-right: 10px;
            padding-left: 20px;
            background: url('http://static.tumblr.com/bygdzhm/aK6lylhqx/icon-cal.png') no-repeat left center;
        }

        .button-share {
            position: relative;
            width: 87px;
            height: 30px;
            margin-right: 10px;
            background: url('http://static.tumblr.com/bygdzhm/Viwlz11tx/btn-share-bg.png') no-repeat left bottom;
        }
        .button-share:hover {
            background: url('http://static.tumblr.com/bygdzhm/Viwlz11tx/btn-share-bg.png') no-repeat left top;
        }

        .button-share .share-icon {
            position: relative;
            width: 59px;
            height: 30px;
            margin-top:	0px;
            margin-right: 0px;
            float: right;
        }
        .button-share .share-icon span.share-btn {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 59px;
            height: 30px;
            background: url('http://static.tumblr.com/bygdzhm/LC3lz11v5/btn-share.png') no-repeat left top;
            float: left;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            -ms-transition: 0.5s ease-in-out;
            transition: 0.5s ease-in-out;
            z-index: 100;
        }
        .button-share .share-icon span.share-btn:hover {
            background: url('http://static.tumblr.com/bygdzhm/LC3lz11v5/btn-share.png') no-repeat right top;
            z-index: -100;
        }
        .button-share .share-icon:hover>span.share-btn {
            background: url('http://static.tumblr.com/bygdzhm/LC3lz11v5/btn-share.png') no-repeat right top;
            z-index: -100;
        }
        .button-share .share-icon a.share-twitter {
            width: 16px;
            height: 16px;
            margin-top: 7px;
            margin-left: 10px;
            background: url('http://static.tumblr.com/bygdzhm/59olylhu1/btnshare-twitter.png') no-repeat left top;
            float: left;
        }
        .button-share .share-icon a.share-twitter:hover {
            background: url('http://static.tumblr.com/bygdzhm/59olylhu1/btnshare-twitter.png') no-repeat left bottom;
        }
        .button-share .share-icon a.share-facebook {
            width: 16px;
            height: 16px;
            margin-top: 7px;
            margin-left: 7px;
            background: url('http://static.tumblr.com/bygdzhm/NRllylhup/btnshare-facebook.png') no-repeat left top;
            float: left;
        }
        .button-share .share-icon a.share-facebook:hover {
            background: url('http://static.tumblr.com/bygdzhm/NRllylhup/btnshare-facebook.png') no-repeat left bottom;
        }

        .button-viewpost {
            position: relative;
            width: 93px;
            height: 30px;
            margin-bottom: 0px;
            float: right;
        }
        .button-viewpost a {
            width: 93px;
            height: 30px;
            text-indent: -10000px;
            float: left;
            background-image: url('http://static.tumblr.com/bygdzhm/uU0lylhza/btn-viewpost.png');
            background-repeat: no-repeat;
            background-position: left top;
        }
        .button-viewpost a:hover {
            background-position: left bottom;
        }

        .button-viewdetails {	/* only available in 320px layout */
            position: relative;
            width: 93px;
            height: 30px;
            margin-bottom: 0px;
            float: right;
        }
        .button-viewdetails a.view-details {
            width: 93px;
            height: 30px;
            text-indent: -10000px;
            float: left;
            background-image: url('http://static.tumblr.com/bygdzhm/MOhlz1zgt/btn-viewdetails.png');
            background-repeat: no-repeat;
            background-position: left top;
        }
        .button-viewdetails a.view-details:hover {
            background-position: left bottom;
        }


        /*========== PICTURE PROFILE ========== */


        /*========== PROFILE DESCRIPTION ==========*/
        #profile-description {
            position: relative;
            width: 300px;
            margin-left: 0px;
            float: left;
        }
        p.description {
            margin: 10px;
        }

        .button-ask {
            position: relative;
            float: left;
            width: 95px;
            height: 30px;
            margin-right: 10px;
            color: #777b89;
        }
        .button-ask a {
            float: left;
            width: 93px;
            height: 30px;
            font-size: 11px;
            line-height: 30px;
            color: #777b89;
            text-shadow: 0 1px 0 #ffffff;
            text-align: center;
            background-image: url('http://static.tumblr.com/bygdzhm/ZUOlylgym/btn-bg.png');
            background-repeat: no-repeat;
            background-position: left top;
        }
        .button-ask a:hover {
            background-position: left bottom;
        }

        .social-links {
            position: relative;
            overflow: hidden;
            height: 30px;
            margin: 0;
            padding: 0;
            float: right;
        }
        .social-links a {
            width: 28px;
            height: 30px;
            padding: 0;
        }
        .social-links a.twitter {
            background: url('http://static.tumblr.com/bygdzhm/eSGlylh33/icon-twitter.png') no-repeat left top;
            float: left;
        }
        .social-links a.facebook {
            background: url('http://static.tumblr.com/bygdzhm/1oZlylh9r/icon-facebook.png') no-repeat left top;
            float: left;
        }
        .social-links a.gplus {
            background: url('http://static.tumblr.com/bygdzhm/VJFlylhae/icon-gplus.png') no-repeat left top;
            float: left;
        }
        .social-links a.dribbble {
            background: url('http://static.tumblr.com/bygdzhm/SeElylhb4/icon-dribbble.png') no-repeat left top;
            float: left;
        }
        .social-links a.youtube {
            background: url('http://static.tumblr.com/bygdzhm/d3Hlylhcs/icon-youtube.png') no-repeat left top;
            float: left;
        }
        .social-links a.vimeo {
            background: url('http://static.tumblr.com/bygdzhm/c6Olylhdx/icon-vimeo.png') no-repeat left top;
            float: left;
        }
        .social-links a.flickr {
            background: url('http://static.tumblr.com/bygdzhm/17qlylhep/icon-flickr.png') no-repeat left top;
            float: left;
        }
        .social-links a.skype {
            background: url('http://static.tumblr.com/bygdzhm/u1Rlylhfe/icon-skype.png') no-repeat left top;
            float: left;
        }
        .social-links a:hover {
            margin-top: 1px;
        }


        /*================================================
        TUMBLR POSTS
        ================================================*/
        #blogpost {
            position: relative;
            margin: 0;
            padding: 0;
            float: left;
        }
        .permalink-post-pagination {/* only available in 320px layout */
            position: absolute;
            top: 55px;
            right: 10px;
            float: right;
            z-index: 10;
        }
        .permalink-post-pagination a.arrow-left {
            width: 30px;
            height: 30px;
            margin-left: 5px;
            float: left;
            background-color: #ebedf0;
            background-image: url('http://static.tumblr.com/bygdzhm/n8tlz112h/btn-arrow-left.png');
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }
        .permalink-post-pagination a.arrow-right {
            width: 30px;
            height: 30px;
            margin-left: 5px;
            float: left;
            background-color: #ebedf0;
            background-image: url('http://static.tumblr.com/bygdzhm/Qsmlz1132/btn-arrow-right.png');
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }
        .permalink-post-pagination a.arrow-left:hover,
        .permalink-post-pagination a.arrow-right:hover {
            background-color: #c8cbd6;
        }


        /*========== POST ==========*/
        .post {
            position: relative;
            margin-top: 45px;
            margin-left: 0px;
            float: left;
        }
        .photopost, .photosetpost, .videopost, 
        .audiopost, .textpost, .quotepost, 
        .chatpost, .linkpost, .answerpost {
            position: relative;
            height: auto;
            margin: 10px;
            padding: 0;
            float: left;
        }
        .post-divider {
            float: left;
            width: 100%;
            height: 2px;
            margin-bottom: 10px;
            background: url('http://static.tumblr.com/bygdzhm/0zHlylhgd/post-divider.png') repeat-x left top;
        }
        #content p, #permalink-post p {
            font-size: 12px;
            line-height: 20px;
            color: #626a76;
            text-shadow: 0px 1px 0px #ffffff;
            margin-bottom: 10px;
        }
        #content ol, #content ul,
        #permalink-post ol, #permalink-post ul {
            line-height: 20px;
            text-shadow: 0px 1px 0px #ffffff;
        }
        #content ol li, #content ul li,
        #permalink-post ol li, #permalink-post ul li {
            font-size: 12px;
        }
        #content blockquote,
        #permalink-post blockquote {
            margin: 5px 0 5px 25px;
            padding-left: 15px;
            line-height: 20px;
            border-left: 2px solid #999;
            font-style: italic;
            font-size: 12px;
            text-shadow: 0px 1px 0px #ffffff;
        }
        .caption-post {
            width: 100%;	
            margin-top: 10px;
            float: left;
        }
        .caption-post ul, .caption-post ol {
            margin: 5px 0 10px 40px;
            line-height: 20px;
            text-shadow: 0px 1px 0px #ffffff;
        }


        /*========== POST PHOTO ==========*/
        .timeline-content img {
            position: relative;
            float: left;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        /*========== POST PHOTOSET ==========*/
        .photoset-container {
            margin: 0 auto;
            padding: 0;
        }
        .html_photoset,
        .html_photoset iframe.photoset {
            margin: 0;
            padding: 0;
        }


        /*========== POST VIDEO ==========*/
        .post-desc p.video,
        .post-desc p.video embed,
        .post-desc p.video iframe {
            border: none;
            margin: 0;
            float: left;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        /*========== POST AUDIO ==========*/
        .audio-player {
            position: relative;
            overflow: hidden;
            float: left;
            width: 250px;
            height: 250px;
            margin-bottom: 0px;
            margin-right: 10px;
        }
        .album-art {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 0;
            padding: 0;
            float: left;
            background: #000;
        }
        .album-art img {
            width: 250px;
            height: 250px;
            border: none;
            border-radius: 0px;
        }
        .album-cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 250px;
            height: 250px;
            background: url('http://static.tumblr.com/bygdzhm/PBxlz202k/plastic-cover-large.png') no-repeat right top;
            float: left;
        }
        .audio-data {
            position: relative;
            overflow: hidden;
            float: left;
            width: 230px;
            margin: 0px 0 20px 0px;	
        }
        .artist-name {
            font-size: 20px;
            font-weight: normal;
            line-height: 20px;
            text-transform: uppercase;
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .track-name {
            font-size: 16px;
            font-weight: normal;
            line-height: 20px;
            margin-bottom: 10px;
        }
        .album-title {
            font-size: 14px;
            font-weight: normal;
            line-height: 20px;
        }
        .player-box {
            position: relative;
            height: 35px;
            margin-left: 0px;
            z-index: 10;
            float: left;
            background-color: #e4e4e4;
            border: 1px solid #c8cbd6;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            -moz-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            box-shadow: inset 0px 0px 0px 1px #f5f6f7;
        }
        .player-box span.music-player {
            width: 200px;
            height: 30px;
            margin-top: 3px;
            margin-left: 5px;
            float: left;
        }
        .plays-count {
            position: relative;
            width: auto;
            height: 35px;
            margin-left: 0px;
            margin-bottom: 10px;
            float: left;
            overflow: hidden;
            background-color: #e4e4e4;
            border: 1px solid #c8cbd6;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            -moz-box-shadow: inset 0px 0px 0px 1px #f5f6f7;
            box-shadow: inset 0px 0px 0px 1px #f5f6f7;
        }
        .plays-count p {
            overflow: hidden;
            width: auto;
            height: 20px;
            font-size: 12px;
            line-height: 20px;
            text-align: center;
            margin: 8px 10px;
        }
        .plays-count p span.playcount {
            color: #626A76; 
        }


        /*========== POST TEXT ==========*/
        .post-title {
            width: 100%;
            font-size: 20px;
            font-weight: normal;
            line-height: 26px;
            color: #777b89;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 10px;
            margin-bottom: 0px;
            padding-bottom: 10px;
        }
        .post-page-title {
            font-size: 16px;
            font-weight: normal;
            line-height: 20px;
            color: #777b89;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .bodytext p {
            text-align: justify;
        }
        .bodytext ol, .bodytext ul {
            margin: 5px 0 10px 40px;
            line-height: 20px;
            text-shadow: 0px 1px 0px #ffffff;
        }
        .bodytext img {
            height: auto;		
            margin-bottom: 10px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }


        /*========== POST QUOTE ==========*/
        .quoteline {
            width: 100%;
            font-size: 20px;
            font-weight: normal;
            line-height: 26px;
            color: #777b89;
            text-align: center;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
        p.quotesource {
            font-size: 12px;
            line-height: 20px;
            font-weight: normal;
            text-align: left;
        }


        /*========== POST CHAT ==========*/
        .chat-lines {
            width: 100%;
            float: left;
            padding: 0;
            font-size: 12px;
            line-height: 20px;
            text-align: left;
            border-collapse: collapse;
            text-shadow: 0px 1px 0px #ffffff; 
        }
        .chat-lines tr {
            padding-bottom: 0px;
        }
        .chat-lines tr:last-child {
            border-bottom: 0px;
        }
        .chat-lines td, .chat-lines th {
            padding: 5px 7px;
        }
        .chat-lines th.label {
            text-align: right;
            vertical-align: text-top;
            font-weight: bold;
            padding-right: 0;
        }
        .chat-lines .odd {
            background: #dfe3ea;
        }
        .chat-lines .user1 th,
        .chat-lines .user1 td { 
            background: #dfe3ea;
        }
        .chat-lines .user2 th,
        .chat-lines .user2 td { 
            background: none;
        }

        /*========== POST LINK ==========*/
        h2.post-link-url {
            width: 100%;
            font-size: 20px;
            font-weight: normal;
            line-height: 26px;
            color: #777b89;
            text-align: center;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        h2.post-link-url a {
            text-decoration: none;
            color: #777b89;
        }
        h2.post-link-url a:hover {
            color: #4785d5;
        }


        /*========== POST ANSWER ==========*/
        .answerpost h2, .answerpost h5,
        .answerpost p {
            text-align: center;
        }
        h2.post-question {
            font-size: 20px;
            font-weight: normal;
            line-height: 26px;
            color: #777b89;
            text-align: center;
            text-shadow: 0px 1px 0px #ffffff;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
        .answerpost .post-asker a {
            color: #777b89;
            font-size: 14px;
            line-height: 20px;
            font-weight: normal;	
        }
        .answerpost .post-asker a:hover {
            color: #4785d5;
        }

    </style>


    <style>
        .postdetail {	/* only available in 320px layout */
            display: none;
            position: relative;
            width: 100%;
            height: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            float: left;
        }
        .postdetail ul.postdetail-lists {
            position: relative;
            overflow: hidden;
            display: inline;
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
        }
        .postdetail li {
            list-style: none;
            float: left;
            width: 100%;
            margin: 0;
            font-size: 12px;
            font-family: 'Armata', sans-serif;
            line-height: 40px;
            color: #5c6266;
            background: url('http://static.tumblr.com/bygdzhm/00Vlyc4s4/sidebar-divider.png') repeat-x left bottom;
        }
        .postdetail li span.icon {
            width: 25px;
            height: 30px;
            margin-top: 5px;
            margin-left: 15px;
            margin-right: 10px;
            float: left;
        }
        .postdetail ul.postdetail-lists li span.icon-clock {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/IjZlyc4tg/icon-timeclock.png') no-repeat center center;
        }
        .postdetail ul.postdetail-lists li span.icon-notes {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/Xmqlyc4ug/icon-notes.png') no-repeat center center;
        }
        .postdetail ul.postdetail-lists li span.icon-reblog {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/YH0lyc4vf/icon-reblog.png') no-repeat center center;
        }
        .postdetail ul.postdetail-lists li span.icon-permalink {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/AhTlyc4w7/icon-permalink.png') no-repeat center center;
        }
        .postdetail ul.postdetail-lists li span.icon-source {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/Irglyc4x4/icon-reblogroot.png') no-repeat center center;
        }
        .postdetail ul.postdetail-lists li span.icon-tags {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/CZ7lyc4y0/icon-tags.png') no-repeat center center;
        }
        .postdetail li a {
            color: #5c6266;
        }
        .postdetail li a:hover {
            color: #4785d5;
        }
        .postdetail ul.tagged {
            position: relative;
            display: inline;	
            width: 100%;
            margin-top: 0px;
            margin-left: 0px;
            padding: 0;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/00Vlyc4s4/sidebar-divider.png') repeat-x left bottom;
        }
        .postdetail li.taglist {
            list-style: none;
            float: left;
            width: 200px;
            margin: 0;
            padding-bottom: 10px;
            font-size: 12px;
            font-family: 'Armata', sans-serif;
            line-height: 20px;
            color: #5c6266;
            background: none;
        }
        .postdetail ul.tagged span.icon-tags {
            width: 25px;
            height: 30px;
            margin-left: 15px;
            margin-right: 10px;
            padding-bottom: 10px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/CZ7lyc4y0/icon-tags.png') no-repeat center center;
        }
        .postdetail li.taglist a {
            margin-top: 10px;
            margin-right: 5px;
            line-height: 12px;
            float: left;
        }
        .postdetail li.taglist a:after {
            content: ", ";
        }
        .postdetail li.taglist a:last-child:after {
            content: " ";
        }

        .postdetail .sharethis {
            float: left;
            width: 100%;
            margin: 15px 5px;
            margin-bottom: 0px;
        }
        .postdetail .sharethis p {
            color: #2d2e2f;
            font-size: 12px;
            font-family: 'Armata', sans-serif;
        }
        .postdetail .sharethis .shortURL {
            width: 202px;
            height: 25px;
            margin-bottom: 10px;
            padding: 10px 20px 10px 20px;
            line-height: 25px;
            font-size: 11px;
            color: #78848c;
            background: url('http://static.tumblr.com/bygdzhm/K63lyc50j/bg-shorturl.png') no-repeat left top;
            border: none;
            outline: none;
            float: left;
        }

        .show-comments {
            position: relative;
            width: 100%;		
            height: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            float: left;
        }
        .show-comments a.show-comment-btn {
            position: relative;
            width: 132px;
            height: 30px;
            background-image: url('http://static.tumblr.com/bygdzhm/Ginlyli5e/btn-hidecomment.png'); 
            background-repeat: no-repeat;
            background-position: left top;
            float: left;
        }
        .show-comments a.show-comment-btn:hover {
            background-position: left bottom;
        }


        /*========== DISQUS ==========*/
        #disqus {
            position: relative;
            width: 100%;		
            margin-bottom: 10px;
            padding-bottom: 10px;
            float: left;
        }
        #disqus h3 {
            font-size: 12px;           
            line-height: 20px;
            color: #626a76;
            text-shadow : 1px 1px 1px #fff; 
        }


        /*========== NOTES ==========*/
        .notelists {
            width: 100%;			
            height: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/0zHlylhgd/post-divider.png') repeat-x left top;
        }
        .notelists h3.noteslabel {
            font-size: 16px;
            line-height: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        ol.notes {
            padding: 0px;
            margin: 10px 0px;
            list-style-type: none;
            border-bottom: none;
        }
        ol.notes a {
            color: #4785d5;
        }
        ol.notes li.note {
            border-top: none;
            padding: 0px;
            line-height: 30px;
        }

        ol.notes li.note img.avatar {
            vertical-align: -4px;
            margin-right: 10px;
            width: 16px;
            height: 16px;
        }

        ol.notes li.note span.action {
            font-weight: normal;
        }

        ol.notes li.note .answer_content {
            font-weight: normal;
        }

        ol.notes li.note blockquote {
            border-left: 2px solid #eee;
            padding: 4px 10px;
            margin: 10px 0px 0px 25px;
            font-style: italic;
        }

        ol.notes li.note blockquote a {
            text-decoration: none;
        }


        /*=======================================
        STYLE FOR POPUP PERMALINK PAGE
        =========================================*/
        #popupPages {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2000;
        }
        #popupBG {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000;
            opacity: 0.9;
            filter:alpha(opacity=80); /* for IE */
            z-index: 1;
        }
        #post_box_wrap {
            position: relative;
            margin: 0 auto;
            height: 94%;
        }
        #permalink-container, #permalink-wrapper {
            position: relative;
            min-height: 400px;
            margin: 0px auto;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            z-index: 2;

        }

        #permalink-container{
        }

        #permalink-wrapper{
            margin: 0px auto;
        }
        #permalink-post {
            position: relative;
            overflow: hidden;
            float: left;
            min-height: 500px;
            margin-top: 70px;
            padding: 15px 5px 15px 15px;
            background: #ffffff;
        }
        .photo-post, .photoset-post, .video-post, 
        .audio-post, .text-post, .quote-post, 
        .chat-post, .link-post, .answer-post {
            position: relative;	
            height: auto;
            margin: 0;
            padding: 0;
            float: left;
        }

        #sidebar-post {		
            position: relative;
            float: right;
            margin-right: 0;
            z-index: 100;
        }

        #popupClose {
            position: absolute;
            right: 5px;
            top: 5px;
            width: 20px;
            height: 20px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/5EElyc4jt/close-btn.png') no-repeat left top;
            z-index: 200;
            display: none;
        }
        #popupClose:hover {
            background: url('http://static.tumblr.com/bygdzhm/5EElyc4jt/close-btn.png') no-repeat left bottom;
        }

        .navigation-post {
            position: fixed;
            float: left;
            display: none;
        }
        .navigation-post a.older {
            position: absolute;
            width: 42px;
            height: 42px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/tJGlyc4lv/btn-older.png') no-repeat left top;
        }
        .navigation-post a.older:hover {
            background: url('http://static.tumblr.com/bygdzhm/tJGlyc4lv/btn-older.png') no-repeat left bottom;
        }
        .navigation-post a.newer {
            position: absolute;
            width: 42px;
            height: 42px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/tkolyc4my/btn-newer.png') no-repeat left top;
            z-index: 1000;
        }
        .navigation-post a.newer:hover {
            background: url('http://static.tumblr.com/bygdzhm/tkolyc4my/btn-newer.png') no-repeat left bottom;
        }


        #sidebar ul.sidebar-lists {
            position: relative;
            overflow: hidden;
            display: inline;
            width: 260px;
            margin-left: 15px;
            padding: 0;
            float: left;
        }
        #sidebar li {
            list-style: none;
            float: left;
            width: 260px;
            margin: 0;
            font-size: 12px;
            font-family: 'Armata';
            line-height: 40px;
            color: #5c6266;
            background: url('http://static.tumblr.com/bygdzhm/00Vlyc4s4/sidebar-divider.png') repeat-x left bottom;
        }
        #sidebar li span.icon {
            width: 25px;
            height: 30px;
            margin-top: 5px;
            margin-left: 15px;
            margin-right: 15px;
            float: left;
        }
        #sidebar ul.sidebar-lists li span.icon-clock {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/IjZlyc4tg/icon-timeclock.png') no-repeat center center;
        }
        #sidebar ul.sidebar-lists li span.icon-notes {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/Xmqlyc4ug/icon-notes.png') no-repeat center center;
        }
        #sidebar ul.sidebar-lists li span.icon-reblog {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/YH0lyc4vf/icon-reblog.png') no-repeat center center;
        }
        #sidebar ul.sidebar-lists li span.icon-permalink {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/AhTlyc4w7/icon-permalink.png') no-repeat center center;
        }
        #sidebar ul.sidebar-lists li span.icon-source {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/Irglyc4x4/icon-reblogroot.png') no-repeat center center;
        }
        #sidebar ul.sidebar-lists li span.icon-tags {
            width: 25px;
            height: 30px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/CZ7lyc4y0/icon-tags.png') no-repeat center center;
        }
        #sidebar li a {
            color: #5c6266;
        }
        #sidebar li a:hover {
            color: #4785d5;
        }
        #sidebar ul.tagged {
            position: relative;
            display: inline;	
            width: 260px;
            margin-top: 0px;
            margin-left: 15px;
            padding: 0;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/00Vlyc4s4/sidebar-divider.png') repeat-x left bottom;
        }
        #sidebar li.taglist {
            list-style: none;
            float: left;
            width: 205px;
            margin: 0;
            padding-bottom: 10px;
            font-size: 12px;
            font-family: 'Armata';
            line-height: 20px;
            color: #5c6266;
            background: none;
        }
        #sidebar ul.tagged span.icon-tags {
            width: 25px;
            height: 30px;
            margin-left: 15px;
            margin-right: 15px;
            padding-bottom: 10px;
            float: left;
            background: url('http://static.tumblr.com/bygdzhm/CZ7lyc4y0/icon-tags.png') no-repeat center center;
        }
        #sidebar li.taglist a {
            margin-top: 10px;
            margin-right: 5px;
            line-height: 12px;
            float: left;
        }
        #sidebar li.taglist a:after {
            content: ", ";
        }
        #sidebar li.taglist a:last-child:after {
            content: " ";
        }

        #sidebar .sharethis {
            float: left;
            width: 240px;
            margin: 20px;
        }
        #sidebar .sharethis p {
            color: #2d2e2f;
            font-size: 12px;
            font-family: 'Armata';
        }
        #sidebar .sharethis .shortURL {
            width: 202px;
            height: 25px;
            margin-top: 7px;
            padding: 10px 20px 10px 20px;
            line-height: 25px;
            font-size: 11px;
            color: #78848c;
            background: url('http://static.tumblr.com/bygdzhm/K63lyc50j/bg-shorturl.png') no-repeat left top;
            border: none;
            outline: none;
        }
        #sidebar .share_this{
            margin-left: 20px;
        }
        #sidebar .share_this span.st-button{
            float: left;
            margin: 5px 0px;
        }
        .permalink-show-comments {
            float: left;
            width: 240px;
            margin: 20px;
            display: none;
        }
        .permalink-show-comments a {
            position: relative;
            width: 132px;
            height: 30px;
            margin-left: 54px;		
            background-image: url('http://static.tumblr.com/bygdzhm/m7Rlyc51f/btn-showcomment.png'); 
            background-repeat: no-repeat;
            background-position: left top;
            float: left;
        }
        .permalink-show-comments a:hover {
            background-position: left bottom;
        }


        /* Tiny Scrollbar */

        #permalink-post .overview { list-style: none; position: absolute; left: 0; top: 0; padding: 0; margin: 0; }
        #permalink-post .scrollbar{ background: transparent url(http://static.tumblr.com/xingagi/C09lz0jsy/track.png) no-repeat 0 0; position: relative; background-position: 0 0; float: right; width: 15px; }
        #permalink-post .track { background: transparent url(http://static.tumblr.com/xingagi/C09lz0jsy/track.png) no-repeat 0 100%; height: 100%; width:13px; position: relative; padding: 0 1px; }
        #permalink-post .thumb { background: transparent url(http://static.tumblr.com/xingagi/3oNlz0jkf/scroll.png) no-repeat 34% 100%; height: 20px; width: 25px; cursor: pointer; overflow: hidden; position: absolute; top: 0; left: -5px; }
        #permalink-post .thumb .end { background: transparent url(http://static.tumblr.com/xingagi/3oNlz0jkf/scroll.png) no-repeat 34% 0; overflow: hidden; height: 10px; width: 25px; }
        #permalink-post .disable { display: none; }


        /* Infinity scroll Loading */
        #infscr-loading img, #infscr-loading div{
            margin-top: 20px !important;
            line-height: 50px;
        }


        /* =============================================== 
        Media Queries
        ================================================== */

        @media only screen and (min-width: 768px) {

            #header {width: 940px;}
            #logo-title {width: 300px;}
            #search {display: ;}
            #nav-menu ul.menu-top-icon {display: none;}
            span.pointer-sub {right: 13px;}
            #pages-list {top: 32px;right: 0;}
            #widgets-content {width: 960px;}
            .widgets {position: relative; height: 310px; margin: 10px;}
            #slider-wrapper {max-height: 400px;}
            #slider a.slide-image {height: 400px;}
            #slider-buttons {display: ;}
            #content {width: 620px;}
            #timeline {width: 600px;}
            #time-line {left: 32px;}
            .timeline-icon, .timeline-icon-pp {margin-top: 10px; margin-left: -70px;}
            .timeline-preview {width: 520px; margin-left: 80px;}
            .timeline-content {width: 520px; margin-top: 0px;}
            .timeline-content-page {width: 520px;min-height: 50px;margin-top: 5px;}
            .timeline-pointer,
            .timeline-pointer-pp {
                position: absolute;
                top: 20px;
                left: -13px;
                width: 17px;
                height: 26px;
                background: url('http://static.tumblr.com/bygdzhm/v4vlylgwv/tl-pointer.png') no-repeat left top;
                float: left;
                z-index: 100;
            }
            .timeline-pointer span.tl-pointer,
            .timeline-pointer-pp span.tl-pointer {
                width: 0;
                height: 0;
                margin-top: 1px;
                margin-left: 3px;
                border-top: 12px solid transparent;
                border-bottom: 12px solid transparent;
                border-right: 12px solid #ebedf0; 
                overflow: hidden; 
                float: left;
            }
            .timeline-bar {width: 500px;}
            .datelike-bar {margin-bottom: 0px;}
            .button-share {float: right;}
            .button-viewdetails {display: none;}
            #picture-profile {
                position: absolute;
                top: -74px;
                left: -40px;
                width: 128px;
                height: 128px;
                background: #c8cbd6;
                border: 10px solid #c8cbd6;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 74px;
                float: left;
                z-index: 10;
            }
            #picture-profile a,
            #picture-profile a img {
                position: relative;
                overflow: hidden;
                width: 128px;
                height: 128px;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 64px;
                float: left;
                border: none;
            }
            #profile-description {margin-top: 85px;}
            .button-ask {display: ;}
            .social-links a {margin-left: 3px; margin-right: 2px;}
            .permalink-post-pagination {display: none;}
            .photopost, .photosetpost, .videopost, 
            .audiopost, .textpost, .quotepost, 
            .chatpost, .linkpost, .answerpost {width: 500px;}
            .timeline-content img {max-width: 500px;}
            .photoset-container {width: 500px;}
            .html_photoset,
            .html_photoset iframe.photoset {width: 500px;}
            .big {display: block;}
            .small {display: none;}
            .post-desc p.video,
            .post-desc p.video embed,
            .post-desc p.video iframe {width: 500px;}
            .audio-data {height: 145px;}
            .player-box {width: 238px;}
            .player-box span.music-player {width: 200px;}
            .bodytext img {max-width: 500px;}
            .show-comments a.show-comment-btn {margin-left: 185px;}
            #disqus {width: 500px;}

            #post_box_wrap {width: 835px;}
            #permalink-container {width: 835px;}
            .navigation-post {width: 835px;}
            .navigation-post a.older {top: 270px;left: -60px;}
            .navigation-post a.newer {top: 270px;right: -60px;}
            #permalink-post {width: 525px;}
            #permalink-post {
                -webkit-border-radius: 3px 0 0 3px;
                -khtml-border-radius: 3px 0 0 3px;
                -moz-border-radius: 3px 0 0 3px;
                border-radius: 3px 0 0 3px;
            }
            #permalink-post .viewport {width: 500px; height: 500px; overflow: hidden; position: relative;}
            .photo-post, .photoset-post, .video-post, 
            .audio-post, .text-post, .quote-post, 
            .chat-post, .link-post, .answer-post {width: 500px;}
            #sidebar-post {margin-top: 70px;width: 290px;}
            #sidebar {
                position: relative;
                margin: 0;
                width: 289px;
                min-height: 530px;
                background: #e8ecef;
                border-left: 1px solid #d6dce1;
                -webkit-border-radius: 0 3px 3px 0;
                -khtml-border-radius: 0 3px 3px 0;
                -moz-border-radius: 0 3px 3px 0;
                border-radius: 0 3px 3px 0;
                z-index: 100;
            }
            #sidebar ul.sidebar-lists {margin-top: 40px;}

        }


        /* ========================================= */
        @media only screen and (min-width: 480px) and (max-width: 768px) {

            #header {width: 620px;}
            #logo-title {width: 300px;}
            #search {display: none;}
            #nav-menu ul.menu-top-list {display: none;}
            span.pointer-sub {right: 20px;}
            #pages-list {top: 38px; right: -10px;}
            #widgets-content {width: 640px;}
            .widgets {position: relative; top: 10px; height: auto;}
            #slider-wrapper {max-height: 300px;}
            #slider a.slide-image {height: 300px;}
            #slider-buttons {display: none;}
            #content {width: 400px;}
            #timeline {width: 300px;}
            #time-line {left: 32px;}
            .postdetail{display: block;}
            .timeline-icon, .timeline-icon-pp {margin-top: 10px; margin-left: -70px;}
            .timeline-preview {width: 270px; margin-left: 80px;}
            .timeline-content {width: 270px; margin-top: 0px;}
            .timeline-content-page {width: 270px;min-height: 45px;margin-top: 5px;}
            .timeline-pointer,
            .timeline-pointer-pp {
                position: absolute;
                top: 20px;
                left: -13px;
                width: 17px;
                height: 26px;
                background: url('http://static.tumblr.com/bygdzhm/v4vlylgwv/tl-pointer.png') no-repeat left top;
                float: left;
                z-index: 100;
            }
            .timeline-pointer span.tl-pointer,
            .timeline-pointer-pp span.tl-pointer {
                width: 0;
                height: 0;
                margin-top: 1px;
                margin-left: 3px;
                border-top: 12px solid transparent;
                border-bottom: 12px solid transparent;
                border-right: 12px solid #ebedf0; 
                overflow: hidden; 
                float: left;
            }
            .timeline-bar {width: 250px;}
            .datelike-bar {margin-bottom: 10px;}
            .button-share {float: left;}
            .button-viewpost {display: none;}
            #picture-profile {
                position: absolute;
                top: -54px;
                left: -20px;
                width: 96px;
                height: 96px;
                background: #c8cbd6;
                border: 6px solid #c8cbd6;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 54px;
                float: left;
                z-index: 10;
            }
            #picture-profile a,
            #picture-profile a img {
                position: relative;
                overflow: hidden;
                width: 96px;
                height: 96px;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 54px;
                float: left;
                border: none;
            }
            #profile-description {margin-top: 65px;}
            .button-ask {display: none;}
            .social-links a {margin-left: 2px; margin-right: 1px;}
            .permalink-post-pagination {}
            .photopost, .photosetpost, .videopost, 
            .audiopost, .textpost, .quotepost, 
            .chatpost, .linkpost, .answerpost {width: 250px;}
            .timeline-content img {max-width: 250px;}
            .photoset-container {width: 250px;}
            .html_photoset,
            .html_photoset iframe.photoset {width: 250px;}
            .big {display: none;}
            .small {display: block;}
            .post-desc p.video,
            .post-desc p.video embed,
            .post-desc p.video iframe {width: 250px;}
            .audio-data {height: auto;}
            .player-box {width: 248px;}
            .player-box span.music-player {width: 220px;}
            .bodytext img {max-width: 250px;}
            .show-comments a.show-comment-btn {margin-left: 25%;}
            #disqus {width: 250px;}

            #post_box_wrap {width: 585px;}
            #permalink-container {width: 585px;}
            .navigation-post {width: 585px;}
            .navigation-post a.older {top: 270px;left: -42px;}
            .navigation-post a.newer {top: 270px;right: -42px;}
            #permalink-post {width: 275px;}
            #permalink-post {
                -webkit-border-radius: 3px 0 0 3px;
                -khtml-border-radius: 3px 0 0 3px;
                -moz-border-radius: 3px 0 0 3px;
                border-radius: 3px 0 0 3px;
            }
            #permalink-post .viewport {width: 250px; height: 500px; overflow: hidden; position: relative;}
            .photo-post, .photoset-post, .video-post, 
            .audio-post, .text-post, .quote-post, 
            .chat-post, .link-post, .answer-post {width: 250px;}
            #sidebar-post {margin-top: 70px;width: 290px;}
            #sidebar {
                position: relative;
                margin: 0;
                width: 289px;
                min-height: 530px;
                background: #e8ecef;
                border-left: 1px solid #d6dce1;
                -webkit-border-radius: 0 3px 3px 0;
                -khtml-border-radius: 0 3px 3px 0;
                -moz-border-radius: 0 3px 3px 0;
                border-radius: 0 3px 3px 0;
                z-index: 100;
            }
            #sidebar ul.sidebar-lists {margin-top: 40px;}

            /* jcarousel css style */

            .jcarousel-skin-tango .jcarousel-container-horizontal{width: 515px;margin-left: 20px;}
            .jcarousel-skin-tango .jcarousel-clip-horizontal{width: 470px;margin-left: 25px;}

        }

        /* ========================================= */
        @media only screen and (max-width: 480px) {

            #header {width: 320px;}
            #logo-title {width: 220px;}
            #search {display: none;}
            #nav-menu ul.menu-top-list {display: none;}
            span.pointer-sub {right: 20px;}
            #pages-list {top: 38px; right: -10px;}
            #widgets-content {width: 320px; overflow: hidden;}
            .widgets {position: relative; height: 320px; margin: 10px;}
            #slider-wrapper {max-height: 200px;}
            #slider a.slide-image {height: 200px;}
            #slider-buttons {display: none;}
            #content {width: 320px;}
            #timeline {width: 300px;}
            #time-line {left: 55px;}
            .postdetail{display: block;}
            .timeline-icon, .timeline-icon-pp {margin-top: 0px;	margin-left: 14px;}
            .timeline-icon-pp {display: none;}
            .timeline-preview {width: 270px; margin-left: 20px;}
            .timeline-content {width: 270px; margin-top: 15px;}
            .timeline-content-page {width: 270px;min-height: 45px;margin-top: 15px;}
            .timeline-pointer {
                position: absolute;
                top: 55px;
                left: 30px;
                width: 14px;
                height: 8px;
                background: url('http://static.tumblr.com/bygdzhm/tAnlz11ei/tl-pointer-small.png') no-repeat left top;
                float: left;
                z-index: 100;
            }
            .timeline-pointer span.tl-pointer,
            .timeline-pointer-pp span.tl-pointer {
                width: 0;
                height: 0;
                margin-top: 2px;
                margin-left: 1px;
                border-left: 6px solid transparent;
                border-right: 6px solid transparent;
                border-bottom: 6px solid #ebedf0; 
                overflow: hidden; /* IE fix */
                float: left;
            }
            .timeline-pointer-pp {
                position: absolute;
                top: 9px;
                left: 30px;
                width: 14px;
                height: 8px;
                background: url('http://static.tumblr.com/bygdzhm/tAnlz11ei/tl-pointer-small.png') no-repeat left top;
                float: left;
                z-index: 100;
            }
            .timeline-bar {width: 250px;}
            .datelike-bar {margin-bottom: 10px;}
            .button-share {float: left;}
            .button-viewpost {display: none;}
            #picture-profile {
                position: absolute;
                top: -37px;		
                left: 20px;
                width: 64px;
                height: 64px;
                background: #c8cbd6;
                border: 6px solid #c8cbd6;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 38px;
                float: left;
                z-index: 50;
            }
            #picture-profile a,
            #picture-profile a img {
                position: relative;
                overflow: hidden;
                width: 64px;
                height: 64px;
                -webkit-border-radius: 50%;
                -khtml-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border-radius: 32px;
                float: left;
                border: none;
            }
            #profile-description {margin-top: 35px;}
            .button-ask {display: none;}
            .social-links a {margin-left: 2px; margin-right: 1px;}
            .permalink-post-pagination {}
            .photopost, .photosetpost, .videopost, 
            .audiopost, .textpost, .quotepost, 
            .chatpost, .linkpost, .answerpost {width: 250px;}
            .timeline-content img {max-width: 250px;}
            .photoset-container {width: 250px;}
            .html_photoset,
            .html_photoset iframe.photoset {width: 250px;}
            .big {display: none;}
            .small {display: block;}
            .post-desc p.video,
            .post-desc p.video embed,
            .post-desc p.video iframe {width: 250px;}
            .audio-data {height: auto;}
            .player-box {width: 248px;}
            .player-box span.music-player {width: 220px;}
            .bodytext img {max-width: 250px;}
            .show-comments a.show-comment-btn {margin-left: 25%;}
            #disqus {width: 250px;}

            #post_box_wrap {width: 295px;}
            #permalink-container {width: 295px;}
            .navigation-post {width: 295px;}
            .navigation-post a.older {top: 20px;left: 0px;}
            .navigation-post a.newer {top: 20px;right: 0px;}
            #permalink-post {width: 275px;}
            #permalink-post {
                -webkit-border-radius: 3px 3px 0 0;
                -khtml-border-radius: 3px 3px 0 0;
                -moz-border-radius: 3px 3px 0 0;
                border-radius: 3px 3px 0 0;
            }
            #permalink-post .viewport {width: 250px; height: 500px; overflow: hidden; position: relative;}
            .photo-post, .photoset-post, .video-post, 
            .audio-post, .text-post, .quote-post, 
            .chat-post, .link-post, .answer-post {width: 250px;}
            #sidebar-post {margin-top: 0px;width: 295px;}
            #sidebar {
                position: relative;
                margin: 0;
                width: 295px;
                height: auto;
                background: #e8ecef;
                border-left: 0px solid #d6dce1;
                -webkit-border-radius: 0 0 3px 3px;
                -khtml-border-radius: 0 0 3px 3px;
                -moz-border-radius: 0 0 3px 3px;
                border-radius: 0 0 3px 3px;
                z-index: 100;
            }
            #sidebar ul.sidebar-lists {margin-top: 20px;}

            /* jcarousel css style */

            .jcarousel-skin-tango .jcarousel-container-horizontal{width: 230px;margin-left: 30px;}
            .jcarousel-skin-tango .jcarousel-clip-horizontal{width: 230px;}


        }



    </style>
</head>
<body>
    <div id="container">
        <div id="top-content">	
            <section id="header-wrapper">
                <div id="header">
                    <div id="logo-title">
                        <?php echo $this->Html->image('logo.png', array('url' => '#')) ?>
                    </div>

                    <div id="search">
                        <?php
                        echo $this->Form->create('#', array('type' => 'get'));
                        echo $this->Form->input('key', array('id' => 'searchInput', 'placeholder' => 'Search', 'label' => false));
                        echo $this->Form->submit('', array('id' => 'searchBtn'));
                        echo $this->Form->end();
                        ?>
                    </div>


                    <div id="widget-button">
                        <?php
                        echo $this->Html->link('', 'javascript:void(0);', array('class' => 'panelwidget down'));
                        ?>
                    </div>

                    <div id="nav-menu">
                        <ul class="menu-top-list">
                            <li class="menu"><?php echo $this->Html->link(__('主页'), '/', array('class' => 'menu')); ?></li>
                            <li class="menu"><?php echo $this->Html->link(__('往事随风'), '/', array('class' => 'menu')); ?></li>
                            <li class="menu pages"><a href="javascript:void(0)" class="pages-menu menu"><?php echo __('其他'); ?><span class="menu-triger"></span></a>
                                <div id="pages-list">
                                    <span class="pointer-sub"></span>
                                    <ul class="submenu-top">
                                        <li class="submenu"><a href="/about"><?php echo __('关于我'); ?></a></li>					  
                                        <li class="submenu"><a href="/about"><?php echo __('留言'); ?></a></li>
                                    </ul>
                                </div>
                            </li>	
                        </ul>

                        <ul class="menu-top-icon">
                            <li class="menu pages"><a href="javascript:void(0)" class="pages-menu menu"></a>
                                <div id="pages-list">
                                    <span class="pointer-sub"></span>
                                    <ul class="submenu-top">								
                                        <li class="submenu"><a href="/archive">Archive</a></li>

                                        <li class="submenu"><a href="/ask">Ask Me!</a></li>

                                        <li class="submenu"><a href="/random">Random</a></li>
                                        <li class="submenu"><a href="/rss">Subscribe</a></li>


                                        <li class="submenu"><a href="/about">About Me</a></li>

                                        <li class="submenu"><a href="/theme-features">Features</a></li>

                                        <li class="submenu"><a href="/installation">Installation</a></li>															
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
            <!-- End #header-wrapper
            ================================================== -->

            <section id="widgets-wrapper" class="panel">
                <div id="widgets-content">

                    <ul id="widget_carousel" class="jcarousel-skin-tango">

                        <!-- ===== TWITTER WIDGET ===== -->

                        <li>
                            <div class="widgets tweetroll">
                                <h3 class="widget-title">LATEST TWEET</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div class="stream">
                                        <script type="text/javascript">
                                            function recent_tweets(data) {
                                                var time_ago = '';
                                                var tweet = '';
                                                document.getElementById("twitter_widget").innerHTML = "";
                                                for (i = 0; i < 3; i++) {

                                                    time_ago = ago(data[i].created_at);
                                                    // process links and reply
                                                    var tweet = data[i].text.replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig, function(url) {
                                                        return '<a href="' + url + '">' + url + '</a>';
                                                    }).replace(/(^|[\W])@(\w+)/ig, function(reply) {
                                                        return  "<a href='http://twitter.com/" + reply.substring(1) + "'>" + reply.charAt(0) + reply.substring(1) + "</a>";
                                                    });

                                                    document.getElementById("twitter_widget").innerHTML =
                                                            document.getElementById("twitter_widget").innerHTML +
                                                            "<li><p>" + tweet + "</p><a href=http://twitter.com/#!/tofuthemes/status/" + (data[i].id_str ? data[i].id_str : data[i].id) + " class='tweet-time'>" + time_ago + "</a></li>";
                                                }
                                            }

                                            function ago(a) {
                                                var b = new Date();
                                                var c = new Date(a);

                                                var d = b - c;
                                                var e = 1000,
                                                        minute = e * 60,
                                                        hour = minute * 60,
                                                        day = hour * 24,
                                                        week = day * 7;
                                                if (isNaN(d) || d < 0) {
                                                    return "";
                                                }
                                                if (d < e * 7) {
                                                    return "right now";
                                                }
                                                if (d < minute) {
                                                    return Math.floor(d / e) + " seconds ago";
                                                }
                                                if (d < minute * 2) {
                                                    return "about 1 minute ago";
                                                }
                                                if (d < hour) {
                                                    return Math.floor(d / minute) + " minutes ago";
                                                }
                                                if (d < hour * 2) {
                                                    return "about 1 hour ago";
                                                }
                                                if (d < day) {
                                                    return Math.floor(d / hour) + " hours ago";
                                                }
                                                if (d > day && d < day * 2) {
                                                    return "yesterday";
                                                }
                                                if (d < day * 365) {
                                                    return Math.floor(d / day) + " days ago";
                                                } else {
                                                    return "over a year ago";
                                                }
                                            }
                                        </script>

                                        <ul id="twitter_widget"> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <!-- ===== TAGCLOUD WIDGET ===== -->

                        <li>
                            <div class="widgets tagcloud">
                                <h3 class="widget-title">TAG CLOUDS</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div id="taglist">				
                                    </div>   
                                </div>
                            </div>
                        </li>



                        <!-- ===== LIKES WIDGET ===== -->


                        <li>
                            <div class="widgets liked">
                                <h3 class="widget-title">LATEST POST I LIKE</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <ul id="likes"> 
                                        <li class="like_post like_photo_post">  
                                            <ul id="likes">
                                                <li class="like_post like_photo_post">

                                                    <div class="post_info_top" style="display:none;"><a href="http://staff.tumblr.com/post/17266195688/as-new-york-fashion-week-kicks-off-were-very">Photo</a> <span class="via">via</span> <a href="http://staff.tumblr.com/">staff</a></div>


                                                    <a href="http://staff.tumblr.com/post/17266195688/as-new-york-fashion-week-kicks-off-were-very" class="photo_link">
                                                        <img class="like_photo" alt=""
                                                             src="http://25.media.tumblr.com/tumblr_lz2w07g1RS1qz8q0ho1_r1_250.jpg"/>
                                                    </a>



                                                    <div class="like_below_photo"></div>

                                                    <div class="like_caption">

                                                        <p>As New...</p>            </div>


                                                    <div class="post_info_bottom" style="display:none;"><a href="http://staff.tumblr.com/post/17266195688/as-new-york-fashion-week-kicks-off-were-very">Photo</a> <span class="via">via</span> <a href="http://staff.tumblr.com/">staff</a></div>

                                                </li></ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>




                        <!-- ===== FACEBOOK WIDGET ===== -->

                        <li>
                            <div class="widgets facebook-like">
                                <h3 class="widget-title">FACEBOOK LIKES</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div class="facebook_like">                                
                                        <div id="fb-root"></div>
                                        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                                        <fb:like-box href="http://www.facebook.com/envato" 
                                                     width="220" show_faces="true" border_color="#24262e" stream="false" header="false" data-colorscheme="dark" >
                                        </fb:like-box>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <!-- ===== FOLLOWING WIDGET ===== -->


                        <li>
                            <div class="widgets following">
                                <h3 class="widget-title">FOLLOWING</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div class="following">    
                                        <ul>

                                            <li><a href="http://blog.petervidani.com/"><img src="http://24.media.tumblr.com/avatar_a8f699cb1294_48.png" alt="" /></a></li>

                                            <li><a href="http://staff.tumblr.com/"><img src="http://24.media.tumblr.com/avatar_013241641371_48.png" alt="" /></a></li>

                                            <li><a href="http://designersof.com/"><img src="http://25.media.tumblr.com/avatar_111d2cc5217a_48.png" alt="" /></a></li>

                                            <li><a href="http://irmaroch.tumblr.com/"><img src="http://25.media.tumblr.com/avatar_399944a16ccb_48.png" alt="" /></a></li>

                                            <li><a href="http://popcase.tumblr.com/"><img src="http://25.media.tumblr.com/avatar_4baa9a5e056e_48.png" alt="" /></a></li>

                                            <li><a href="http://tumblrbot.tumblr.com/"><img src="http://24.media.tumblr.com/avatar_35a1a3ec0cf3_48.png" alt="" /></a></li>

                                            <li><a href="http://syinaction.tumblr.com/"><img src="http://24.media.tumblr.com/avatar_270b53158eb7_48.png" alt="" /></a></li>

                                            <li><a href="http://atomic-theme.tumblr.com/"><img src="http://24.media.tumblr.com/avatar_c08d753b6980_48.png" alt="" /></a></li>

                                            <li><a href="http://calipso-theme.tumblr.com/"><img src="http://25.media.tumblr.com/avatar_b3177b81bf46_48.png" alt="" /></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>




                        <!-- ===== FLICKR WIDGET ===== -->

                        <li>
                            <div class="widgets flickr_widget">
                                <h3 class="widget-title">PHOTOSTREAM</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div id="photos">
                                        <script type="text/javascript">
                                            jQuery(function() {
                                                var apiKey = 'bced12293bbe0ab3204b70f337cad8d1';
                                                var userId = '59105255@N06';
                                                var perPage = '9';
                                                var showOnPage = '6';

                                                jQuery.getJSON('http://api.flickr.com/services/rest/?format=json&method=' + 'flickr.photos.search&api_key=' + apiKey + '&user_id=' + userId + '&per_page=' + perPage + '&jsoncallback=?',
                                                        function(data) {
                                                            var classShown = 'class="lightbox"';
                                                            var classHidden = 'class="lightbox hidden"';

                                                            jQuery.each(data.photos.photo, function(i, rPhoto) {
                                                                var basePhotoURL = 'http://farm' + rPhoto.farm + '.static.flickr.com/' + rPhoto.server + '/' + rPhoto.id + '_' + rPhoto.secret;
                                                                var thumbPhotoURL = basePhotoURL + '_s.jpg';
                                                                var mediumPhotoURL = basePhotoURL + '.jpg';
                                                                var photoStringStart = '<a ';
                                                                var photoStringEnd = 'title="' + rPhoto.title + '" href="' + mediumPhotoURL + '"><img src="' + thumbPhotoURL + '" alt="' + rPhoto.title + '"/></a>;'

                                                                var photoString = (i < showOnPage) ?
                                                                        photoStringStart + classShown + photoStringEnd :
                                                                        photoStringStart + classHidden + photoStringEnd;

                                                                jQuery(photoString).appendTo("#photos");
                                                            });
                                                        });
                                            });
                                        </script>						                            
                                    </div>				
                                </div>
                            </div>
                        </li>



                        <!-- ===== DRIBBBLE WIDGET ===== -->

                        <li>
                            <div class="widgets dribbble-shot">
                                <h3 class="widget-title">DRIBBBLE SHOOT</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <ul id="dribbble-widget">                                

                                    </ul>
                                </div>
                            </div>
                        </li>



                        <!-- ===== INSTAGRAM WIDGET ===== -->


                        <li>
                            <div class="widgets instagram-photo">
                                <h3 class="widget-title">INSTAGRAM</h3>
                                <span class="widget-divider"></span>

                                <div class="widget_content">
                                    <div id="instagram-widget">                                  												
                                    </div>
                                </div>
                            </div>
                        </li>



                    </ul> <!-- End #widgets-carousel --> 
                </div> <!-- End #widgets-content -->
            </section>
            <!-- End #widgets-wrapper
            ================================================== -->
        </div>
        <!-- End #top-content
        ================================================== -->

        <?php echo $this->fetch('content'); ?>
    </div>
    <?php echo $this->element('sql_dump'); ?>
    <script type="text/javascript">stLight.options({publisher: "ur-ebddb618-3352-62d8-679-6bf7d22ddb8e"});</script>
    <?php
    echo $this->Html->script(
            array(
                'jquery',
                'buttons',
                'easing',
                'jquery.flexslider-min',
                'jquery.instagram',
                'jquery.jcarousel.min',
                'jquery.tinyscrollbar.min',
                'jquery-address',
                'jribbble',
                'plugin.infinite',
                'popup-page',
                'quant',
                'tag-cloud',
                'tumblelog',
                'tweets'
    ));
    ?>
    <script type="text/javascript">

        $(document).ready(function() {

            /* Widget Carousel */
            $('#widget_carousel').jcarousel({
                wrap: 'circular',
                scroll: 1
            });


            /* View Post on Popup */
            $.address.init(function(event) {

                // Initializes the plugin
                var base_url = $.address.baseURL() + "/";
                var path_url = window.location.pathname;

                var main_url = base_url.replace(path_url, '').replace('http://', '').replace('http:/', '');

                $(".button-viewpost a,.navigation-post a,button-ask,.menu a.random,#popupClose,.button-ask a").address(function() {
                    return $(this).attr('href').replace('http://' + main_url, '');
                });
            }).change(function(event) {

                var handler = function(data) {
                    $('#permalink-wrapper').html($('#permalink-container', data).html());

                    //disable disqus comment on popup
                    $(".show-comments").css({'display': 'none'});

                    $(".permalink-show-comments").css({'display': 'block'});
                };


                // Loads the page content and inserts it into the content area
                if (event.value != '/') {
                    if (event.value == '/close') {
                        $.address.value("/");
                        $("#popupBG").fadeOut();
                        $("#popupPages").css({'display': 'none'});
                        return false;
                    } else {
                        $.ajax({
                            url: event.value,
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                handler(XMLHttpRequest.responseText);
                            },
                            success: function(data, textStatus, XMLHttpRequest) {
                                handler(data);
                                $("#popupPages").css({'display': 'block'});
                                $("#popupBG").fadeIn();

                                //visible all element hide
                                $("#popupClose").css('display', 'block');
                                $(".navigation-post").css('display', 'block');

                                //customs scroll
                                $('#permalink-post').tinyscrollbar({sizethumb: 73});

                                //for short url input
                                $("#shortURL").click(function() {
                                    $(this).select();

                                    $(".permalink-show-comments").css({'display': 'block'});

                                });
                            }
                        });
                    }	//eo event.value == '/close'   		             			             			                
                }//eo event.value == '/'
            });
            /* End of popup js */


            /* Flex Slider */
            $('.flexslider').flexslider({
                animation: "fade",
                directionNav: false,
                controlNav: true,
                slideshowSpeed: 5000,
                animationDuration: 600,
                controlsContainer: ".flex-container"
            });

            //for short url input
            $("#shortURL").click(function() {
                $(this).select();
            });

            //for pages dropdown	
            $('.pages').hover(
                    function() {
                        //show its submenu
                        $('#pages-list', this).fadeIn(200);
                    },
                    function() {
                        //hide its submenu
                        $('#pages-list', this).fadeOut(200);
                    }
            );


            //for widget panel up-down
            $('.down').click(
                    function() {
                        $('.panel', this).slideDown(300);
                    },
                    function() {
                        $('.panel', this).slideUp(300);
                    }
            );

            $(".down").live('click', function() {
                $('.panel').slideDown();
                $(this).removeClass('down');
                $(this).addClass('up');
                $(this).css({"background-image": "url('http://static.tumblr.com/bygdzhm/bqhlzht0m/btnwidget-active.png')"});
            });//eo paneldown click

            $(".up").live('click', function() {
                $('.panel').slideUp();
                $(this).removeClass('up');
                $(this).addClass('down');
                $(this).css({"background-image": "url('http://static.tumblr.com/bygdzhm/Uu6lzht36/btnwidget-deactive.png')"});
            });//eo panelup click


            //for scroll to-top hover
            $('.icon-totop').live('mouseover mouseout', function(event) {
                if (event.type == "mouseover") {
                    $(this).parent().find('.tophov').stop().fadeTo(300, 1);
                } else {
                    $(this).parent().find('.tophov').stop().fadeTo(300, 0);
                }

            });

            //for scroll to-top animate
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('.icon-totop').fadeIn();
                    } else {
                        $('.icon-totop').fadeOut();
                    }
                });

                // scroll body to 0px on click
                $('.timeline-icon-bottom a').click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });


            //for infinite scroll
            $('#blogpost').infinitescroll({
                navSelector: "#pagination_post",
                nextSelector: "#pagination_post .newer-page a",
                itemSelector: "#blogpost",
                loadingImg: "http://static.tumblr.com/he6jwsj/BCnloyyqb/loader.gif",
                loadingText: "...",
                donetext: "No More Posts"

            });

            $(".show-comment-btn").live('click', function() {
                $('#disqus').slideUp(function() {
                    //customs scroll for permalink only
                    $('#permalink-post').tinyscrollbar({sizethumb: 73});
                    $('#permalink-post').tinyscrollbar_update('bottom');
                });
                $(this).removeClass('disqusdown');
                $(this).addClass('disqusup');
                $(this).css({"background-image": "url('http://static.tumblr.com/bygdzhm/z4dlyli65/btn-showcomment.png')"});
            });//eo paneldown click

            $(".disqusup").live('click', function() {
                $('#disqus').slideDown(function() {
                    //customs scroll for permalink only
                    $('#permalink-post').tinyscrollbar({sizethumb: 73});
                    $('#permalink-post').tinyscrollbar_update('bottom');
                });
                $(this).removeClass('disqusup');
                $(this).addClass('disqusdown');
                $(this).css({"background-image": "url('http://static.tumblr.com/bygdzhm/Ginlyli5e/btn-hidecomment.png')"});
            });//eo panelup click

            //customs scroll for permalink only
            $('#permalink-post').tinyscrollbar({sizethumb: 73});

            // Custom Follow button
            $("#tumblr_controls").attr('style', '');
            $("#tumblr_controls").attr('style', "position: fixed;z-index: 1337;bottom: 0px;right: 0px;border: 0px;background-color: transparent;overflow: hidden;");

            //dribble account

            $.jribbble.getShotsByPlayerId('syinaction', function(playerShots) {
                var html = [];
                $.each(playerShots.shots, function(i, shot) {
                    html.push('<li><a href="' + shot.url + '">');
                    html.push('<img src="' + shot.image_teaser_url + '" ');
                    html.push('alt="' + shot.title + '"></a></li>');
                });

                $('#dribbble-widget').html(html.join(''));
            }, {page: 1, per_page: 9});

            //load customs scroll when show more notes button click
            $(".more_notes_link").each(function() {
                $(this).click(function() {

                    //customs scroll for permalink only
                    $('#permalink-post').tinyscrollbar({sizethumb: 73});
                    $('#permalink-post').tinyscrollbar_update('bottom');

                });
            });

            //Instagram Widget

            $("#instagram-widget").instagram('getStream', {
                count: 9,
                user: 72163,
                getUser: false,
                callback: function() {
                    $.each($('#instagram-widget img'), function() {
                        var $this = $(this);
                        $(this).css({'cursor': 'pointer'});
                        var largeUrl = $this.data('altImageSizes').standard_resolution.url;
                        $this.click(function() {
                            window.open(largeUrl);
                        });
                    });
                }
            });



        });

        $(window).load(function() {
            $('#disqus').slideDown(function() {
                //customs scroll for permalink only
                $('#permalink-post').tinyscrollbar({sizethumb: 73});
            });
        });

    </script>

    <!--===== DISQUS SHORTNAME =====-->
    <script type="text/javascript">

        //<![CDATA[
        (function() {
            var links = document.getElementsByTagName('a');
            var query = '?';
            for (var i = 0; i < links.length; i++) {
                if (links[i].href.indexOf('#disqus_thread') >= 0) {
                    query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
                }
            }
            document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/atomic/get_num_replies.js' + query + '"></' + 'script>');
        })();
        //]]>

    </script>


    <!--===== GOOGLE ANALYTICS =====-->		
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <!-- END SCRIPT
    ================================================== -->

    <!-- BEGIN TUMBLR CODE -->
    <iframe src="http://assets.tumblr.com/iframe.html?af5ce0ec8e924e785026d9afb227449e&amp;src=http%3A%2F%2Ftimeline-theme.tumblr.com%2F&amp;lang=en_US&amp;name=timeline-theme" width="330" height="25" scrolling="no" frameborder="0" style="position:absolute; z-index:1337; top:0px; right:0px; border:0px; background-color:transparent; overflow:hidden;" id="tumblr_controls"></iframe>
<!--[if IE]><script type="text/javascript">document.getElementById('tumblr_controls').allowTransparency=true;</script><![endif]-->
    <img style="position:absolute;z-index:-3334;top:0px;left:0px;visibility:hidden;" src="http://www.tumblr.com/impixu?T=1363958027&J=eyJ0eXBlIjoiYmxvZyIsImJsb2dpZCI6IjQ0NTMyMTIzIiwidXJsIjoiaHR0cDpcL1wvdGltZWxpbmUtdGhlbWUudHVtYmxyLmNvbVwvIn0=&U=HBGPBHGACK&K=bcc6814fb6b0ad91285fc973afe80cd9fcd623bc7886c433d0d2ee62b0ca5827"/><!-- END TUMBLR CODE -->
    <iframe src="http://assets.tumblr.com/analytics.html?748b075014045cae7cd6ac4429aded74" scrolling="no" width="1" height="1" frameborder="0" style="background-color:transparent; overflow:hidden; position:absolute; top:0; left:0 z-index:9999;" id="ga_target"></iframe>

    <script>
        window.setTimeout(function() {
            var analytics_frame = document.getElementById('ga_target');
            analytics_frame.contentWindow.postMessage('enable_comscore', analytics_frame.src.split('/analytics.html')[0]);
        }, 1000);
    </script>



    <script type="text/javascript">
        __qoptions = _qoptions = {qacct: 'p-19UtqE8ngoZbM'};
    </script>
    <script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
    <noscript>
    <img src="http://pixel.quantserve.com/pixel/p-19UtqE8ngoZbM.gif"
         style="display:none; border-width:0px; height:1px; width:1px;"/>
    </noscript>


    <img style="position:absolute;z-index:-3334;top:0px;left:0px;visibility:hidden;" src="http://www.tumblr.com/impixu?T=1363958027&J=eyJ0eXBlIjoidXJsIiwidXJsIjoiaHR0cDpcL1wvdGltZWxpbmUtdGhlbWUudHVtYmxyLmNvbVwvIn0=&U=MFLLANOGGA&K=d2038f7999dddf0a08d6932979cec1f00a24ff169907f19894bdac6eb045b24a"/></body>
</body>
</html>
