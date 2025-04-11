document.addEventListener("DOMContentLoaded", function () {

	/* Header on-scroll add class */
	window.addEventListener("scroll", handleScroll);
	handleScroll();

	/* Mobile Menu */
	initSubmenuToggle();

	/* FAQ Accordion Pattern start */
	document.querySelectorAll(".wp-block-details").forEach(function (detail) {
		let summary = detail.querySelector("summary");
		let content = summary.nextElementSibling;

		let computedStyle = window.getComputedStyle(content);
		let marginTop = computedStyle.marginTop;

		content.style.overflow = "hidden";
		content.style.transition = "height 0.35s ease, margin-top 0.35s ease";
		content.style.height = "0px";
		content.style.marginTop = "0px";

		setTimeout(() => {
			if (detail.hasAttribute("open")) {
				content.style.height = content.scrollHeight + "px";
				content.style.marginTop = marginTop;
				summary.classList.add("open");
				detail.classList.add("active");
			}
		}, 100);

		summary.addEventListener("click", function (event) {
			event.preventDefault();

			document.querySelectorAll(".wp-block-details").forEach(function (otherDetail) {
				if (otherDetail !== detail && otherDetail.open) {
					let otherSummary = otherDetail.querySelector("summary");
					let otherContent = otherSummary.nextElementSibling;

					otherSummary.classList.remove("open");
					otherContent.style.height = otherContent.scrollHeight + "px";
					setTimeout(() => {
						otherContent.style.height = "0px";
						otherContent.style.marginTop = "0px";
					}, 10);
					setTimeout(() => {
						otherDetail.open = false;
						otherDetail.classList.remove("active");
					}, 300);
				}
			});

			if (!detail.open) {
				detail.open = true;
				content.style.height = content.scrollHeight + "px";
				content.style.marginTop = marginTop;
				summary.classList.add("open");
				detail.classList.add("active");
			} else {
				summary.classList.remove("open");
				content.style.height = content.scrollHeight + "px";
				setTimeout(() => {
					content.style.height = "0px";
					content.style.marginTop = "0px";
				}, 10);
				setTimeout(() => {
					detail.open = false;
					detail.classList.remove("active");
				}, 300);
			}
		});

		// Resize event to adjust height dynamically
		window.addEventListener("resize", function () {
			if (detail.hasAttribute("open")) {
				content.style.height = "auto";
				this.setTimeout(() => {
					content.style.height = content.scrollHeight + "px";
				}, 20);
			}
		});
	});
	/* FAQ Accordion Pattern end */

	/* Form Focus */
	document.querySelectorAll(".contact-form .ff-el-input--content input, .contact-form .ff-el-input--content textarea").forEach((element) => {
		if (element.value.trim()) {
			element.parentElement.classList.add("focused");
		}

		element.addEventListener("focus", () => {
			element.parentElement.classList.add("focused");
		});

		element.addEventListener("blur", () => {
			if (element.value.trim()) {
				element.parentElement.classList.add("focused");
			} else {
				element.parentElement.classList.remove("focused");
			}
		});
	});
});


document.addEventListener("scroll", function onScroll() {
    if (window.scrollY > 100) {
        initSubmenuToggle();
        document.removeEventListener("scroll", onScroll);
    }
});

window.addEventListener("resize", initSubmenuToggle);

/*  All Functions */

/* Header on - scroll stuck class add */
function handleScroll() {
	let header = document.querySelector("header.site-header");
	let headerHeight = header.offsetHeight;

	if (window.scrollY > headerHeight) {
		header.classList.add("stuck");
	} else {
		header.classList.remove("stuck");
	}
}

/* mobile menu */
function initSubmenuToggle() {
    const submenuButtons = document.querySelectorAll(".wp-block-navigation-submenu__toggle");

    if (window.matchMedia("(max-width: 991px)").matches) {
        submenuButtons.forEach((button) => {
            const parentLi = button.closest(".wp-block-navigation-submenu");
            const submenu = parentLi.querySelector(".wp-block-navigation__submenu-container");

            if (!submenu) return;

            // Ensure submenu starts closed
            submenu.style.height = "0px";
            submenu.style.overflow = "hidden";
            submenu.style.transition = "height 0.35s ease";

            // Remove existing event listener by cloning the button
            const newButton = button.cloneNode(true);
            button.parentNode.replaceChild(newButton, button);

            newButton.addEventListener("click", function (event) {
                event.preventDefault();
                const isOpen = parentLi.classList.contains("is-menu-open");

                // Close all open submenus first
                document.querySelectorAll(".wp-block-navigation-submenu").forEach((submenuParent) => {
                    submenuParent.classList.remove("is-menu-open");
                    const sub = submenuParent.querySelector(".wp-block-navigation__submenu-container");
                    if (sub) sub.style.height = "0px";
                });

                // Toggle clicked submenu
                if (!isOpen) {
                    parentLi.classList.add("is-menu-open");
                    submenu.style.height = submenu.scrollHeight + "px";
                } else {
                    parentLi.classList.remove("is-menu-open");
                    submenu.style.height = "0px";
                }
            });
        });
    } else {
        // If window is resized to desktop mode, reset styles
        document.querySelectorAll(".wp-block-navigation-submenu").forEach((submenuParent) => {
            submenuParent.classList.remove("is-menu-open");
            const sub = submenuParent.querySelector(".wp-block-navigation__submenu-container");
            if (sub) {
                sub.style.height = "";
                sub.style.overflow = "";
            }
        });
    }
}

// document.addEventListener("DOMContentLoaded", initSubmenuToggle);