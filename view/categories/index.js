const editBtn = document.querySelector(".edit-btn");
const editCategoriesBtn = document.querySelector(".categories button");
const closeBtn = document.querySelector("dialog header button");
const editProductBtns = document.querySelectorAll(".edit-product");

function openModal() {
  const modal = document.querySelector("dialog");
  modal.showModal();
}

editBtn.addEventListener("click", (event) => {
  const modal = document.querySelector("dialog");
  const modalName = modal.querySelector("#name");
  const el = event.target.closest("li");

  const name = el.querySelector(".category-name").textContent;

  modalName.value = name;

  openModal();
});

closeBtn.addEventListener("click", () => {
  const modal = document.querySelector("dialog");
  modal.close();
});
