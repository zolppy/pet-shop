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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
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
  <body class="bg-[#1E1E2C] text-[#E0E0E0]">
    <?php include_once "view/components/header.php" ?>
    <main class="mt-[130px] py-4 flex flex-col gap-y-8 gap-x-4 relative">
      <section>
        <ul class="flex flex-wrap gap-4 sm:justify-center">
          <li
              class="min-w-[320px] max-w-[420px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0"
            >
            <img
                src="images/home/pets.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <h2 class="text-xl text-white">Tudo para o Bem-Estar do Seu Pet</h2>
              <p class="text-[#C0C0C0]">
                Descubra uma seleção de produtos para manter seu pet saudável, feliz e bem cuidado. Rações, brinquedos, acessórios e muito mais, feitos com carinho para quem você ama.
              </p>
            </li>
            <li
              class="min-w-[320px] max-w-[420px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0"
            >
            <img
                src="images/home/foods.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <h2 class="text-xl text-white">Produtos Populares</h2>
              <p class="text-[#C0C0C0]">
                Veja nossos produtos mais vendidos e garantidos pelos nossos clientes. Tudo que você precisa em um só lugar.
              </p>
          </li>
            <li
              class="min-w-[320px] max-w-[420px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0"
            >
            <img
                src="images/home/doctor.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <h2 class="text-xl text-white">Cuidados e Dicas Essenciais</h2>
              <p class="text-[#C0C0C0]">
                Acompanhe nossas dicas de especialistas para garantir a saúde e o bem-estar do seu pet. Informação é a chave para um pet feliz e saudável.
              </p>
          </li>
            <li
              class="min-w-[320px] max-w-[420px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0"
            >
            <img
                src="images/home/customer.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <h2 class="text-xl text-white">Nossos Clientes Amam</h2>
              <p class="text-[#C0C0C0]">
                Veja o que nossos clientes têm a dizer. A satisfação de nossos pets e seus donos é nossa maior motivação.
              </p>
          </li>
            <li
              class="min-w-[320px] max-w-[420px] w-[90%] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0"
            >
            <img
                src="images/home/eco.jpg"
                alt=""
                title=""
                class="rounded-lg"
              />
              <h2 class="text-xl text-white">Compromisso com o Meio Ambiente</h2>
              <p class="text-[#C0C0C0]">
                Trabalhamos com produtos sustentáveis e de alta qualidade. O cuidado com o planeta também faz parte da nossa missão.
              </p>
          </li>
        </ul>
      </section>
    </main>
    <?php include_once "view/components/footer.php" ?>
  </body>
</html>