function updateBook()
{
  $("input[name='author']" ).val("Lewis Carroll");
  $("input[name='isbn']" ).val("0486275434");
  $("input[name='genre']" ).val("Children, Fantasy, Adventure");
  $("input[name='public-date']" ).val("11/26/1865");
}

$(function ()
{
    $('.hintable').popup();

    $('.popup-action').popup
    ({
       inline: true,
       hoverable: true,
       delay: {show: 0, hide: 400}
    });

    $('.ui.dropdown').dropdown();
    $('#new-meeting-book').on('change', updateBook);
    $('.ui.rating.disabled').rating('disable');
    $('.ui.rating.ratable').rating();

    if (GET_MEETING)
    {
        $('#new-meeting-book').dropdown('set selected', 'aw');
        updateBook();
    }
});
