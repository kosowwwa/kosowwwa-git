<footer>
    <div class="container">
        <div class="row flex">
            <div class="col s12 m4 l4"><img src="assets/img/kosowwwa_black.svg" alt="Kosowwwa Logo" class="logo">
                <p>Kosowwwa LLC is a Digital Agency in Ferizaj, Kosowwwa LLC was founded in 2018 to help businesses grow online.</p>
                <p>Ferizaj 70000 XK</p>
<!--                <ul class="socialIconsFooter">-->
<!--                    <li><a href="https://www.facebook.com/kosowwwa"><img src="assets/img/facebook-logo-button.svg"></a></li>-->
<!--                    <li><a href="https://www.instagram.com/kosowwwa"><img src="assets/img/instagram-logo.svg"></a></li>-->
<!--                </ul>-->
                <?php include("footerSocialIcons.php"); ?>
            </div>
            <div class="col s12 m2 l2"></div>
            <div class="col s12 m3 l3">
                <h5>Navigation</h5>
                <ul class="quickLinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="https://www.support.al">Support</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://crm.kosowwwa.com">Log In</a></li>
                    <li><a href="https://www.383.email">Webmail</a></li>
                </ul>
            </div>
            <div class="col s12 m3 l3">
                <h5>+383 45 29 23 29</h5>
                <p>Available from 12PM-8PM</p>
                <hr>
                <h5>mail@support.al</h5>
                <p>Available 24/7</p>
                <hr>
                <h5>billing@kosowwwa.com</h5>
                <p>For billing please e-mail us.</p>
            </div>
        </div>
    </div>
</footer>


<div class="copyright">
    <p>&reg; All rights reserved. Copyright &copy; 2018-<?php echo date("Y"); ?> KOSOWWWA Digital Agency. <br> <b>KOSOWWWA&trade; LLC</b></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="assets/master.js"></script>
<script src="assets/core.js"></script>

<script>
    $( document ).ready(function() {
        $('.sidenav').sidenav();
        $('.modal').modal();
    });
</script>

<script>

    var app = document.getElementById('heroTitleTypewritter');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('Passion, dedication, and a lot of coffee.')
        .pauseFor(1000)
        .start();

</script>

<script>


    $(function() {

        window.setTimeout(function(){
            $('.account-ring-wrap').addClass('orbit-animation');
            $('.animation-account-icon').fadeIn();

        }, 4000);

    });



</script>