		$(document).ready(function(e){

/* Handle any form's submit event. */
    $("form").submit(function(e){

        e.preventDefault();                 /* Stop the form from submitting immediately. */
        var continueInvoke = true;          /* Variable used to avoid $(this) scope confusion with .each() function. */

        /* Loop through each form element that has the required="" attribute. */
        $("form input[required]").each(function(){

            /* If the element has no value. */
            if($(this).val() == ""){
                continueInvoke = false;     /* Set the variable to false, to indicate that the form should not be submited. */
            }

        });

        /* Read the variable. Detect any items with no value. */
        if(continueInvoke == true){
            $(this).submit();               /* Submit the form. */
        }

    });

});