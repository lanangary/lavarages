function navActive(x) {
  const boxes = document.querySelectorAll(".active");
  boxes.forEach((box) => {
    box.classList.remove("active");
    box.classList.remove("bg-gray-900");
  });
  x.classList.add("active");
  x.classList.add("bg-gray-900");
}

const toogleOpenMenuButton = document.getElementById('toogleOpenMenu').addEventListener("click",() => {
  var menu = document.getElementById("mobile-menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
})

const toogleCloseMenuButton = document.getElementById('toogleCloseMenu').addEventListener("click",() => {
  var menu = document.getElementById("mobile-menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
})

window.onscroll = function () {
  var navbar = document.getElementById("navbar");
  if (window.pageYOffset > 50) {
    navbar.classList.add("bg-white", "shadow-md");
  } else {
    navbar.classList.remove("bg-white", "shadow-md");
  }
};

function accordionCollapse(obj) {
  const tab = event.target.attributes["data-accordion-target"].value;

  const accordion = document.getElementById(tab);
  console.log(accordion);

  if (accordion.className !== "hidden") {
    accordion.classList.add("hidden");
  } else {
    accordion.classList.remove("hidden");
  }
}
