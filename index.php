<!DOCTYPE html>
<html lang="EN">
  <head>
    <title>Home - Kosowwwa Digital Agency - XK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kosowwwa Digital Agency">
    <meta name="description" content="Kosowwwa is an Digital Agency based in Ferizaj, Kosovo. Focused on Website Designing and Advertising.">
    <meta name="keywords" content="Kosowwwa, Digital, Agency, Kosovo, Website, Webfaqe, Web, Faqe, Site, Reklama, Design, Dizajn, Ferizaj, Prishtine, Gilan, Prizeren, Peja, Gjakova, Mitrovica, Merrjep, Gjirafa, Auto Sherreti, Sherreti, Alberti">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/master.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="hero">

        <!-- Include Navbar -->
        <?php include("inc/nav.php"); ?>

      <div class="container heroContainer">
        <div class="row">
          <div class="col s12 m7 l7">
            <div style="height: 80vh;" class="valign-wrapper">
              <h1><div id="heroTitleTypewritter"></div></h1>
            </div>
          </div>
          <div class="col s12 m5 l5"></div>
        </div>
      </div>
      <div class="container sliderX">
        <div class="row flex">
          <div class="col s12 m4 l4">
            <div class="slideOne"><i class="material-icons">cloud_queue</i>
              <p>We build websites that ignite your business. Start off on the right foot, let us handle everythign for your next super website.</p>
            </div>
          </div>
          <div class="col s12 m4 l4">
            <div class="slideTwo"><i class="material-icons">business</i>
              <p class="x">A true business partner. We'd like to have you in our list of super customers. Let's start by getting seen online with us.</p>
            </div>
          </div>
          <div class="col s12 m4 l4">
            <div class="slideThree"><i class="material-icons">help_outline</i>
              <p>Dedicated team of monkeys to make sure everything is up and running all the time. Reach our support 24/7.</p><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        include("inc/dhGrid.php");
    ?>
    <div class="container p130">
      <div class="row flex">
        <div class="col s12 m6 l6">
          <h2 class="ddmH">Design, Development, Marketing.</h2>
          <p class="ddmP">We're focused on building websites for local and international clients, one pixel at a time. Get an estimate for your project and calculate everything by using the get started button below.</p><a href="https://www.kosowwwa.com/crm/index.php/signup" class="gs-btn">Get Started</a>
        </div>
        <div class="col s12 m6 l6"><img src="assets/img/liveView.gif" alt="Laptop" class="laptop"></div>
      </div>
        <hr>
      <div class="row flex triFeatures">
        <div class="col s12 m3 l3"><span>Design</span>
            <p>Create a striking unique design that matches your brand, business logo or corporate colors.</p>
        </div>
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m3 l3"><span>Development</span>
          <p>Leave room for creative approach and empower your website with the essential collection of plugins.</p>
        </div>
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m3 l3"><span>Support</span>
          <p>Besides detailed documentation, you also get one-on-one expert advice via our support ticket system.</p>
        </div>
        <div class="col s12 m1 l1"></div>
      </div>
    </div>

    <?php
        include("inc/ourClients.php");
    ?>

    <div class="blockSupport">
      <div class="container">
        <div class="content">
          <div class="valign-wrapper">
            <div class="row">
              <div class="col s12 m12 l12"><i class="material-icons">leak_add</i><span>24/7/365</span>
                <h2 class="ddmH">Dedicated Support Team</h2>
                <p>Kosowwwa recognizes the importance of delivering support service with not only the experience and technical knowledge but also with the understanding of our client's compliance requirments. Our support team of experienced and dedicated consultants is comitted to delivering timely resonse.</p><a href="https://crm.kosowwwa.com/index.php/tickets" class="chatNow">Support Desk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
        include("inc/footer.php");
    ?>
  </body>
</html>
