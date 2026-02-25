<header class="bg-white border-b-2 flex items-center justify-between p-4">
  <div>
    logo
  </div>
  <div>
    github
  </div>
  Esse e meu header

  @auth
    <form action=" {{route('auth.logout')}}" method="POST" >
      @csrf

      <button type="submit" class="bg-white p-2 border-2">
        Sair
      </button>
    </form>
  @endauth

  @guest
      <a href="/login" class="bg-white p-2 border-2">
        Login
      </a>
  @endguest
</header>
