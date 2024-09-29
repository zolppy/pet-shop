const editCategoriesBtn = document.querySelector(".categories button");
const closeBtn = document.querySelector("dialog header button");

function openModal() {
  const modal = document.querySelector("dialog");

  modal.showModal();
}

editCategoriesBtn.addEventListener("click", () => {
  window.location.href = "/view/edit_categories.php";
});

closeBtn.addEventListener("click", () => {
  const modal = document.querySelector("dialog");

  modal.close();
});
