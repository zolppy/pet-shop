<header
  class="bg-[#0D0D0D] text-white p-4 h-[130px] flex flex-wrap gap-3 fixed top-0 left-0 w-full items-center sm:justify-between z-10 sm:px-8">
  <span class="flex gap-x-2 text-3xl">
    <h1 class="font-bold">Pet Shop</h1>
    <i class="bi bi-heart-fill"></i>
  </span>
  <ul class="flex sm:justify-end gap-x-2">
    <li>
      <a
        href="/pet-shop/"
        class="p-2 bg-inherit text-[#57C7FF] border border-[#57C7FF] transition-colors duration-200 rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Home</a>
    </li>
    <li>
      <a
        href="/pet-shop/view/about.php"
        class="p-2 bg-inherit text-[#57C7FF] border border-[#57C7FF] transition-colors duration-200 rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Sobre</a>
    </li>
    <li>
      <a
        href="/pet-shop/view/products.php"
        class="p-2 bg-inherit text-[#57C7FF] border border-[#57C7FF] transition-colors duration-200 rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Produtos</a>
    </li>
    <li>
      <a
        href="/pet-shop/view/contact-us.php"
        class="p-2 bg-inherit text-[#57C7FF] border border-[#57C7FF] transition-colors duration-200 rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Fale Conosco</a>
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