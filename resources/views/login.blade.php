<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
      <h1 class="text-4xl font-bold mb-4">
        Registre-se
      </h1>

      <p class="text-xl mb-4">
        Preencha as informações para cadastrar seus hábitos
      </p>

      <form action="/login" method="POST" class="flex flex-col gap-4 mt-4">
        @csrf


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
          <button
            type="submit"
            class="bg-white border-2 p-2"
          >
            Entrar
          </button>
          </div>
      </form>

      <p class="text-center mt-2">
        Ainda não tem uma conta?
        <a href="{{ route('site.register') }}" class="underline">
          Registre-se
        </a>
      </p>

    </section>
  </main>
</x-layout>
