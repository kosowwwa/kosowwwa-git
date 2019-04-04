$( document ).ready(function() {
    $('.slideOne').on('click', function() {
        $('.hero').css('background-image', 'url("assets/img/alexandru-acea-582050-unsplash-min.jpg")');
        $('.slideOne').css('border-bottom', '5px solid #d1a74f');
        $('.slideTwo').css('border-bottom', '5px solid transparent');
        $('.slideThree').css('border-bottom', '5px solid transparent');
    })

    $('.slideTwo').on('click', function() {
        $('.hero').css('background-image', 'url("assets/img/emile-perron-190221-unsplash-min.jpg")');
        $('.slideTwo').css('border-bottom', '5px solid #d1a74f');
        $('.slideOne').css('border-bottom', '5px solid transparent');
        $('.slideThree').css('border-bottom', '5px solid transparent');
    })

    $('.slideThree').on('click', function() {
        $('.hero').css('background-image', 'url("assets/img/charles-deluvio-456501-unsplash-min.jpg")');
        $('.slideThree').css('border-bottom', '5px solid #d1a74f');
        $('.slideTwo').css('border-bottom', '5px solid transparent');
        $('.slideOne').css('border-bottom', '5px solid transparent');
    })

    $('.modal').modal({
        inDuration: 100,
        outDuration: 100
    });
});

