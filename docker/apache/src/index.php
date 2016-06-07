<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Burstfly - Free HTML5 Template</title>

<!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
    
/*
Theme Name: Burstfly
Author: Allie
Author URI: http://designscrazed.org
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: white, four-columns, responsive-layout, featured-images, fixed-width-template, blogging, freebie

*/

/*-------------------------*/
/* SOCIAM FONT ICON */
/*-------------------------*/

@font-face {
    font-family: 'socialicoregular';
    src: url('font/socialico-webfont.eot');
    src: url('font/socialico-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/socialico-webfont.woff2') format('woff2'),
         url('font/socialico-webfont.woff') format('woff'),
         url('font/socialico-webfont.ttf') format('truetype'),
         url('font/socialico-webfont.svg#socialicoregular') format('svg');
}

@font-face {
    font-family: 'socialico_plusregular';
    src: url('font/socialico_plus-webfont.eot');
    src: url('font/socialico_plus-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/socialico_plus-webfont.woff2') format('woff2'),
         url('font/socialico_plus-webfont.woff') format('woff'),
         url('font/socialico_plus-webfont.ttf') format('truetype'),
         url('font/socialico_plus-webfont.svg#socialico_plusregular') format('svg');
}

/*-------------------------*/
/* DON'T TOUCH  */
/*-------------------------*/

.disable-hover {
    pointer-events: none;
}

img{vertical-align:bottom;}

a {
    text-decoration:none;
}

ul { 
    list-style-type: none; 
    margin:0;
    padding:0;
}

/*-------------------------*/
/* MAIN CLASS TRANSITION FOR EFFECT HOVER*/
/*-------------------------*/

.object {
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out; /** Chrome & Safari **/
    -moz-transition: all 0.25s ease-in-out; /** Firefox **/
    -o-transition: all 0.25s ease-in-out; /** Opera **/
}

/*----------------------------*/
/* BODY SETTINGS */
/*----------------------------*/

body,html{
    padding:0;margin:0;
    background-color:#F4F4F4;
}

.cache{
    width:100%;
    height:100%;
    position:absolute;
    background-color:#FFF;
    z-index:1000;
}

/*----------------------------*/
/* CUSTOM SCROLLBAR  */
/*----------------------------*/

::-webkit-scrollbar {
    width: 9px;
}
 
::-webkit-scrollbar-track {
    background:#eee;
    border: thin solid lightgray;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1) inset;
}
 
::-webkit-scrollbar-thumb {
    background:#999;
    border: thin solid gray;
}

/*----------------------------*/
/* HEADER BLACK TOP WITH LOGO */
/*----------------------------*/

#wrapper-header{
    float:left;
    width:105%;
    height:65px;
    background-color:#2E2D30;
    opacity:0;
}

#main-header{
    position:relative;
    width:1200px;
    left:50%;
    margin-left:-600px;
    height:auto;
}

.logo{
    position:absolute;
    margin-top:13.5px;
    left:15px;
}

#stripes{
    background: url(img/stripes.svg) no-repeat;
    position:absolute;
    width:27px;
    height:20px;
    right:15px;
    top:22.5px;
    cursor:pointer;
    display:none;
}

.logo img{height:100%;width:100%;}

/*----------------------------*/
/* SUB WHITE NAV BAR */
/*----------------------------*/

#wrapper-navbar{
    float:left;
    width:100%;
    height:0px;
    background-color:#FFF;
    border-bottom:solid #EDEDED 1px;
    opacity:0;
}

.navbar{
    position:relative;
    width:1200px;
    left:50%;
    margin-left:-600px;
    height:100%;
    top:0;
}

.top-rated,.recent,.oldies{
    float:left;
    text-align:left;
    font-family: 'Roboto',sans-serif;
    font-size: 13px;
    height:40px;
    line-height:40px;
    margin-top:10px;
    cursor:pointer;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-transform: uppercase;
    letter-spacing:1.5px;
}

.top-rated{color:#666;margin-left:15px;font-weight:500;}
.recent,.oldies{color: #CCC;margin-left:80px;font-weight:500;margin-left:40px;}

.top-rated:hover,.recent:hover,.oldies:hover{color:#666;opacity:1;}

#fleche-nav-1,#fleche-nav-2,#fleche-nav-3{
    float:left;
    margin-top:26px;
    background: url(img/fleche-nav.svg) no-repeat ;
    width:5px;
    height:10px;
    margin-left:5px;
}

#fleche-nav-2,#fleche-nav-3{opacity:0.5;}

#wrapper-bouton-icon{display:block;}
#bouton-ai,#bouton-psd,#bouton-photo,#bouton-font,#bouton-theme,#bouton-premium{
    float:right;
    width:28px;
    height:28px;
    margin-top:16px;
    margin-right:15px;
    cursor:pointer;
    opacity:1;
     transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
}

#bouton-ai:hover,#bouton-psd:hover,#bouton-photo:hover,#bouton-font:hover,#bouton-theme:hover,#bouton-premium:hover{opacity:0.5;transform: scale(1.2);}

#bouton-ai img,#bouton-psd img,#bouton-photo img,#bouton-font img,#bouton-theme img,#bouton-premium img{width:100%;height:100%;}

/*----------------------------*/
/* MAIN DIV */
/*----------------------------*/

#wrapper-container{
    float:left;
    width:100%;
    height:auto;
}

.container,.container-footer {
    position:relative;
    width: 1200px;
    margin-left:-600px;
    left:50%;
}

/*----------------------------*/
/* RESPONSIVE MENU */
/*----------------------------*/

#main-container-menu{
    position:fixed;
    width:100%;
    height:100%;
    background-color:rgba(34, 34, 34, 0.95);
    left:-100%;
    z-index:10000; !important
}

.container-menu{
    position:relative;
    height:100%;
    width:100%;
}

/*----------------------------*/
/* CROSS/CLOSE FOR THE RESPONSIVE MENU */
/*----------------------------*/

#main-cross{
    float:left;
    min-height:53px;
    width:100%;
    margin-bottom:50px;
}

#cross-menu{
    position:absolute;
    width:18px;
    height:18px;
    right:25px;
    margin-top:25px;
    background: url(img/cross-menu.svg) no-repeat;
    cursor:pointer;
}

/*----------------------------*/
/* SMALL LOGO RESPONSIVE MENU */
/*----------------------------*/

#main-small-logo{
    float:left;
    min-height:53px;
    width:100%;
    margin-bottom:25px;
}

.small-logo{
    position:absolute;
    width:131px;
    height:53px;
    left:50%;
    margin-left:-65.5px;
    background: url(img/small-logo.svg) no-repeat;
}

/*----------------------------*/
/* MAIN DIV WITH IMAGE */
/*----------------------------*/

#main-container-image {
    float:left;
    width:100%;
    height:auto;
    background-color:#F4F4F4;
    margin-top:25px;
    opacity:0;
}

.work figure {
    float:left;
    width:calc(100% / 4 - 30px);
    height:auto;
    line-height:auto;
    position: relative;
    padding: 0 !important;
    margin: 15px;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
    box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
    background-color:#FFF;
}

.work figure.white dl{
    background: #FFF;
}


.work figure a img {
    height: 90%;
    width: 90%;
    margin-left:5%;
    margin-top:5%;
}

.work figure dl {
    opacity: 0;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    padding: 10px;
    margin: 0;
    line-height: 2.5; 
    color: white;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}

.work figure:hover dl {
    opacity: 1;
}

.work figure dl dt {
    font-family: Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 13px;
    margin-bottom:0;
    font-weight:600;
    width:80%;
    margin-left:10%;
    color:#666;
    text-align:left;
    height:20px;
    line-height:100%;
    margin-top:40px;

}

.work figure dl dd {
    margin-left: 0;
    font-family: Helvetica, sans-serif;
    font-size: 12px;
    font-weight:400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    line-height:150%;
    color:#999;
    width:80%;
    margin-left:10%;
    text-align:left;
    
}

#wrapper-part-info{
    position:relative;
    width:100%;
    height:44px;
    background-color:#FFFFFF;
}

#part-info{
    float:left;
    width:calc(100% - 53px);
    text-align:left;
    line-height:44px;
    font-family: Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 15px;
    font-weight:400;
    color:#666;
    margin-left:10px;
    height:44px;
}

.part-info-image{
    float:left;
    margin-left:15px;
    margin-top:8px;
}

.part-info-image img{width:100%;height:100%;}

/*----------------------------*/
/* RESPONSIVE MENU LIST  */
/*----------------------------*/

#main-premium-ressource,#main-themes,#main-psd,#main-ai,#main-font,#main-photo{
    float:left;
    width:100%;
    min-height:36px;
}

.premium-ressource,.themes,.psd,.ai,.font,.photo{
    position:relative;
    text-align:center;
    font-family: Helvetica, sans-serif;
    font-size: 16px;
    font-weight:400;
    height:36px;
    line-height:36px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.premium-ressource a,.themes a,.psd a,.ai a,.font a,.photo a{
    transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out; 
    -moz-transition: all 0.2s ease-in-out; 
    -o-transition: all 0.2s ease-in-out;
}

.premium-ressource a,.themes a,.psd a,.photo a,.font a,.ai a{color:#999;}

.premium-ressource a:hover{color:#CCC;}
.themes a:hover{color:#66CC7A;}
.psd a:hover{color:#2B9ED8;}
.photo a:hover{color:#56514C;}
.font a:hover{color:#B88DFF;}
.ai a:hover{color:#FF9000;}

/*----------------------------*/
/* UNDERNEATH THE MAIN IMAGE PART    */
/*----------------------------*/

#wrapper-thank{
    float:left;
    width:100%;
    height:190px;
    background-color:#F2F2F2;
    margin-top:40px;
}

#wrapper-oldnew{
    float:left;
    width:100%;
    height:80px;
    background-color:#F4F4F4;
    margin-top:50px;
}

.thank,.oldnew{
    position:relative;
    width:1200px;
    left:50%;
    margin-left:-600px;
    height:100%;
    top:0;
}

.thank-text{
    float:left;
    text-align:center;
    font-family: 'Pacifico', cursive;
    font-size: 70px;
    height:190px;
    line-height:190px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color:#B3B3B3;
    font-weight:400;
    width:100%;
}

.wrapper-oldnew-prev,.wrapper-oldnew-next{
    float:left;
    width:50%;
}

#oldnew-prev,#oldnew-next{
    width:43px;
    height:43px;
    opacity:0.5;
    cursor:pointer;
}

#oldnew-next{background: url(img/next.svg) no-repeat;margin-left:25px;float:left;}
#oldnew-prev{background: url(img/prev.svg) no-repeat;margin-right:25px;float:right;}

/*----------------------------*/
/* FOOTER */
/*----------------------------*/

#main-container-footer{
    float:left;
    width:100%;
    height:auto;
    background-color:#F9F9F9;
    border-top:solid #F1F1F1 1px;
    -webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);

}

#row-1f,#row-2f,#row-3f,#row-4f{
    float:left;
    width:calc(100% / 4);
    height:auto;
}

.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
    float:left;
    text-align:left;
    height:140%;
    line-height:140%;
    margin-left:20px;
    width:80%;
    text-align:left;
    font-family: Helvetica, sans-serif;
    font-size: 14px;
    font-weight:400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color:#A1A1A1;
    margin-top:80px;
}
.text-row-1f,.text-row-2f,.text-row-3f{
    margin-bottom:100px;
}

/*----------------------------*/
/* NEWSLETTER BOX */
/*----------------------------*/

#main_tip_newsletter{
    float:left;
    width:100%;
    height:auto;
    margin-top:20px;
}

#tip_newsletter_input
{
    font: 15px/1.6 Helvetica, sans-serif;
    color: #CCC;
    padding: 5px 5px 5px 46px;
    width: 170px;
    border:solid 2px #CCC;
    border-radius: 5px;
    -moz-appearance: none;
    -webkit-appearance: none;
    box-shadow: none; 
    outline: 0;
    background: url(img/icon-newsletter.svg) no-repeat 10px 9px;
    margin-left:20px;
    vertical-align:center;
    font-weight:400;
}

/*----------------------------*/
/* SEARCH BOX */
/*----------------------------*/

#main_tip_search{
    float:right;
    width:170px;
    margin-top:13px;
    height:auto;
    margin-right:25px;
    display:block;
}

#tip_search_input{
    font: 16px/1.6 Helvetica, sans-serif;
    color: #686868;
    padding: 4px 4px 4px 46px;
    width: 170px;
    border:solid 1px #FFF;
    border-radius: 5px;
    -moz-appearance: none;
    -webkit-appearance: none;
    box-shadow: none; 
    outline: 0;
    margin: 0;
    background: url(img/icon-search.svg) no-repeat 12px 7px;
    vertical-align:center;
    margin-left:-40px;
    background-color:#FFF;
}

#loupe{
    position:absolute;
    background: url(img/loupe.svg) no-repeat;
    width:28px;
    height:30px;
    right:20px;
    top:94px;
    cursor:pointer;
    opacity:1;
}

/*----------------------------*/
/* COPYRIGHT PART */
/*----------------------------*/

#wrapper-copyright{
    float:left;
    width:100%;
    height:70px;
    background-color:#2E2D30;
}

.copyright{
    position:relative;
    width:1200px;
    left:50%;
    margin-left:-600px;
    height:100%;
    top:0;
}

.copy-text{
    float:left;
    text-align:left;
    font-family: Helvetica, sans-serif;
    font-size: 15px;
    height:70px;
    line-height:70px;
    cursor:pointer;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color:#666;
    margin-left:15px;
    font-weight:500;
}

.wrapper-navbouton{
    position:absolute;
    height:100%;
    right:0;
}

.google,.facebook,.dribbble,.linkin{
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align:right;
    font-family:'socialicoregular';
    font-size: 44px;
    height:70px;
    line-height:70px;
    float:right;
    opacity:0.5;
    cursor:pointer;
    float:right;
    color:#666;
    opacity:1;
}

.dribbble,.facebook,.linkin,.google{padding-right:20px;}
.dribbble,.facebook,.linkin{padding-right:12px;}

.linkin:hover,.google:hover,.facebook:hover,.dribbble:hover{color:#CCC;transform: scale(1.2);}

/*----------------------------*/
/* RWD !important */
/*----------------------------*/

/* Others wide screen -2 */
 
@media only screen and (max-width: 2000px) {
#main-container-menu {
    display:none;
}
}

/* Others wide screen */
 
@media only screen and (max-width: 1200px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:940px;
    margin-left:-465px;
}
#main-container-menu {
    display:none;
}

.work figure {
    width:calc(100% / 3 - 30px);
}
}

/* Small viewports — Old monitors, netbooks, tablets (landscape), etc. */
 
@media only screen and (max-width: 965px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:835px;
    margin-left:-417.5px;
}
#main-container-menu {
    display:none;
}
#row-1f,#row-2f,#row-3f,#row-4f{
    width:100%;
}
.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
    text-align:center;
    width:70%;
    margin-left:15%;
}
.text-row-1f{
    margin-top:75px;
    margin-bottom:35px;
}
.text-row-4f{
    margin-top:0;
    margin-bottom:0;
}
.text-row-2f,.text-row-3f{
    margin-bottom:35px;
    margin-top:0;
}
#tip_newsletter_input{
    position:relative;
    left:50%;
    margin-left:-112.5px;
    margin-bottom:75px;
}
}

/* Smaller viewports — more tablets, old monitors */
 
@media only screen and (max-width: 860px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:715px;
    margin-left:-357.5px;
}
#main-container-menu {
    display:none;
}
}

/* Even smaller viewports — more tablets, etc. */
 
@media only screen and (max-width: 740px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:585px;
    margin-left:-292.5px;
}   
#wrapper-bouton-icon,#main_tip_search{
    display:none;
}
#stripes {
    display:block;
}
#main-container-menu {
    display:block;
}
.work figure {
    width:calc(100% / 2 - 30px);
}
}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 610px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:455px;
    margin-left:-227.5px;
} 
#wrapper-sorting{
    position:relative;
    width:300px;
    left:50%;
    margin-left:-165px;
}
.top-rated,.recent,.oldies{
    text-align:center;
    font-family: 'Roboto',sans-serif;
    font-size: 13px;
    height:40px;
    line-height:40px;
    margin-left:25px;
}
}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 480px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
    width:295px;
    margin-left:-147.5px;
}
.work figure {
    width:calc(100% - 30px);
}
.wrapper-navbouton{
    display:none;
}
.copy-text{
    text-align:center;
    width:100%;
}
.thank-text{
    font-size: 50px;
}
}
/* Mobile phones (iphone4/5)*/
 
@media only screen and (max-width: 320px) {

}



</style>

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
    <div id="main-header" class="object">
        <div class="logo"><img src="img/logo-burst.svg" alt="logo burstfly" height="38" width="90"></div>
        <div id="main_tip_search"> 
            <form>
                <input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
            </form>
        </div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<!--
<div id="wrapper-navbar">
    <div class="navbar object">
        <div id="wrapper-sorting">
        <div id="wrapper-title-1">
        <div class="top-rated object">Top-rated</div>
            <div id="fleche-nav-1"></div>
        </div>
        
        <div id="wrapper-title-2">
        <a href="#"><div class="recent object">Recent</div></a>
            <div id="fleche-nav-2"></div>
        </div>
        
        <div id="wrapper-title-3">
        <a href="#"><div class="oldies object">Oldies</div></a>
            <div id="fleche-nav-3"></div>
        </div>
        </div>
        <div id="wrapper-bouton-icon">
            <div id="bouton-ai"><img src="img/icon-ai.svg" alt="illustrator" title="Illustrator" height="28" width="28"></div>
            <div id="bouton-psd"><img src="img/icon-psd.svg" alt="photoshop" title="Photoshop" height="28" width="28"></div>
            <div id="bouton-theme"><img src="img/icon-themes.svg" alt="theme" title="Theme" height="28" width="28"></div>
            <div id="bouton-font"><img src="img/icon-font.svg" alt="font" title="Font" height="28" width="28"></div>
            <div id="bouton-photo"><img src="img/icon-photo.svg" alt="photo" title="Photo" height="28" width="28"></div>
            <div id="bouton-premium"><img src="img/icon-premium.svg" alt="premium" title="Premium" height="28" width="28"></div>
        </div>
    </div>
</div>
-->
<!-- FILTER --> 
<!--
<div id="main-container-menu" class="object">
    <div class="container-menu">
        
        <div id="main-cross">
            <div id="cross-menu"></div>
        </div>
        
        <div id="main-small-logo">
            <div class="small-logo"></div>
        </div>
        
        <div id="main-premium-ressource">
            <div class="premium-ressource"><a href="#">Premium resources</a></div>
        </div>
        
        <div id="main-themes">
            <div class="themes"><a href="#">Latest themes</a></div>
        </div>
        
        <div id="main-psd">
            <div class="psd"><a href="#">PSD goodies</a></div>
        </div>
            
        <div id="main-ai">
            <div class="ai"><a href="#">Illustrator freebies</a></div>
        </div>
        
        <div id="main-font">
            <div class="font"><a href="#">Free fonts</a></div>
        </div>
        
        <div id="main-photo">
            <div class="photo"><a href="#">Free stock photos</a></div>
        </div>
        
    </div>
</div>
-->

<!-- PORTFOLIO -->

<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">
                   
                <section class="work" id="persons">

                    <!--

                    <figure class="white">
                        <a href="details.html">
                            <img src="img/psd-4.jpg" alt="" />
                            <dl>
                                <dt>Wordpress theme</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>    
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Wordpress theme</div>
                        </div>
                    </figure>

                    <figure class="white">
                        <a href="#">
                            <img src="img/font-1.jpg" alt="" />
                            <dl>
                                <dt>Free font</dt>
                                <dd>Bavro is a minimal free font best suitable for posters and headlines. Designed and released by Marcelo Melo.</dd>
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Free font</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/psd-1.jpg" alt="" />
                            <dl>
                                <dt>PSD Goodies</dt>
                                <dd>A set of high resolution iPhone 6 and Nexus 5 mockups created with smart objects. Free PSD released by Ghani Pradita.</dd>  
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD Goodies</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/psd-2.jpg" alt="" />
                            <dl>
                                <dt>PSD Goodies</dt>
                                <dd>A set of 4 free photorealistic Nexus 5 mockups providing smart objects. Free PSD released by Craftwork.</dd>    
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD Goodies</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/ai-1.jpg" alt="" />
                            <dl>
                                <dt>Illustrator freebies</dt>
                                <dd>A set of 6 outline beer icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd>   
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-ai.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Illustrator Freebies</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/theme-2.jpg" alt="" />
                            <dl>
                                <dt>Html theme</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>    
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Html theme</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/psd-3.jpg" alt="" />
                            <dl>
                                <dt>PSD goodies</dt>
                                <dd>A set of 9 high-quality Apple Watch mockups created with Photoshop smart objects. Free PSD released by Samuel Medvedowsky.</dd> 
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD Goodies</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/font-2.jpg" alt="" />
                            <dl>
                                <dt>Free font</dt>
                                <dd>Beyno is a free uppercase font with a futuristic feel and look. Designed and released by Fabian Korn.</dd>  
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Free font</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/font-3.jpg" alt="" />
                            <dl>
                                <dt>Wordpress theme</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>    
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Wordpress theme</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/ai-2.jpg" alt="" />
                            <dl>
                                <dt>Illustrator icons</dt>
                                <dd>A set of 16 outline space icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd> 
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-ai.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Illustrator icons</div>
                        </div>
                    </figure>       

                    <figure class="white">
                        <a href="#">
                            <img src="img/icons-1.jpg" alt="" />
                            <dl>
                                <dt>PSD icons</dt>
                                <dd>Grap is a set of 9 simple but coloured icons created with Photoshop. Free PSD released by kamran bhatti.</dd>   
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD icons</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/ui-1.jpg" alt="" />
                            <dl>
                                <dt>UI design</dt>
                                <dd>Acess to our largest database of the web about the ui and look into a ton of professionnal tools</dd>   
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-premium.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Premium ui</div>
                        </div>
                    </figure>
                    
                    <figure class="white">
                        <a href="#">
                            <img src="img/font-5.jpg" alt="" />
                            <dl>
                                <dt>Free font</dt>
                                <dd>A set of 6 outline beer icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd>   
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Free font</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/theme-2.jpg" alt="" />
                            <dl>
                                <dt>Html theme</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>    
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Html theme</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/psd-5.jpg" alt="" />
                            <dl>
                                <dt>PSD mockup</dt>
                                <dd>A very detailed Macbook Air mockup created with Photoshop and providing smart objects. Free PSD released by Barin Cristian.</dd>    
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD mockup</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/icons-3.jpg" alt="" />
                            <dl>
                                <dt>PSD icons</dt>
                                <dd>A set of 16 hand gestures icons you may find useful for your projects. Free PSD released by Rovane Durso.</dd>  
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">PSD icons</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/font-4.jpg" alt="" />
                            <dl>
                                <dt>Free font</dt>
                                <dd>Julep is an elegant and modern free font released in vector formats (Ai, EPS and PDF). Designed and released by Jeremy Ross.</dd>   
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Free font</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/theme-3.jpg" alt="" />
                            <dl>
                                <dt>HTML theme</dt>
                                <dd>Gorgo is a free HTML portfolio template for freelancers, photographers, agencies, designers and other creative fields. Designed and released by Aristothemes.</dd>  
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">HTML theme</div>
                        </div>
                    </figure>       

                    <figure class="white">
                        <a href="#">
                            <img src="img/font-6.jpg" alt="" />
                            <dl>
                                <dt>Free font</dt>
                                <dd>REEF is a rounded font free for commercial and personal use. It's strength lies in simplicity and construction.</dd>    
                            </dl>
                        </a>    
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Free font</div>
                        </div>
                    </figure>   

                    <figure class="white">
                        <a href="#">
                            <img src="img/theme-4.jpg" alt="" />
                            <dl>
                                <dt>HTML theme</dt>
                                <dd>ActiveBox is a free responsive HTML template featured by clean and minimalistic design. Designed and coded by Kamal Chaneman.</dd>  
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">HTML theme</div>
                        </div>
                    </figure>

                    -->
                    
                </section>
                
            </div>  
                
        </div>
     
    <!--
    <div id="wrapper-oldnew">
        <div class="oldnew">
            <div class="wrapper-oldnew-prev">
                <div id="oldnew-prev"></div>
            </div>
            <div class="wrapper-oldnew-next">
                <div id="oldnew-next"></div>
            </div>
        </div>
    </div>     
    -->
            
    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>
        
    <div id="main-container-footer">
        <div class="container-footer">
            
            <div id="row-1f">
                <div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Server IP</span><br><?php echo $_SERVER['SERVER_ADDR']; ?></div>
            </div>
            
            <!--<div id="row-2f">
                <div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Burstfly offers you all the latest freebies found all over the fourth corners without to pay.</div>
            </div>
            
            <div id="row-3f">
                <div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
            </div>
            
            <div id="row-4f">
                <div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>

                <div id="main_tip_newsletter"> 
                    <form>
                        <input type="text" name="newsletter" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
                    </form>
                </div>
            </div>-->
            
        </div>
    </div>
    
    
    <div id="wrapper-copyright">
        <div class="copyright">
            <div class="copy-text object">Copyright © 2016. Template by <a style="color:#D0D1D4;" href="http://designscrazed.org/">Dcrazed</a></div>
            
            <div class="wrapper-navbouton">
                <div class="google object">g</div>
                <div class="facebook object">f</div>
                <div class="linkin object">i</div>
                <div class="dribbble object">d</div>
            </div>
        </div>
    </div>

</div>



<!-- SCRIPT -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
    <script type="text/javascript" src="js/fastclick.min.js"></script>
    <script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>    
    
    <script>
    

    
$(document).ready(function() {
        $.localScroll();
        $(".cache").delay(1000).fadeOut(500);
        $("#wrapper-header").delay(1500).animate({opacity:'1',width:'100%'},500);
        $("#wrapper-navbar").delay(2000).animate({opacity:'1',height:'60px'},500);
        $("#main-container-image").delay(2500).animate({opacity:'1'},500);
        
    });

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
               $("#main-container-menu").stop().animate({left:'0'},300);    
}); 

    
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
    timer;

window.addEventListener('scroll', function() {

    clearTimeout(timer);

    if(!body.classList.contains('disable-hover'))
        body.classList.add('disable-hover')

    timer = setTimeout(function(){
        body.classList.remove('disable-hover')
    }, 200);

}, false);
 
  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#stripes").stop().animate({scale:'1',opacity:'1'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);    

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);    

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
               $("#main-container-menu").stop().animate({'left':'-100%'},300);  
}); 

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);    

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);    

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#stripes").stop().animate({scale:'1',opacity:'1'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);   

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){
    
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
               $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);   

            event.handled = true;
        } else {
            return false;
        }
});


/*FORMULAIRE NEWSLETTER*/
    
$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
    });
});

/* PRELOADER */

function preloader() {
    if (document.images) {
        var img1 = new Image();
        var img2 = new Image();
        var img3 = new Image();
        var img4 = new Image();
        var img5 = new Image();
        var img6 = new Image();
        var img7 = new Image();
        var img8 = new Image();
        var img9 = new Image();
        var img10 = new Image();
        var img11 = new Image();
        var img12 = new Image();
        var img13 = new Image();
        var img14 = new Image();
        var img15 = new Image();
        var img16 = new Image();
        var img17 = new Image();
        var img18 = new Image();
        var img19 = new Image();
        var img20 = new Image();

        img1.src = "img/psd-4.jpg";
        img2.src = "img/font-1.jpg";
        img3.src = "img/psd-1.jpg";
        img4.src = "img/psd-2.jpg";
        img5.src = "img/ai-1.jpg";
        img6.src = "img/theme-2.jpg";
        img7.src = "img/psd-3.jpg";
        img8.src = "img/font-2.jpg";
        img9.src = "img/font-3.jpg";
        img10.src = "img/ai-2.jpg";
        img11.src = "img/icons-1.jpg";
        img12.src = "img/ui-1.jpg";
        img13.src = "img/font-5.jpg";
        img14.src = "img/theme-2.jpg";
        img15.src = "img/psd-5.jpg";
        img16.src = "img/icons-3.jpg";
        img17.src = "img/font-4.jpg";
        img18.src = "img/theme-3.jpg";
        img19.src = "img/font-6.jpg";
        img20.src = "img/theme-4.jpg";
    }
}
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
addLoadEvent(preloader);

</script>


<script type="text/javascript">

function loadPerson() {
    $.get("/api/person.json", function(data) {
        var $person = '<figure class="white"> \
                            <a href="details.html"> \
                                <img src="' + data.image + '" alt="" /> \
                                <dl> \
                                    <dt>' + data.name + '</dt> \
                                    <dd>' + data.description + '</dd> \
                                </dl> \
                            </a> \
                            <div id="wrapper-part-info"> \
                                <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div> \
                                <div id="part-info">' + data.addresses + '</div> \
                            </div> \
                        </figure> \
                        ';
        $("#persons").append($person);
    });
}

$(function() {
    loadPerson();
    setInterval(loadPerson, 2000);
});

</script>


<!--



-->



</body>


</html>
