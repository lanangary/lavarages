let selectService = document.getElementById("floating_service");
let selectServiceLabel = document.getElementById("floating_service_label");

console.log(selectService);

selectService.addEventListener("input", function (event) {
  if (event.target.id !== "floating_service") return;

  if (event.target.value !== "disabled") {
    selectServiceLabel.classList.add("hidden");
  } else {
    selectServiceLabel.classList.remove("hidden");
  }
});
