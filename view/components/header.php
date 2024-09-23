<header class="bg-[#0D0D0D] text-white p-4 h-[100px] flex flex-wrap justify-center gap-y-3 fixed top-0 left-0 w-full items-center sm:justify-between sm:px-8">
  <span class="flex gap-x-2 text-3xl min-w-[320px] w-[100%] max-w-[420px]">
    <h1 class="font-bold">Pet Shop</h1>
    <i class="bi bi-heart-fill"></i>
  </span>
  <ul class="flex min-w-[320px] w-[100%] max-w-[420px] sm:justify-end gap-x-1">
    <li><a href="" class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Home</a></li>
    <li><a href="" class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Sobre</a></li>
    <li><a href="" class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Produtos</a></li>
    <li><a href="" class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-300 ease-in-out rounded-lg hover:bg-[#57C7FF] hover:text-[#0D0D0D]">Formulário</a></li>
  </ul>
  <script>
    const pathName = window.location.pathname;
    const shortPathName = pathName.slice(15);
    const anchors = document.querySelectorAll("a");

    window.addEventListener("DOMContentLoaded", () => {
      switch (shortPathName) {
        case "":
          anchors[0].classList.replace("bg-inherit", "bg-[#57C7FF]");
          anchors[0].classList.replace("text-[#57C7FF]", "text-[#0D0D0D]");
          break;
        case "about.php":
          anchors[1].classList.replace("bg-inherit", "bg-[#57C7FF]");
          anchors[1].classList.replace("text-[#57C7FF]", "text-[#0D0D0D]");
          break;
        case "list.php":
          anchors[2].classList.replace("bg-inherit", "bg-[#57C7FF]");
          anchors[2].classList.replace("text-[#57C7FF]", "text-[#0D0D0D]");
          break;
        case "form.php":
          anchors[3].classList.replace("bg-inherit", "bg-[#57C7FF]");
          anchors[3].classList.replace("text-[#57C7FF]", "text-[#0D0D0D]");
      }
    });
  </script>
  <?php ?>
</header>