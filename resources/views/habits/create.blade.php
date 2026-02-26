<x-layout>
  <main class="py-10">
    <h1 class="font-bold text-4xl text-center mb-4">
      Cadastrar novo hábito
    </h1>
    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
      <form action="{{ route('habit.store') }}" class="flex flex-col gap-2" method="POST">
        @csrf

        <div class="flex flex-col gap-2 mb-4">
          <label>
            Nome do Hábito
          </label>
          <input
            type="text"
            name="name"
            placeholder="Ex: Ler 10 páginas"
            class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
          <p class="text-red-500 text-sm">
            @error('name')
              {{ $message }}
            @enderror
          </p>
          <button
            type="submit"
            class="bg-white border-2 p-2"
          >
            Cadastrar Hábito
          </button>
        </div>

      </form>
    </section>
  </main>
</x-layout>
