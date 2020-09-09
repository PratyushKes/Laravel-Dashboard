<?php

    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hooping Game</title>
    <script src="index.js"></script>
    <style media="screen">
    .myButton {
background-color:#44c767;
border-radius:28px;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
margin-top: 300px;
font-family:Arial;
font-size:17px;
padding:16px 31px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
background-color:#5cbf2a;
}
.myButton:active {
position:relative;
top:1px;
}

.myButtonn {
background-color:#44c767;
border-radius:28px;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:17px;
margin-top: 300px;
padding:16px 31px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
}
.myButtonn:hover {
background-color:#5cbf2a;
}
.myButtonn:active {
position:relative;
top:1px;
}

.myButtonnn {
background-color:#44c767;
border-radius:28px;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
margin-top: 300px;
font-size:17px;
padding:16px 31px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
}
.myButtonnn:hover {
background-color:#5cbf2a;
}
.myButtonnn:active {
position:relative;
top:1px;
}
    </style>
  <body>
    <center>
    <h1>Make your Choice</h1>
    <center>
    <center>
    <a href="easy" class="myButton">Easy</a>
    <a href="medium" class="myButtonn">Medium</a>
    <a href="hard" class="myButtonnn">Hard</a>
  </center>
  </body>
</html>
