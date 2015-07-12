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
	$(document).ready(function(){
		$('#login-trigger').click(function(){
			$(this).next('#login-content').slideToggle();
			$(this).toggleClass('active');					
			if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
			else $(this).find('span').html('&#x25BC;')
	})
});

        $(function(){
            $('#slider').anythingSlider({
                theme           : 'cs-portfolio',
                autoPlay            : true,
                delay               : 5000,  
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
              <div class="reg-log"><div class="treg-log" style="padding-top:0;">
              <div class="reg-log separator"><span class="top_btn_signin" id="login-trigger" href="#">Регистрация/Вход<span>&#x25BC;</span></span>
              <div id="login-content">
              	<div id="in1">
              		<a style="color:black; font-weight:bold; font-size:16px; border-bottom:1px solid rgba(184, 41, 0, 0.9);">Регистрация</a>
                <form>

                    <fieldset id="inputsreg">
                    	<p style="color:black;">Ваш email</p>
                        <input id="useremailreg" type="email" name="Emailreg" placeholder="Ваш email адрес" required>  
                        <p style="color:black;">Ваш пароль</p>
                        <input id="passwordreg" type="password" name="Passwordreg" placeholder="Пароль" required>
                        <p style="color:black;">Никнейм(не более 16 симв.)</p>
                        <input id="usernamereg" type="text" name="Usernamereg" placeholder="Никнейм" required>
                        <p style="color:black;">Промокод (не обязателен)</p>
                        <input id="promo" type="text" name="Promo" placeholder="промокод" required>
                        <label><input name="conditions" type="checkbox" checked="checked" class="regcheck" value="1">C <a href="/ofertalot">условиями</a> согласен</input><br>
                        <input name="personal_inf" type="checkbox" checked="checked" value="1" class="regcheck">На <a href="/personal_inf">обработку перс. данных</a> согласен</input><br>
                        <input name="news" type="checkbox" checked="checked" value="1" class="regcheck">Получать новости на email</input>
                    	</label>
                    	<input type="submit" id="submit" value="Регистрация">
                    </fieldset>
                </form>
            </div>
            <div id="in2">
            	<a style="color:black; font-weight:bold; font-size:16px; border-bottom:1px solid rgba(184, 41, 0, 0.9);">Вход</a>
                <form>
                    <fieldset id="inputslog">
                    	<p style="color:black;">Ваш email</p>
                        <input id="useremail" type="email" name="Email" placeholder="Ваш email адрес" required>  
                        <p style="color:black;">Ваш пароль</p>
                        <input id="password" type="password" name="Password" placeholder="Пароль" required>
                        <input type="submit" id="submit" value="Войти">
                        <label><input class="logcheck" name="remember" type="checkbox" checked="checked"> Запомнить меня</label>
                    </fieldset>

                </form>
                </div>
              </div>
              </div>
              </div></div></div><div class="reg-log separator "><div class="tcont center"><a href="/feedback">8 (000) 00-00-00</a></div></div> 
  			</div>
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