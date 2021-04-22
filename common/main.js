$(function ()
{
    $('.hintable').popup();
    $('.ui.dropdown').dropdown();
    $('#new-meeting-book').on('change', function() { 
        $("input[name='author']" ).val("George Orwell");
        $("input[name='isbn']" ).val("9781328869333");
        $("input[name='genre']" ).val("Science Fiction, Political fiction, Social science fiction, Dystopian Fiction");
        $("input[name='public-date']" ).val("06/08/1949");
     });
    $('.ui.rating.disabled').rating('disable');
    $('.ui.rating.ratable').rating();
});
