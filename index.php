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
    <title>Pet Shop</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
  <body class="bg-slate-200 min-h-svh relative flex flex-col text-white">
    <header class="text-2xl font-bold text-center bg-slate-400 p-3 w-full flex flex-col gap-y-2">
      <h1>Header</h1>
      <p class="bg-red-500 font-bold">Obs.: só teste</p>
      <nav>
        <ul class="flex gap-x-4 justify-center bg-black p-2">
          <li class="underline">
            <a href="view/about.php">Sobre</a>
          </li>
          <li class="underline">
            <a href="view/list.php">Lista</a>
          </li>
          <li class="underline">
            <a href="view/form.php">Formulário</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section
        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
      >
        <h2 class="text-4xl font-bold text-blue-900">Main</h2>
      </section>
    </main>
    <footer class="absolute bottom-0 bg-slate-400 p-3 text-center w-full">
      <h2>Footer</h2>
    </footer>
  </body>
</html>
