const updateBtn = document.querySelectorAll(".update-btn");
updateBtn.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault();

    const dialog = document.getElementById("dialog");
    dialog.classList.remove("hidden");
    dialog.classList.add("flex");
    setTimeout(() => {
      dialog.classList.add("opacity-100");
    }, 200);
  });
});

function hideModal() {
  const dialog = document.getElementById("dialog");
  dialog.classList.add("opacity-0");
  dialog.classList.remove("opacity-100");
  setTimeout(() => {
    dialog.classList.add("hidden");
    dialog.classList.remove("flex");
  }, 200);
}

document.getElementById("save-btn").addEventListener("click", (e) => {
  e.preventDefault();

  alert("not yet implemented");
});
