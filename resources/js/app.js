import "flowbite";
import "./bootstrap";
import Alpine from "alpinejs";
import { initFlowbite } from "flowbite";

window.Alpine = Alpine;

Alpine.start();

window.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("reinit-flowbite", function () {
        // Reinitialize Flowbite components
        initFlowbite();
    });

    // Remove duplicate modal backdrops
    setInterval(() => {
        document.querySelectorAll("body > div[modal-backdrop]");

        if (
            document.querySelectorAll("body > div[modal-backdrop]").length > 1
        ) {
            document
                .querySelectorAll("body > div[modal-backdrop]")
                .forEach((element, index) => {
                    if (index > 0) {
                        element.remove();
                    }
                });
        }
    }, 1000);
});
