const editCategoriesBtn = document.querySelector(".categories button");
const closeBtn = document.querySelector("dialog header button");
const editProductBtns = document.querySelectorAll(".edit-product");

function openModal() {
  const modal = document.querySelector("dialog");
  modal.showModal();
}

for (const btn of editProductBtns) {
  btn.addEventListener("click", (event) => {
    const modal = document.querySelector("dialog");
    const modalName = modal.querySelector("#name");
    const modalSku = modal.querySelector("#SKU");
    const modalPrice = modal.querySelector("#price");
    const modalImageUrl = modal.querySelector("#image_url");
    const modalCategory = modal.querySelector("#category_id");
    const modalDesc = modal.querySelector("#description");
    const el = event.target.closest("li");

    const name = el.querySelector(".product-name").textContent;
    const sku = el.querySelector(".product-sku").textContent;
    const price = el.querySelector(".product-price").textContent.slice(3);
    const imageUrl = el.querySelector("img").getAttribute("src");
    const category = el.querySelector(".product-category").textContent;
    const description = el.querySelector(".product-description").textContent;

    modalName.value = name;
    modalSku.value = sku;
    modalPrice.value = price;
    modalImageUrl.value = imageUrl;
    modalCategory.value = category;
    modalDesc.value = description;

    openModal();
  });
}

closeBtn.addEventListener("click", () => {
  const modal = document.querySelector("dialog");
  modal.close();
});
