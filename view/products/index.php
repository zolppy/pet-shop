<head>
  <title>Pet Shop &dash; Produtos</title>
</head>

<main style="min-height: calc(100dvh - 130px - 80px)">
  <div class="mt-[130px] p-4 flex flex-col gap-y-8">
    <div class="flex flex-wrap gap-8 sm:justify-center">
      <section class="categories flex flex-col gap-y-8 min-w-[320px] w-full max-w-[420px]">
        <h2 class="font-bold text-white text-2xl">Categoria</h2>
        <ul class="flex flex-wrap gap-4"></ul>
      </section>
      <section class="add-product hidden flex-col gap-y-8 min-w-[320px] w-full max-w-[420px]">
        <h2 class="font-bold text-white text-2xl">Adicionar produto</h2>
        <form class="flex flex-col gap-y-4">
          <div class="flex flex-col gap-y-2">
            <label for="add-url">URL da imagem</label>
            <input
              type="text"
              name=""
              id="add-url"
              placeholder="URL da imagem do produto"
              required
              class="p-2 rounded-lg bg-inherit border" />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="add-name">Nome</label>
            <input
              type="text"
              name=""
              id="add-name"
              placeholder="Nome do produto"
              required
              class="p-2 rounded-lg bg-inherit border" />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="add-description">Descrição</label>
            <textarea
              name=""
              id="add-description"
              placeholder="Descrição do produto"
              required
              class="p-2 rounded-lg bg-inherit border"></textarea>
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="add-price">Preço</label>
            <input
              type="number"
              name=""
              id="add-price"
              placeholder="00.00"
              required
              min="0.1"
              max="99999"
              step="0.1"
              class="p-2 rounded-lg bg-inherit border" />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="add-category">Categoria</label>
            <select
              name=""
              id="add-category"
              required
              class="p-2 rounded-lg bg-inherit border">
              <option value="" selected>Selecione</option>
              <option value="">Alimentos</option>
              <option value="">Acessórios</option>
              <option value="">Higiene e Cuidados</option>
              <option value="">Saúde</option>
              <option value="">Transporte e Locomoção</option>
            </select>
          </div>
          <button
            class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2">
            <i class="bi bi-plus-lg text-2xl"></i>
            <span>Adicionar produto</span>
          </button>
        </form>
      </section>
    </div>
    <section class="products flex flex-col gap-y-8">
      <h2 class="font-bold text-white text-2xl">Produtos</h2>
      <ul class="flex flex-wrap gap-4 justify-center sm:justify-start"></ul>
    </section>
  </div>
  <dialog>
    <div
      class="fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 p-4 flex flex-col gap-y-4 bg-black text-[#E0E0E0] min-w-[320px] w-[90%] max-w-[420px] rounded-lg border border-[#3D3D5C] sm:top-[55%]">
      <header class="flex justify-between items-center">
        <h3 class="font-bold text-white text-2xl">Editar produto</h3>
        <button class="hover:animate-spin">
          <i class="bi bi-x text-3xl"></i>
        </button>
      </header>
      <form method="dialog" class="flex flex-col gap-y-4">
        <div class="flex flex-col gap-y-2">
          <label for="image-url">URL da imagem</label>
          <input
            type="text"
            placeholder="Digite a URL da imagem"
            id="image-url"
            class="bg-inherit p-2 border rounded-lg"
            required />
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="description">Descrição</label>
          <textarea
            id="description"
            placeholder="Descrição do produto"
            class="bg-inherit p-2 border rounded-lg"
            required></textarea>
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="price">Preço</label>
          <input
            type="text"
            placeholder="Preço do produto"
            id="price"
            class="bg-inherit p-2 border rounded-lg"
            required />
        </div>
        <button
          type="submit"
          class="bg-blue-500 p-2 rounded-lg transition-colors duration-200 hover:bg-blue-600">
          Aplicar
        </button>
      </form>
    </div>
  </dialog>
</main>

<script>
  const admin_mode = true;

  const closeBtn = document.querySelector("dialog header button");

  function openModal() {
    const modal = document.querySelector("dialog");

    modal.showModal();
  }

  function products() {
    const container = document.querySelector(".products ul");

    for (let i = 0; i < 10; i++) {
      const icons = `
            <div class="flex flex-col gap-2 w-full text-white">
              <button class="bg-red-500 p-1 rounded-lg hover:bg-red-600 transition-color duration-200 flex items-center justify-center gap-x-2">
                <i class="bi bi-trash-fill text-2xl"></i>
                <span>Remover produto</span>
              </button>
              <button class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2" onClick="openModal()">
                <i class="bi bi-pencil-fill text-2xl"></i>
                <span>Editar produto</span>
              </button>
            </div>
          `;
      const product = `
            <div
              class="min-w-[320px] w-[90%] max-w-[420px] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0 sm:min-w-[220px] sm:w-[100%] sm:max-w-[300px]"
            >
              <img
                src="../images/products/product.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <p class="text-[#C0C0C0]">
                Comedouro Ergonômico NF Pet Mr. Bigode Antiformigas Rosa para Gatos
              </p>
              <p class="text-[#57C7FF]">
                R$ 31,34
              </p>
              ${admin_mode ? icons : ""}
            </div>
          `;

      container.innerHTML += product;
    }
  }

  function categories() {
    const categories = [
      "Alimentos",
      "Acessórios",
      "Higiene e Cuidados",
      "Saúde",
      "Transporte e Locomoção",
    ];
    const father = document.querySelector(".categories");
    const container = document.querySelector(".categories ul");

    categories.forEach((category, idx) => {
      let item = `
          <li
            class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-200 rounded-lg border border-[#57C7FF] hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
          >
            <span class="hover:cursor-pointer">${category}</span>
          </li>
        `;

      if (idx === 0) {
        item = `
            <li
              class="p-2 bg-[#57C7FF] text-[#0D0D0D] transition-colors duration-200 rounded-lg border border-[#57C7FF] hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
            <span class="hover:cursor-pointer">${category}</span>
          </li>
          `;
      }

      container.innerHTML += item;
    });

    const btn = document.createElement("button");

    btn.className =
      "min-w-[320px] w-full max-w-[420px] w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2";

    btn.addEventListener("click", () => {
      window.location.href = "edit_categories.php";
    });

    btn.innerHTML = `
        <i class="bi bi-pencil-fill text-2xl"></i>
        <span>Editar categorias</span>
      `;

    admin_mode ? father.appendChild(btn) : null;
  }

  function addProduct() {
    const container = document.querySelector(".add-product");

    if (admin_mode) {
      container.classList.replace("hidden", "flex");
    }
  }

  function f() {
    if (!admin_mode) {
      const el1 = document.querySelector('.categories');
      const el2 = el1.closest('div');

      el1.classList.remove('max-w-[420px]')
      el2.classList.remove('sm:justify-center');
    }
  }

  closeBtn.addEventListener("click", () => {
    const modal = document.querySelector("dialog");

    modal.close();
  });

  categories();
  addProduct();
  products();
  f();
</script>