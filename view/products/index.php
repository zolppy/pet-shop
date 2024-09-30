<?php
require_once "model/category.php";
require_once "model/product.php";
?>

<head>
  <title>Pet Shop &dash; Produtos</title>
  <script src="/view/products/index.js" defer></script>
</head>

<main style="min-height: calc(100dvh - 130px - 80px)">
  <div class="mt-[130px] p-4 flex flex-col gap-y-8">
    <div class="flex flex-wrap gap-8 sm:justify-center">
      <section
        class="categories flex flex-col gap-y-8 min-w-[320px] w-full max-w-[420px]"
      >
        <h2 class="font-bold text-white text-2xl">Categoria</h2>
        <ul class="flex flex-wrap gap-4">
          <?php foreach (Category::all() as $category): ?>
          <li
            class="p-2 bg-[#57C7FF] text-[#0D0D0D] transition-colors duration-200 rounded-lg border border-[#57C7FF] hover:bg-[#57C7FF] hover:text-[#0D0D0D] hover:cursor-pointer"
          >
            <span class="hover:cursor-pointer"
              ><?= htmlspecialchars($category->name) ?></span
            >
          </li>
          <?php endforeach; ?>
        </ul>
        <a
          href="?controller=CategoriesController&method=index"
          class="min-w-[320px] w-full max-w-[420px] w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2"
        >
          <i class="bi bi-pencil-fill text-2xl"></i>
          <span>Editar categorias</span>
        </a>
      </section>
      <section
        class="add-product flex flex-col gap-y-8 min-w-[320px] w-full max-w-[420px]"
      >
        <h2 class="font-bold text-white text-2xl">Adicionar produto</h2>
        <form
          class="flex flex-col gap-y-4"
          action="?controller=ProductsController&method=save"
          method="post"
        >
          <div class="flex flex-col gap-y-2">
            <label for="name">Nome</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Nome do produto"
              required
              class="p-2 rounded-lg bg-inherit border"
            />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="SKU">SKU</label>
            <input
              type="text"
              name="SKU"
              id="SKU"
              placeholder="SKU do produto"
              required
              class="p-2 rounded-lg bg-inherit border"
            />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="price">Preço</label>
            <input
              type="number"
              name="price"
              id="price"
              placeholder="00.00"
              required
              min="0.1"
              max="99999"
              step="0.1"
              class="p-2 rounded-lg bg-inherit border"
            />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="image_url">URL da imagem</label>
            <input
              type="text"
              name="image_url"
              id="image_url"
              placeholder="URL da imagem do produto"
              required
              class="p-2 rounded-lg bg-inherit border"
            />
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="category_id">Categoria</label>
            <select
              name="category_id"
              id="category_id"
              required
              class="p-2 rounded-lg bg-inherit border bg-[#1E1E2C]"
            >
              <option value="" selected class="bg-[#1E1E2C]">Selecione</option>
              <?php foreach (Category::all() as $category): ?>
              <option value="<?= $category->id ?>" class="bg-[#1E1E2C]">
                <?= htmlspecialchars($category->name) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="flex flex-col gap-y-2">
            <label for="description">Descrição</label>
            <textarea
              name="description"
              id="description"
              placeholder="Descrição do produto"
              required
              class="p-2 rounded-lg bg-inherit border"
            ></textarea>
          </div>
          <button
            class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2"
            type="submit"
          >
            <i class="bi bi-plus-lg text-2xl"></i>
            <span>Adicionar produto</span>
          </button>
        </form>
      </section>
    </div>
    <section class="products flex flex-col gap-y-8">
      <h2 class="font-bold text-white text-2xl">Produtos</h2>
      <ul class="flex flex-wrap gap-4 justify-center sm:justify-start">
        <?php foreach (Product::all() as $product): ?>
        <li
          class="min-w-[320px] w-[90%] max-w-[420px] mx-auto rounded-[0.7rem] p-4 flex flex-col gap-y-4 border border-[#3D3D5C] bg-[#2A2A3B] sm:mx-0 sm:min-w-[220px] sm:w-[100%] sm:max-w-[300px]"
        >
          <p class="product-name font-bold">
            <?= htmlspecialchars($product->name) ?>
          </p>
          <img
            src="<?= htmlspecialchars($product->image_url) ?>"
            class="rounded-lg"
          />
          <p class="product-description text-[#C0C0C0]">
            <?= htmlspecialchars($product->description) ?>
          </p>
          <p>
            SKU:
            <span class="product-sku"
              ><?= htmlspecialchars($product->SKU) ?></span
            >
          </p>
          <p class="text-[#57C7FF]">
            R$
            <span class="product-price"
              ><?= htmlspecialchars($product->price) ?></span
            >
          </p>
          <div class="flex flex-col gap-2 w-full text-white">
            <button
              class="bg-red-500 p-1 rounded-lg hover:bg-red-600 transition-color duration-200 flex items-center justify-center gap-x-2"
            >
              <a
                href="?controller=ProductsController&method=destroy&id=<?= $product->id ?>"
              >
                <i class="bi bi-trash-fill text-2xl"></i>
                <span>Remover produto</span>
              </a>
            </button>
            <button
              class="edit-product w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2"
            >
              <i class="bi bi-pencil-fill text-2xl"></i>
              <span>Editar produto</span>
            </button>
          </div>
          <p class="product-category hidden">
            <?= htmlspecialchars($product->category_id) ?>
          </p>
        </li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>
  <dialog>
    <div
      class="fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 p-4 flex flex-col gap-y-4 bg-black text-[#E0E0E0] min-w-[320px] w-[90%] max-w-[420px] rounded-lg border border-[#3D3D5C] sm:top-[55%]"
    >
      <header class="flex justify-between items-center">
        <h3 class="font-bold text-white text-2xl">Editar produto</h3>
        <button class="hover:animate-spin">
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
            placeholder="Nome do produto"
            required
            class="p-2 rounded-lg bg-inherit border"
          />
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="SKU">SKU</label>
          <input
            type="text"
            name="SKU"
            id="SKU"
            placeholder="SKU do produto"
            required
            class="p-2 rounded-lg bg-inherit border"
          />
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="price">Preço</label>
          <input
            type="number"
            name="price"
            id="price"
            placeholder="00.00"
            required
            min="0.1"
            max="99999"
            step="0.1"
            class="p-2 rounded-lg bg-inherit border"
          />
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="image_url">URL da imagem</label>
          <input
            type="text"
            name="image_url"
            id="image_url"
            placeholder="URL da imagem do produto"
            required
            class="p-2 rounded-lg bg-inherit border"
          />
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="category_id">Categoria</label>
          <select
            name="category_id"
            id="category_id"
            required
            class="p-2 rounded-lg bg-inherit border bg-[#1E1E2C]"
          >
            <option value="" selectedclass="bg-[#1E1E2C]">Selecione</option>
            <?php foreach (Category::all() as $category): ?>
            <option value="<?= $category->id ?>" class="bg-[#1E1E2C]">
              <?= htmlspecialchars($category->name) ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="flex flex-col gap-y-2">
          <label for="description">Descrição</label>
          <textarea
            name="description"
            id="description"
            placeholder="Descrição do produto"
            required
            class="p-2 rounded-lg bg-inherit border"
          ></textarea>
        </div>
        <button
          type="submit"
          href="?controller=ProductsController&method=update&id=<?= $product->id ?>"
          method="post"
          class="bg-blue-500 p-2 rounded-lg transition-colors duration-200 hover:bg-blue-600"
        >
          Aplicar
        </button>
      </form>
    </div>
  </dialog>
</main>
