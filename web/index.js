$(function () {
    $(".toggle").on("click", function () {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});

$(".upper").click(function () {
	// Adding a class to the upper list item to handle the icon animation and background change
	$(this).toggleClass("collapsed");

	var collapsedMenu = this.nextElementSibling;

	// If the submenu is already collapsed, hide
	if (collapsedMenu.style.maxHeight) {
		collapsedMenu.style.maxHeight = null;

		// Else, set its max-height to its scroll-height.
	} else {
		collapsedMenu.style.maxHeight = collapsedMenu.scrollHeight + "px";
	}
});