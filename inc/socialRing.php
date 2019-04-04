<?php
/**
 * Created by PhpStorm.
 * User: kosowwwa
 * Date: 18-11-30
 * Time: 12.02.PD
 */

?>

<style>
    .line-wrap { border-bottom:1px solid #dcdcdc;}

    .account-ring-wrap{
        width: 517px;
        height: 397px;
        position: relative;
        background: #fff;
        overflow: hidden;
        margin: auto;
        pointer-events: fill;
        cursor: pointer;
        -webkit-transform: perspective(100px), translate3d(0, 0, 0);
        transform: perspective(1000px);
    }
    .folder-img {
        position: relative;
        top: 210px;
        left: 25px;
        z-index: 1;
    }
    .account-ring-inner{
        width: 517px;
        height: 397px;
        position: absolute;
        top:0
        left:0;
        right:0;
        bottom:0;
        margin: auto;
        border-radius: 50%;
        z-index:2;
        -webkit-transition: 3s all;
        transition: 3s all;
    }

    .account-ring {
        border: 3px solid #EDEDED;
        border-radius: 50%;
        box-sizing:border-box;
        position: absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin: 25px auto 0;
    }

    .big-ring { width: 465px; height: 465px; opacity:0 }
    .middle-ring{ width: 335px; height: 335px; margin-top: 85px; opacity:0 }
    .small-ring { width: 220px; height: 220px; margin-top: 145px; opacity:0 }

    .animation-account-icon {
        width: 55px;
        height: 55px;
        position: absolute;
        margin: 0 auto;
        display: block;
        box-sizing: border-box;
        transition: 1s all;
    }
    .animation-account-icon img{
        -webkit-transform:rotate(-90deg)
        display: block;
    }

    .animation-image-readonly { left: 35px; top: 40px; }

    .animation-image-readonly2 {  left: 370px; top: 40px; }

    .animation-image-noaccess { left: 425px; top: 210px }

    .animation-image-manager { top: -28px; left: 130px; }

    .animation-image-manager2 { top: 65px; left: -15px; }

    .animation-image-manager3 { top: 200px; left: -20px; }

    .animation-image-admin { top: -15px; left: 120px; }

    .animation-image-admin2 { top: 175px; left: 80px; }

    .animation-image-noaccess2 { left: 140px; top: 422px }

    .animation-image-admin, .animation-image-admin2 { width: 65px; height: 65px; }


    .animation-image-readonly {
        -webkit-transform-origin: 350% 182px;
        transform-origin: 350% 182px;
    }


    .animation-image-readonly2 {
        -webkit-transform-origin: -135px 185px;
        transform-origin: -135px 185px;
    }


    .animation-image-noaccess {
        -webkit-transform-origin: -355% 12px;
        transform-origin: -355% 12px;
    }

    .animation-image-noaccess2 {
        -webkit-transform-origin: 160% -191px;
        transform-origin: 160% -191px;
    }


    /*counter rotate*/
    .orbit-animation .animation-image-noaccess-img, .orbit-animation .animation-image-noaccess2-img,
    .orbit-animation .animation-image-readonly2-img, .orbit-animation .animation-image-readonly-img {
        -webkit-animation: roateCirlce 80s 3.01s infinite linear ;
        animation: roateCirlce 80s 3.01s infinite linear backwards;
        -webkit-animation-direction:forwards;
        animation-direction:forwards;
    }

    .orbit-animation .animation-image-readonly, .orbit-animation .animation-image-readonly2,
    .orbit-animation .animation-image-noaccess, .orbit-animation .animation-image-noaccess2 {
        -webkit-animation: roateCirlce 80s 3s infinite linear;
        animation: roateCirlce 80s 3s infinite linear;
        -webkit-animation-direction:reverse;
        animation-direction:reverse;
    }

    /*counter rotate*/
    .orbit-animation .animation-image-manager-img,
    .orbit-animation .animation-image-manager2-img,
    .orbit-animation .animation-image-manager3-img {
        -webkit-animation: roateCirlce 90s 1.01s infinite linear;
        animation: roateCirlce 90s 1.01s infinite linear;
        -webkit-animation-direction:reverse;
        animation-direction:reverse;

    }

    .orbit-animation .animation-image-manager,
    .orbit-animation .animation-image-manager2,
    .orbit-animation .animation-image-manager3 {
        -webkit-animation: roateCirlce 90s 1s infinite linear;
        animation: roateCirlce 90s 1s infinite linear;
    }


    .orbit-animation .animation-image-admin, .orbit-animation .animation-image-admin2 {
        -webkit-animation: roateCirlce 35s 2s  infinite linear;
        animation: roateCirlce 35s 2s infinite linear;
        -webkit-animation-direction:reverse;
        animation-direction:reverse;
    }

    /*counter rotate*/
    .orbit-animation .animation-image-admin-img, .orbit-animation .animation-image-admin2-img {
        -webkit-animation: roateCirlce 35s 2.01s infinite linear;
        animation: roateCirlce 35s 2.01s  infinite linear;
        -webkit-animation-direction:forwards;
        animation-direction:forwards;
    }


    .animation-image-manager {
        -webkit-transform-origin: 50% 193px;
        transform-origin: 50% 193px;
    }
    .animation-image-manager2 {
        -webkit-transform-origin: 328% 100px;
        transform-origin: 328% 100px;
    }

    .animation-image-manager3 {
        -webkit-transform-origin: 328% -35px;
        transform-origin: 328% -35px;
    }


    .animation-image-admin {
        -webkit-transform-origin: -28% 117px;
        transform-origin: -28% 117px;
    }

    .animation-image-admin2 {
        -webkit-transform-origin: 46% -68px;
        transform-origin: 46% -68px;
    }


    @-webkit-keyframes roateCirlce {
        from { -webkit-transform: rotate(0deg); }
        to { -webkit-transform: rotate(360deg); }
    }
    @keyframes roateCirlce {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }



    @-webkit-keyframes bounceIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
        }

        50% {
            opacity: 1;
        }
        100% { opacity: 1; }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            -ms-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
        }

        50% {
            opacity: 1;
        }
        100% { opacity: 1; }
    }


    .ring-animation .bounceInLarge,
    .ring-animation .bounceInMedium,
    .ring-animation .bounceInSmall {
        -webkit-animation-name: bounceIn;
        animation-name: bounceIn;
        -webkit-animation-fill-mode:forwards;
        animation-fill-mode:forwards;
    }

    .ring-animation .bounceInLarge {
        -webkit-animation-duration: 1.5s;
        animation-duration: 1.5s;
    }

    .ring-animation .bounceInMedium {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }


    .ring-animation .bounceInSmall {
        -webkit-animation-duration: 1.25s;
        animation-duration:1.25s;
        -webkit-animation-delay: 1.75s;
        animation-delay: 1.75s;
    }

    .animation-account-icon { display:none}



</style>

<div class="line-wrap">
    <div class="account-ring-wrap ring-animation">

        <div class="account-ring-inner">

            <div class="account-ring big-ring bounceInLarge">

            <span class="animation-account-icon animation-image-readonly">
                <img src="assets/img/icon-permissions-read-only.svg" class="animation-image-readonly-img" />
            </span>

                <span class="animation-account-icon animation-image-readonly2">
                <img src="assets/img/icon-permissions-read-only.svg" class="animation-image-readonly2-img" />
            </span>

                <span class="animation-account-icon animation-image-noaccess">
                <img src="assets/img/icon-permissions-no-access.svg" class="animation-image-noaccess-img" />
            </span>

                <span class="animation-account-icon animation-image-noaccess2">
                <img src="assets/img/icon-permissions-no-access.svg" class="animation-image-noaccess2-img" />
            </span>

            </div>


            <div class="account-ring middle-ring bounceInMedium">

            <span class="animation-account-icon animation-image-manager">
                <img src="assets/img/icon-permissions-manager.svg" class="animation-image-manager-img" />
            </span>

                <span class="animation-account-icon animation-image-manager2">
                <img src="assets/img/icon-permissions-manager.svg" class="animation-image-manager2-img" />
            </span>

                <span class="animation-account-icon animation-image-manager3">
                <img src="assets/img/icon-permissions-manager.svg" class="animation-image-manager3-img" />
            </span>

            </div>

            <div class="account-ring small-ring bounceInSmall  ">

                <span class="animation-account-icon animation-image-admin">
                    <img src="assets/img/icon-permissions-admin.svg" class="animation-image-admin-img" />
                </span>

                <span class="animation-account-icon animation-image-admin2">
                    <img src="assets/img/icon-permissions-admin.svg" class="animation-image-admin2-img" />
                </span>

            </div>
        </div>
        <img src="assets/img/groups-folders.png" class="folder-img" />
    </div>
</div>

