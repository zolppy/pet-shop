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
    <title>Pet Shop &dash; Sobre</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
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
    <main class="min-h-dvh">
      <section class="mt-[130px] p-4 flex flex-col gap-y-8">
        <h1 class="font-bold text-white text-2xl">Desenvolvedores</h1>
        <ul class="flex flex-wrap gap-4 justify-center">
          <li
            class="min-w-[320px] w-[90%] max-w-[420px] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0 sm:min-w-[220px] sm:w-[100%] sm:max-w-[300px]"
          >
            <h2 class="text-xl text-white">Gabriel Cavalcante</h2>
            <img
              src="../images/about/profile01.jpeg"
              alt="Um homem usando óculos de sol escuros e uma jaqueta preta da Adidas, com um emblema circular no peito da camisa. Ele está em frente a um prédio moderno com janelas amplas e de vidro, aparentando estar em um ambiente urbano."
              title="Gabriel Cavalcante"
              class="rounded-lg"
            />
            <p class="text-[#C0C0C0]">
              Desenvolvedor Front-end na
              <a href="https://www.eruda.com.br/" target="_blank" class="text-[#57C7FF]">Eruda</a>, desenvolvedor IA AWS
              na <a href="https://compass.uol/pt/home/" target="_blank" class="text-[#57C7FF]">Compass UOL</a> e graduando
              em Licenciatura em Computação no
              <a href="https://portal.ifba.edu.br/jacobina" target="_blank" class="text-[#57C7FF]"
                >IFBA &mdash; Instituto Federal da Bahia</a
              >.
            </p>
            <div class="flex gap-x-4 text-3xl justify-center">
              <a href="https://github.com/zolppy" target="_blank"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/zolppy" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </li>
          <li
            class="min-w-[320px] w-[90%] max-w-[420px] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0 sm:min-w-[220px] sm:w-[100%] sm:max-w-[300px]"
          >
            <h2 class="text-xl text-white">Rulian Cruz</h2>
            <img
              src="../images/about/profile02.jpeg"
              alt="Um homem com cabelo curto e cacheado, usando uma camiseta cinza, sentado em um ambiente de escritório com vários computadores ao fundo. Na tela de um dos monitores, há uma imagem de uma praia com palmeiras e um céu azul. O ambiente parece ser uma estação de trabalho com um colega ao fundo."
              title="Rulian Cruz"
              class="rounded-lg"
            />
            <p class="text-[#C0C0C0]">
              Desenvolvedor de Software na
              <a href="https://www.rebase.com.br/" target="_blank" class="text-[#57C7FF]">Rebase</a> e graduando em
              Licenciatura em Computação no
              <a href="https://portal.ifba.edu.br/jacobina" target="_blank" class="text-[#57C7FF]"
                >IFBA &mdash; Instituto Federal da Bahia</a
              >.
            </p>
            <div class="flex gap-x-4 text-3xl justify-center">
              <a href="https://github.com/ruliancruz" target="_blank"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/ruliancruz" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </li>
        </ul>
      </section>
    </main>
    <?php include_once "components/footer.php" ?>
  </body>
</html>
