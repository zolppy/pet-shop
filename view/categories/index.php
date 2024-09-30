<head>
  <title>Pet Shop &dash; Editar Categorias</title>
  <script src="/view/categories/index.js" defer></script>
</head>

<main style="min-height: calc(100dvh - 130px - 80px)">
  <div
    class="mt-[130px] p-4 flex flex-wrap gap-8 mx-auto sm:justify-center sm:items-center"
  >
    <section
      class="flex flex-col gap-y-8 min-w-[320px] w-[90%] max-w-[420px] mx-auto sm:mx-0"
    >
      <h2 class="font-bold text-white text-2xl">Adicionar categorias</h2>
      <form
        class="flex flex-col gap-y-4"
        action="?controller=CategoriesController&method=save"
        method="post"
      >
        <div>
          <label for="name">Nome:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Nome da nova categoria"
            required
            class="border bg-inherit p-1 rounded-lg"
          />
        </div>
        <button
          type="submit"
          class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2"
        >
          <i class="bi bi-plus-lg text-2xl"></i>
          <span>Adicionar</span>
        </button>
      </form>
    </section>
    <section
      class="flex flex-col gap-y-8 min-w-[320px] w-[90%] max-w-[420px] mx-auto sm:mx-0"
    >
      <h2 class="font-bold text-white text-2xl">Categorias</h2>
      <ul class="flex flex-col gap-y-4">
        <?php foreach (Category::all() as $category): ?>
        <li
          class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-200 rounded-lg border border-[#57C7FF] flex justify-between items-center group hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
        >
          <span class="category-name hover:cursor-pointer"
            ><?= htmlspecialchars($category->name) ?></span
          >
          <div>
            <button class="edit-btn">
              <a
                href="?controller=CategoriesController&method=edit&id=<?= $category->id ?>"
                ><i
                  class="bi bi-pencil-fill text-blue-500 text-2xl group-hover:text-[#0D0D0D]"
                ></i
              ></a>
            </button>
            <button>
              <a
                href="?controller=CategoriesController&method=destroy&id=<?= $category->id ?>"
                ><i
                  class="bi bi-trash-fill text-red-500 text-2xl group-hover:text-[#0D0D0D]"
                ></i
              ></a>
            </button>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
      <dialog>
        <div
          class="fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 p-4 flex flex-col gap-y-4 bg-black text-[#E0E0E0] min-w-[320px] w-[90%] max-w-[420px] rounded-lg border border-[#3D3D5C] sm:top-[55%]"
        >
          <header class="flex justify-between items-center">
            <h3 class="font-bold text-white text-2xl">Editar categoria</h3>
            <button class="close-modal-btn hover:animate-spin">
              <i class="bi bi-x text-3xl"></i>
            </button>
          </header>
          <form method="dialog" class="flex flex-col gap-y-4">
            <div class="flex flex-col gap-y-2">
              <label for="name">Nome</label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Nome da categoria"
                required
                class="p-2 rounded-lg bg-inherit border"
              />
            </div>
            <button
              type="submit"
              href="?controller=CategoriesController&method=update&id=<?= $category->id ?>"
              method="post"
              class="bg-blue-500 p-2 rounded-lg transition-colors duration-200 hover:bg-blue-600"
            >
              Aplicar
            </button>
          </form>
        </div>
      </dialog>
    </section>
  </div>
</main>
