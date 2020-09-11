<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login - Naijaswift Forum</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/invalid.css')}}">
        <link rel="icon" href="{{asset('img/fav.ico')}}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            ul {
                list-style: none;
                padding: 0;
            }
            .inner {
                    padding-left: 1em;
                    overflow: hidden;
                    display: none;
                
                }
            .inner li {
                font-size: 11px;
                padding: 5px;
            }
            .inner:show {
                /*display: block;*/
                }
            a.toggle {
                    width: 100%;
                    display: block;
                    background: #ffffff;
                    color: #838383;
                    padding: 10px 0;
                    border-radius: 0.15em;
                    transition: background .3s ease;
                }
            a.toggle:hover {
               
            }
        </style>
    </head>
<body>

<header>
    <a style="color:#7cc341" class="logo" href="/"><h3>Naijaswift Forum</h3></a>
    <nav>
        <ul class="nav__links">
            <li><a href="#">Trending </a></li><p class="chip red">100</p>
            <li><a href="#">Recent</a></li><p class="chip orange">27</p>
            <li><a href="#">New</a></li><p class="chip green">40</p>
        </ul>
    </nav>
    <div>
        <input class="search" type="text" placeholder="Search">
        <a class="cta2" href="/login">Login</a>
        <a class="cta" href="/register">Sign up</a>
    <p class="menu cta">Menu</p>
    </div>
    
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

<div class="app-content">
    <div class="login-page">
        <div class="form">
            <form method="POST" class="login-form" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                 placeholder="Email" 
                 value="{{ old('username') ?: old('email') }}" required autocomplete="email" autofocus/>
                @if ($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    {{ $errors->first('username') ?: $errors->first('email') }}
                    <br>
                    </span>
                    
                @endif
                
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                placeholder="Password" required autocomplete="current-password" autofocus/>
                @if ('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('password') }}
                    </span>
                    <br>
                @endif
                <button>login</button>
                <p class="message">Not registered? <a href="/register">Create an account</a></p>
            </form>
        </div>
        </div>
</div>
<div class="footer">
    Naijaswift 2020
</div>
<script type="text/javascript" src="{{asset('js/mobile.js')}}"></script>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5eff351b1692982c192ff95b" type="text/javascript"  crossorigin="anonymous"></script>

<script>
    $('.toggle').click(function(e) {
        e.preventDefault();
    
        var $this = $(this);
    
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
</script>

</body>
</html>