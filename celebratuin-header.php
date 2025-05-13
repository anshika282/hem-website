<?php
/**
 * The header.
 * 
 * This is the template that displays all of the <head> section and everything up until main.
 *  
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials 
 *  
 * @package WordPress       
 * @subpackage Twenty_Twenty_One        
 * @since Twenty Twenty-One 1.0                         
 */                    
?>                  
<!doctype html>              
<html>    
<head>                       
    <meta charset="utf-8">                   
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  	<meta name="google-site-verification" content="wK_JGsPt1XRaYtBkOAcUVYIIRwOox4pTNYWfVtEhz90" />  
    <link rel="preconnect" href="https://fonts.googleapis.com">                        
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>                
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>               
	<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>      
  	<link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">   
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.compat.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <?php wp_head(); ?>  
    <?php include('global-header.php'); ?>   
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TD8FF333X1"></script> 
    <script>
      window.dataLayer = window.dataLayer || [];   
      function gtag(){dataLayer.push(arguments);} 
      gtag('js', new Date()); 
  
      gtag('config', 'G-TD8FF333X1');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-849986245"></script>
    <script> 
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-849986245');
    </script>
  
<style type="text/css">
html, body{overflow-x:hidden !important; }    
.birthday_party_menu_block{position:relative; }   
div:where(.swal2-icon) {  margin: 2.5em auto 0.6em;  border: 0.25em solid rgba(0, 0, 0, 0);}
@-webkit-keyframes honeycomb {
0%,20%,80%,100% {opacity: 0;-webkit-transform: scale(0); transform: scale(0); }
30%,70% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}
}
@keyframes honeycomb {
0%,20%,80%,
100% {opacity: 0;-webkit-transform: scale(0);transform: scale(0);}
30%,70% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}
}
.honeycomb { height: 24px; position: relative;  width: 24px;}
.honeycomb div { -webkit-animation: honeycomb 2.1s infinite backwards; animation: honeycomb 2.1s infinite backwards;
background: #f3f3f3; height: 12px;  margin-top: 6px; position: absolute;  width: 24px;}
.honeycomb div:after,honeycomb div:before { content: '';  border-left: 12px solid transparent;  border-right: 12px solid transparent;
position: absolute;  left: 0;   right: 0;}
.honeycomb div:after {top: -6px; border-bottom: 6px solid #f3f3f3;}
.honeycomb div:before {bottom: -6px; border-top: 6px solid #f3f3f3;}
.honeycomb div:nth-child(1) { -webkit-animation-delay: 0s;  animation-delay: 0s;  left: -28px;   top: 0;}
.honeycomb div:nth-child(2) { -webkit-animation-delay: 0.1s; animation-delay: 0.1s;  left: -14px;   top: 22px;}
.honeycomb div:nth-child(3) {-webkit-animation-delay: 0.2s; animation-delay: 0.2s;  left: 14px;  top: 22px;}
.honeycomb div:nth-child(4) {-webkit-animation-delay: 0.3s; animation-delay: 0.3s;  left: 28px;   top: 0;}
.honeycomb div:nth-child(5) { -webkit-animation-delay: 0.4s; animation-delay: 0.4s; left: 14px;  top: -22px;}
.honeycomb div:nth-child(6) {-webkit-animation-delay: 0.5s; animation-delay: 0.5s; left: -14px;   top: -22px;}
.honeycomb div:nth-child(7) { -webkit-animation-delay: 0.6s;  animation-delay: 0.6s;  left: 0;  top: 0;}
.desk-food-menu{display:block;}
.mob-food-menu{display:none !important;}  
 .birthday_party_menu_block.full-block img {width: 100%; height: auto; display: block;  margin: 0;  padding: 0;}
.birthday_party_menu_block .birthday_party_menu_content {position: absolute;top: 25%; left:5%; }
 .birthday_party_menu_content ul {color: #fff;font-size: 16px;font-weight: 700;line-height: 1.8}
  .birthday_party_menu_block .birthday_party_menu_content ul li:not(:last-child) { margin-bottom: 23px;}  
.birthday_party_menu_block .birthday_party_menu_content ul li {font-family: 'Bubblegum Sans';font-size: 28px; line-height:1.2; font-weight: 500} 
.fun-deal-block-lists {display: flex;gap: 20px;align-items: flex-start;}
.fun-deal-block-lists>* {flex: 1;} 
@keyframes fadeInUp {
    0% {opacity: 0;transform: translateY(-10px);}
    100% { opacity: 1;transform: translateY(0);}
}
.fb-menu-bday-bg {
    position: relative;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 410px;
}
.fb-menu-bday-bg ul {margin: 0 auto;width: 525px;max-width: 100%;}
.fb-menu-bday-bg.birthday_party_menu_block .birthday_party_menu_content {
    width: 90%;
}
.customize-booking-panel .form-block { position: relative;} 
.book-party-form-section .container {position: relative;}  
.loading { display:none; position: absolute; width: 100%;box-shadow:0 0 10px #00000080;height: 35%;background:#000000a6;display:flex; align-items: center;justify-content: center;font-size:20px;font-family: 'Poppins';border-radius: 11px;color: #ffffff;opacity: 0;left: 0;transform: translateY(-10px);top: 25%; animation: fadeInUp 1s forwards;}  
.loading1 { display:none; position: absolute; width: 100%;box-shadow:0 0 10px #00000080;height: 100%;background:#000000a6;display:flex; align-items: center;justify-content: center;font-size:20px;font-family: 'Poppins';border-radius: 11px;color: #ffffff;opacity: 0;left: 0;top: 0%; animation: fadeInUp 1s forwards;}  
    
.school-party-gallery-block figure img { display: block !important; height: 200px !important;  width: 100% !important;    object-fit: cover;}     
 
  
.school-tales-section {padding: 30px 0;    position:relative; background:#ec623c;  } 
section.school-tales-section h3{font-size: 32px;text-transform: uppercase;font-weight: 500;font-family: Poppins; text-align: center; color:#fff; }
.school-tales-section p {font-size: 16px;text-align: center;color: #fff;padding: 20px;}
.school-tales-lists {display: flex;width: 1000px;max-width: 100%;margin: 0 auto;}
.school-tales-lists>* { flex: 1;}
.school-tale-block{position: relative;}
.school-tales-lists>:not(:last-child) { margin-right: 25px;}
.school-tale-block video {position: relative; width: 100%;  height: 100%; object-fit:cover; }
  
 .packages-trip-head-block h3{font-size:28px;text-transform: uppercase;margin-bottom: 15px;font-weight:600;font-family: Poppins}  
.school-tale-block, .school-trip-packages .col-md-5{position: relative;} 
section.school-trip-packages {background: #fff; overflow:hidden; }
.packages-trip-head-block {padding: 30px 0;position: relative} 
.trip-pacakges-lists {padding: 60px 0}
.package-trip-heading-bg {position: absolute;right: 0;top: 0;margin: 0;height: 100%;width:100%; background: #fae3dd}
.packages-trip-head-block h3 {color: #1f46aa;text-align: left}
.packages-starting-costs {background: #ea473c;display: inline-block;padding: 10px 20px;border-radius: 40px}
.packages-starting-costs * {color: #fff;font-size: 14px; margin-bottom:0; }
.packages-points ul li {font-size: 16px;color: #000}
.packages-points ul {list-style: disc inside;margin-left: 0}
.timer-block {margin-bottom: 15px}
.timer-block h4 {font-size: 24px;color: #000}
.food-packages-block {width: 550px;max-width: 100%;display: flex;align-items: center}
.food-packages-block h5 {color: #ec623c;font-size: 16px;font-weight: 500;margin-bottom: 15px;padding-bottom: 10px;border-bottom: 3px solid #ec623c;text-align: center}
.food-packages-block p {color: #000;font-size: 14px;font-weight: 400;padding-left: 5px}
.school-trip-packages .food-icon-holder {height: 50p}
.food-icon-holder svg {width: 115px;height: auto}
.food-packages-block .description-holder {margin-left: -4px}
.school-trip-packages .chichi-holder {position: relative;z-index: 99999;width: 250px }
.school-trip-packages .chichi-holder img {width: 100%;object-fit: cover}
 .timer-block {display: flex;align-items: center;gap: 25px}
.package-schedule-block svg {width: 60px;height: auto}
.book-party-form form#bdayFormTop > * {flex: 0 0 32%;  max-width: 32%;} 
.book-party-form form#bdayFormTop {flex-wrap: wrap; justify-content: space-evenly;column-gap: 15px;}
  
.skj-location-lists {background: #6514ad;padding: 10px 0;}
.skj-loc-lists .location-city {display: flex;align-items: center;gap: 10px;justify-content: center;}
.skj-loc-lists .location-city img {width: auto;height: 28px;display: block;}
.skj-loc-lists .location-city h5 {font-size: 12px;color: #fff;font-family: 'Poppins';}
.skj-loc-lists .location-city {position: relative; }
.skj-loc-lists .location-city a {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
.main-header-inner-block {display: flex;align-items: center;justify-content: space-between;}
.web-logo img {display: block;height: 80px;object-fit: cover;width: auto;}
navigation.main-nav ul {display: flex;list-style: none;margin: 0;gap: 10px;}
navigation.main-nav ul li a:link, navigation.main-nav ul li a:visited {color: #fff;text-decoration: none;font-family: 'Poppins';font-size: 14px;font-weight: 500;text-transform: uppercase;transition: all .2s;}
navigation.main-nav ul li a:hover, navigation.main-nav ul li a:active {color:#F0852D; }
.main-header {padding: 15px 0;}
.site-menu ul ul {display: none;position: absolute;background: #ffffffdb;padding: 12px;}
.site-menu ul>li {position: relative;}
.site-menu ul li ul.sub-menu li:not(:last-child) {margin-bottom: 6px;}
.site-menu ul li ul.sub-menu li a {color: #fff;text-transform: capitalize;}
.site-menu ul li ul.sub-menu li a:hover {color: #000;}
.site-menu ul li ul.sub-menu li.current-menu-item a {color: #000;}  
.site-menu ul li:hover>ul {display: inherit;}
#nav-toggle {position: absolute;left: 0;top: 0;cursor: pointer;padding: 10px 35px 16px 0;}
#nav-toggle span,#nav-toggle span:after,#nav-toggle span:before {cursor: pointer;border-radius: 1px;height: 5px;width: 35px;background: #fff;position: absolute;display: block; content: "";transition: .3s ease-in-out;}
#nav-toggle span:before {top: -10px;}#nav-toggle span:after {bottom: -10px;}
#nav-toggle.active span {background-color: transparent;}
#nav-toggle.active span:after,#nav-toggle.active span:before {top: 0;}
#nav-toggle.active span:before {transform: rotate(45deg);}
#nav-toggle.active span:after {transform: rotate(-45deg);}
.site-menu ul li a i{display: none; } 
.nav-mobile, button.sub-menu-toggle {display: none;}
.backbgbox {background-size: cover; background-repeat: no-repeat; background-position: center center;}
.backbg{display:none !important;}
.header-button-navigate a.btn.btn-book-ticket {
background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/09/ticket-bg.png);
background-repeat: no-repeat;width: 86px;height: 45px;}
a.btn.btn-book-ticket {font-size: 13px;font-family: 'Poppins';font-weight: 600;line-height: 1.2;text-align: center;color: #000;}
.header-button-navigate {display: flex;gap: 20px;align-items: center;}
.header-button-navigate a.btn.btn-book-party {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/09/book-btn-bg.png);width: 160px;height: 54px;background-repeat: no-repeat;background-size: 100%;display: flex;align-items: center;padding-left: 25px;}
a.btn.btn-book-party {font-size: 13px;font-family: 'Poppins';font-weight: 600;line-height: 1.2;text-align: center;color: #000;}
.contact-number.cont-block a {text-decoration: none; font-size: 14px;}
.contact-number.cont-block * { color: #fff;}
.web-what-link {position: fixed;bottom: 7px;   right: 7px; z-index:99999999;}
.web-what-link img{width:45px; height:45px; object-fit:cover; }  
  
select#enquiryType {-webkit-appearance: none;-moz-appearance: none;  appearance: none;      
background-color: #fff;  border: 1px solid #ccc;padding: 10px 40px 10px 10px;
font-size: 16px;border-radius: 4px;outline: none;cursor: pointer;
background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"><path fill="black" d="M7 10l5 5 5-5z"/></svg>'); 
background-repeat: no-repeat;background-position: right 0 center; background-size: 35px;
background-color: #C9EDF7;color:#000 !important; }
::placeholder {color: #000;}
input::placeholder {color: #000;}
textarea::placeholder {color: #000;}
input::-webkit-input-placeholder {color: #000;}
input::-moz-placeholder {color: #000;}
header.header { position: relative;z-index: 9999;}
  
  
footer.footer {background: #4d1c8c !important;}
img.footer-bg-top-curve {position: relative;width: 100%;margin-top: -175px;height: 158px;z-index: 99999;display: block;}
.site-navigate-info {display: flex;align-items: center;justify-content: space-between;}
.footer-website-logo img {display: block;height: 80px;object-fit: cover;width: auto;}
.footer-menu-navigation ul {display: flex;list-style: none;margin: 0;gap: 25px;}
.footer-menu-navigation ul li a:link, .footer-menu-navigation ul li a:visited {color: #fff;
text-decoration: none;font-family: 'Poppins';font-size: 14px;font-weight: 500;text-transform: uppercase;transition: all .2s;}
.footer-menu-navigation ul li a:hover, .footer-menu-navigation ul li a:active {color:#F0852D;}
.book-party-block a.btn.btn-book-ticket {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/09/ticket-bg.png);background-repeat: no-repeat;width: 86px;height: 45px;}
.book-party-block a.btn.btn-book-ticket {font-size: 13px;font-family: 'Poppins';font-weight: 600;line-height: 1.2;text-align: center;color: #000;}
footer.footer .skj-loc-lists {margin: 25px 0;padding: 15px 0;border-top: 1px solid #fff;border-bottom: 1px solid #fff;}
.copyright-text-info-block {display: flex;justify-content: space-between;}
.copyright-text-info-block p {font-size: 16px;color: #fff;font-family: 'Poppins';}
.copyright-text-info-block .social-link-lists ul {list-style: none;display: flex;gap: 20px;
margin: 0;padding: 0;}
.copyright-text-info-block .social-link-lists ul li a {font-size: 25px;color: #fff;}  
footer.footer .container {margin-top: 50px;}
  
section.fun-deal-section > .container{position:relative; }  
.book-party-form form input::-webkit-input-placeholder {color: #370a66;}
.book-party-form form input::-moz-placeholder {color: #370a66;}
.book-party-form form input:-ms-input-placeholder {color: #370a66;}
.book-party-form form input:-moz-placeholder {color: #370a66;  }  
section.birthday-hero-banner {position: relative;margin-top: -110px;overflow: hidden;}
section.birthday-hero-banner::before {content: "";height: 130px;background-image: linear-gradient(to bottom, #6514ad, #ffffff00); position: absolute; width: 100%; z-index: 99;}
section.birthday-hero-banner img {width: 100%; height: auto;object-fit: cover;} 
section.birthday-hero-banner img {width: 100%;height: auto;display: block;object-fit: cover;}
section.birthday-hero-banner img.mobile-view {height: auto;}
section.birthday-hero-banner img.mobile-view {display: none;}
section.birthday-hero-banner img.desktop-view {display: block;}
 
section.book-party-form-section {background: #fff;padding: 50px 0 0;}
section.book-party-form-section .container>h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 30px;}
.book-party-form form {display: flex;gap: 20px;}
.book-party-form form>* {flex: 1;}
.book-party-form form input {    border-radius: 10px;font-size: 16px;color: #370a66;font-weight: 400;font-family: "Poppins";border: 1px solid #370a66;padding: 10px 15px;height: 45px;outline: none !important;}
.book-party-form form select {border-radius: 10px;border: 1px solid #370a66;padding: 10px 15px;height: 45px;font-size: 16px;color: #370a66;outline: none;}
.book-party-form form button {border-radius: 10px; height: 45px;line-height: 1;padding: 10px 15px;font-size: 16px;color: #ffffff !important;font-weight: 400;font-family: "Poppins";background-color: #370a66 !important;box-shadow: none !important;transition: all .2s;opacity: 1;}
.book-party-form form button:hover {background-color: #370a66 !important;border: 0 !important;box-shadow: none !important;opacity: 0.8;}
.city-location-heading h3 {font-size: 40px;color: #ffffff;font-weight: 400;font-family: "Bubblegum Sans";}
.city-location-heading {padding: 15px 80px 15px 40px;border-radius: 9px; position: relative; z-index: 9; background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/rect-clipart-purple.webp); background-size: 100% 100%;}
.city-location-selection-block {max-width:100%; width: 1000px;margin: 50px auto 0;display: flex;justify-content: center;align-items: center;}
.city-location-trigger {padding: 10px 50px;border-radius: 10px;margin-left: -43px;background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/rect-clipart-yellow.webp);    background-size: 100% 100%;}
.city-location-trigger a {display: flex;align-items: center;gap: 15px;font-size: 18px;color: #6514ad;font-weight: 400;font-family: "Poppins";text-decoration: none;}
.city-location-trigger a span img {width: 20px;}
.city-location-menu-lists{display: none; overflow: hidden;  max-height: 0;  transition: max-height 0.5s ease-out;}
.city-location-trigger a.active + .city-location-menu-lists {display: block; max-height: 500px; }
.city-location-menu-lists.active {position: absolute;width: 88%;background: #FFF200;border-radius: 15px;margin-left: -7px;margin-top: 10px;padding: 20px;z-index: 999;max-width:100%;}
.city-location-trigger {position: relative;}
.city-location-menu-lists ul {list-style: none;margin: 0;padding: 0;}
.city-location-menu-lists ul li a {font-size: 16px;text-decoration: none;font-family: 'Poppins';
color: #000;}
.city-location-menu-lists ul li:not(:last-child) {margin-bottom: 10px;}
.city-location-menu-lists ul li a:hover { text-decoration: underline;}
    
section.company-stat-section {margin-top: -40px; padding: 100px 0 50px 0;background: #370a66;}
section.company-stat-section .stats-lists {display: flex;gap: 20px;}
section.company-stat-section .stats-lists>* {flex: 1;}
.stat-block h5 {font-size: 44px;color: #ffffff;font-weight: 400;font-family: "Bubblegum Sans";}
.stat-block p {font-size: 18px;color: #ffffff;font-weight: 400;font-family: "Poppins";margin: 0;}
section.company-stat-section .stats-lists .stat-block figure {margin: 0 0 15px 0;}
section.company-stat-section .stats-lists .stat-block figure img {height: 35px;width: auto;object-fit: cover;display: block;}
section.company-stat-section .stats-lists .stat-block:nth-child(2) figure img {height: 20px;}
section.company-stat-section .stats-lists .stat-block:nth-child(2) figure {min-height: 35px;}  
  
section.fun-deal-section {background: #ffffff;padding: 50px 0;position: relative;}
section.fun-deal-section span.baloon-clipart-corner {position: absolute;top: 50px;right: 0;}
.fun-deal-header-part {text-align: center;margin-bottom: 40px;}
.fun-deal-header-part h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px;}
.fun-deal-header-part p {font-size: 18px; line-height: 1.2;  color: #231f20;  font-weight: 400;  font-family: "Poppins";  text-align: center;    margin-bottom: 10px;}

.fun-deal-text-block h4 {font-size: 28px;color: #231f20;font-weight: 400;font-family: "Bubblegum Sans";margin-bottom: 10px;}
.fun-deal-text-block p {font-size: 13px;line-height: 1.2;color: #231f20;font-weight: 500;
font-family: "Poppins";margin-bottom: 10px;}
.fun-deal-text-block {padding: 20px;}
.fun-deal-block.fun-block1 .fun-deal-text-block {background: #afe5f4;border-radius: 20px;}
.fun-deal-block.fun-block1 {display: flex;flex-direction: column; gap:20px;}
.fun-deal-block.fun-block3 {display: flex;flex-direction: column-reverse; gap:20px;}
.fun-deal-image-block img {display: block;width: 100%;height: auto;object-fit: cover;}
.fun-deal-block.fun-block3 .fun-deal-text-block {background: #e8d2ff;border-radius: 20px; }
.fun-deal-block.fun-block2 .fun-deal-image-block img {width: 100%;height: 100%;margin: 0;}
.fun-deal-block.fun-block2 .fun-deal-text-block {position: absolute;bottom: 0;left: 0;
width: 100%;background-image: linear-gradient(to top, #432a89, #432a8900);border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;min-height: 200px;display: flex;
flex-direction: column;justify-content: flex-end;}
.fun-deal-block.fun-block2 .fun-deal-image-block {height: 100%;border-radius: 30px;overflow: hidden;}
.fun-deal-block.fun-block2 .fun-deal-text-block * {color: #fff;}
  
section.your-location-selection {background: #fff;}
.your-location-wrapper-block {background: #e8d2ff;padding: 30px 60px;position: relative;border-top-left-radius: 30px;border-top-right-radius: 30px;}
.your-location-wrapper-block span.location-marker {position: absolute;left: 20px;
top: 30px;width: 30px;height: 30px;background: #fff;border-radius: 50%;display: flex;
align-items: center;justify-content: center;}
.your-location-wrapper-block span.location-marker img {width: 15px;}
.your-location-wrapper-block h4 {font-size: 22px;color: #370a66;font-weight: 600;font-family: "Poppins";margin-bottom: 40px;}
.your-location-wrapper-block h4 span.arrow-marker {margin-left: 15px;}
.your-location-wrapper-block ul {margin: 0;padding: 0;list-style: none;display: flex;align-items: center;flex-wrap: wrap;justify-content: flex-start;gap: 20px;}
.your-location-wrapper-block ul>li {flex: 0 0 23.5%;max-width: 23.5%;}
.your-location-wrapper-block ul li span a {font-size: 16px;color: #1b1464;font-weight: 400;font-family: "Poppins";text-decoration: none;transition: all .2s;}
.your-location-wrapper-block ul li span a:hover {text-decoration: underline;} 
.your-location-wrapper-block ul>li {display: flex;align-items: center;gap: 10px;}
.your-location-wrapper-block ul>li figure {margin: 0;}
.your-location-wrapper-block ul>li figure span {display: flex;flex-direction: column;}
.your-location-wrapper-block ul li figure span {display: flex;flex-direction: column;}
.your-location-wrapper-block ul li span a {display: block;}
.your-location-wrapper-block ul li span {display: flex;flex-direction: column;gap: 3px;}
  
section.birthday-tales-section {background-size: 100% 98%;padding: 50px 0 100px; position: relative; background-position: top;background-color:#fff;  } 
section.birthday-tales-section h3 {font-size: 40px; color: #fff200; font-weight: 400; font-family: "Bubblegum Sans"; text-align: center; margin-bottom: 20px; line-height: 1;}
.birthday-tales-header-part {text-align: center; margin-bottom: 40px;}
.birthday-tales-header-part p {font-size: 18px;line-height: 1.5;color: #fff;font-weight: 400;font-family: "Poppins"; text-align: center;  margin: 0 auto 10px; width: 1000px; max-width:100%; }
section.birthday-tales-section::before {content: "";background: #923dbab3;position: absolute;top: 0;left: 0;width: 100%;height: 100%;clip-path: polygon(50% 0%, 100% 0, 100% 98%, 0 89%, 0 0);}
section.birthday-tales-section span.birtday-cap-icon {position: absolute;top: -65px;width: 185px;}
section.birthday-tales-section span.gift-box-icon {    position: absolute;bottom: -55px; right: 0; width: 150px;}
section.birthday-tales-section span.birtday-cap-icon img {width: 100%;height: auto;display: block;object-fit: cover;}
section.birthday-tales-section>* {position: relative;}
.birthday-tale-block .birthday-tale-video {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/bday-tale-block-bg-1.webp); background-size: 100% 100%;
    padding: 15px; background-repeat: no-repeat;}  
.birthday-tale-block .birthday-tale-video video {width:100%;height: 100%;object-fit: cover;}
.birthday-tale-block {position: relative;}
.birthday-tale-block .birthday-tale-information {position: absolute;bottom: 18px; width: 92%; background: #ffb001; left: 50%;text-align: center;  padding: 10px 10px; transform: translateX(-50%);}
.birthday-tale-block .birthday-tale-information h5 {font-family: 'Poppins';color: #000;font-weight: 500;font-size: 20px;margin-bottom: 5px;line-height: 1;}
.birthday-tale-block .birthday-tale-information p {margin-bottom: 0;color: #000;font-size: 14px;font-style: italic;}
.birthday-tale-block span.balloon-1 {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/ballon-1.webp);background-size: 100%;position: absolute;top: 20%;left: -43px;transform: rotate(14deg);width: 110px;height: 135px;background-repeat: no-repeat;}
.birthday-tale-block .balloon-2 {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/ballon-2.webp);background-size: 100%;position: absolute;bottom: 17%;right: -40px;transform: rotate(335deg);width: 110px;height: 135px;background-repeat: no-repeat;}  
span.clipart-icon3 {position: absolute;right: 0;  top: 0;}
.birthday-tales-lists .owl-nav  {display:block !important; }
.birthday-tales-lists .owl-nav button {position: absolute;top: 50%; }
.birthday-tales-lists .owl-nav button.owl-prev {left: -40px;}
.birthday-tales-lists .owl-nav button.owl-next {right: -40px;} 
.birthday-tales-lists .owl-nav button span {font-size: 47px;font-family: 'FontAwesome';font-weight: 100;color: #fff;}
.birthday-tales-lists .owl-nav button {background: transparent !important;}
  
  

 
section.birthday-party-food-menu-section {background: #fff;padding: 0 0 50px;position: relative;}
.birthday-party-food-menu-header h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px;}
.birthday-party-food-menu-header p {font-size: 18px;line-height: 1.4;color: #231f20;font-weight: 400;font-family: "Poppins";text-align: left;}
.birthday-party-food-menu-header {max-width: 1000px;width: 100%;margin: 0 auto 40px;}
section.birthday-party-food-menu-section span.clipart-icon1 {position: absolute;top: 10%;left: 0;}
section.birthday-party-food-menu-section span.clipart-icon2 {position: absolute;top: 70%;left: 0;transform: rotate(280deg);}
section.birthday-party-food-menu-section span.clipart-icon3 {position: absolute;top: 30%;right: 0;}
.party-food-menu-lists {max-width: 800px;margin: 0 auto 40px;display: flex;align-items: center;flex-wrap: wrap;gap: 50px;}
.party-food-menu-lists>* {flex: 1;}
.food-party-menu-block {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/bday-party-block-bg.webp);background-repeat: no-repeat;background-size: cover;padding: 40px 25px 30px;height: 370px;display: flex;flex-direction: column;justify-content: space-between;}
.menu-price-block {display: flex;align-items: center;justify-content: center;gap: 10px;}
.menu-price-block .currency {font-family: 'Bubblegum Sans';color: #662d8b;font-size: 45px;font-weight: 500;line-height: 1.2;}
.menu-price-block .price {font-family: 'Bubblegum Sans';color: #662d8b;font-size: 105px;display: block;line-height: 1.3;}
.food-party-menu-block .menu-description p {font-size: 12px;line-height: 22px;color: #ffffff;font-weight: 400;font-family: "Poppins";text-align: center;margin-bottom: 0;}
.default-menu-pacakge-text {margin: 40px 0;text-align: center;}
.default-menu-pacakge-text h4 {font-size: 22px;line-height: 1.2;color: #231f20;font-weight: 500;font-family: "Poppins";}
.food-menu-accordion .accordion-item button {background: #813ebc !important;font-size: 18px;line-height: 1.2;color: #ffffff !important;box-shadow: none;font-weight: 500;font-family: "Poppins";border-radius: 10px;outline: none !important;}
.food-menu-accordion .accordion-item:not(:last-child) {margin-bottom: 15px;}
.food-menu-accordion .accordion-item {background: #813ebc !important;font-size: 18px;line-height: 1.2;color: #ffffff !important;font-weight: 500;font-family: "Poppins";border-radius: 10px;outline: none !important;}
.food-menu-accordion .accordion-item .accordion-body {padding-top: 0;}
.food-menu-accordion .accordion-item .accordion-body p {font-size: 16px;font-family: 'Poppins';line-height: 1.6;font-weight: 400;}
.food-menu-accordion .accordion-item .accordion-body p:not(:last-child) {margin-bottom: 10px !important;}
.food-menu-accordion .accordion-item .accordion-body p:first-child {
margin-bottom: 0;}
.food-menu-accordion .accordion-item .accordion-body p strong {font-weight: 600;}
.food-menu-accordion .accordion-item .accordion-button::after {color: #fff !important; width: 12px; height: 11px; background-size: 100%;background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/arrow-drop.webp);}
.food-menu-accordion .accordion-item .accordion-button:not(.collapsed)::after {transform: rotate(180deg) !important; }
.food-menu-slider-lists { margin-top: 20px;}
.food-menu-slider-picture img {height: 190px; object-fit: cover;}
.food-menu-slider-picture { border: 1px solid #00000017;}
  
section.birthday-party-celebration-section {position: relative;background-color: #fff; padding: 100px 0 100px; background-position: top;}
section.birthday-party-celebration-section > *{position:relative; }
section.birthday-party-celebration-section span.top-left-icon {position: absolute;top: 2%;left: 0;}
section.birthday-party-celebration-section span.bottom-right-icon {position: absolute;bottom: -315px;right: 0;  width: 175px;}
section.birthday-party-celebration-section h3 {font-size: 40px;color: #fff200;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px; line-height:1; }
.birthday-party-celebration-gallery {display: grid; grid-template-columns: repeat(3, 1fr);  grid-template-rows: repeat(3, 1fr);gap: 10px;}
.birthday-party-celebration-gallery>* img {width: 100%;height: 100%;object-fit: cover;margin: 0;} 
.gallery-item-1 {grid-column: 1 / 2;grid-row: 1 / 2;}
.gallery-item-2 {grid-column: 2 / 3;grid-row: 1 / 3;}
.gallery-item-3 {grid-column: 3 / 4;grid-row: 1 / 2;} 
.gallery-item-4 {grid-column: 1 / 2;grid-row: 2 / 4;}
.gallery-item-5 {grid-column: 2 / 3;grid-row: 3 / 4;}
.gallery-item-6 {grid-column: 3 / 4;grid-row: 2 / 4;}
section.birthday-party-celebration-section::before {content: ""; background: #923dba61; position: absolute; top: 0; left: 0; width: 100%; height: 100%;clip-path: polygon(0 6%, 100% 0%, 100% 100%, 0 100%);}
.birthday-party-gallery-slider .slick-slide {margin-right: 15px;}
  
section.birthday-highlights-section {background: #fff;padding: 50px 0;}
section.birthday-highlights-section h3 {font-size: 40px;line-height: 1;color: #000000;font-weight: 400; font-family: "Bubblegum Sans";  text-align: center;   margin-bottom: 20px;}
.video-highlight-lists .owl-nav button {position: absolute;top: 50%;}
.video-highlight-lists .owl-nav button.owl-prev {left: -40px;}
.video-highlight-lists .owl-nav button.owl-next {right: -40px;}
.video-highlight-lists .owl-nav button span {font-size: 47px;font-family: 'FontAwesome';font-weight: 100;color: #310f54;}
.video-highlight-lists .owl-nav button {background: transparent !important;}
.birthday-highlights-header-part {   text-align: center; margin-bottom: 40px; } 
.birthday-highlights-header-part p {font-size: 18px;line-height: 1.5; color: #000; font-weight: 400; font-family: "Poppins"; text-align: center;  margin: 0 auto 10px; width: 1000px;  max-width: 100%;}
 
section.birthday-customize-booking-form {padding: 150px 0;background-color: #fff; position: relative;  background-position: top;}
.birthday-customize-booking-form span.bottom-left-icon {    position: absolute;bottom: -200px; left: 0;  width: 125px; z-index:99; }
.birthday-customize-booking-form span.bottom-right-icon {position: absolute;right: 0;bottom: 0;}
.customize-booking-panel {width: 500px; max-width: 100%;}
.customize-booking-panel h3 {font-size: 40px;color: #fff200;font-weight: 400;font-family: "Bubblegum Sans";line-height: 1.3;margin-bottom: 20px;    text-transform: uppercase;}
.customize-booking-panel p {font-size: 20px;color: #ffffff;font-weight: 400;font-family: "Poppins";}
.customize-booking-panel .form-block form {display: flex;flex-wrap: wrap;row-gap: 15px;column-gap: 10px;}
.customize-booking-panel .form-block form>* {flex: 0 0 47%;max-width: 47%;}
.customize-booking-panel .form-block form input {border-radius: 10px;font-size: 16px;color: #370a66;font-weight: 400;font-family: "Poppins";border: 1px solid #370a66;padding: 10px 15px;height: 50px;outline: none !important;}
.customize-booking-panel .form-block form select {border-radius: 10px;font-size: 16px;color: #370a66;font-weight: 400;font-family: "Poppins";border: 1px solid #370a66;padding: 10px 15px;height: 50px;outline: none !important;} 
.customize-booking-panel .form-block form button {background: #fff200 !important;color: #000 !important;border-radius: 10px;height: 50px;line-height: 1;padding: 10px 15px;font-size: 16px;font-weight: 500;font-family: "Poppins";}
.customize-booking-panel .form-block form button:hover {border: 0 !important;}  
  
section.birthday-faq-section {background: #fff;padding: 50px 0;position: relative;}
section.birthday-faq-section h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 30px;}
.faq-accordion-title label h2 {font-size: 18px;color: #000000;font-weight: 500;font-family: "Poppins";}
.faq-lists .faq-accordion .tgg-title {display: none;}
.faq-lists .faq-accordion-content p {font-size: 16px;font-family: 'Poppins';color: #000;line-height: 1.5;}
.faq-lists .faq-articles .faq-accordion:not(:last-child) {border-bottom: 2px solid #612d96;margin-bottom: 25px;}
.faq-lists .faq-accordion-title label {display: flex;justify-content: space-between;margin-bottom: 20px;}
 .faq-accordion-title span { margin-left: auto; transition: transform .4s ease-in-out;}
.faq-accordion-content { overflow: hidden; max-height: 0; transition: max-height .4s ease-in-out;}
.faq-accordion .tgg-title:checked+div>label>span { will-change: transform; transform: rotate(180deg);}
.faq-accordion .tgg-title:checked~.faq-accordion-content { will-change: max-height; max-height: 250px;} 
.faq-accordion-title span { font-size: 16px;  color: #000;}
.faq-accordion-title label { cursor: pointer;}
.faq-accordion-title .icon {margin-left: auto;font-size: 24px;display: flex;align-items: center;justify-content: center;}
.tgg-title+.faq-accordion-title .icon:before {content: "+"; color: #000;}
.tgg-title:checked+.faq-accordion-title .icon:before {content: "-"; color: #000;}
 
 .faq-accordion-title span {font-size: 16px;color: #000;}
section.select-location-city {background: #fff;padding: 0;}
.city-location-lists-block h3 {font-size: 40px;color: #4a0f87;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 30px;}
.city-location-lists-block {background-image: linear-gradient(to bottom, #afe5f4, #92e0f600);  padding: 40px 40px 100px; position: relative;  border-top-left-radius: 30px; border-top-right-radius: 30px;}
.city-location-lists-block ul {margin: 0;padding: 0;list-style: none;display: flex;align-items: center;flex-wrap: wrap;justify-content: flex-start;gap: 20px;}
.city-location-lists-block ul>li {flex: 0 0 18.5%;max-width: 18.5%;}
.city-location-lists-block ul li span a {font-size: 16px;color: #1b1464;font-weight: 400;
font-family: "Poppins";text-decoration: none;transition: all .2s;}
.city-location-lists-block ul li span a:hover {text-decoration: underline;}
.city-location-lists-block ul>li {display: flex;align-items: center;gap: 10px;}
.city-location-lists-block ul>li figure {margin: 0;}
.city-location-lists-block ul>li figure span {display: flex;flex-direction: column;}
.city-location-lists-block ul li figure span {display: flex;flex-direction: column;}
.city-location-lists-block ul li span a {display: block;}
.city-location-lists-block ul li span {display: flex;flex-direction: column;gap: 3px;}
.food-menu-slider .owl-stage{transition-timing-function: linear !important;}  
.city-loc-lists {position: relative;z-index: 9999999;}  
  
section.school-trip-experience {padding: 50px 0 0;background: #fff;position: relative;}
.school-trip-experience-header-part h3 {font-size: 40px;color: #000000;font-weight: 400;
font-family: "Bubblegum Sans";text-align: center;margin-bottom: 10px;}
.school-trip-experience-header-part p {font-size: 18px;line-height: 1.6;color: #231f20;
font-weight: 400;font-family: "Poppins";text-align: center;margin-bottom: 0;}
.school-trip-experience-header-part {text-align: center;margin-bottom: 40px;} 
.city-location-lists-block span.clipart-icon2 {position: absolute;right: -30px;top: -30px;width: 100px;}
.city-location-lists-block span.clipart-icon2 img{display:block; width:100%; height:auto; object-fit:cover;}
section.school-trip-experience span.clipart-icon1 {position: absolute;top: 43%; transform: translateY(-43%); left: 0;}
section.school-trip-experience span.clipart-icon1 img {width: 100%;height: auto; object-fit: cover;}  
  
  

section.benefits-trampoline-park-section {position:relative;background:#4d1c8c;padding: 100px 0;}
section.benefits-trampoline-park-section::before {content: "";background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/purple-curve-bg-pattern.webp);position: absolute;top: -150px;left: 0;width: 100%;height: 157px;background-repeat: no-repeat;background-size: cover;} 
section.benefits-trampoline-park-section::after {z-index:9; content: "";background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/purple-curve-bg-pattern.webp); position: absolute; bottom: -150px; left: 0; width: 100%;height: 157px; background-repeat: no-repeat; background-size: cover; transform: rotate(180deg);}
section.benefits-trampoline-park-section span.clipart-icon1 {position: absolute;top: -30%; width: 130px; left: 2%;} 
section.benefits-trampoline-park-section span.clipart-icon2 {position: absolute;right: 3%;width: 130px; bottom: -10%;z-index: 99;}
section.benefits-trampoline-park-section .container {position: relative;}
.benefits-trampoline-park-header-park {margin: 0 0 55px 0;text-align: center;}
.benefits-trampoline-park-header-park h3 {font-size: 40px;color: #ffffff;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px;}
.benefits-trampoline-park-header-park p {font-size: 18px;line-height: 1.5;color: #ffffff;font-weight: 400;font-family: "Poppins";text-align: center;max-width: 100%;width: 1000px;margin: 0 auto;}
.benefits-trampoline-lists {display: flex;flex-wrap: wrap;align-items: center;justify-content: center;gap: 20px;row-gap: 55px;}
.benefits-trampoline-lists>* {flex: 0 0 23.5%;}
.benefits-trampoline-block {display: flex;align-items: center;gap: 15px;}
.benefits-trampoline-block figure {margin: 0;border: 4px solid #27aae1;border-radius: 50%;}
.benefits-trampoline-block figure img {width: 100%;height: 100%;margin: 0;display: block;}
.benefits-trampoline-block span {font-size: 16px;color: #ffffff;font-weight: 400;font-family: "Poppins";line-height: 1.3;}
  
section.why-to-choose-skyjumper-section {background: #fff;padding: 100px 0 20px;   position:relative; }
section.why-to-choose-skyjumper-section h3 {font-size: 40px;color: #000000; font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 40px;}
.benefits-trampoline-park-section span.clipart-icon1 {position: absolute;top: 0;left: 0;}
section.why-to-choose-skyjumper-section span.ball-clipart-icon {position: absolute;bottom: 2%;left: 15px;width: 110px;}
section.why-to-choose-skyjumper-section span.ball-clipart-icon img {display: block;width: 100%;height: auto;object-fit: cover;}
.why-to-choose-lists {display: flex;gap: 40px;align-items: center;flex-wrap: wrap;}
.why-to-choose-lists>* {flex: 1;}
.why-to-choose-block figure {margin: 0;border-top-left-radius: 50%; overflow: hidden;  border-top-right-radius: 50%;}
.why-to-choose-block figure img {width: 100%;height: 300px;display: block;object-fit: cover;} 
.why-to-choose-block h5 {background: #27aae1;padding: 20px;font-size: 20px;color: #231f20; font-weight: 500;font-family: "Poppins";text-align: center;line-height: 1.3;min-height: 120px;} 
section.school-tale-section {padding: 50px 0;background: #fff;position: relative;}
section.school-tale-section span.wave-clipart-icon {position: absolute;top: 0;right: 0;width: 115px;}
.school-tale-header-part {margin-bottom: 40px;text-align: center;}
.school-tale-header-part h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px;}
.school-tale-header-part p {font-size: 18px;line-height: 1.4;color: #231f20;font-weight: 400;font-family: "Poppins";text-align: center;width: 1000px;max-width: 100%;margin: 0 auto;}

.school-tale-quote-block {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/box-bg-pattern.webp);background-size: 100% 100%;display: flex;align-items: center;flex-wrap: wrap;gap: 15px;padding: 60px 30px;background-repeat: no-repeat;}
.school-tale-quote-block figure {margin: 0;flex: 0 0 45%;max-width: 45%;position: relative;padding: 10px;background: #4d1c8c;border-radius: 10px;}
.school-tale-quote {flex: 0 0 52%;max-width: 52%;}
.school-tale-quote blockquote {font-size: 18px;line-height: 1.3;color: #231f20;font-weight: 400; font-style:normal; font-family: "Poppins";margin: 0 0 15px 0;width: 100%;padding: 0;}
.school-tale-quote-block figure>span {position: absolute;top: -30px;right: -12px;transform: rotate(350deg);}
.school-tale-quote-block figure>span img {width: auto;height: 115px;}
.school-tale-quote-block figure>img {border: 5px solid #fff;border-radius: 5px;}
.school-tale-quote h6 {font-size: 18px;line-height: 1.4;color: #231f20;font-weight: 500;font-style: italic;font-family: "Poppins";}
.school-tale-quote-lists .owl-nav button {position: absolute;top: 50%;background: transparent !important;}
.school-tale-quote-lists .owl-nav button.owl-prev {left: -40px;}
.school-tale-quote-lists .owl-nav button.owl-next {right: -20px;}
.school-tale-quote-lists .owl-nav button span {font-size: 47px;font-family: 'FontAwesome';font-weight: 100;color: #000000;}
  
section.fun-carriculum-section {padding: 120px 0;background: #fff;position: relative;}
section.fun-carriculum-section::before {content: "";position: absolute;top: 0;left: 0;clip-path: polygon(0 0, 100% 10%, 100% 90%, 0 100%);background: #4d1c8c;width: 100%;height: 100%;}
section.fun-carriculum-section>* {position: relative;}
section.fun-carriculum-section h3 {font-size: 40px;color: #ffffff;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 40px;}
.fun-carriculum-lists {max-width: 900px;margin: 0 auto;display: flex;flex-wrap: wrap;}
.fun-carriculum-lists>* {flex: 0 0 33.33%;max-width: 33.33%;}
.fun-carriculum-block span {font-size: 18px;line-height: 1.4;color: #ffffff;font-weight: 400;
font-family: "Poppins";text-align: center;display: block;}
.fun-carriculum-block {padding: 50px 38px;}
.fun-carriculum-lists .fun-carriculum-block {border-right: 2px solid #fff200;border-bottom: 2px solid #fff200;}
.fun-carriculum-lists .fun-carriculum-block:nth-child(3n) {border-right: none;}
.fun-carriculum-lists .fun-carriculum-block:nth-last-child(-n+3) {border-bottom: none;}
.fun-carriculum-section span.clipart-icon1 {position: absolute;top: -5%;width: 130px;left: 2%;}
.fun-carriculum-section span.clipart-icon2 {position: absolute;top: 5%;right: 5%;}
.fun-carriculum-section span.clipart-icon3 {position: absolute;bottom: -7%;left: 2%;width: 95px;right: auto;top: auto;}
.fun-carriculum-section span.clipart-icon4 {position: absolute;right: 2%;width: 130px;bottom: -5%;}
  
section.school-party-gallery-section {padding: 50px 0;background: #fff;}
section.school-party-gallery-section h3 {font-size: 40px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 40px;}
.school-party-gallery .slick-slide { margin-right: 15px;}
.school-party-gallery-block figure { margin: 0;}
.school-party-gallery-block figure img { width: 100%;  height: auto;  display: block;}
.school-party-gallery-block figure:not(:last-child) { margin-bottom: 15px;}

section.birthday-faq-section span.clipart-icon1 {position: absolute;width: 110px;left: 10px;top: 0;}
section.birthday-faq-section span.clipart-icon2 {position: absolute;top: 0;right: 0;width: 110px;}
section.select-location-city span.clipart-icon {position: absolute;bottom: 0;right: 10px;z-index: 9999999;width: 130px;}
section.select-location-city {position: relative;}
  

  
.celebration-details-block {display: flex;align-items: center;gap: 70px;}
.celebration-details-block > * {flex: 1;}
section.celebration-landing-page-section {padding: 50px 0;background: #fff;border-top: 1px solid rebeccapurple;border-bottom: 1px solid rebeccapurple;}
.party-detail-description h4 {font-size: 34px;color: #ffffff;font-weight: 400;font-family: "Bubblegum Sans";margin-bottom: 20px;}
.party-detail-description p {font-size: 18px;color: #ffffff;font-weight: 400;font-family: "Poppins";line-height: 1.5;}
.party-detail-description p:not(:first-child) {margin-bottom: 15px;}
.celebration-details-block.birthday-party {background: #6514ad;clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90%);padding: 50px 50px 105px;}
.party-image-block img {width: 100%;height: auto;display: block;}
.party-detail-description a.party-btn {font-size: 20px;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-decoration: none;background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/btn-bg-pattern.webp);background-size: 100% 100%;width: 189px;height: 47px;background-repeat: no-repeat;text-align: center;display: inline-flex;align-items: center;justify-content: center;}
.party-detail-description .party-details {margin: 30px 0;}
.celebration-details-block.school-trip-party {flex-direction: row-reverse;clip-path: polygon(0 0, 100% 8%, 100% 92%, 0 100%);background-image: linear-gradient(to top, #afe5f4, #afe5f400);margin-top: -65px;padding: 105px 50px 105px;}
.celebration-details-block.school-trip-party .party-detail-description h4 {color: #000;}
.celebration-details-block.school-trip-party .party-detail-description p {color: #000;}
.celebration-details-block.corporate-party {clip-path: polygon(0 8%, 100% 0, 100% 100%, 0 92%);background: #6514ad;padding: 105px 50px 105px;margin-top: -65px;}
.celebration-details-block.kitty-party {flex-direction: row-reverse;clip-path: polygon(0 0, 100% 8%, 100% 100%, 0 100%);background-image: linear-gradient(to top, #afe5f4, #afe5f400);margin-top: -58px;
padding: 100px 50px 50px;}
.celebration-details-block.kitty-party .party-detail-description h4, .celebration-details-block.kitty-party .party-detail-description p {color: #000;}

section.happy-tales-block-section {background: #fff;padding: 50px 0;}
section.happy-tales-block-section h3 {font-size: 40px;line-height: 1.3;color: #000000;font-weight: 400;font-family: "Bubblegum Sans";text-align: center;margin-bottom: 20px;}
.happy-tale-quote blockquote {font-size: 16px;line-height: 1.4;color: #000000;font-weight: 400;
font-family: "Poppins";padding: 0;font-style: normal;}
.happy-tale-quote {background-image: linear-gradient(to bottom, #afe5f4, #afe5f436);padding: 60px 25px 40px; min-height:300px; }
.happy-tales-quote-block {border-radius: 20px;overflow: hidden;}

.happy-tale-quote-information {display: flex;align-items: center;gap: 20px;}
.happy-tale-info-author h5 {font-size: 20px;line-height: 1.4;color: #ffffff;font-weight: 400;
font-family: "Bubblegum Sans";}
.happy-tale-info-author p {font-size: 14px;line-height: 1.4;color: #ffffff;font-weight: 500;
font-family: "Poppins";margin-bottom: 0;}
.happy-tale-quote-information figure {margin: 0;}
.happy-tale-quote-information figure img {height: 40px;width: auto;}
.happy-tale-quote-information {background-size: 100%;background-repeat: no-repeat;padding: 30px 25px 10px;}
.happy-tale-quote blockquote::before {content: ""; background-size: 100%;width: 41px;height: 26px;position: absolute;top: -42px;left: 0;}
.happy-tale-quote.sky-pattern  blockquote::before{ background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern1.webp); }
.happy-tale-quote.orange-pattern  blockquote::before{ background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern2.webp); }
.happy-tale-quote.purple-pattern  blockquote::before{ background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern3.webp); }
  
.happy-tale-quote blockquote::after {content: ""; background-size: 100%;width: 41px;height: 26px;position: absolute;bottom: -75px;right: 0;transform: rotate(180deg);}
.happy-tale-quote.sky-pattern blockquote::after {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern1.webp);}
.happy-tale-quote.orange-pattern blockquote::after {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern2.webp);}
.happy-tale-quote.purple-pattern blockquote::after {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/quote-pattern3.webp);}
  
.happy-tale-quote-information.sky-pattern {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/tale-curve-pattern1.webp);margin-top: -57px;height: 138px;}  
.happy-tale-quote-information.orange-pattern {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/tale-curve-pattern2.webp);height: 161px;margin-top: -80px;
padding-top: 50px;}
.happy-tale-quote-information.purple-pattern {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/11/tale-curve-pattern3.webp);height: 148px;margin-top: -67px;padding-top: 45px;}
.happy-tales-block-lists .owl-nav {display: block !important;}
.happy-tales-block-lists .owl-nav button {background-image: url(https://skyjumpertrampolinepark.com/wp-content/uploads/2024/09/arrow-2.png) !important;background-size: 100% !important;width: 40px;height: 40px;position: absolute;top: 50%;background-color: transparent !important;outline: none !important;}
.happy-tales-block-lists {position: relative;}
.happy-tales-block-lists .owl-nav button.owl-prev { left: -60px;}
.happy-tales-block-lists .owl-nav button.owl-next { right: -60px; transform: rotate(180deg) scaleY(-1);}
.happy-tales-block-lists .owl-nav button span { font-size: 0;} 
.video-highlight-block iframe {height: 520px; object-fit: cover;  width: 100%;}
.fun-deal-block.fun-block2 .fun-deal-image-block img{height:518px;}  
@media (min-width: 991px) and (max-width: 1200px) {
  .header-button-navigate {display: none;}
  section.fun-deal-section span.baloon-clipart-corner {width: 120px;}
  .fun-deal-block-lists.owl-carousel .owl-stage>* {height: 100% !important;}
  .fun-deal-block { height: 100% !important;}
  .fun-deal-block.fun-block2 .fun-deal-image-block img {height: 452px;}
  .fun-deal-block.fun-block3 .fun-deal-text-block p {min-height: 45px;}
  .your-location-wrapper-block ul>li {flex: 0 0 21%; max-width: 21%;}
  .your-location-wrapper-block ul { gap: 40px;}
  section.birthday-tales-section span.birtday-cap-icon {width: 120px; top: -30px;}
  .birthday-tales-lists.owl-carousel {padding: 0 50px;} 
  .birthday-tales-lists .owl-nav button.owl-prev {left: -10px;}
  .birthday-tales-lists .owl-nav button.owl-next {right: -10px;}
  section.birthday-party-food-menu-section span.clipart-icon3 { width: 120px;}
  section.birthday-party-celebration-section span.top-left-icon {width: 110px;}
  .video-highlight-lists.owl-carousel { padding: 0 50px;}
  .video-highlight-lists .owl-nav button.owl-prev { left: -10px;}
  .video-highlight-lists .owl-nav button.owl-next {right: -10px;}
  .city-location-lists-block ul>li {flex: 0 0 18%; max-width: 18%;}
  .city-location-lists-block ul { gap: 20px;}
  img.footer-bg-top-curve {height: 95px;margin-top: -113px;}
  .site-navigate-info { gap: 15px;}
  .footer-menu-navigation ul li {text-align: center;}
  section.birthday-party-celebration-section::before{clip-path:polygon(0 5%, 100% 0.5%, 100% 100%, 0% 100%); }
  .book-party-form form {flex-wrap: wrap;gap: 20px;}
  section.benefits-trampoline-park-section {padding: 50px;}
  section.benefits-trampoline-park-section span.clipart-icon1 {top: -80px;}
  .benefits-trampoline-lists>* {flex: 0 0 30%;max-width: 30%;}
  .benefits-trampoline-lists {row-gap: 30px;}
  section.benefits-trampoline-park-section::after {bottom: -120px;height: 125px;}
  .why-to-choose-block figure img {height: 230px;}
  .why-to-choose-lists {gap: 20px;}
  .why-to-choose-block h5 {font-size: 18px;}
  section.why-to-choose-skyjumper-section span.ball-clipart-icon {width: 90px;bottom: -18%;z-index: 99;}
  .school-tale-quote-block figure {flex: 0 0 44%;max-width: 44%;}
  .school-tale-quote-block figure>span img {height: 80px;}
  .school-tale-quote-block figure>span {top: -20px;}
  .school-tale-quote-lists.owl-carousel {width: 94%; margin: 0 auto;}
} 
@media (min-width: 600px) and (max-width: 991px) {  
  	.book-party-form form#bdayFormTop > * { flex: 1;  max-width: 100%;}
     section.book-party-form-section{padding:30px 0 0;}
     section.book-party-form-section .container>h3 {font-size: 28px;}   
    .header-button-navigate {display: none;}
    section.fun-deal-section span.baloon-clipart-corner {width: 120px;}
    .fun-deal-block-lists.owl-carousel .owl-stage>* {height: 100% !important;}
    .fun-deal-block { height: 100% !important;}
    .fun-deal-block.fun-block2 .fun-deal-image-block img {height: 452px;}
    .fun-deal-block.fun-block3 .fun-deal-text-block p {min-height: 45px;}
    .your-location-wrapper-block ul>li {flex: 0 0 21%; max-width: 21%;}
    .your-location-wrapper-block ul { gap: 40px;}
    section.birthday-tales-section span.birtday-cap-icon {width: 80px; top: -30px;}
    .birthday-tales-lists.owl-carousel {padding: 0 50px;} 
    .birthday-tales-lists .owl-nav button.owl-prev {left: -10px;}
    .birthday-tales-lists .owl-nav button.owl-next {right: -10px;}
    section.birthday-party-food-menu-section span.clipart-icon3 { width: 120px;}
    section.birthday-party-celebration-section span.top-left-icon {width: 110px;}
    .video-highlight-lists.owl-carousel { padding: 0 50px;}
    .video-highlight-lists .owl-nav button.owl-prev { left: -10px;}
    .video-highlight-lists .owl-nav button.owl-next {right: -10px;}
    .city-location-lists-block ul>li {flex: 0 0 22%; max-width: 22%;}
    .city-location-lists-block ul { gap: 20px;}
    img.footer-bg-top-curve {height: 95px;margin-top: -113px;}
    .site-navigate-info { gap: 15px;}
    .footer-menu-navigation ul li {text-align: center;}
    section.birthday-party-celebration-section::before{clip-path:polygon(0 5%, 100% 0.5%, 100% 100%, 0% 100%); }
    .book-party-form form {flex-wrap: wrap;gap: 20px;}
    .site-navigate-info {flex-direction: column;}
    .video-highlight-block iframe {height: 335px;}
    section.birthday-party-celebration-section span.bottom-right-icon {width: 100px;bottom: -385px;}
    section.birthday-highlights-section {padding: 30px 0;}
    section.birthday-party-celebration-section {padding: 100px 0 30px;}
    .food-menu-slider-picture img {height: 130px;}
    .food-party-menu-block {height: 350px;}
    .food-party-menu-block .menu-description p {font-size: 10px;}
    section.birthday-party-food-menu-section span.clipart-icon3 {width: 100px;top: 12%;right: -23px;}
    section.birthday-party-food-menu-section span.clipart-icon1 {width: 80px;}
    .your-location-wrapper-block ul>li {flex: 0 0 28%;max-width: 28%;}
    .fun-deal-block.fun-block2 .fun-deal-image-block img {height: 390px;}
    .fun-deal-block.fun-block3 .fun-deal-text-block p {min-height: 63px;}
    .contact-number.cont-block {display: none;}
    .site-menu ul li:not(:last-child) {margin-right: 10px;}
    .city-location-heading h3 {  font-size: 28px;}
  section.company-stat-section { padding: 80px 0 30px 0;}
  .stat-block p {font-size: 16px; }
    .stat-block h5{font-size: 30px; }
    section.benefits-trampoline-park-section::before {height: 80px;margin-top: 72px;}
    section.benefits-trampoline-park-section {padding: 50px 0;}
    section.benefits-trampoline-park-section span.clipart-icon1 {width: 90px;top: -8%;}
    section.benefits-trampoline-park-section::after {height: 80px;bottom: -77px;}
    section.benefits-trampoline-park-section span.clipart-icon2 {width: 110px;bottom: -95px;}
    .why-to-choose-block figure img {height: 155px;}
    .why-to-choose-block h5 {font-size: 16px; padding: 15px 8px; margin-bottom: 0;  line-height: 1.3; min-height: 90px;}
    .why-to-choose-lists {gap: 15px;}
    section.why-to-choose-skyjumper-section span.ball-clipart-icon {width: 80px;bottom: -13%;z-index: 9;}
    section.school-tale-section span.wave-clipart-icon {width: 80px;}
    section.school-tale-section {padding: 30px 0;}
    .school-tale-quote-block figure {flex: 0 0 42%;max-width: 42%;padding: 5px;}
    .school-tale-quote-block figure>span img {height: 45px;}
    .school-tale-quote-block figure>span {top: -13px;right: -5px;}
    .school-tale-quote-block {gap: 10px;padding: 20px;}
    .school-tale-quote blockquote {font-size: 13px;margin-bottom: 10px;}
    .school-tale-quote h6 {font-size: 15px;}
    .school-tale-quote-lists.owl-carousel {padding: 0 20px;}
    .school-tale-quote-lists .owl-nav button.owl-prev {left: -13px;}
    .school-tale-quote-lists .owl-nav button.owl-next  {right: -13px;}
    .school-tale-quote-lists .owl-nav button span {font-size: 35px;}
    .fun-carriculum-section span.clipart-icon1 {width: 90px;top: -5%;}
    section.select-location-city span.clipart-icon {bottom: -50px;}
    .benefits-trampoline-lists>* {flex: 0 0 30.5%; max-width: 30.5%;}
  .fun-deal-header-part h3 {font-size: 28px;margin-bottom: 15px;}
  section.fun-deal-section {padding: 30px 0;}
  .fun-deal-header-part p {font-size: 16px;}
  .fun-deal-text-block h4 {font-size: 24px;}
  .your-location-wrapper-block {padding-right: 10px;}
  section.birthday-tales-section h3 {font-size: 28px;margin-bottom: 15px;}
  section.birthday-tales-section {padding: 30px 0 100px;}
  section.birthday-tales-section span.gift-box-icon {width: 106px;}
  .birthday-party-food-menu-header h3 {font-size: 28px;margin-bottom: 15px;}
  .birthday-party-food-menu-header p {font-size: 16px;text-align: center;}
  .menu-price-block .price {font-size: 80px;}
  .default-menu-pacakge-text h4 {font-size: 20px;}
  .default-menu-pacakge-text {margin: 0 0 20px 0;}
  .party-food-menu-lists {margin-bottom: 20px;}
  .food-menu-accordion .accordion-item button {font-size: 18px;}
  section.birthday-party-celebration-section h3 {font-size: 28px;margin-bottom: 15px;}
  .birthday-tales-header-part p {font-size: 16px;}
  .birthday-tales-header-part {margin-bottom: 25px;}
  div#showgallery {margin-bottom: 0;}
  section.birthday-highlights-section h3 {font-size: 28px;margin-bottom: 15px;}
  .birthday-highlights-header-part p {font-size: 16px;}
  .birthday-highlights-header-part {margin-bottom: 25px;}
  .customize-booking-panel h3 {font-size: 28px;max-width: 450px;margin-bottom: 15px;width: 100%;}
  .customize-booking-panel p {font-size: 18px;line-height: 1;}  
  section.birthday-customize-booking-form {padding: 80px 0;}
  .birthday-customize-booking-form span.bottom-left-icon {width: 110px;bottom: -189px;}
  .birthday-customize-booking-form span.bottom-right-icon {width: 100px;bottom: -35px;z-index: 99;}
  section.birthday-faq-section h3 {font-size: 28px;margin-bottom: 15px;}
  .faq-lists {margin-top: 25px;}
  .faq-accordion-title label h2 {font-size: 16px;}
  .faq-accordion-title label h2 {margin-bottom: 15px;}
  .faq-lists .faq-accordion-title label>* {margin-bottom: 0;}
  .faq-lists .faq-articles .faq-accordion:not(:last-child) {margin-bottom: 20px;}
  section.birthday-faq-section {padding: 30px 0;}
  .city-location-lists-block h3 {font-size: 28px;margin-bottom: 15px;}
  .city-location-lists-block {padding: 20px 20px 80px;}
  section.book-party-form-section .container>h3 {margin-bottom: 15px;}
  .school-trip-experience-header-part h3 {font-size: 28px;margin-bottom: 15px;}
  .school-trip-experience-header-part p {font-size: 16px;}
  section.school-trip-experience {padding: 30px 0 0;}
  .benefits-trampoline-park-header-park h3 {font-size: 28px;margin-bottom: 15px;}
  .benefits-trampoline-park-header-park p {font-size: 16px;}
  .benefits-trampoline-lists {row-gap: 20px;}
  .benefits-trampoline-block figure img {width: 65px;height: 65px;}
  .benefits-trampoline-park-header-park {margin-bottom: 35px;}
  section.why-to-choose-skyjumper-section h3 {font-size: 28px;margin-bottom: 15px;}
  .why-to-choose-lists {margin-top: 30px;}
  section.why-to-choose-skyjumper-section {padding: 70px 0 30px;}
  .school-tale-header-part h3 {font-size: 28px;margin-bottom: 15px;}
  .school-tale-header-part p {font-size: 16px;}
  .school-tale-header-part {margin-bottom: 25px;}
  section.fun-carriculum-section h3 {font-size: 28px;margin-bottom: 15px;}
  .fun-carriculum-lists {margin-top: 25px;}
  .fun-carriculum-block span {font-size: 16px;}
  .fun-carriculum-block {padding: 20px 15px;}
  section.fun-carriculum-section {padding: 70px 0 60px;}
  .fun-carriculum-section span.clipart-icon2 {width: 60px;top: 1%;}
  .fun-carriculum-section span.clipart-icon3 {width: 80px;bottom: -20%;}
  .fun-carriculum-section span.clipart-icon4 {width: 100px;bottom: -23%;}
  section.school-party-gallery-section h3 {font-size: 28px;margin-bottom: 15px;}
  div#showgallery-school-party {margin-top: 25px;}
  section.school-party-gallery-section {padding: 30px 0;}
  div#showgallery-school-party {margin-bottom: 0;}
  section.birthday-faq-section span.clipart-icon1 {width: 80px;}
  section.birthday-faq-section span.clipart-icon2 {width: 80px;}
}
@media screen and (max-width: 600px) {
  .fb-menu-bday-bg.birthday_party_menu_block .birthday_party_menu_content {
    top: 40px;
    left: 40px;
    width: 85%;
}

.fb-menu-bday-bg {
    height: 280px;
}
      .birthday_party_menu_block .birthday_party_menu_content {
        position: absolute;
        top: 55%;
        width: 90%;
    }
      .birthday_party_menu_content ul {
        color: #fff;
        font-size: 14px;  
        font-weight: 700;
        line-height: 1.5;
    }
      .birthday_party_menu_block .birthday_party_menu_content ul li:not(:last-child) {
        margin-bottom: 18px;
    }
      .birthday_party_menu_block .birthday_party_menu_content ul li {
        font-size: 18px;
    }
    .desk-food-menu{display:none !important;}  
	.mob-food-menu{display:block  !important;}
  .book-party-form form#bdayFormTop > * { flex: 1 1 100%;   max-width: 100%;}
  .fun-deal-header-part {margin-bottom: 25px;}
  section.fun-deal-section span.baloon-clipart-corner {top: 20px;right: 0;width: 60px;}
  .fun-deal-block-lists{padding:0 20px; } 
  .fun-deal-block-lists .owl-nav button {position: absolute; top: 50%;background: transparent !important;transform: translateY(-50%);}
  .fun-deal-block-lists .owl-nav button.owl-prev {left: -10px;}
  .fun-deal-block-lists .owl-nav button.owl-next {right: -10px;}
  .fun-deal-block-lists .owl-nav button span {color: #000 !important; font-size: 65px;font-family: 'Poppins';font-weight: 300 !important;line-height: 1;}
  .loading {height: 60%;left: 0;transform: translateY(-70px);top: 70px;line-height: 1.3; text-align:center; }
  .loading1 {text-align: center;line-height: 1.3;}
  
  div:where(.swal2-container) div:where(.swal2-popup){font-size:14px; }
  .swal2-container.swal2-center.swal2-backdrop-show {z-index: 9999999;}
  header.header {z-index:99999; }
  section.customize-booking-form{margin-top: -430px;}
  .header-button-navigate{display:none !important; }
  .contact-information.desktop-hide { display: flex; position: absolute; z-index: 9999; top: 90%;  left: 50%;}
  .contact-information.desktop-hide a.btn.book-btn.yellow-btn { font-size: 16px; min-width: 120px; width: 155px;}
  .contact-information.desktop-hide a.btn.book-btn {font-size: 16px;}
  navigation.main-nav ul li a:hover, navigation.main-nav ul li a:active{color:#fff; }
  .header-button-navigate a.btn.btn-book-ticket {width: 75px; height: 40px;  background-size: 100%;}
  a.btn.btn-book-ticket {font-size: 12px;line-height: 1.1;}
  .main-header { padding: 0 0 5px 0;}
  header.header .container{padding:0 12px; }
  .nav-mobile { display: block;} 
  navigation.main-nav ul{ display: none;}
  .site-menu{position:inherit !important; }
  .site-menu ul {margin-top: 15px;width: 100%!important;flex-direction: column;background: #ec623c;padding-bottom: 15px;display: none;z-index: 999;}
  navigation.main-nav > ul {position: absolute;left: 0; width: 100%; top: 100%; gap:0; }
  .site-menu ul li:not(:last-child) {margin-right: 0;}
  .site-menu { position: relative; width: 100%; padding: 70px 0 15px; }
  .site-menu ul li {text-align: left;   float: none;}
  .site-menu ul li>a {display: block;padding: 15px 0 0 15px!important; }
  .site-menu ul li a { padding: 15px; line-height: 20px; }
  .nav-dropdown {position: static;}
  .site-menu ul ul { position: relative;    background: #ec623c;    padding: 0 0 0 15px; margin: 0;} 
  .site-menu ul li ul.sub-menu li:not(:last-child) { margin-bottom: 0; }
  .site-menu ul li ul.sub-menu li a {  color: #fff; }
  .site-menu ul li ul li a {padding-left: 30px; padding-top: 10px;}
  .site-menu ul li a { display: flex; justify-content: space-between;  margin-right: 20px;}
  .site-menu ul li a i{display: inline-block;  }
  .header-button-navigate a.btn.btn-book-party {display: none;}
  navigation.main-nav.site-menu {order: 3; width: auto; padding:0; }
  .header-button-navigate {justify-self: flex-end;}
  .nav-mobile { position: relative; right:5px;top: 0;height: 26px; width: 35px;}
	
  section.birthday-hero-banner img.desktop-view {display: none;}
  section.birthday-hero-banner img.mobile-view {display: block;width: 100%;object-fit: cover;}
  section.book-party-form-section {padding: 20px 0;}
  section.book-party-form-section .container>h3 {font-size: 24px;max-width: 100%;margin: 0 auto 15px;} 
  .book-party-form form {flex-wrap: wrap;gap: 10px;}
  .book-party-form form input, .book-party-form form select {font-size: 14px; height: 40px; flex: 0 0 100%;}
  .book-party-form form button {height: 40px;font-size: 14px;}
  .city-location-selection-block {margin-top: 30px; flex-direction: column;align-items: center;}
  .city-location-heading h3 {font-size: 24px;text-align: center;}
  .city-location-heading {padding-top: 10px;padding-bottom: 10px;}
  .city-location-trigger {margin-left: 0;padding-left: 15px;padding-right: 15px;padding-top: 30px;margin-top: -20px;}
  section.company-stat-section {margin-top: -50px;padding-top: 50px;padding-bottom: 20px;}
  section.company-stat-section .stats-lists {gap: 15px;flex-wrap: wrap;justify-content: center;text-align: center;row-gap: 25px;}
  section.company-stat-section .stats-lists>* {flex: 0 0 47%;max-width: 47%;}
  .stat-block h5 {font-size: 30px;}
  .stat-block p {font-size: 16px;line-height: 1.2;}
  section.company-stat-section .stats-lists .stat-block figure img {margin: 0 auto;}
  section.fun-deal-section {padding: 20px 0;}
  .fun-deal-header-part h3 {font-size: 24px;max-width: 80%;margin: 0 auto 15px;}
  .fun-deal-header-part p {font-size: 16px;}
  .fun-deal-section .container {position: relative;z-index: 99;}
  .fun-deal-text-block p {line-height: 1.4;}
  .your-location-wrapper-block {padding: 25px 25px;}
  .your-location-wrapper-block h4 {font-size: 18px;padding-left: 20px; margin-bottom: 20px;}
  .your-location-wrapper-block span.location-marker {left: 10px;top: 23px;width: 25px;height: 25px;}
  .your-location-wrapper-block span.location-marker img {width: 12px;}
  .your-location-wrapper-block ul {gap: 10px;row-gap: 15px;}
  .your-location-wrapper-block ul>li {flex: 0 0 47.5%;max-width: 47.5%;}
  .your-location-wrapper-block ul>li figure img {width: 25px;height: auto;}
  .your-location-wrapper-block ul li span a {font-size: 14px;}
  section.birthday-tales-section {padding: 20px 0 100px;}
  section.birthday-tales-section span.birtday-cap-icon {top: -20px;width: 70px;left: -2px;}
  section.birthday-tales-section h3 {font-size: 24px;margin-bottom: 15px;}
  section.birthday-tales-section span.gift-box-icon {width: 90px;bottom: -30px;}
  section.birthday-tales-section .container {padding: 0 45px;}
  .birthday-tales-lists .owl-nav button span {font-size: 35px;}
  .birthday-tale-block .birthday-tale-information{width:90%; }

  section.birthday-party-food-menu-section {padding: 10px 0 20px;}
  .birthday-party-food-menu-header h3 {font-size: 24px;max-width: 100%;margin: 0 auto 15px;}
  .birthday-party-food-menu-header p {font-size: 16px;text-align: center;line-height: 1.5;}
  section.birthday-party-food-menu-section span.clipart-icon1 {top: 8%;width: 95px;}
  .party-food-menu-lists {max-width: 100%;gap: 25px;position: relative;margin-bottom: 0;}
  .food-party-menu-block {height: 340px;padding: 20px;}
  .menu-price-block .price {font-size: 100px;}
  section.birthday-party-food-menu-section span.clipart-icon3 {width: 90px;right: -15px;top: 33%;}
  .food-party-menu-block .menu-description p {font-size: 11px;line-height: 2;}
  .default-menu-pacakge-text {margin: 20px 0;}
  .default-menu-pacakge-text h4 {font-size: 18px;}
  section.birthday-party-food-menu-section span.clipart-icon2 {top: 65%;width: 80px;}
  .food-menu-accordion .accordion-item button {font-size: 16px;}
  .food-menu-accordion .accordion-item .accordion-body p {font-size: 14px;}
  section.birthday-party-food-menu-section .container {position: relative;}
  .food-menu-accordion .accordion-item:not(:last-child) {margin-bottom: 10px;}
  .food-menu-slider-picture img {height: 115px;}
  section.birthday-party-celebration-section {padding: 70px 0 20px;}
  section.birthday-party-celebration-section h3 {font-size: 24px;margin-bottom:15px; line-height:1.3; } 
  section.birthday-party-celebration-section .container {position: relative;}
  section.birthday-party-celebration-section span.top-left-icon {width: 80px;top: -1%;left: -12px;}
  section.birthday-party-celebration-section span.bottom-right-icon {width: 90px;bottom: -180px;
  right: -5px;}
  section.birthday-highlights-section h3 {font-size: 24px;line-height: 1.3;margin-bottom: 15px;}
  section.birthday-highlights-section .container {position: relative;}
  section.birthday-highlights-section {padding: 35px 0 20px;}
  .video-highlight-lists {padding: 0 15px;}
  .video-highlight-lists .owl-nav button span {font-size: 30px;}
  .video-highlight-lists .owl-nav button.owl-prev {left: -10px;}
  .video-highlight-lists .owl-nav button.owl-next {right: -20px;}
  .birthday-party-celebration-gallery {grid-template-columns: repeat(2, 1fr);grid-template-rows: repeat(4, 1fr); max-height:450px; }
  .gallery-item-1 {grid-column: 1 / 2;grid-row: 1 / 2;}
  .gallery-item-2 {grid-column: 1 / 2;grid-row: 2 / 4;}
  .gallery-item-3 {grid-column: 1 / 2;grid-row: 4 / 5;}
  .gallery-item-4 {grid-column: 2 / 3;grid-row: 1 / 3;}
  .gallery-item-5 {grid-column: 2 / 3;grid-row: 3 / 4;}
  .gallery-item-6 {grid-column: 2 / 3;grid-row: 4 / 5;}
  section.birthday-party-celebration-section::before {clip-path: polygon(0 3.6%, 100% 2%, 100% 100%, 0 100%);}  

  section.birthday-customize-booking-form {padding: 50px 0;}
  .customize-booking-panel h3 {font-size: 24px;margin-bottom: 10px;}
  .customize-booking-panel p {font-size: 16px; line-height:1; }
  section.birthday-customize-booking-form .container {position: relative;z-index: 9;}
  .birthday-customize-booking-form span.bottom-right-icon {width: 80px;right: -15px;bottom: -5px;}
  .customize-booking-panel .form-block form {row-gap: 10px;column-gap: 5px;}
  .customize-booking-panel .form-block form>* {flex: 0 0 47.5%;max-width: 47.5%;}
  .customize-booking-panel .form-block form input, .customize-booking-panel .form-block form select {font-size: 14px;} 
  section.birthday-faq-section {padding: 20px 0;}
  section.birthday-faq-section h3 {font-size: 24px;margin-bottom: 15px;}
  .birthday-customize-booking-form span.bottom-left-icon {width: 80px;bottom: -135px;}
  .faq-accordion-title label h2 {font-size: 16px;}  
  .faq-lists .faq-articles .faq-accordion:not(:last-child) {margin-bottom: 15px;}
  .faq-accordion-title .icon {font-size: 20px;}
  .city-location-lists-block {padding: 20px 20px 50px;}
  .city-location-lists-block h3 {font-size: 24px;margin-bottom: 15px;}
  .city-location-lists-block ul>li {flex: 0 0 46%;max-width: 46%;}
  .city-location-lists-block ul {gap: 17px;}
  .city-location-lists-block ul>li figure img {width: 20px;}
  .city-location-lists-block ul li span a {font-size: 14px;}
  .faq-lists .faq-accordion-content p{font-size:14px; }  
  .customize-booking-panel .form-block form button{font-size:14px; } 
  .city-location-trigger a {font-size: 16px;}
  .fun-deal-text-block h4 {font-size: 22px;}
  .birthday-tale-block .birthday-tale-information h5 {font-size: 18px;}
  div#showgallery {margin-bottom: 20px;}

  section.school-trip-experience {padding: 20px 0 0;}
  .school-trip-experience-header-part h3 {font-size: 24px;line-height: 1.3;}
  .school-trip-experience-header-part p {font-size: 16px;line-height: 1.4;}
  .why-to-choose-skyjumper-section .container {position: relative;}
  .school-trip-experience-header-part {position: relative;}
  .city-location-lists-block span.clipart-icon2 {width: 55px;right: -20px;top: -30px;}
  .city-location-lists-block h3,city-location-lists-block {position: relative;}
  section.benefits-trampoline-park-section span.clipart-icon1 {width: 70px;top: -6%;left: 1%;}
  section.benefits-trampoline-park-section::before {height: 47px;top: -45px;}
  section.benefits-trampoline-park-section {padding: 30px 0 20px;}
  .benefits-trampoline-park-header-park h3 {font-size: 24px;line-height: 1.3;margin-bottom: 10px;}
  .benefits-trampoline-park-header-park p {font-size: 16px;}
  .benefits-trampoline-lists>* {flex: 0 0 47.5%;max-width: 47.5%;}
  .benefits-trampoline-lists {gap: 15px;row-gap: 20px;}
  .benefits-trampoline-block {flex-direction: column;align-items: center;justify-content: center;}
  .benefits-trampoline-block span {font-size: 16px;text-align: center;min-height: auto;}
  .benefits-trampoline-block figure img {height: 60px;width: 60px;}
  .benefits-trampoline-block {gap: 5px;}
  section.benefits-trampoline-park-section::after {height: 47px;bottom: -40px;}
  section.benefits-trampoline-park-section span.clipart-icon2 {width: 80px;bottom: -5%;right: 1%;}
  section.why-to-choose-skyjumper-section {padding: 50px 0 20px;}
  section.why-to-choose-skyjumper-section h3 {font-size: 24px;line-height: 1.3;margin-bottom: 15px;}
  .why-to-choose-lists {gap: 15px;}
  .why-to-choose-block h5 {padding: 10px;font-size: 16px;margin-bottom: 0;min-height: 100px;}
  section.why-to-choose-skyjumper-section span.ball-clipart-icon .container {position: relative;}
  section.why-to-choose-skyjumper-section span.ball-clipart-icon {width: 75px;left: 0;bottom: -5%;
  z-index: 9;}
  section.school-tale-section span.wave-clipart-icon {width: 60px;top: -10px;}
  section.school-tale-section {padding: 20px 0;}
  .school-tale-header-part h3 {font-size: 24px;margin-bottom: 15px;}
  .school-tale-header-part p {font-size: 16px;line-height: 1.5;}
  .school-tale-header-part {margin-bottom: 20px;}
  .school-tale-quote-block {padding: 40px 15px;gap: 15px;}
  .school-tale-quote {flex: 0 0 56%;max-width: 56%;}
  .school-tale-quote-block figure {flex: 0 0 39%;max-width: 39%;}
  .school-tale-quote blockquote {font-size: 14px;margin-bottom: 10px;}
  .school-tale-quote h6 {font-size: 14px;}
  .school-tale-quote-block figure>span img {width: 50px !important;height: auto !important;}
  .school-tale-quote-block figure>span {top: -15px;right: -5px;}
  .school-tale-quote-lists .owl-nav button.owl-prev {left: -20px;}
  .school-tale-quote-lists .owl-nav button.owl-next {right: -10px;}
  .school-tale-quote-lists .owl-nav button span {font-size: 30px;}
  .fun-carriculum-section span.clipart-icon1 {top: -2%;width: 80px;left: 2%;}
  .fun-carriculum-lists {max-width: 100%;}
  .fun-carriculum-block {padding: 20px 10px;}
  .fun-carriculum-block span {font-size: 16px;}
  .fun-carriculum-lists>* {flex: 0 0 50%;max-width: 50%;}
  section.fun-carriculum-section h3 {font-size: 24px;margin-bottom: 15px;}
  .fun-carriculum-section span.clipart-icon2 {top: 5%;width: 50px;right: 3%;}
  section.fun-carriculum-section {padding: 90px 0;}
  .fun-carriculum-section span.clipart-icon3 {width: 80px;bottom: -7%;}
  .fun-carriculum-section span.clipart-icon4 {width: 80px;bottom: -2%;}
  section.school-party-gallery-section {padding: 20px 0;}
  section.school-party-gallery-section h3 {font-size: 24px;margin-bottom: 15px;}
  section.birthday-faq-section span.clipart-icon1 {width: 65px;left: 5px;top: -20px;}
  section.birthday-faq-section span.clipart-icon2 {width: 65px;top: -18px;}
  section.select-location-city span.clipart-icon {width: 100px;bottom: -45px;right: 30px;}
  .fun-carriculum-lists .fun-carriculum-block:nth-child(3n) {border-right: 2px solid #fff200;}
  .fun-carriculum-lists .fun-carriculum-block:nth-child(2n) { border-right: none;}
  .fun-carriculum-lists .fun-carriculum-block:nth-child(4) { border-bottom: 2px solid #fff200;}
  section.birthday-tales-section{background-size:cover; }
  span.clipart-icon3 {width: 80px;} 
  .birthday-tales-header-part p {font-size: 16px;margin: 0 auto 0;}
  .birthday-tales-header-part {margin-bottom: 20px;}
  section.birthday-tales-section::before {clip-path: polygon(50% 0%, 100% 0, 100% 97%, 0 94%, 0 0);}
  .birthday-party-food-menu-header {margin: 0 auto 20px;}  
  .birthday-highlights-header-part p {font-size: 16px; margin-bottom: 0;}
  .birthday-highlights-header-part {    margin-bottom: 20px;}
  .benefits-trampoline-park-header-park {margin: 0 0 20px 0;  }
  .copyright-text-info-block {flex-direction: column; justify-content: center; align-items: center;}
  footer.footer .container{margin-top:0; }
  .copyright-text-info-block {flex-direction: column;justify-content: center;align-items: center;}
  .site-navigate-info {flex-direction: column;}
  .site-navigate-info .book-party-block {display: none;}
  .footer-menu-navigation ul { flex-wrap: wrap; gap:8px; justify-content: center;}
  .footer-menu-navigation { margin: 15px 0 0 0;}
  .copyright-text-info-block p { margin-bottom: 10px; font-size: 12px; text-align:center; }
  img.footer-bg-top-curve {object-fit: contain; height: 42px;  margin-top: -60px;  }
  .footer-menu-navigation ul li a:link, .footer-menu-navigation ul li a:visited {font-size: 12px;}  
  section.happy-tales-block-section {padding: 20px 0;}
  .happy-tales-block-lists {padding: 0 20px;}
  .happy-tales-block-lists .owl-nav button.owl-prev {left: -20px;}
  .happy-tales-block-lists .owl-nav button.owl-next {right: -20px;}
  .happy-tales-block-lists .owl-nav button {width: 30px;height: 30px;background-repeat: no-repeat;}
  section.happy-tales-block-section h3 {font-size: 28px;}
  .happy-tale-quote{min-height:340px; }
  .why-to-choose-block figure img {height: 160px;}
  .celebration-details-block.birthday-party {flex-direction: column;padding: 20px 20px 60px;
  gap: 20px;clip-path: polygon(0 0, 100% 0, 100% 100%, 0 95%);}
  section.celebration-landing-page-section {padding: 20px 0;}
  .party-detail-description h4 {font-size: 24px; margin-bottom: 10px;}
  .party-detail-description .party-details {margin: 15px 0;}
  .party-detail-description p {font-size: 16px;margin-bottom: 10px;}
  .celebration-details-block.school-trip-party {padding: 50px 20px; margin-top: -30px; clip-path: polygon(0 0, 100% 3%, 100% 97%, 0 100%);flex-direction: column; gap: 20px;}
  .celebration-details-block.corporate-party {padding: 50px 20px;flex-direction: column; clip-path: polygon(0 3%, 100% 0, 100% 100%, 0 97%); margin-top: -30px; gap: 20px;}
  .celebration-details-block.kitty-party {padding: 50px 20px 20px;margin-top: -20px; flex-direction: column;clip-path: polygon(0 0, 100% 3%, 100% 100%, 0 100%); gap: 20px;}
  .party-detail-description a.party-btn {font-size: 18px;}
  section.birthday-hero-banner::before {height: 110px;background-image: linear-gradient(to bottom, #6514ad, #6514ada1); box-shadow: 0 0 10px #6514ad;}
  .fun-deal-block.fun-block2 .fun-deal-image-block img {height: 450px;}
  .fun-deal-text-block p{min-height:54px;}
   section.school-trip-experience span.clipart-icon1 {width: 50px;top: 45%;transform: translateY(-45%);}
  div#showgallery-school-party {margin-bottom: 20px;}
  section.select-location-city span.clipart-icon {width: 80px;bottom: -75px;right: 20px;}
}
  
  
</style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSC3T2XK');</script>
<!-- End Google Tag Manager -->
  
</head>  
<body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSC3T2XK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include('global-body.php'); ?>
<div class="wrapper">   
    <header class="header">
      <div class="skj-location-lists">
        <div class="container">
          <div class="skj-loc-lists owl-carousel owl-theme" id="skj-loc-lists">
             <div class="location-city">
        <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/pune-logo.png" alt="Ambernath">
        <h5>Ambernath</h5>
        <a href="https://skyjumpertrampolinepark.com/ambernath/"></a>
    </div>
            
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/amritsar-logo.png" alt="Amritsar">
              <h5>Amritsar</h5>
              <a href="https://skyjumpertrampolinepark.com/amritsar/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/banga-logo.png" alt="Bangalore">
              <h5>Bangalore</h5>
              <a href="https://skyjumpertrampolinepark.com/bangalore/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/chennai-logo.png" alt="Chennai">
              <h5>Chennai</h5>
              <a href="https://skyjumpertrampolinepark.com/chennai/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/chandigarh-logo.png" alt="Chandigarh">
              <h5>Chandigarh</h5>
              <a href="https://skyjumpertrampolinepark.com/chandigarh/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/delhi-logo.png" alt="Delhi">
              <h5>Delhi</h5>
              <a href="https://skyjumpertrampolinepark.com/delhi/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2024/05/2.png" alt="Faridabad">
              <h5>Faridabad</h5>
              <a href="https://skyjumpertrampolinepark.com/faridabad/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/lucknow-logo.png" alt="Ghaziabad">
              <h5>Ghaziabad</h5>
              <a href="https://skyjumpertrampolinepark.com/ghaziabad/"></a>
            </div>
             <div>
               <div class="location-city">
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/12/ahmedabad-logo.png" alt="Gurugram">
                <h5>Gurugram ILD</h5>
                <a href="https://skyjumpertrampolinepark.com/gurugram/"></a>
            </div>
            </div>
          
            <div>
               <div class="location-city">
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/12/ahmedabad-logo.png" alt="Gurugram">
                <h5>Gurugram M3M Broadway</h5>
                <a href="https://skyjumpertrampolinepark.com/m3m-broadway/"></a>
            </div>
            </div>
          
            <div>
               <div class="location-city">
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/12/ahmedabad-logo.png" alt="Gurugram">
                <h5>Gurugram Ocus Medley</h5>
                <a href="https://skyjumpertrampolinepark.com/ocus/"></a>
            </div>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/ahmedabad-logo.png" alt="Jalandhar">
              <h5>Jalandhar</h5>
              <a href="https://skyjumpertrampolinepark.com/jalandhar-2/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2024/05/3.png" alt="Karnal">
              <h5>Karnal</h5>
              <a href="https://skyjumpertrampolinepark.com/karnal/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/lucknow-logo.png" alt="Lucknow">
              <h5>Lucknow</h5>
              <a href="https://skyjumpertrampolinepark.com/lucknow/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/noida-logo.png" alt="Noida Spectrum">
              <h5>Noida Spectrum</h5>
              <a href="https://skyjumpertrampolinepark.com/noida/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/noida-logo.png" alt="Noida Go Banana">
              <h5>Noida Go Banana</h5>
              <a href="https://skyjumpertrampolinepark.com/noida-go-bananas/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/noida-logo.png" alt="Noida Wave">
              <h5>Noida Wave</h5>
              <a href="https://skyjumpertrampolinepark.com/noida-wave/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/pune-logo.png" alt="Pune Amanora">
              <h5>Pune Amanora</h5>
              <a href="https://skyjumpertrampolinepark.com/pune-amanora/"></a>
            </div>
            <div class="location-city">
              <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2023/12/pune-logo.png" alt="Pune Creaticity">
              <h5>Pune Creaticity</h5>
              <a href="https://skyjumpertrampolinepark.com/pune/"></a>
            </div>                       
          </div>
        </div>
      </div>

      <div class="main-header"> 
          <div class="container">
              <div class="main-header-inner-block"> 
                  <div class="web-logo">
                    <a href="https://skyjumpertrampolinepark.com/"><img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/03/happy-web-logo.png" alt="Website Logo" class="web-logo-image"></a>
                  </div>
                  <navigation class="main-nav site-menu">
                    <div class="nav-mobile">
                    	<a id="nav-toggle" href="#!"><span></span></a>
                  	</div>
                    <ul>
                      <?php wp_nav_menu(array('sort_column'=>'menu_order','menu'=>'main_menu','container'=>false,'items_wrap'=>'%3$s')); ?>  
                    </ul>
                  </navigation>
                  <div class="contact-number cont-block "> <i class="fa-solid fa-mobile-screen"></i> 
                    <?php if(is_page('school-trip-pd')) { ?> 
                		<a href="tel://9311516034">+91 93115 16034</a>
                    <?php } else { ?>
                    	<a href="tel://8882288001">+91 8882288001</a>
                    <?php } ?>
                </div>
                  <div class="header-button-navigate">
                    <a href="https://skyjumpertrampolinepark.com/#book-panel" class="btn btn-book-ticket">BOOK TICKET</a>
                    <a href="#enquiry" class="btn btn-book-party">BOOK A PARTY</a>
                  </div>
             </div>
          </div>
      </div>
    </header>