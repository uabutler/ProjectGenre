$(function ()
{
    $('.hintable').popup();
    $('.popup-action').popup
    ({
       inline: true,
       hoverable: true,
       delay:
           {
               show: 0,
               hide: 400
           }
    });
    $('.ui.dropdown').dropdown();
    $('.ui.rating.disabled').rating('disable');
    $('.ui.rating.ratable').rating();
});