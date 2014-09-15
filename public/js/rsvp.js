$(function(){
    $(".num_guests_container").hide();
    $("#guest-sub-form-original").hide();

    $("#rsvp-accept").click(function(e){
        $(".num_guests_container").fadeIn();
    });

    $("#rsvp-accept").click(function(e){
        $(".num_guests_container").fadeIn();
    });

    $("#num_guests").change(function(e){
        $(".guest-sub-form:visible").remove();

        var numCopies = $(this).val();

        for(var i=0; i< numCopies; i++) {
            var guestSubForm = $("#guest-sub-form-original").clone();
            $(".guest-sub-form:last").after(guestSubForm.fadeIn());
        }
    });
});