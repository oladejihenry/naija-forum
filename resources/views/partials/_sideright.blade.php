<?php
     $sum = DB::table('posts')->count();
?>
<?php
     $total = DB::table('users')->count();
?>
<div class="right-content">
    <div class="rc-card">
        <div class="rc-card-header">
            Naijaswift Statistics
        </div>
        @guest
        <div class="rc-body">
            <div class="stats" style="border-bottom: 1px solid rgb(234, 234, 234);">
                <p style="margin-bottom:15px;">Welcome, Guest</p>

            </div>
            <div class="stats">
                <p style="margin-bottom:15px;"><b>Memebers</b> - {{$total}}</p>
                <p style="margin-bottom:15px;">Topics - {{$sum}}</p>
            </div>
        </div>
        @endguest
        @auth
        <div class="rc-body">
            <div class="stats" style="border-bottom: 1px solid rgb(234, 234, 234);">
                <p style="margin-bottom:15px;">Welcome, {{ Auth::user()->username }}</p>

            </div>
            <div class="stats">
                <p style="margin-bottom:15px;"><b>Memebers</b> - {{$total}}</p>
                <p style="margin-bottom:15px;">Topics - {{$sum}}</p>
            </div>
        </div>
        @endauth
        </div>
        <div class="rc-card">
        <div class="rc-card-header">
            Other Info
        </div>
        <div class="rc-body">
        <p style="margin-bottom:15px;">General</p>
        <p style="margin-bottom:15px;">Politics</p>
        <p style="margin-bottom:15px;">Crime</p>
        <p style="margin-bottom:15px;">Romance</p>
        </div>
        </div>
        <div class="advert">
            <img class="ad-img" src="https://www.digitaldips.pk/wp-content/uploads/2018/04/Camon-i-Air-Pre-Launch-Image-1.jpeg" alt="">
        </div>
        <div class="advert">
        <img class="ad-img" src="https://www.brandessencenigeria.com/wp-content/uploads/2016/01/jumia-brandessence1.png" alt="">
    </div>
    <div class="advert">
        <img class="ad-img" src="https://sim-unlock.net/foto/11_37_18_apple_music.png" alt="">
    </div>
</div>