﻿<html>
<head>
<link rel="shortcut icon" href="Photo\Logo.png">
<title>Анкета</title>
</head>
<style>
.preloader {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background-color: #A6D5D8;
  z-index: 1001;
}

.preloader__row {
  position: relative;
  top: 50%;
  left: 50%;
  width: 70px;
  height: 70px;
  margin-top: -35px;
  margin-left: -35px;
  text-align: center;
  animation: preloader-rotate 2s infinite linear;
}

.preloader__item {
  position: absolute;
  display: inline-block;
  top: 0;
  background-color: #07BCC5;
  border-radius: 100%;
  opacity:0.5;
  width: 55px;
  height: 55px;
  animation: preloader-bounce 2s infinite ease-in-out;
}

.preloader__item:last-child {
  top: auto;
  bottom: 0;
  animation-delay: -1s;
}

@keyframes preloader-rotate {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes preloader-bounce {

  0%,
  100% {
    transform: scale(0);
  }

  50% {
    transform: scale(1);
  }
}

.loaded_hiding .preloader {
  transition: 0.3s opacity;
  opacity: 0;
}

.loaded .preloader {
  display: none;
}
::-webkit-scrollbar {width: 12px;height: 12px;}
::-webkit-scrollbar-track-piece {background:linear-gradient(to bottom,#9F3258 , #262627 50%, #9F3258);}
::-webkit-scrollbar-thumb:vertical {height:10px;background:#272c35;}
::-webkit-scrollbar-thumb:vertical:hover {background:#000;}
::-webkit-scrollbar-thumb:horizontal {width:10px;background:#272c35;}
::-webkit-scrollbar-thumb:horizontal:hover {background:#9F3258;}
body{
background: radial-gradient(ellipse,#111 20%,#f2f2f2,#053A70 );
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
topmargin="15px";
  margin: 0;
  font-family: URW Chancery L, cursive;
}
header{
color: #f2f2f2;
padding: 1% 2%;
text-align:center;
font-size:20px;
background-color:#333;
}
a{
text-decoration:none;
color:#f2f2f2;
transition:0.5s;
}
a:hover{
color: #066DB8;
}
</style>
<body>
<div class="preloader">
  <div class="preloader__row">
    <div class="preloader__item"></div>
    <div class="preloader__item"></div>
  </div>
</div>
<header>
<a style="margin-right: 5%" href="First.html">Головна</a>
<a style="margin-right: 5%; margin-left:5%" href="Main.html">Інформація</a>
<a style="margin-left: 5%" href="Form.html">Анкета</a>
</header>
<?php
$filename="DataBase.txt";
$surname=$_REQUEST[Surname];
$name=$_REQUEST[Name];
$comment_1=$_REQUEST[Comment1];
$comment_2=$_REQUEST[Comment2];
file_put_contents($filename,$surname, FILE_APPEND);
file_put_contents($filename,$name, FILE_APPEND);
file_put_contents($filename,$comment_1, FILE_APPEND);
file_put_contents($filename,$Comment_2, FILE_APPEND);
?>
<h1 style="text-align: center;margin-top:20%;color:#f2f2f2;background:rgba(27,28,28,0.8);margin-left:25%;margin-right:25%;padding:1%;">Спасибі за ваш відгук</h1>
<script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
</script>
</body>
</html>