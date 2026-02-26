<x-layout>
  <main class="py-10">
    <h1>
      Faça Login
    </h1>

    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
      <h1 class="text-4xl font-bold mb-4">
        Faça Login
      </h1>

      <p class="text-xl mb-4">
        Insira seus dados para acessar
      </p>

      <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col gap-4 mt-4">
        @csrf


        <div class="flex flex-col gap-2 mb-4">
          <label for="name">
            Nome
          </label>
          <input
            type="text"
            name="name"
            placeholder="Seu nome"
            class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
          <p class="text-red-500 text-sm ">
            @error('name')
              {{ $message }}
            @enderror
          </p>
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="email">
            Email
          </label>
          <input
            type="email"
            name="email"
            placeholder="email@email.com"
            class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">
          <p class="text-red-500 text-sm ">
            @error('email')
            {{ $message }}
            @enderror
          </p>
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label>
            Senha
          </label>
          <input
            type="password"
            name="password"
            placeholder="******"
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
          <p class="text-red-500 text-sm">
            @error('password')
            {{ $message }}
            @enderror
          </p>

          </div>
        <div class="flex flex-col gap-2 mb-4">
          <label>
            Confirme sua Senha
          </label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="******"
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
          <p class="text-red-500 text-sm">
            @error('password')
            {{ $message }}
            @enderror
          </p>
        </div>

        <button
          type="submit"
          class="bg-white border-2 p-2"
        >

          Cadastrar
        </button>

      </form>

      <p class="text-center mt-2">
        Já possui uma conta?
        <a href="{{ route('site.login') }}" class="underline">
          Faça login
        </a>
      </p>
    </section>
  </main>
</x-layout>
