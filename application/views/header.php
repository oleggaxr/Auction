<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Name</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/main.css" type="text/css">
	<script src="/assets/slider/js/jquery.anythingslider.js"></script>
	<link rel="stylesheet" href="/assets/slider/css/slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/assets/slider/css/theme-cs-portfolio.css">
	<script>
        $(function(){
            $('#slider').anythingSlider({
                theme           : 'cs-portfolio',
                autoPlay            : true,
                buildStartStop      : false,
                resizeContents      : true, 
                easing          : 'easeInOutBack',
                navigationFormatter : function(index, panel){
                    return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
                },
                onSlideComplete : function(slider){
                    // alert('Welcome to Slide #' + slider.currentPage);
                }
            });
		});
	</script>
</head>
<body>

<div class="header">
	<div class="top">
            <div class="topwr">
              <div class="logo"><a href="/" title="Name"><img class="imlogo" src="/" alt="Name"></a></div>
              <div class="reg-log"><div class="treg-log" style="padding-top:0;"><div class="reg-log separator" style="width: 230px;"><span id="top_btn_registration">Регистрация</span></div>
              <div class="reg-log separator"><span id="top_btn_signin">Вход</span></div>
              <div id="signinfrm" class="signin-form rad_5px dropshadow5px transparrent" style="opacity: 0; left: -9999px;">
                <img src="/" id="cosesigninform" title="Закрыть" alt="Закрыть">
                <h2>ВХОД</h2>
              </div></div></div><div class="reg-log separator "><div class="tcont center"><a href="/feedback">8 (000) 00-00-00</a>
              <br><!--24 часа, звонок по России бесплатный--></div></div> </div>
          </div>
          <div class="topmenuwrapper"><div class="topmenu">
          	<ul>
          		<li class=" mark"><a href="/auction/">АУКЦИОНЫ</a></li>
          		<li class="bullet"><a href="/auction/">GAME ZONE</a></li>
          		<li class="bullet"><a href="/howitworks">КАК ЭТО РАБОТАЕТ</a></li>
          		<li class="bullet"><a href="/feedback">ОТЗЫВЫ И ВИДЕО</a></li>
          		<li class="bullet"><a href="/contact">ОБРАТНАЯ СВЯЗЬ</a></li>
          		<li class="bullet"><a href="/getbonuses">БОНУСЫ</a></li>
          		<li class="bullet"><a href="http://vk.com/" target="_blank">МЫ В ВК</a></li>
          	</ul>
              </div>
</div>
</div>
</div>