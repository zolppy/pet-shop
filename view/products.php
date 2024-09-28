<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Encontre tudo o que seu pet precisa em nosso pet shop online! Oferecemos produtos de qualidade, como rações, brinquedos, acessórios e mais, com entrega rápida e preços acessíveis." />
  <meta
    name="keywords"
    content="Pet shop, produtos para pets, ração, acessórios para pets, brinquedos para animais, cuidados com animais, pet shop online, entrega rápida, loja de animais" />
  <meta name="author" content="Gabriel Cavalcante e Rulian Cruz" />
  <title>Pet Shop &dash; Produtos</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    rel="shortcut icon"
    href="../images/favicon.ico"
    type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {},
      },
      corePlugins: {
        preflight: true,
      },
    };
  </script>
</head>

<body class="bg-[#1E1E2C] text-[#E0E0E0]">
  <?php include_once "components/header.php" ?>
  <main style="min-height: calc(100dvh - 130px - 80px)">
    <div class="mt-[130px] p-4 flex flex-col gap-y-8">
      <section class="flex flex-col gap-y-8">
        <h2 class="font-bold text-white text-2xl">Categoria</h2>
        <ul class="flex flex-wrap gap-4"></ul>
      </section>
      <section class="flex flex-col gap-y-8">
        <h2 class="font-bold text-white text-2xl">Produtos</h2>
        <ul class="flex flex-wrap gap-4 justify-center sm:justify-start"></ul>
      </section>
    </div>
    <dialog>
      <div class="fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 p-4 flex flex-col gap-y-4 bg-transparent text-[#E0E0E0] backdrop-blur-xl min-w-[320px] w-[90%] max-w-[420px] rounded-lg border border-[#3D3D5C] sm:top-[55%]">
        <header class="flex justify-between items-center">
          <h3 class="font-bold text-white text-2xl">Editar produto</h3>
          <button class="hover:animate-spin">
            <i class="bi bi-x text-3xl"></i>
          </button>
        </header>
        <form method="dialog" class="flex flex-col gap-y-4">
          <div class="flex flex-col gap-y-2">
            <label for="image-url">URL da imagem</label>
            <input type="text" placeholder="Digite a URL da imagem" id="image-url" class="bg-inherit p-2 border rounded-lg" required>
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="description">Descrição</label>
            <textarea id="description" placeholder="Descrição do produto" class="bg-inherit p-2 border rounded-lg" required></textarea>
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="price">Preço</label>
            <input type="text" placeholder="Preço do produto" id="price" class="bg-inherit p-2 border rounded-lg" required>
          </div>
          <button type="submit" class="bg-blue-500 p-2 rounded-lg transition-colors duration-200 hover:bg-blue-600">Aplicar</button>
        </form>
      </div>
    </dialog>
  </main>
  <?php include_once "components/footer.php" ?>
  <script>
    const admin_mode = true;

    const modal = document.querySelector('dialog');

    function openModal() {
      const modal = document.querySelector('dialog');

      modal.showModal();
    }

    function products() {
      const container = document.querySelector("section:nth-child(2) ul");

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
      const father = document.querySelector("section:nth-child(1)");
      const container = document.querySelector("section:nth-child(1) ul");

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

      const btn = document.createElement('button');

      btn.className = 'min-w-[320px] w-[90%] max-w-[420px] w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-400 transition-color duration-200 flex items-center justify-center gap-x-2';

      btn.addEventListener('click', () => {
        window.location.href = 'edit-categories.php';
      });

      btn.innerHTML = `
          <i class="bi bi-pencil-fill text-2xl"></i>
          <span>Editar categorias</span>
        `;

      admin_mode ? father.appendChild(btn) : null;
    }

    products();
    categories();
  </script>
</body>

</html>