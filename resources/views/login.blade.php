<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4 habit-shadow-lg">
      <h1 class="text-4xl font-bold mb-4">
        Faça Login
      </h1>

      <p class="text-xl mb-4">
       Insira seus dados para acessar.
      </p>

      <form
        action="/login"
        method="POST"
      >
        @csrf


        <div class="flex flex-col gap-2 mb-2">
          <label for="email">
            Email
          </label>
          <input
            type="email"
            name="email"
            placeholder="email@email.com"
            class="bg-white p-2 @error('email') border-red-500 @enderror habit-shadow">
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
            class="bg-white p-2 border-2 habit-shadow @error('password') border-red-500 @enderror">
          <p class="text-red-500 text-sm">
            @error('password')
            {{ $message }}
            @enderror
          </p>
          <button
            type="submit"
            class="bg-habit-orange text-white font-bold p-2 habit-shadow-lg"
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
