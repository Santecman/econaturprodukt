document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".eco-toggle").forEach(function (button) {

        button.addEventListener("click", function (e) {

            e.preventDefault();
            e.stopPropagation();

            const row = this.closest(".eco-category-row");
            const li = row.parentElement;
            const children = li.querySelector(":scope > .eco-children");

            if (!children) {
                return;
            }

            if (children.style.display === "block") {

                children.style.display = "none";

                this.classList.remove("open");

                this.setAttribute("aria-expanded", "false");

            } else {

                children.style.display = "block";

                this.classList.add("open");

                this.setAttribute("aria-expanded", "true");

            }

        });

    });

});