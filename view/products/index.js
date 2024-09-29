const editCategoriesBtn = document.querySelector(".categories button");
const closeBtn = document.querySelector("dialog header button");

function openModal() {
  const modal = document.querySelector("dialog");

  modal.showModal();
}

closeBtn.addEventListener("click", () => {
  const modal = document.querySelector("dialog");

  modal.close();
});
