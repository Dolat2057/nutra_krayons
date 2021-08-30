$(document).ready(function() {
    const arrayDir = ["row", "column", "row-reverse", "column-reverse"];
    const arrayAli = ["center", "end", "flex-end", "flex-start"];
    const arrayJus = ["center", "space-around", "flex-start", "flex-end"];

    //direction
    $(".field").change(function() {
        for (i = 0; i < 4; i++) {
            if ($(this).val() == i) {
                $(".text-effect").css("flex-direction", arrayDir[i]);
            }
        }
    });

    //align
    $(".field2").change(function() {
        for (i = 0; i < 4; i++) {
            if ($(this).val() == i) {
                $(".text-effect").css("align-items", arrayAli[i]);
            }
        }
    });

    //justify
    $(".field3").change(function() {
        for (i = 0; i < 4; i++) {
            if ($(this).val() == i) {
                $(".text-effect").css("justify-content", arrayJus[i]);
            }
        }
    });
});