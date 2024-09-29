<main
  class="mt-[130px] py-4 flex flex-col gap-y-8"
  style="min-height: calc(100dvh - 130px - 80px)"
>
  <section
    class="flex flex-col gap-y-8 min-w-[320px] w-[90%] max-w-[640px] self-center border border-[#3D3D5C] p-4 rounded-lg"
  >
    <h2 class="font-bold text-white text-2xl">Fale Conosco</h2>
    <img
      src="../images/contact-us/dog.png"
      alt="Cachorro branco e marrom, com uma coleira preta, digitando em um teclado de laptop."
      title="Cachorro digitando."
      class="w-[100%] max-w-[420px] mx-auto"
    />
    <p>
      Tem alguma dúvida, sugestão ou quer saber mais sobre nossos produtos e
      serviços? Preencha o formulário abaixo e entraremos em contato o mais
      breve possível. Estamos aqui para ajudar você e seu pet!
    </p>
    <p class="font-bold">
      Os campos obrigatórios são seguidos por * (asterisco)
    </p>
    <form class="flex flex-col gap-y-4">
      <div class="flex flex-col gap-y-2">
        <label for="user-name">Nome completo*</label>
        <input
          type="text"
          id="user-name"
          placeholder="Informe seu nome completo."
          required
          class="p-2 bg-inherit rounded-lg border"
        />
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="user-email">E-mail*</label>
        <input
          type="text"
          id="user-email"
          placeholder="Informe seu e-mail."
          required
          class="p-2 bg-inherit rounded-lg border"
        />
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="user-tel">Telefone</label>
        <input
          type="tel"
          id="user-tel"
          placeholder="Informe seu número de telefone."
          class="p-2 bg-inherit rounded-lg border"
        />
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="user-subject">Assunto*</label>
        <select
          id="user-subject"
          required
          class="p-2 bg-inherit rounded-lg border"
        >
          <option value="" selected>Selecione</option>
          <option value="">Dúvidas sobre produtos</option>
          <option value="">Suporte com pedidos</option>
          <option value="">Sugestões</option>
          <option value="">Outros</option>
        </select>
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="user-message">Mensagem*</label>
        <textarea
          id="user-message"
          placeholder="Escreva sua mensagem detalhada."
          required
          class="p-2 bg-inherit rounded-lg border"
        ></textarea>
      </div>
      <button
        type="submit"
        class="w-full bg-blue-500 p-1 rounded-lg hover:bg-blue-600 transition-color duration-200 flex items-center justify-center gap-x-2"
      >
        <i class="bi bi-send-fill text-2xl"></i>
        <span>Enviar</span>
      </button>
    </form>
    <dialog>
      <div
        class="fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 p-4 flex flex-col gap-y-4 bg-black text-[#E0E0E0] min-w-[320px] w-[90%] max-w-[420px] rounded-lg border border-[#3D3D5C]"
      >
        <header class="flex justify-between items-center">
          <h3 class="font-bold text-white text-2xl">Enviado!</h3>
          <button class="hover:animate-spin">
            <i class="bi bi-x text-3xl"></i>
          </button>
        </header>
        <p>
          Obrigado por entrar em contato conosco! Sua mensagem foi enviada
          com sucesso e retornaremos o mais rápido possível.
        </p>
      </div>
    </dialog>
  </section>
</main>

<script>
  const form = document.querySelector("form");
  const closeModalBtn = document.querySelector("dialog button");

  const openModal = () => {
    const modal = document.querySelector("dialog");

    modal.showModal();
  };

  const closeModal = () => {
    const modal = document.querySelector("dialog");

    modal.close();
  };

  const cleanField = (textField) =>
    (textField.value = textField ? "" : textField);

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const nameInput = document.querySelector("#user-name");
    const emailInput = document.querySelector("#user-email");
    const telInput = document.querySelector("#user-tel");
    const subjectInput = document.querySelector("#user-subject");
    const messagetInput = document.querySelector("#user-message");

    cleanField(nameInput);
    cleanField(emailInput);
    cleanField(telInput);
    cleanField(subjectInput);
    cleanField(messagetInput);

    openModal();
  });

  closeModalBtn.addEventListener("click", closeModal);
</script>