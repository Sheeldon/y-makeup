<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    
    <meta property='http://ogp.me/ns#type' content='website'/><meta property='http://ogp.me/ns#title' content=''/><meta property='http://ogp.me/ns#image' content=''/><meta property='http://ogp.me/ns#description' content=''/><meta property='http://ogp.me/ns#url' content='' />
        <title>MakeUp</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />                           
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
        <link rel="stylesheet" href="css/assets.minb445.css?_build=1517413578"/>
        <link rel="stylesheet" href="css/stylesd257.css?_build=1518202994"/>
        <style>
        @import url(http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,100,100italic,300,300italic,italic,500,500italic,700,700italic,800,800italic,900,900italic|Crimson+Text:regular,italic,600italic,600,700,700italic|Montserrat:regular,100,100italic,200,200italic,300,300italic,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto:regular,100,100italic,300,300italic,italic,500,500italic,700italic,900italic,900,700&amp;subset=latin,cyrillic,cyrillic-ext,latin-ext,greek,vietnamese,greek-ext);
        </style>
        <link rel="stylesheet" href="css/styles6743.css?_build=1517428908" id="moto-website-style"/>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    
</head>
<body class="moto-background">
    
    <div class="page">

        <header id="section-header" class="header moto-section" data-widget="section" data-container="section">
        
        </header>

        <section id="section-content" class="content page-9 moto-section" data-widget="section" data-container="section">
        


<!-- Begin Slider -->
<?php 
    require_once('slider.php');
 ?>
 <!-- End Slider -->


<!-- Begin Announcement 1 -->
<?php 
    require_once('announcement_1.php');
 ?>
 <!-- End Announcement 1 -->


 <!-- Begin Announcement 2 -->
<?php 
    require_once('announcement_2.php');
 ?>
 <!-- End Announcement 2 -->

<!-- Begin Products -->
<?php 
    require_once('products.php');
 ?>
 <!-- End Products -->

 <!-- Begin Info -->
<?php 
    require_once('info.php');
 ?>
 <!-- End Info -->
            




        
        </section>
    </div>

        
    <div data-moto-back-to-top-button class="moto-back-to-top-button">
        <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
            <span class="moto-back-to-top-button-icon fa"></span>
        </a>
    </div>
    
    <script src="js/website.assets.mind3ff.js?_build=1517413644" type="text/javascript" data-cfasync="false"></script>
    <script src="js/website.min34c3.js?_build=1517413634" type="text/javascript" data-cfasync="false"></script>
    <script src="js/moto.store.site.min.js" type="text/javascript"></script>
    
    <!--
    <script type="text/javascript" data-cfasync="false">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = 'index.html';
        websiteConfig.apiUrl = 'api.php/index.html';
        websiteConfig.preferredLocale = 'en_US';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
                websiteConfig.back_to_top_button = {"topOffset":300,"animationTime":500,"type":"theme"};
                websiteConfig.popup_preferences = {"loading_error_message":"The content could not be loaded."};
        websiteConfig.lazy_loading = {"enabled":true};
        angular.module('website.plugins', ["StoreWebsite"]);
    </script>
    -->

</body>
</html>