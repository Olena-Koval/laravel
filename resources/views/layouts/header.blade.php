<div class="header">
      @auth
          <span>{{ Auth::user()->name }}</span>
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit">Logout</button>
          </form>
      @else
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
      @endauth
  </div>
