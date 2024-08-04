function navActive(x) {
  const boxes = document.querySelectorAll(".active");
  boxes.forEach((box) => {
    box.classList.remove("active");
    box.classList.remove("bg-gray-900");
  });
  x.classList.add("active");
  x.classList.add("bg-gray-900");
}

function toggleMenu() {
  var menu = document.getElementById("mobile-menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

function tabChanges(x) {
  if (x !== "all") {
    const rm = document.querySelectorAll(".tabs");
    rm.forEach((rm) => {
      rm.classList.remove("show");
      rm.classList.add("hidden");
    });

    var web = document.getElementById(x);
    web.classList.add("show");
    web.classList.remove("hidden");
  } else {
    const rm = document.querySelectorAll(".tabs");
    rm.forEach((rm) => {
      rm.classList.add("show");
      rm.classList.remove("hidden");
    });
  }
}

// function showProject(th) {
//   const pid = th.id;
//   const m = document.getElementsByName(pid)[0];

//   const hide = document.querySelectorAll(".project");
//   hide.forEach((hide) => {
//     hide.classList.add("hidden");
//   });

//   setTimeout(m.classList.remove("hidden"), 6000);
// }

// // Select the "project" element
// var spinner = document.getElementById("spinner");
// // Select the spinner element
// var navLeft = document.querySelector("#nav-left");
// // Add a load event listener to the "project" element
// var project = document.querySelector("#project");
// // Add a load event listener to the "project" element

// navLeft.addEventListener("click", function () {
//   // Show the spinner when the "project" element finishes loading
//   project.classList.add("hidden");
//   spinner.classList.remove("hidden");

//   // Hide the spinner after 1000 milliseconds (1 second)
//   setTimeout(function () {
//     spinner.classList.add("hidden");
//     project.classList.remove("hidden");
//   }, 1300);
// });


let getHideTitle = document.getElementById('hide-title');
let  parentElement = document.getElementById("portoParent");
let submitBtn = document.getElementById("submitBtn");


parentElement.addEventListener("mouseover", function(event) {

  const target = event.target;
  const nestedChild = target.closest(".portofolio");
  if (nestedChild) {
    getHideTitle.value = nestedChild.getAttribute("data-value");
      console.log(getHideTitle.value);
  }

});

parentElement.addEventListener("click", function(event) {

  const target = event.target;
  const nestedChild = target.closest(".portofolio");
  if (nestedChild) {
    submitBtn.click();
  }
});


console.log(parentElement);