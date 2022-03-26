<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saint Luna | Contact</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/Media/TitleIcons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Media/TitleIcons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Media/TitleIcons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="preload" href="/Fonts/chicle/Chicle-Regular.ttf" as="font" type="font/opentype" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/cbddb11023.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body class="contactColor">

     <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity w3-card-4 w3-round-large">
          <header class="w3-container purpleBGColor" style='border-radius: 8px 8px 0px 0px !important;'>
            <span onclick="document.getElementById('id02').style.display='none';"
            class="w3-button w3-display-topright" style='border-radius: 8px 8px 8px 8px !important;'>&times;</span>
            <h2 class='w3-center chicle' style='font-size: 25pt !important; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'>Contact Form ~ Submission Confirmation</h2>
          </header>
          <div class="w3-container">
            <p class='w3-center chicle' style='margin-top: 25px !important; margin-bottom: 25px !important; font-size: 20pt !important; padding-left: 40px !important; padding-right: 40px !important; '>Your message has been sent.</p>
              </div>

          </div>
        </div>
      </div>

     <div id="id03" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity w3-card-4 w3-round-large">
          <header class="w3-container purpleBGColor" style='border-radius: 8px 8px 0px 0px !important;'>
            <span onclick="document.getElementById('id03').style.display='none';"
            class="w3-button w3-display-topright" style='border-radius: 8px 8px 8px 8px !important;'>&times;</span>
            <h2 class='w3-center chicle' style='font-size: 25pt !important; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'>Oops /:</h2>
          </header>
          <div class="w3-container">
            <p class='w3-center chicle' style='margin-top: 25px !important; margin-bottom: 25px !important; font-size: 20pt !important; padding-left: 40px !important; padding-right: 40px !important; '>An error occurred while trying to send your message.<br><br>Please try again.</p>

          </div>
        </div>
      </div>

    <?php require './backend/merchmailer.php';?>

    <div id="page-container">
      <div id="content-wrap-with-social-footer">

        <h1 class="titleHeader">
          <a href="home">Saint Luna</a>
        </h1>

        <ul id="navigationBar" class="stickyTitleHeader contactNav">
          <li class="navigationBarItem">
            <a href="music">Music</a>
          </li>
          <li class="navigationBarItem">
            <a href="merch">Merch</a>
          </li>
          <li class="navigationBarItem">
            <a href="shows">Shows</a>
          </li>
          <li class="navigationBarItem">
            <a class="active" href="contact">Contact</a>
          </li>

        </ul>

        <script>
          function disableSubmitButton(){
            var executeButton = document.getElementById("submit");
            executeButton.setAttribute("value","Submitting...");
            executeButton.setAttribute("disabled","disabled");
            return true;
        }
        </script>

        <div class="contactForm">
          <div class="contactFormContainer">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onsubmit="return disableSubmitButton();">
              <input type="text" id="name" name="name" placeholder="Name" required>

              <input type="text" id="email" name="email" inputmode="email" placeholder="Email" required>

              <input type="text" id="subject" name="subject" placeholder="Subject">

              <textarea id="message" name="message" placeholder="Type your message here..." style="height:200px" required></textarea>

              <input type="submit" class="vert_center" value="Submit" id='submit' style='margin-top: 25px !important;'>
            </form>
          </div>
        </div>

      </div>


      <div class="socialFooter footer" id="outer">
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
