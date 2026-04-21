/**
 * MediGrowth Theme JavaScript
 */

(function () {
	"use strict";

	/**
	 * Handle Header Scroll
	 */
	function medigrowth_handleScroll() {
		const header = document.querySelector("header.site-header");
		if (!header) return;

		const headerHeight = header.offsetHeight;

		if (window.scrollY > headerHeight) {
			header.classList.add("stuck");
		} else {
			header.classList.remove("stuck");
		}
	}

	/**
	 * Initialize Submenu Toggle
	 */
	function medigrowth_initSubmenuToggle() {
		const submenuButtons = document.querySelectorAll(".wp-block-navigation-submenu__toggle");

		submenuButtons.forEach((button) => {
			const parentLi = button.closest(".wp-block-navigation-submenu");
			const submenu = parentLi.querySelector(".wp-block-navigation__submenu-container");

			if (!submenu) return;

			// Accessibility attributes
			button.setAttribute("aria-expanded", "false");

			button.addEventListener("click", function (event) {
				event.preventDefault();

				const isOpen = parentLi.classList.contains("is-menu-open");

				if (isOpen) {
					parentLi.classList.remove("is-menu-open");
					button.setAttribute("aria-expanded", "false");
				} else {
					parentLi.classList.add("is-menu-open");
					button.setAttribute("aria-expanded", "true");
				}
			});

			// Keyboard support (ENTER / SPACE)
			button.addEventListener("keydown", function (event) {
				if (event.key === "Enter" || event.key === " ") {
					event.preventDefault();
					button.click();
				}
			});
		});

		// Reset for desktop
		medigrowth_resetSubmenuOnDesktop();
	}

	/**
	 * Reset Submenu for Desktop
	 */
	function medigrowth_resetSubmenuOnDesktop() {
		if (!window.matchMedia("(max-width: 991px)").matches) {
			document.querySelectorAll(".wp-block-navigation-submenu").forEach((item) => {
				item.classList.remove("is-menu-open");
			});
		}
	}

	/**
	 * Initialize FAQ Accordion
	 */
	function medigrowth_initFaqAccordion() {
		document.querySelectorAll(".wp-block-details").forEach(function (detail) {
			const summary = detail.querySelector("summary");
			const content = summary.nextElementSibling;

			if (!summary || !content) return;

			const computedStyle = window.getComputedStyle(content);
			const marginTop = computedStyle.marginTop;

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
		});
	}

	/**
	 * Initialize Form Focus
	 */
	function medigrowth_initFormFocus() {
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
	}

	// DOM Ready
	document.addEventListener("DOMContentLoaded", function () {
		// Header scroll
		window.addEventListener("scroll", medigrowth_handleScroll);
		medigrowth_handleScroll();

		// Menu
		medigrowth_initSubmenuToggle();

		// FAQ
		medigrowth_initFaqAccordion();

		// Form
		medigrowth_initFormFocus();
	});

	// Resize
	window.addEventListener("resize", medigrowth_resetSubmenuOnDesktop);

})();