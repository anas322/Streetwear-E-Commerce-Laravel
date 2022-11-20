jQuery(function () {
    $(document).on("scroll", function () {
        const scrollHeight = window.pageYOffset;
        const navbar = $("#navbar");

        if (scrollHeight >= 300 || $("body").outerWidth() <= 640) {
            navbar.css("background-color", "#ffffff");
        } else {
            navbar.css("background-color", "transparent");
        }
    });
});
