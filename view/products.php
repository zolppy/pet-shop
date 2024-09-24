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
    <title>Pet Shop &dash; Produtos</title>
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
    <main>
      <div class="mt-[100px] py-4 flex flex-col gap-y-8">
        <section class="flex flex-col gap-y-8 ml-[5%]">
          <h1 class="font-bold text-white text-2xl ">Categoria</h1>
          <ul class="flex flex-wrap gap-4">
            <li
              class="p-2 bg-[#57C7FF] text-[#0D0D0D] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
              <span class="hover:cursor-pointer">Alimentos</span>
            </li>
            <li
              class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
              <span class="hover:cursor-pointer">Acessórios</span>
            </li>
            <li
              class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
              <span class="hover:cursor-pointer">Higiene e Cuidados</span>
            </li>
            <li
              class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
              <span class="hover:cursor-pointer">Saúde</span>
            </li>
            <li
              class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
            >
              <span class="hover:cursor-pointer">Transporte e Locomoção</span>
            </li>
          </ul>
        </section>
        <section class="flex flex-col gap-y-8 ml-[5%]">
          <h1 class="font-bold text-white text-2xl">Produtos</h1>
          <ul class="flex flex-wrap gap-4"></ul>
        </section>
      </div>
    </main>
    <?php include_once "components/footer.php" ?>
    <script>
      window.addEventListener("DOMContentLoaded", () => {
        const container = document.querySelector("section:nth-child(2) ul");
        
        for (let i = 0; i < 70; i++) {
          const product = document.createElement('li');
          const image = document.createElement('img');
          const description = document.createElement('p');
          const price = document.createElement('p');

          product.className = "min-w-[220px] max-w-[300px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0";

          image.setAttribute('src', '../images/products/product.jpg');
          image.setAttribute('alt', '');
          image.setAttribute('title', '');
          image.className = 'rounded-lg';

          description.className = 'text-[#C0C0C0]';
          description.textContent = 'Comedouro Ergonômico NF Pet Mr. Bigode Antiformigas Rosa para Gatos';

          price.className = 'text-[#57C7FF]';
          price.textContent = 'R$ 31,34';

          product.appendChild(image);
          product.appendChild(description);
          product.appendChild(price);
          container.appendChild(product);
        }
      })
    </script>
  </body>
</html>
