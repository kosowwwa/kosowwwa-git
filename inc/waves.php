<style>
    /* Waves */

    .waves
    {
        width:100%;
        height:25vh;
        min-height:10em;
        position:relative;
        overflow:hidden;
        z-index: 2;
    }

    .wave
    {
        width:calc( 100% + 4em );
        height:100%;
        position:absolute;
        left:-2em;
        background:bottom center repeat-x;
        animation-iteration-count:infinite;
        animation-timing-function:linear;
    }

    /* Individual wave layers */

    .wave_1
    {
        animation-name:wave_1;
        animation-duration:3400ms;
        animation-delay:-1200ms;
        top:-1.0em;
        z-index:1;
        opacity:0.10;
        background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="246" height="2000" viewBox="0 0 246 2000"><path fill-rule="evenodd" clip-rule="evenodd" fill="#999" d="M0 2000c50.43 0 72.57-20.522 123-20.522 50.43 0 71.34 20.522 123 20.522V0H0v2000z"/></svg>');
        background-position:bottom left;
    }

    .wave_2
    {
        animation-name:wave_2;
        animation-duration:3200ms;
        animation-delay:-600ms;
        top:-2.0em;
        z-index:2;
        opacity:0.25;
        background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="307" height="2000" viewBox="0 0 307 2000"><path fill-rule="evenodd" clip-rule="evenodd" fill="#eee" d="M0 0h307v2000c-64.47 0-90.563-25.623-153.5-25.623C90.565 1974.377 62.935 2000 0 2000V0z"/></svg>');
        background-position:bottom right;
    }

    .wave_3
    {
        animation-name:wave_3;
        animation-duration:2800ms;
        animation-delay:-2400ms;
        top:-3.0em;
        z-index:3;
        opacity:0.50;
        background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="384" height="2000" viewBox="0 0 384 2000"><path fill-rule="evenodd" clip-rule="evenodd" fill="#eaeaea" d="M0 0h384v2000c-80.64 0-113.28-32.047-192-32.047S78.72 2000 0 2000V0z"/></svg>');
        background-position:bottom center;
    }

    .wave_4
    {
        animation-name:wave_4;
        animation-duration:2600ms;
        animation-delay:-1800ms;
        top:-4.0em;
        z-index:4;
        opacity:0.75;
        background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="480" height="2000" viewBox="0 0 480 2000"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M480 2000c-100.8 0-141.6-39.892-240-39.892S98.4 2000 0 2000V0h480v2000z"/></svg>');
        background-position:bottom left;
    }

    .wave_5
    {
        animation-name:wave_5;
        animation-duration:3000ms;
        animation-delay:-3000ms;
        top:-5.0em;
        z-index:5;
        opacity:0.90;
        background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="600" height="2000" viewBox="0 0 600 2000"><path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M0 2000c123 0 177-49.866 300-49.866S474 2000 600 2000V0H0v2000z"/></svg>');
        background-position:bottom right;
    }

    /* Wave animations */

    @keyframes wave_1
    {
        from { transform: rotate(0deg)   translatey(-0.61em) rotate(0deg)    ; }
        to   { transform: rotate(360deg) translatey(-0.61em) rotate(-360deg) ; }
    }

    @keyframes wave_2
    {
        from { transform: rotate(0deg)   translatey(-0.77em) rotate(0deg)    ; }
        to   { transform: rotate(360deg) translatey(-0.77em) rotate(-360deg) ; }
    }

    @keyframes wave_3
    {
        from { transform: rotate(0deg)   translatey(-0.96em) rotate(0deg)    ; }
        to   { transform: rotate(360deg) translatey(-0.96em) rotate(-360deg) ; }
    }

    @keyframes wave_4
    {
        from { transform: rotate(0deg)   translatey(-1.2em) rotate(0deg)    ; }
        to   { transform: rotate(360deg) translatey(-1.2em) rotate(-360deg) ; }
    }

    @keyframes wave_5
    {
        from { transform: rotate(0deg)   translatey(-1.5em) rotate(0deg)    ; }
        to   { transform: rotate(360deg) translatey(-1.5em) rotate(-360deg) ; }
    }


</style>

<div class="waves">
    <div class="wave wave_1"></div>
    <div class="wave wave_2"></div>
    <div class="wave wave_3"></div>
    <div class="wave wave_4"></div>
    <div class="wave wave_5"></div>
</div>