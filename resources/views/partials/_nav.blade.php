<header>
    <a style="color:#7cc341" class="logo" href="/"><img src="" alt="Naijaswift Forum"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="#">Trending </a></li><p class="chip red">100</p>
            <li><a href="#">Recent</a></li><p class="chip orange">27</p>
            <li><a href="#">New</a></li><p class="chip green">40</p>
        </ul>
    </nav>
    @guest
    <div>
        <input class="search" type="text" placeholder="Search">
        <a class="cta2" href="/login">Login</a>
        <a class="cta" href="/register">Sign up</a>
    <p class="menu cta">Menu</p>
    </div>
    @endguest
    @auth
    <div>
    <input class="search" type="text" placeholder="Search">
    <a class="cta3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
    </form>
    </div>
    @endauth
    
</header>
<div class="overlay">
    <a class="close">&times;</a>
    <div class="overlay__content">
        <a href="#">Trending</a>
        <a href="#">Recent</a>
        <a href="#">Login/Signup</a>
        <input class="search" type="text" placeholder="Search">
    </div>
</div>

