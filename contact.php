<!DOCTYPE html>
<html lang="EN">
  <head>
    <title>Contact - Kosowwwa Digital Agency</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kosowwwa Digital Agency">
    <meta name="description" content="Kosowwwa is an Digital Agency based in Ferizaj, Kosovo. Focused on Website Designing and Advertising.">
    <meta name="keywords" content="Kosowwwa, Digital, Agency, Kosovo, Website, Webfaqe, Web, Faqe, Site, Reklama, Design, Dizajn, Ferizaj, Prishtine, Gilan, Prizeren, Peja, Gjakova, Mitrovica, Merrjep, Gjirafa, Auto Sherreti, Sherreti, Alberti">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/master.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <div class="servicesBg contactBg">
      <div class="heroX">

        <!-- Include Navbar -->
        <?php include("inc/nav.php"); ?>

        <div class="container heroContainer">
          <div class="row">
            <div class="col s12 m7 l7">
              <div style="height: 60vh;" class="valign-wrapper">
                <div class="serviceInfo">
                  <h1>+383 45 29 23 29</h1>
                  <div class="xDivider"></div>
                  <p>Kosowwwa Digital Agency customer support is available free of charge. Connection charges can vary when calling from outside the area, abroad or from a mobile phone, depending on your specific phone plan.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m5 l5"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="p120-0"></div>
    <div class="container contactDetails">
      <div class="row">
        <div class="col s12 m4 l4 hoverable waves-effect waves-dark" onclick="location.href='mailto:support@kosowwwa.com';"><img src="assets/img/email.svg" alt="Email Icon">
          <h2>E-Mail Us</h2>
          <h5>support@kosowwwa.com</h5>
        </div>
        <div class="col s12 m4 l4 hoverable waves-effect waves-dark"><img src="assets/img/chat.svg" alt="Chat Icon">
          <h2>Live Chat</h2>
          <h5>Launch Live Chat</h5>
        </div>
        <div class="col s12 m4 l4 hoverable waves-effect waves-dark" onclick="location.href='https://www.support.al';"><img src="assets/img/laptop.svg" alt="Support Icon">
          <h2>Support Desk</h2>
          <h5>Go to Support Desk</h5>
        </div>
      </div>
    </div>
    <div class="p120-0"></div>

    <?php
    include ('inc/socialRing.php');
    include("inc/dhGrid.php");
    include("inc/footer.php");
    ?>

  </body>
</html>
