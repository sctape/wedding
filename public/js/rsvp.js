$(function(){
    //$(".num_guests_container").hide();
    //$("#guest-sub-form-original").hide();
    //
    //$("#rsvp-accept").click(function(e){
    //    $(".num_guests_container").fadeIn();
    //});
    //
    //$("#rsvp-accept").click(function(e){
    //    $(".num_guests_container").fadeIn();
    //});
    //
    //$("#num_guests").change(function(e){
    //    $(".guest-sub-form:visible").remove();
    //
    //    var numCopies = $(this).val();
    //
    //    for(var i=0; i< numCopies; i++) {
    //        var guestSubForm = $("#guest-sub-form-original").clone();
    //        $(".guest-sub-form:last").after(guestSubForm.fadeIn());
    //    }
    //});

    $('.accept-sprite').click(function(e){
        $(this).css('background-position', 'top');
        $(this).parents('tr').find('.rsvp-toggle').val(1);
        $(this).parents('tr').find('.decline-sprite').css('background-position', 'bottom');
    });

    $('.decline-sprite').click(function(e){
        $(this).css('background-position', 'top');
        $(this).parents('tr').find('.rsvp-toggle').val(0);
        $(this).parents('tr').find('.accept-sprite').css('background-position', 'bottom');
    });
});