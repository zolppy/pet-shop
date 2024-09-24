<header
  class="bg-[#0D0D0D] text-white p-4 h-[100px] flex flex-wrap justify-center gap-y-3 fixed top-0 left-0 w-full items-center sm:justify-between sm:px-8"
>
  <span class="flex gap-x-2 text-3xl min-w-[320px] w-[100%] max-w-[420px]">
    <h1 class="font-bold">Pet Shop</h1>
    <i class="bi bi-heart-fill"></i>
  </span>
  <ul class="flex min-w-[320px] w-[100%] max-w-[420px] sm:justify-end gap-x-1">
    <li>
      <a
        href="/pet-shop/"
        class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
        >Home</a
      >
    </li>
    <li>
      <a
        href="/pet-shop/view/about.php"
        class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
        >Sobre</a
      >
    </li>
    <li>
      <a
        href="/pet-shop/view/products.php"
        class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
        >Produtos</a
      >
    </li>
    <li>
      <a
        href="/pet-shop/view/form.php"
        class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
        >Formulário</a
      >
    </li>
  </ul>
  <script>
    window.addEventListener("DOMContentLoaded", () => {
      const pathName = window.location.pathname;
      const elements = document.querySelectorAll("a");
      const anchors = Object.values(elements);
      const anchor = anchors.find(
        (anchor) => anchor.getAttribute("href") === pathName
      );

      anchor?.classList.replace("bg-inherit", "bg-[#57C7FF]");
      anchor?.classList.replace("text-[#57C7FF]", "text-[#0D0D0D]");
    });
  </script>
  <?php ?>
</header>