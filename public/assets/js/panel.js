/* Javascript file for panel events. */

// Close Alert
$(".close-alert").on("click", function () {
    $(this).parent().addClass("animate__fadeOutRight");
});

// Close Modal
$(".modal-header button").on("click", function () {
   $(this).parent().parent().parent().parent().toggle();
});

$(`.modal-footer button[type="button"]`).on("click", function () {
    $(this).parent().parent().parent().parent().parent().toggle();
});
