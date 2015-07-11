<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Name</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	* {
  		margin: 0;
  		padding: 0;
	}
	.top {
  		height: 74px;
  		width: 100%;
  		background: #303030;
  		min-width: 950px;
	}
	.topwr {
 		width: 950px;
  		margin: 0px auto;
	}
	.imlogo {
  	width: 256px;
  	height: 70px;
  	display: inline-block;
  	float: left;
  	margin-top: 3px;
	}
	.reg-log {
		float: left;
	}
	.treg-log {
  		width: 430px;
  		padding: 16px 5px;
  		height: 42px;
  		position: relative;
  		color: white;
	}
	.separator {
  		background: url("/") left top no-repeat;
  		height: 74px;
  		color: white;
	}
	#top_btn_registration {
  		display: block;
  		height: 31px;
  		line-height: 31px;
		vertical-align: middle;
		color: wite;
		cursor: pointer;
		width: 112px;
		text-align: left;
		background: url('/img/') right 0 no-repeat;
		margin: 21px 138px 0 60px;
	}
	#top_btn_signin {
		height: 28px;
		margin: 7px 10px 0 0;
		display: block;
		padding-left: 30px;
		width: 70px;
		background: url('/img/') right top no-repeat;
		color: white;
		line-height: 28px;
		vertical-align: middle;
		cursor: pointer;
		margin: 22px 0 0 38px;
	}
	.tcont {
  		padding: 18px 0px;
  		color: #AAA;
  		text-align: right;
  		width: 240px;
	}
	.tcont a, .tcont a:visited {
  		color: #B4F500;
  		font-size: 20px;
  		font-weight: bold;
  		text-decoration: none;
	}
	.topmenuwrapper {
  		height: 49 px;
  		width: 100%;
  		background-color: #1b1b1e;
  		min-width: 950px;
  		box-shadow: 0 0 20px rgba(0,0,0,0.5);
	}
	.topmenu {
  		width: 950px;
  		margin: 0px auto;
  		height: 43px;
  		padding-top: 12px;
  		position: relative;

	}
	ul {
  		margin: 0px;
  		list-style-position: inside;
	}

	li {
  		list-style: none;
  		box-sizing: border-box;
  		padding: 5px;
	}
	li:hover{
		background-color: #FFF500;
		opacity: 0.99;
	}
	li:hover a{
		color: black;
	}
	.topmenu li {
  		float: left;
  		height: 29px;
  		vertical-align: middle;
  		position: relative;
	}
	.topmenu a, .topmenu .period {
  		text-decoration: none;
  		font-size: 11px;
  		font-weight: bold;
  		height: 29px;
  		color: white;
	}
	.topmenu .bullet {
  		margin-left: 26px;
  		padding-left: 8px;
  		list-style-image: url('/img/bullet.png');
	}

	body {
		background-color: white;
		margin: 0px;
		padding: 0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: white;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	</style>
</head>
<body>

<div class="header">
	<div class="top">
            <div class="topwr">
              <div class="logo"><a href="/" title="Name"><img class="imlogo" src="/" alt="Name"></a></div>
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
              </div></div></div><div class="reg-log separator "><div class="tcont center"><a href="/feedback">+7 (000) 00-00-00</a><br>24 часа, звонок по России бесплатный</div></div> </div>
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
</div></div>
	
</div>

</body>
</html>