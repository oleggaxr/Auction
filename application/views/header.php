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
              <div class="logo"><a href="/index.php/main" title="Name"><img class="imlogo" src="/" alt="Name"></a></div>
              <div class="reg-log"><div class="treg-log" style="padding-top:0;"><div class="reg-log separator" style="width: 230px;"><span id="top_btn_registration">Регистрация</span></div>
              <div class="reg-log separator"><span id="top_btn_signin">Вход</span></div>
              <div id="signinfrm" class="signin-form rad_5px dropshadow5px transparrent" style="opacity: 0; left: -9999px;">
                <img src="/img/close_grey.png" id="cosesigninform" title="Закрыть" alt="Закрыть">
                <img src="/img/frm/frm_signin_pipka.png" class="pipka">
                <img src="/img/shopbag_medium.png" class="shopbag">
                <h2>ВХОД</h2>
                <form id="signin_form" action="/login" method="POST">
                  Электронная почта:
                   
        <div onclick="setfocus(&quot;login&quot;)" class="formdiv" style="border-top: 1px solid #7D7D7D; width:201px;  height:26px ; background-color:#ffffff; position: relative; padding: 0 13px; -webkit-border-radius: 13px; -moz-border-radius: 13px; border-radius: 13px;">
          <input type="text" class="forminput" name="login" id="userlogin1" value="" style="background: transparent;" maxlength="200">
        </div>
      
                    Пароль:  
                   
          <div onclick="setfocus(&quot;password&quot;)" class="formdiv" style="border-top: 1px solid #7D7D7D; width:201px;  height:26px ; background-color:white; position: relative; padding: 0 13px; -webkit-border-radius: 13px; -moz-border-radius: 13px; border-radius: 13px;">
            <input type="password" style="width:201px; height:26px; *height:25px;" class="forminput" name="password" id="userpassword1" maxlength="50">
            <img title="Показать пароль" name="passshow" src="/img/eyesleep.png" style="position: absolute;width: 26px;right: 5px;top: 1px; cursor:pointer; float:right;"></div>
      <br><table style="width: 100%;border-collapse:collapse; border: none;"><tbody><tr><td style="text-align: left;">
                   
        <div class="checkbox " style="width:150px;">
            <div class="checkbox_img checkbox_img_checked"></div>
            <div class="checkbox_label">Запомнить меня</div>
          <input name="rememberme" type="checkbox" checked="checked" value="1">
        </div>
      </td><td style="text-align: right;"><span id="btn_signin" class="btn-signin">Войти</span></td></tr></tbody></table>
                   <img id="loginprogress" src="/img/ajax-loader.gif">
                  <input type="submit" class="hiddensubmit">
                </form>
                <div class="signinfooter rad_bottom_5px"><a href="/pwdrecovery">Забыли пароль?</a></div>
              </div></div></div><div class="reg-log separator "><div class="tcont center"><a href="/feedback">8 (000) 00-00-00</a><br><!--24 часа, звонок по России бесплатный--></div></div> </div>
          </div>
          <div class="topmenuwrapper"><div class="topmenu">
          	<ul>
          		<li class=" mark"><a href="/auction/">АУКЦИОНЫ</a></li>
          		<li class="bullet"><a href="/auction/">GAME ZONE</a></li>
          		<li class="bullet"><a href="/howitworks">КАК ЭТО РАБОТАЕТ</a></li>
          		<li class="bullet"><a href="/document/FAQ">ОТЗЫВЫ И ВИДЕО</a></li>
          		<li class="bullet"><a href="/feedback">ОБРАТНАЯ СВЯЗЬ</a></li>
          		<li class="bullet"><a href="/getbonuses">БОНУСЫ</a></li>
          		<li class="bullet"><a href="http://vk.com/" target="_blank">МЫ В ВК</a></li>
          	</ul>
              </div>
</div>
</div>
</div>