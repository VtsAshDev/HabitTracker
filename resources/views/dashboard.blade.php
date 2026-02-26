<x-layout>
  <main class="py-10">
    <h1>
      DashBoard
    </h1>

    @auth
        <p>
          Bem vindo {{ auth()->user()->name }}
        </p>

      <div>
        <h2 class="text-xl mt-4">
          Listagem dos Hábitos
        </h2>
        <ul class="flex flex-col gap-2">
          @forelse($habits as $habit)
            <div class="flex gap-2 items-center">
              <p class="font-bold text-xl">
                - {{ $habit->name }}
              </p>
              <span class="font-light text-md">
                [{{ $habit->habitLogs->count() }}]
              </span>
            </div>
            <li>

            </li>
          @empty
            <p>
              Ainda não há hábitos cadastrados
            </p>
            <a href="/habito/cadastrar" class="bg-white p-2 border-2">
              Cadastre um novo hábito agora
            </a>
          @endforelse
        </ul>
      </div>
    @endauth
  </main>
</x-layout>
