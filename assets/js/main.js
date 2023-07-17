function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

$(document).ready(function () {
  var carrosel = document.querySelectorAll("div.owl-item");

  var numberInicial = 7;
  var elementoActiveInicial = carrosel[numberInicial];
  elementoActiveInicial.classList.add("principal");
  var next = document.querySelector(".owl-next");
  var prev = document.querySelector(".owl-prev");

  // el  = Array.from(carrosel);

  // el.forEach(function(element) {
  //     element.classList.remove('cloned')
  //     element.classList.add('active')
  //     element.classList.add('principal')

  //     console.log(element);
  // });
  next.addEventListener("click", () => {
    numberInicial++;
    elementoActiveInicial.classList.remove("principal");
    elementoActiveInicial = carrosel[numberInicial];
    console.log(elementoActiveInicial);
    elementoActiveInicial.classList.add("principal");
    console.log(numberInicial);
  });

  prev.addEventListener("click", () => {
    elementoActiveInicial.classList.remove("principal");
    numberInicial--;
    elementoActiveInicial = carrosel[numberInicial];
    console.log(elementoActiveInicial);
    elementoActiveInicial.classList.add("principal");
  });
});
