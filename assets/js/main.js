/**
 * Swasthika Theme JavaScript
 * Main JavaScript file for handling theme functionality
 */

// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
	// Initialize header scroll functionality
	window.addEventListener("scroll", handleScroll);
	handleScroll();

	// Initialize mobile menu functionality
	initSubmenuToggle();

	// Initialize FAQ accordion functionality
	initFaqAccordion();
});

// Initialize submenu toggle on scroll and resize
document.addEventListener("scroll", function onScroll() {
	if (window.scrollY > 100) {
		initSubmenuToggle();
		document.removeEventListener("scroll", onScroll);
	}
});

window.addEventListener("resize", initSubmenuToggle);

/**
 * ==========================================================================
 * Header Functionality
 * ==========================================================================
 */

/**
 * Handles header sticky behavior on scroll
 * Adds/removes 'stuck' class based on scroll position
 */
function handleScroll() {
	let header = document.querySelector("header.site-header");
	let headerHeight = header.offsetHeight;

	if (window.scrollY > headerHeight) {
		header.classList.add("stuck");
	} else {
		header.classList.remove("stuck");
	}
}

/**
 * ==========================================================================
 * Mobile Menu Functionality
 * ==========================================================================
 */

/**
 * Initializes mobile submenu toggle functionality
 * Handles opening/closing of submenus in mobile view
 */
function initSubmenuToggle() {
	const submenuButtons = document.querySelectorAll(".wp-block-navigation-submenu__toggle");

	if (window.matchMedia("(max-width: 991px)").matches) {
		submenuButtons.forEach((button) => {
			const parentLi = button.closest(".wp-block-navigation-submenu");
			const submenu = parentLi.querySelector(".wp-block-navigation__submenu-container");

			if (!submenu) return;

			// Set initial submenu state
			submenu.style.height = "0px";
			submenu.style.overflow = "hidden";
			submenu.style.transition = "height 0.35s ease";

			// Remove existing event listener by cloning the button
			const newButton = button.cloneNode(true);
			button.parentNode.replaceChild(newButton, button);

			// Add click event listener for submenu toggle
			newButton.addEventListener("click", function (event) {
				event.preventDefault();
				const isOpen = parentLi.classList.contains("is-menu-open");

				// Close all other open submenus
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
		// Reset styles for desktop view
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

/**
 * ==========================================================================
 * FAQ Accordion Functionality
 * ==========================================================================
 */

/**
 * Initializes FAQ accordion functionality
 * Handles smooth opening/closing of FAQ items
 */
function initFaqAccordion() {
	document.querySelectorAll(".wp-block-details").forEach(function (detail) {
		let summary = detail.querySelector("summary");
		let content = summary.nextElementSibling;

		// Get initial margin for smooth animation
		let computedStyle = window.getComputedStyle(content);
		let marginTop = computedStyle.marginTop;

		// Set initial content state
		content.style.overflow = "hidden";
		content.style.transition = "height 0.35s ease, margin-top 0.35s ease";
		content.style.height = "0px";
		content.style.marginTop = "0px";

		// Initialize open items
		setTimeout(() => {
			if (detail.hasAttribute("open")) {
				content.style.height = content.scrollHeight + "px";
				content.style.marginTop = marginTop;
				summary.classList.add("open");
				detail.classList.add("active");
			}
		}, 100);

		// Handle click events
		summary.addEventListener("click", function (event) {
			event.preventDefault();

			// Close other open items
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

			// Toggle clicked item
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

		// Handle window resize
		window.addEventListener("resize", function () {
			if (detail.hasAttribute("open")) {
				content.style.height = "auto";
				this.setTimeout(() => {
					content.style.height = content.scrollHeight + "px";
				}, 20);
			}
		});
	});
}

/**
 * ==========================================================================
 * Form Functionality
 * ==========================================================================
 */

// Initialize form field focus states
document.querySelectorAll(".contact-form .ff-el-input--content input, .contact-form .ff-el-input--content textarea").forEach((element) => {
	// Set initial state
	if (element.value.trim()) {
		element.parentElement.classList.add("focused");
	}

	// Handle focus events
	element.addEventListener("focus", () => {
		element.parentElement.classList.add("focused");
	});

	// Handle blur events
	element.addEventListener("blur", () => {
		if (element.value.trim()) {
			element.parentElement.classList.add("focused");
		} else {
			element.parentElement.classList.remove("focused");
		}
	});
});