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

  const isEmpty = valuesToCheck.find(function (value) {

    const checkIfIsString = typeof event.target[value].value === "string";
    const checkIfIsEmpty = !event.target[value].value.trim()

    if (checkIfIsString && checkIfIsEmpty) {
      return true
    }
  })

  if (isEmpty) {
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

  const isEmpty = valuesToCheck.find(function (value) {

    const checkIfIsString = typeof event.target[value].value === "string";
    const checkIfIsEmpty = !event.target[value].value.trim()

    if (checkIfIsString && checkIfIsEmpty) {
      return true
    }
  })

  if (isEmpty) {
    event.preventDefault()
    alert("Por favor, preencha todos os campos!");
  }

}

// Modal - Página Promoções modal-page-promo
function onOffPromo() {
  document
    .querySelector("#modal-page-promo")
    .classList
    .toggle("hide")

  document
    .querySelector("body")
    .classList
    .toggle("hideScroll")

  document
    .querySelector("#modal-page-promo")
    .classList
    .toggle("addScroll")
}

// Modal - Página Pacotes a venda modal-page-packages-for-sale
function onOffPackSale() {
  document
    .querySelector("#modal-page-packages-for-sale")
    .classList
    .toggle("hide")

  document
    .querySelector("body")
    .classList
    .toggle("hideScroll")

  document
    .querySelector("#modal-page-packages-for-sale")
    .classList
    .toggle("addScroll")
}


/* Início Carrosel com botão */
/* const slider = document.querySelector(".items-carrosel");
const slides = document.querySelectorAll(".image-carrosel");
const button = document.querySelectorAll(".button-carrosel");

let current = Math.floor(Math.random() * slides.length);
let prev = current > 0 ? current - 1 : slides.length - 1;
let next = current < slides.length - 1 ? current + 1 : 0;

const update = () => {
  slides.forEach((it) => {
    it.classList.remove("active-carrosel");
    it.classList.remove("prev-carrosel");
    it.classList.remove("next-carrosel");
  });

  slides[current].classList.add("active-carrosel");
  slides[prev].classList.add("prev-carrosel");
  slides[next].classList.add("next-carrosel");
};

for (let i = 0; i < button.length; i++) {
  button[i].addEventListener("click", () => (i == 0 ? gotoPrev() : gotoNext()));
}

const gotoPrev = () =>
  current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);
const gotoNext = () =>
  current < slides.length - 1 ? gotoNum(current + 1) : gotoNum(0);

const gotoNum = (number) => {
  current = number;
  prev = current > 0 ? current - 1 : slides.length - 1;
  next = current < slides.length - 1 ? current + 1 : 0;

  update();
};

update(); */
/* Fim Carrosel com botão */

/* Início Carrosel com tempo */


document.getElementsByTagName("BODY")[0].onresize = function () { controlWidth() };

function controlWidth() {
  var widthText = outerWidth;
  document.getElementById("test").innerHTML = widthText;

  function carrosel() {
    $(function () {
  
      var numImages = 1;
      var MarginPadding = 1;
  
      var ident = 0;
      var count = ($('.items-carrosel .image-carrosel').length / numImages) - 1;
      var slide = (numImages * MarginPadding) + ($('.items-carrosel .image-carrosel img').outerWidth() * numImages);
  
      $('.forth').click(function () {
        if (ident < count) {
          ident++;
          $('.items-carrosel').animate({ 'margin-left': '-=' + slide + 'px' }, 600);
        }
      });
  
      $('.back').click(function () {
        if (ident >= 1) {
          ident--;
          $('.items-carrosel').animate({ 'margin-left': '+=' + slide + 'px' }, 600);
        }
      });
  
      function automatizar(segundos) {
        var back = null;
  
        var auto = setInterval(function () {
          if ($('.items-carrosel').css('margin-left') === '0px') {
            ident = '0';
          }
  
          if (ident < count && back === null) {
            ident++;
            $('.items-carrosel').animate({ 'margin-left': '-=' + slide + 'px' }, 600);
          } else {
            if (ident === 1) {
              back = null;
            } else {
              back = true;
            }
            ident--;
            $('.items-carrosel').animate({ 'margin-left': '+=' + slide + 'px' }, 600);
          }
  
          $('.forth, .back').click(function () {
            clearInterval(auto);
          });
        }, segundos * 1000);
      }
  
      automatizar(3);
    });
  };

  if (widthText) {
   /*  alert('Olá my friend'); */
    $('.active-carrosel').addClass('initial');
    $('.active-carrosel').removeClass('initial');
  } else {

  }
}




/* document.getElementsByTagName("BODY")[0].onresize = function redimensionar() { countResize() };

var x = 0;
function countResize() {
  var txt = x += 1;
  document.getElementById("test").innerHTML = txt;
} */

/* if (txt >= 1) {
  images = carrosel();
  redimensionar(images);
}
 */

/* Fim Carrosel com tempo */



/* Início Carrosel com tempo 2° versão */

/* document.querySelector(".items-carrosel")
.addEventListener("wheel", event => {
  if (event.deltaY > 0) {
    event.target.scrollBy(300, 0)
  } else {
    event.target.scrollBy(-300, 0)
  }
}) */

/* Fim Carrosel com tempo 2° versão */


/* Início Botão Topo */
/* Fim Botão Topo */
