<x-layout>
  <main class="py-10 min-h-[calc(100vh-100px)] px-4">

    <nav>
      <ul class="flex gap-4 items-center">
        <li>
          <a href="{{route("habit.index")}}" class=" {{Route::is('habit.index') ? 'font-bold' : ''}} text-lg p-2 border-r-2 border-r-habit-orange pr-2">
            Hoje
          </a>
        </li>
        <li>
          <a href="{{route("site.dashboard")}}" class="p-2 border-r-2 border-r-habit-orange pr-2">
            Historico
          </a>
        </li>
        <li>
          <a href="{{route("site.dashboard")}}" class="p-2 border-r-2 border-r-habit-orange pr-2">
            Calendário
          </a>
        </li>
        <li>
          <a href="{{route("site.dashboard")}}" class="p-2 border-r-2 border-r-habit-orange pr-2">
            Gerenciar Hábitos
          </a>
        </li>
      </ul>
    </nav>


    <a href="{{ route('habit.create') }}" class="p-2 border-2 bg-white font-bold block">
      Adicionar
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
              <p class="font-light text-md">
                [{{ $habit->habitLogs->count() }}]
              </p>
              <a href="{{ route('habit.edit',$habit) }} " class="bg-white text-white p-1 border-2 hover:opacity-50 cursor-pointer">
                <x-icons.pencil/>
              </a>
              <form action="{{ route('habit.destroy', $habit) }}" method="POST">
                @csrf
                @method('DELETE')
              <button type="submit" class="bg-red-500 text-white p-1 border-2 hover:opacity-50 cursor-pointer">
                <x-icons.trash/>
              </button>
              </form>
            </div>
            <li>

            </li>
          @empty
            <p>
              Ainda não há hábitos cadastrados
            </p>
          @endforelse
        </ul>
      </div>
  </main>
</x-layout>
