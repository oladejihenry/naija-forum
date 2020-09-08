@extends('main')

@section('body')
<div class="app-content">
    @include('partials._sideleft')
    <div class="center-content">
        <div class="cc-card">
            <div class="cc-card-header">
                <div style="font-weight:600;color:#9ee068">Latest Posts</div>
                <div style="font-size:12px;color:rgb(88, 88, 88)">{{ now()->format('l, d F Y') }}</div>
            </div>
            <div class="cc-body">
                
                <a href="#">  <p style="margin-bottom:15px;">>> Buhari is the worst president out of nigeria <<</p></a>
               
            </div>
        </div>
    </div>

    @include('partials._sideright')

</div>
@endsection