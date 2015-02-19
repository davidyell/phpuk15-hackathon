$(function () {
   
    $('#play-btn').click(function (e) {
        e.preventDefault();
        $('.card-wrapper').toggleClass('flip');
    });
    
});