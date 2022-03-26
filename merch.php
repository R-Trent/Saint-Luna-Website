<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saint Luna | Merch</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/Media/TitleIcons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Media/TitleIcons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Media/TitleIcons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preload" as="image" href="/Media/iFeelItMerch_Front.JPG">
    <link rel="preload" as="image" href="/Media/iFeelItMerch_Back.JPG">

    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/merchModals.css" rel="stylesheet" type="text/css" />
    <link rel="preload" href="/Fonts/chicle/Chicle-Regular.ttf" as="font" type="font/opentype" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cbddb11023.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none;}
    </style>

  </head>
  <body class="merchColor">

     <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity w3-card-4 w3-round-large">
          <header class="w3-container lightBlueBGColor" style='border-radius: 8px 8px 0px 0px !important;'>
            <span onclick="document.getElementById('id02').style.display='none';"
            class="w3-button w3-display-topright" style='border-radius: 8px 8px 8px 8px !important;'>&times;</span>
            <h2 class='w3-center chicle' style='font-size: 25pt !important; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'>Merch Order Confirmation</h2>
          </header>
          <div class="w3-container">
            <p class='w3-center chicle' style='margin-top: 25px !important; margin-bottom: 25px !important; font-size: 20pt !important; padding-left: 40px !important; padding-right: 40px !important; '>Your order has been received and is currently being processed.</p>

          </div>
          <footer class="w3-container lightBlueBGColor" style='border-radius: 0px 0px 8px 8px !important;'>
              <p class='w3-center chicle' style='font-size: 16pt !important; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;  margin-bottom: 0px !important;'>Thanks again for your support!</p>
          </footer>
        </div>
      </div>

     <div id="id03" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity w3-card-4 w3-round-large">
          <header class="w3-container lightBlueBGColor" style='border-radius: 8px 8px 0px 0px !important;'>
            <span onclick="document.getElementById('id03').style.display='none';"
            class="w3-button w3-display-topright" style='border-radius: 8px 8px 8px 8px !important;'>&times;</span>
            <h2 class='w3-center chicle' style='font-size: 25pt !important; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'>Oops /:</h2>
          </header>
          <div class="w3-container">
            <p class='w3-center chicle' style='margin-top: 25px !important; margin-bottom: 25px !important; font-size: 20pt !important; padding-left: 40px !important; padding-right: 40px !important; '>An error occurred while trying to submit your order.<br><br>Please try again.</p>

          </div>
        </div>
      </div>

    <?php require './backend/merchmailer.php';?>

    <div id="page-container">

      <div id="content-wrap-with-social-footer">

        <h1 class="titleHeader" id="videosHeader">
          <a href="home">Saint Luna</a>
        </h1>

        <ul id="navigationBar" class="stickyTitleHeader merchNav">
          <li class="navigationBarItem">
            <a href="music">Music</a>
          </li>
          <li class="navigationBarItem">
            <a class="active" href="merch">Merch</a>
          </li>
          <li class="navigationBarItem">
            <a href="shows">Shows</a>
          </li>
          <li class="navigationBarItem">
            <a href="contact">Contact</a>
          </li>
        </ul>

      <div class='merch-notice'>
        <p class='chicle vert_center'>More items coming soon!</p>
      </div>

      </div>

        <div class="socialFooter" id="outer">
          <div class="socialContainerFooter blueForegroundColor" id="inner">
            <a href="https://www.instagram.com/saintlunaband/"
               class="fab fa-instagram"
               target=”_blank”
               title="Saint Luna on Instagram"
               id="firstElement">
            </a>

            <a href="https://www.tiktok.com/@saintlunaband"
               class="fab fa-tiktok"
               target=”_blank”
               title="Saint Luna on TikTok">
            </a>

            <a href="https://open.spotify.com/artist/22VGazLMujjb7UqV4e2kDX"
               class="fab fa-spotify"
               target=”_blank”
               title="Saint Luna on Spotify">
            </a>

            <a href="https://music.apple.com/us/artist/saint-luna/1546166814"
               class="fab fa-apple"
               target=”_blank”
               title="Saint Luna on Apple Music">
            </a>

            <a href="https://www.youtube.com/channel/UCgt7NvBcFfrpwcVxbrExqhA?sub_confirmation=1"
               class="fab fa-youtube"
               target=”_blank”
               title="Saint Luna on YouTube">
            </a>
          </div>
        </div>

        <div class='legalStrings footer' id='outer'>
            <div class='legalFooterContainer' id='inner'>
                ©2021 saintluna.me |
                <a href='terms'>Terms & Conditions</a>
            </div>
        </div>

  </div>

  </body>
</html>
