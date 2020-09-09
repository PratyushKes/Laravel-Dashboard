<?php

    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Game</title>
    <style>
    .box{
        position: relative;
        display: inline-block /* Make the width of box same as image */
    }
    .box .option_a{
        position: absolute;
        z-index: 999;
        margin: 0 ;
        left: 0;
        right: 0;
        text-align: center;
        top: 10%; /* Adjust this value to move the positioned div up and down */

        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }
    .box1{
        position: relative;
        display: inline-block /* Make the width of box same as image */
    }
    .box1 .option_b{
        position: absolute;
        z-index: 999;
        margin: 0 ;
        left: 0;
        right: 0;
        text-align: center;
        top: 10%; /* Adjust this value to move the positioned div up and down */

        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }
    .box2{
        position: relative;
        display: inline-block /* Make the width of box same as image */
    }
    .box2 .option_c{
        position: absolute;
        z-index: 999;
        margin: 0 ;
        left: 0;
        right: 0;
        text-align: center;
        top: 10%; /* Adjust this value to move the positioned div up and down */

        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }
    .box3{
        position: relative;
        display: inline-block /* Make the width of box same as image */
    }
    .box3 .option_d{
        position: absolute;
        z-index: 999;
        margin: 0 ;
        left: 0;
        right: 0;
        text-align: center;
        top: 10%; /* Adjust this value to move the positioned div up and down */

        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }

    .box4{
        position: relative;
        display: inline-block /* Make the width of box same as image */
    }
    .box4 .display{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        padding-left: 300;
        left: 0;
        right: 250;
        text-align: center;
        top: 10%; /* Adjust this value to move the positioned div up and down */

        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }
    .arrow
    {

      transform-origin: bottom center;
      position: relative;
      animation: mymove 1s infinite;
      animation-delay: 1s;
      transition-delay: 1s;
    }
    @keyframes mymove
    {
      0% {transform:rotate(-40deg);}
      25% {transform:rotate(40deg);}
      50% {transform:rotate(40deg);}
      100%{transform:rotate(-40deg);}
    }

    .option_a, .option_b, .option_c, .option_d
    {
      cursor: pointer;
    }

</style>
  </head>
  <body>

    <center>
    <div class="images">
      <div class="box">
      <img class="img" src="{{ asset('img/b.png') }}" alt="">
      <div class="option_a">
        <h5 onclick="onUserAnswer('a')" style="color: <?php echo $color; ?>;">{{ $question->option_a }}</h5>
      </div>

      </div>
      <div class="box1">
        <img class="img" src="{{ asset('img/b.png') }}" alt="">
        <div class="option_b">
          <h5 onclick="onUserAnswer('b')" style="color: <?php echo $color; ?>;">{{ $question->option_b }}</h5>
        </div>

      </div>
      <div class="box2">
        <img class="img" src="{{ asset('img/b.png') }}" alt="">
        <div class="option_c">
          <h5 onclick="onUserAnswer('c')" style="color: <?php echo $color; ?>;">{{ $question->option_c }}</h5>
        </div>

      </div>
      <div class="box3">
        <img class="img" src="{{ asset('img/b.png') }}" alt="">
        <div class="option_d">
          <h5 onclick="onUserAnswer('d')" style="color: <?php echo $color; ?>;">{{ $question->option_d }}</h5>
        </div>

      </div>
    </div>
    </center>

    <div class="arr">
      <img class="arrow" src="{{ asset('img/v-03-512.png') }}" alt="">

    </div>

    <div class="images1">
      <div class="box4">
        <img class="img1" src="{{ asset('img/b.jpg') }}" alt="">
              <div class="display">
                <h3 style="color: <?php echo $color; ?>;"> {{ $question->question }}</h3>
              </div>
      </div>
      <img class="img2" src="{{ asset('img/imab.jfif') }}" alt="">
      <img class="img2" src="{{ asset('img/imab.jfif') }}" alt="">
      <img class="img2" src="{{ asset('img/imab.jfif') }}" alt="">
      <img class="img2" src="{{ asset('img/imab.jfif') }}" alt="">
    </div>

<p id="demo"></p>
    <script>
    console.log('{{ $question->answer }}');
    //The next line is use to disable the right click, in future if you want
    //document.addEventListener('contextmenu', event => event.preventDefault());

      function onUserAnswer(user_answer) {
        if (user_answer == '{{ $question->answer }}') {
          alert('Hurrah, You have choosen right answer.');
          window.location.reload();
        } else {
          alert('You have choosen wrong answer. Right answer is ' + '{{ $question->answer }}');
        }
      }

      function option_a()
      {
        if({{ $question->option_a}}== {{ $question->option_a}} )
        // if ('{{ $question->answer }}' == 'a')
        {
          alert('Hurrah, You have choosen right answer.');

        }
        else {
          alert('You have choosen wrong answer.');
        }
      }
      function option_b()
      {
        if({{ $question->option_a}}== {{ $question->option_b}} )
        {
          alert('Hurrah, You have choosen right answer.');
        }
        else {
          alert('You have choosen wrong answer.');
        }
      }
      function option_c()
      {
        if({{ $question->option_a}}== {{ $question->option_c}} )
        {
          alert('Hurrah, You have choosen right answer.');
        }
        else {
          alert('You have choosen wrong answer.');
        }
      }
      function option_d()
      {
        if({{ $question->option_a}}== {{ $question->option_d}} )
        {
          alert('Hurrah, You have choosen right answer.');
        }
        else {
          alert('You have choosen wrong answer.');
        }
      }
    </script>

  </body>
</html>
