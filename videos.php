<!DOCTYPE HTML>
<html>
    <head>
        <title>Plasterers Sussex ~ Osborne Plastering Eastbourne</title>

        <meta name="description" content="Osborne Plastering are professional Plasterers based in Eastbourne, East Sussex providing services to Commercial and Domestic clients" />
        <meta name="keywords" content="Plasterers sussex, plastering eastbourne, plastering contractors"/>
        <meta name="author" content="AWK Web Design"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="We offer a professional and friendly plastering service to private and commercial clients. All Osborne Plastering work is carried out by our own trained applicators to the highest standards. With a wealth of experience working throughout the UK and abroad you can rest assured of a high quality finish and professional service." />

        <style type="text/css" media="all">@import "css/normalize.css";</style>
        <style type="text/css" media="all">@import "css/main.css";</style>

        <link href="https://fonts.googleapis.com/css?family=Barlow|Spinnaker" rel="stylesheet">
        <link rel="icon" href="/favicon2.ico" type="image/x-icon">

        <script src="jquery.js"></script>
    </head>
    
    <?php
        $link_stack = '<li><a href="index.php">Home</a></li>'.
        '<li><a href="services.php">Services</a></li>'.
        '<li><a href="photo_gallery.php">Photo Gallery</a></li>'.
        '<li><a href="testimonials.php">Testimonials</a></li>'.
        '<li><a href="videos.php">Videos</a></li>'.
        '<li><a href="contact_us.php">Contact Us</a></li>'; 
    
        $social_link_stack = '<li><a href="https://www.facebook.com/osborneplastering.co.uk/">Facebook</a></li>';
            
        $footer_only_links = '<li id="credits_footer_link"><a href="credits.php">Credits</a></li>';
    ?>
    
    <body>
        
        <?php include 'nav.php'?>

        <div id="logo_background">
            <div id="logo_container">
                <a href="index.php">
                    <div id="star_8"><img src="images/star_8.png"/></div>
                    <div id="star_7"><img src="images/star_7.png"/></div>
                    <div id="star_6"><img src="images/star_6.png"/></div>
                    <div id="star_5"><img src="images/star_5.png"/></div>
                    <div id="star_4"><img src="images/star_4.png"/></div>
                    <div id="star_3"><img src="images/star_3.png"/></div>
                    <div id="star_2"><img src="images/star_2.png"/></div>
                    <div id="star_1"><img src="images/star_1.png"/></div>
                    <div id="osborne_text"><img src="images/osborne_text.png"/></div>
                    <div id="header_watermark"><img src="images/stars_watermark.png"/></div>
                    <div id="header_watermark_2"><img src="images/stars_watermark.png"/></div>
                </a>
            </div>
                <!--Mobile picture-->
                <div id="logo_mobile_container">
                    <img id="logo_mobile" src="images/osborne_logo_white_bg.jpg" alt="osborne plastering logo"/>
                </div>
                <div id="mobile_watermark">
                    <img src="images/stars_watermark.png"/>
                </div>
        </div>
            <div id="sticker_1_container">
            <div class="sticker" id="sticker_1">
                <a href="https://www.checkatrade.com/OsbornePlastering/" target="_blank"><img id="sticker_1" src="images/checkatrade.jpg"/></a>
            </div>
            </div>
        <div class="sticker" id="sticker_2">
             <a href="https://www.eastsussex.gov.uk" target="_blank"><img src="images/trading_standards.jpg"/></a>
        </div>
        
        
        <div class="content_1" id="videos_content"><hr class="long_hr"><br><br><h1>Plastering Videos</h1><br>
           
            <iframe src="https://www.youtube.com/embed/9s_s6urzDkI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
            <iframe src="https://www.youtube.com/embed/6igjsIwMBL0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
            <iframe src="https://www.youtube.com/embed/aXXfkKnP2EQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
            <iframe src="https://www.youtube.com/embed/2VQBzzUBh60" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div>

        <?php include 'content_2.php';?>

        <?php include 'logos.php';?>

        <?php include 'footer.php'?>

        <script src="functions.js"></script>

    </body>
</html>