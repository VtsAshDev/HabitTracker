<x-layout>
  <main class="py-10">
    <h1 class="font-bold text-4xl text-center mb-4">
      DashBoard
    </h1>

      <a href="{{ route('habit.create') }}" class="p-2 border-2 bg-white font-bold block">
        Cadastrar Novo Hábito
      </a>

    @session('success')
    <div class="flex">
      <p class="bg-green-100 border-2 border-green-400 text-green-700 p-3 mb-4">
        {{ session('success')}}
      </p>
    </div>
    @endsession

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
            <a href="route('habit.create')" class="bg-white p-2 border-2">
              Cadastre um novo hábito agora
            </a>
          @endforelse
        </ul>
      </div>
  </main>
</x-layout>
