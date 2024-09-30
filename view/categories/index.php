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
      <form class="flex flex-col gap-y-4" action="?controller=CategoriesController&method=save" method="post">
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
        <?php foreach(Category::all() as $category): ?>
          <li
          class="p-2 bg-inherit text-[#57C7FF] transition-colors duration-200 rounded-lg border border-[#57C7FF] flex justify-between items-center group hover:bg-[#57C7FF] hover:text-[#0D0D0D]"
          >
            <span class="hover:cursor-pointer"><?= htmlspecialchars($category->name) ?></span>
            <div>
              <button>
                <a href="?controller=CategoriesController&method=edit&id=<?=$category->id?>"><i class="bi bi-pencil-fill text-blue-500 text-2xl group-hover:text-[#0D0D0D]"></i></a>
              </button>
              <button>
                <a href="?controller=CategoriesController&method=destroy&id=<?=$category->id?>"><i class="bi bi-trash-fill text-red-500 text-2xl group-hover:text-[#0D0D0D]"></i></a>
              </button>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>
</main>