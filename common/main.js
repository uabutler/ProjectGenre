$(function ()
{
    $('.hintable').popup();
    $('.ui.dropdown').dropdown();
    $('#new-meeting-book').on('change', function() { 
        $("input[name='author']" ).val("Lewis Carroll");
        $("input[name='isbn']" ).val("0486275434");
        $("input[name='genre']" ).val("Children, Fantasy, Adventure");
        $("input[name='public-date']" ).val("11/26/1865");
     });
    $('.ui.rating.disabled').rating('disable');
    $('.ui.rating.ratable').rating();
});
