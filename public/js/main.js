$('.menuu').hide();
$('.fa-minus').hide()
$('.panel-body').hide();
$('.fa-moon').hide();

$('.nav-toggle').click(function() {
    $('.menuu').removeAttr('style');

    $('.menuu').css('height', $(window).height());
    $('.menuu').addClass('animate__animated animate__zoomInDown');
    $('.menuu').css('margin-bottom', '-33pc');

    $(this).hide();
    $('#cards').hide();

})


$('#close').click(function() {

    $('.menuu').hide();
    $(this).hide();
    $('.nav-toggle').show();
    $('#cards').show();

})

$('#exp_plus').click(function() {
    $('.panel-body').show();
    $(this).hide();
    $('.fa-minus').show()
});
$('#exp_minus').click(function() {
    $('.panel-body').hide();
    $(this).hide();
    $('.fa-plus').show()
});

$('.fa-sun').click(function() {
    $('body').css("background", "#f7f4f4");
    $('div#song-name').css("color", "#4c4949");
    $('div#artist-name').css("color", "#4c4949");
    $('#prev').css("color", "#4c4949");
    $('#play').css("color", "#4c4949");
    $('#next').css("color", "#4c4949");
    $('#fav').css("color", "#4c4949");
    $('.fa-chevron-right').css("color", "#4c4949");
    $(this).hide();

    $('.fa-moon').show();

});
$('.fa-moon').click(function() {
    $('body').removeAttr("style");
    $('div#song-name').removeAttr("style");
    $('div#artist-name').removeAttr("style");
    $('#prev').removeAttr("style");
    $('#play').removeAttr("style");
    $('#next').removeAttr("style");
    $('#fav').removeAttr("style");
    $('.fa-chevron-right').removeAttr("style");
    $(this).hide();

    $('.fa-sun').show();

});