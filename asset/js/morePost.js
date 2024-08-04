let getHideTitle = document.getElementById("hide-title");
let morePostItems = document.querySelectorAll(".more-post-item");
let submitBtn = document.getElementById("submitBtn");

morePostItems.forEach(function (morePostItem) {
  morePostItem.addEventListener("mouseover", function () {
    getHideTitle.value = this.getAttribute("data-value");
    console.log(getHideTitle.value);
  });
});

const parentElements = document.getElementsByClassName("more-post-item");

for (let i = 0; i < parentElements.length; i++) {
  parentElements[i].addEventListener("click", function (event) {
    const target = event.target;
    const nestedChild = target.closest(".more-post-item");
    if (nestedChild) {
      document.getElementById("submitBtn").click();
    }
  });
}
