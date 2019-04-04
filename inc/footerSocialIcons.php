<?php
/**
 * Created by PhpStorm.
 * User: kosowwwa
 * Date: 18-11-30
 * Time: 12.27.PD
 */
?>

<style>

    .f a {
        color: #666666;
    }

    /* FOOTER */
    .Footer {
        position: inherit;
        -webkit-transform: translateY(50%);
        transform: translateY(50%);
    }

    .Footer-items {
        width: 100%;
    }

    .Footer-item {
        display: inline-block;
        width: 50px;
        height: 50px;
        text-align: center;
    }

    .Footer-link {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        opacity: 0;
        -webkit-animation: translate2 3000ms infinite;
        animation: translate2 3000ms infinite;
    }

    .Footer-item:nth-child(2) .Footer-link {
        -webkit-animation-delay: 60ms;
        animation-delay: 60ms;
    }

    .Footer-item:nth-child(3) .Footer-link {
        -webkit-animation-delay: 120ms;
        animation-delay: 120ms;
    }

    .Footer-item:nth-child(4) .Footer-link {
        -webkit-animation-delay: 180ms;
        animation-delay: 180ms;
    }

    .Footer-item:nth-child(5) .Footer-link {
        -webkit-animation-delay: 240ms;
        animation-delay: 240ms;
    }

    .Footer-icon {
        color: #666;
        position: absolute;
        left: 50%;
        top: 50%;
        font-size: 1.6em;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        transition: 0.3s;
    }

    .fa-codepen, .fa-linkedin, .fa-envelope {
        font-size: 1.4em;
    }

    .fa-linkedin {
        font-size: 1.5em;
    }

    .fa-envelope {
        font-size: 1.3em;
    }

    .Footer-link:hover {
        /*.fa-twitter {
          color : #3498db;
        }
        .fa-google-plus {
          color : #E34429;
        }
        .fa-github {
          color : #9C7A5B;
        }
         .fa-linkedin {
          color : #34495e;
        }
         .fa-codepen {
          color : #161616;
        }*/
    }
    .Footer-link:hover .Footer-icon {
        top: 30%;
    }

    @-webkit-keyframes translate1 {
        0% {
            opacity: 0;
            margin-right: -7%;
        }
        20% {
            opacity: 1;
            margin-right: 0;
        }
        65% {
            opacity: 1;
            margin-right: 0;
        }
        85% {
            opacity: 0;
            margin-right: 10%;
        }
        100% {
            opacity: 0;
            margin-right: 10%;
        }
    }

    @keyframes translate1 {
        0% {
            opacity: 0;
            margin-right: -7%;
        }
        20% {
            opacity: 1;
            margin-right: 0;
        }
        65% {
            opacity: 1;
            margin-right: 0;
        }
        85% {
            opacity: 0;
            margin-right: 10%;
        }
        100% {
            opacity: 0;
            margin-right: 10%;
        }
    }
    @-webkit-keyframes translate2 {
        2% {
            opacity: 0;
            margin-left: 175%;
        }
        21% {
            opacity: 1;
            margin-left: 0%;
        }
        64% {
            opacity: 1;
            margin-left: 0%;
        }
        80% {
            opacity: 0;
            margin-left: -250%;
        }
        100% {
            opacity: 0;
            margin-left: -250%;
        }
    }
    @keyframes translate2 {
        2% {
            opacity: 0;
            margin-left: 175%;
        }
        21% {
            opacity: 1;
            margin-left: 0%;
        }
        64% {
            opacity: 1;
            margin-left: 0%;
        }
        80% {
            opacity: 0;
            margin-left: -250%;
        }
        100% {
            opacity: 0;
            margin-left: -250%;
        }
    }


</style>


<div class="Footer">
    <ul class="Footer-items">
        <li class="Footer-item"><a target="_blank" href="https://www.facebook.com/kosowwwa" class="Footer-link">
                <span class="Footer-icon fa fa-facebook"></span>
            </a>
        </li>
        <li class="Footer-item"><a target="_blank" href="https://www.instagram.com/kosowwwa" class="Footer-link">
                <span class="Footer-icon fa fa-instagram"></span>
            </a>
        </li>
        <li class="Footer-item"><a target="_blank" href="https://www.github.com/kosowwwa" class="Footer-link">
                <span class="Footer-icon fa fa-github"></span>
            </a>
        </li>
        <li class="Footer-item"><a target="_blank" href="https://www.twitter.com/kosowwwa" class="Footer-link">
                <span class="Footer-icon fa fa-twitter"></span>
            </a>
        </li>
        <li class="Footer-item"><a target="_blank" href="mailto:mail@support.al" class="Footer-link">
                <span class="Footer-icon fa fa-envelope"></span>
            </a>
        </li>
    </ul>
</div>