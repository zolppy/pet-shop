const form = document.querySelector('form[method="dialog"]');
const editCategorieBtns = document.querySelectorAll(".edit-btn");
const closeBtn = document.querySelector(".close-modal-btn");

function openModal() {
  const modal = document.querySelector("dialog");
  modal.showModal();
}

for (const btn of editCategorieBtns) {
  btn.addEventListener("click", (event) => {
    const modal = document.querySelector("dialog");
    const modalName = modal.querySelector("#name");
    const el = event.target.closest("li");

    const name = el.querySelector(".category-name").textContent;

    modalName.value = name.trim();

    openModal();
  });
}

closeBtn.addEventListener("click", () => {
  const modal = document.querySelector("dialog");
  modal.close();
});

form.addEventListener("submit", (event) => {
  event.preventDefault();
});
