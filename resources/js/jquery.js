$(function () {
    // toggle appearnce of expand element on every products
    $(".image-wrapper").on("mouseenter", function () {
        $(this).find(".expand").removeClass("opacity-0");
    });

    $(".image-wrapper").on("mouseleave", function () {
        $(this).find(".expand").addClass("opacity-0");
    });

    // toggle height of filter section
    $(".filter").on("click", function () {
        const id = $(this).attr("id");
        const element = $(`[data-filter-name=${id}]`);
        element.toggleClass("max-h-0");
        element.toggleClass("max-h-[100rem]");
        let sign = element.hasClass("max-h-0") ? "+" : "-";
        $(this).children("[id=sign]").text(sign);
    });
});
