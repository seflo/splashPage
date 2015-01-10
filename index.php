<?php
  
  include_once 'general_functions.php';
?>

<!--
  CODE BY Norkle Suberstein
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GWPOP is a non­profit organization of musicians, artists, students and philosophers. Communication and understanding is our Good Wish for Peace Over Power.">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>GWPOP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main">
      <section id="main_logo"> 
        <span id="ms1" class="text">
          GWPOP is a non profit media company composed of creative minds, musicians, artists, students, and philosophers.
          We are searching for and broadcasting public opinions, information and news with GoodWish Peace Over Power.
        </span>
      </section>
      <section id="mission_statement">
        <div>
          <span id="chomsky" class="quote text shadow">
            "Public Opinion can be influential, <br>the media can be influential." -Noam Chomsky
          </span>
          <span id="morrison" class="quote text shadow clearfix">
            "Whoever controls the media, <br>controls the mind." -Jim Morrison
          </span>
          <span id="ms2" class="text shadow">
            GWPOPTalk is our first project.<br> We've got our eyes peeled and our ears open for personal stories of interest to
            share with you. <br>Wherever you are, come join us.   
          </span>
        </div>
      </section>
      <section id="meet_the_cast">
        <div class="header">
          <span id="tribe" class="text">
            Meet The Tribe
          </span>
        </div>
        <div id="cast_slider" class="container">
          <div class="banner">
              <ul>
                <?php
                  echo(printCastSlide("jack_pic", "jack.jpg", "Jack", "Jack has a knack for listening and sports an inquisitive wit, flavoring conversation with zany Aussie Attitude. Jack is our Man Host."));
                  echo(printCastSlide("paige_pic", "paige.jpg", "Paige", "Infinitely curious, Our second cohost is armed with the desire to find the great unknown truths of life. She also plays softball."));
                  echo(printCastSlide("allie_pic", "allie.jpg", "Allie", "A deep thinker who is conscious of many choices in life. Allie embraces the wonderment of nature with physical joy. She also prefers fish to hot dogs."));
                  echo(printCastSlide("tyler_pic", "tyler.jpg", "Argfart", "The leader of the house band. Arg jams most instruments and enjoys creative endeavors of all sorts."));
                  echo(printCastSlide("zach_pic", "zach.jpg", "Beatz", "A special entity in the study of rhythm and rhyme & maker of anything at anytime."));
                  echo(printCastSlide("joe_pic", "joe.jpg", "Sef", "Born in Los Angeles during the fantastic success of Power Rangers, Sef plays keys in the house band and is an avid goat herder."));
                ?>
              </ul>
          </div>
        </div><!-- /.container -->
      </section>
      <section id="trailer">
        <div class="header">
          <span class="text">
            Check Out The Trailer
          </span>
        </div>
        <!-- Vimeo Embed of Trailer -->
        <div id="vimeo_container">
          <div class="center"></div>
        </div>
      </section>
      <section id="footer">
        <div id="footer_top">
          <img class="img-responsive" src="img/logo.png">
          <span id="studs" class="text shadow">
            "I want people to talk to one another <br>no matter what their difference of opinion might be."<br> -Studs Terkel
          </span>
        </div>
        <div id="footer_bottom">
          <span class="text shadow">
            For sponsorship, to appear on the show, and updates on GWPOPTalk,<br>
            gwpoptalk@gmail.com
          </span>
        </div>
      </section>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//unslider.com/unslider.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/fitVids.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.event.swipe.js"></script>
    <script src="js/main.js"></script>

</body>
</html>