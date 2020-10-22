// Toggle para dispositivos menores
$(function () {
    $(".toggle").on("click", function () {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});

// Menu retrátil Destinos
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

// Modal - Sign Up
function onOffSignUp() {
    document
        .querySelector("#modal-signup")
        .classList
        .toggle("hide")

    document
        .querySelector("body")
        .classList
        .toggle("hideScroll")

    document
        .querySelector("#modal-signup")
        .classList
        .toggle("addScroll")
}

function checkFields(event) {
    
    const valuesToCheck = [
        "title",
        "category",
        "image",
        "description",
        "link",
    ]

    const isEmpty = valuesToCheck.find(function(value) {

        const checkIfIsString = typeof event.target[value].value === "string";
        const checkIfIsEmpty = !event.target[value].value.trim()
        
        if(checkIfIsString && checkIfIsEmpty) {
            return true
        }
    })

    if(isEmpty) {
        event.preventDefault()
        alert("Por favor, preencha todos os campos!");
    }

}

// Modal - Sign In
function onOffSignIn() {
    document
        .querySelector("#modal-signin")
        .classList
        .toggle("hide")

    document
        .querySelector("body")
        .classList
        .toggle("hideScroll")

    document
        .querySelector("#modal-signin")
        .classList
        .toggle("addScroll")
}

function checkFields(event) {
    
    const valuesToCheck = [
        "title",
        "category",
        "image",
        "description",
        "link",
    ]

    const isEmpty = valuesToCheck.find(function(value) {

        const checkIfIsString = typeof event.target[value].value === "string";
        const checkIfIsEmpty = !event.target[value].value.trim()
        
        if(checkIfIsString && checkIfIsEmpty) {
            return true
        }
    })

    if(isEmpty) {
        event.preventDefault()
        alert("Por favor, preencha todos os campos!");
    }

}