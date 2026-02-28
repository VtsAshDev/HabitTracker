<header class="bg-white border-b-2 flex items-center justify-between p-4">
  <a href="{{'habits/index'}}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
   HT
  </a>
  <div>
    github
  </div>
  Esse e meu header

  @auth
    <form
      class="inline"
      action="{{route('auth.logout')}}"
      method="POST"
    >
      @csrf

      <button type="submit"  class=" p-2 habit-shadow-lg bg-habit-orange habit-btn">
        Sair
      </button>
    </form>
  @endauth

  @guest
    <div class="flex gap-2">
      <a href="{{ route('site.register') }}" class=" p-2 habit-shadow-lg habit-btn">
        Cadastre-se
      </a>
      <a href="/login" class=" p-2 habit-shadow-lg bg-habit-orange habit-btn">
        Logar
      </a>
    </div>

  @endguest
</header>
