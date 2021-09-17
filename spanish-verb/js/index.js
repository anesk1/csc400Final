
$(document).ready(function() {
    // var index_form, verb_type;

    $("#nav-title").click(function() {
        window.location = "index.php";
    });

    $("#index-next").submit(function() {
        window.location = "tense.php";
    });
});
