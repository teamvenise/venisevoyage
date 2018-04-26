jQuery(document).ready (function(){
    var datepickerHandler = jQuery(".date-picker-wp");
    datepickerHandler.datepicker({
        dateFormat: "dd-mm-yy"
    });

    jQuery(".w50").parent().addClass("width50");
    jQuery(".wpcf7-submit").addClass("round-btn");
});