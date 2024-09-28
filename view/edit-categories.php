<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Encontre tudo o que seu pet precisa em nosso pet shop online! Oferecemos produtos de qualidade, como rações, brinquedos, acessórios e mais, com entrega rápida e preços acessíveis."
    />
    <meta
      name="keywords"
      content="Pet shop, produtos para pets, ração, acessórios para pets, brinquedos para animais, cuidados com animais, pet shop online, entrega rápida, loja de animais"
    />
    <meta name="author" content="Gabriel Cavalcante e Rulian Cruz" />
    <title>Pet Shop &dash; Editar Categorias</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="shortcut icon"
      href="../images/favicon.ico"
      type="image/x-icon"
    />
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
      <div class="mt-[130px] p-4 flex flex-wrap gap-8 sm:justify-center sm:items-center">
        <section class="flex flex-col gap-y-8 min-w-[320px] w-[90%] max-w-[420px] mx-auto sm:mx-0">
          <h2 class="font-bold text-white text-2xl">Adicionar categorias</h2>
          <form class="flex flex-col gap-y-4">
            <div>
              <label for="category-name">Nome:</label>
              <input
                type="text"
                id="category-name"
                placeholder="Nome da nova categoria"
                required
                class="border bg-inherit p-1 rounded-lg"
              />
            </div>
            <button type="submit" class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-400 transition-color duration-200 flex items-center justify-center gap-x-2">
              <i class="bi bi-plus-lg text-2xl"></i>
              <span>Adicionar</span>
            </button>
          </form>
        </section>
        <section class="flex flex-col gap-y-8 min-w-[320px] w-[90%] max-w-[420px] mx-auto sm:mx-0">
          <h2 class="font-bold text-white text-2xl">Editar categorias</h2>
          <ul class="flex flex-col gap-y-4"></ul>
        </section>
      </div>
      <script>
        function categories() {
          const categories = [
            "Alimentos",
            "Acessórios",
            "Higiene e Cuidados",
            "Saúde",
            "Transporte e Locomoção",
          ];
          const container = document.querySelector("section:nth-child(2) ul");

          categories.forEach((category) => {
            const item = `
              <li
                class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-200 rounded-lg border border-[#57C7FF] flex justify-between items-center group hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
              >
                <span class="hover:cursor-pointer">${category}</span>
                <div>
                  <button>
                    <i class="bi bi-trash-fill text-red-500 text-2xl group-hover:text-[#0D0D0D]"></i>
                  </button>
                  <button>
                    <i class="bi bi-pencil-fill text-blue-500 text-2xl group-hover:text-[#0D0D0D]"></i>
                  </button>
                </div>
              </li>
            `;

            container.innerHTML += item;
          });
        }

        categories();
      </script>
    </main>
    <?php include_once "components/footer.php" ?>
  </body>
</html>