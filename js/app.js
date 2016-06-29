/**
 * Created by Jeranders on 24/06/2016.
 */
$(function () {
    $('[data-toggle="tooltip"]').tooltip()

    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        });
});

// Fonction pour les ancres avec bootstrap et navbarFixed

function scroll_if_anchor(href) {
    href = typeof(href) == "string" ? href : $(this).attr("href");

    var fromTop = 50;

    if(href.indexOf("#") == 0) {
        var $target = $(href);

        if($target.length) {
            $('html, body').animate({ scrollTop: $target.offset().top - fromTop });
            if(history && "pushState" in history) {
                history.pushState({}, document.title, window.location.pathname + href);
                return false;
            }
        }
    }
}

scroll_if_anchor(window.location.hash);
$("body").on("click", "a", scroll_if_anchor);