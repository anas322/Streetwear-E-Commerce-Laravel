import "./bootstrap";
import Alpine from "alpinejs";
import "flowbite";

window.Alpine = Alpine;

Alpine.start();

// draggable images
$(function () {
    $("#sortable").sortable({
        revert: true,
    });
    $("ul, li").disableSelection();

    $("#sortable").on("sortupdate", function (event, ui) {
        const element = event.currentTarget;
        $(element)
            .children()
            .each(function (index, element) {
                if (index == 0) {
                    $(this).find("span").remove(".thumbnail");
                    $(
                        '<span class="thumbnail absolute bottom-0 left-0 w-full py-2 bg-black/40 text-center text-white font-bold text-sm">First Thumbnail</span>'
                    ).appendTo(element);
                } else if (index == 1) {
                    $(this).find("span").remove(".thumbnail");
                    $(
                        '<span class="thumbnail absolute bottom-0 left-0 w-full py-2 bg-black/40 text-center text-white font-bold text-sm">Second Thumbnail</span>'
                    ).appendTo(element);
                } else {
                    $(this).find("span").remove(".thumbnail");
                }
            });
    });
});
window.addEventListener("name-updated", () => {});
