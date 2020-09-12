@extends('main')
<?php
$url = url()->current();
?>
@section('body')
@guest
            
    @if (Route::has('register'))
    
    @endif

    @else

    
	@endif
<div class="app-content">
<div class="post-create" style="text-align:center;">
    <button type="submit"><a href="/create/{{ $category->id }}" style="text-decoration:none;">Create New Topic</a></button>
</div>
<br>
@include('partials._sideleft')

<div class="center-content">
    <div class="cc-card">
        <div class="cc-card-header">
            <div style="font-weight:600;color:#9ee068">Latest {{ $category->name }}</div>
            <div style="font-size:12px;color:rgb(88, 88, 88)">{{ now()->format('l, d F Y')}}</div>
        </div>
        <div class="cc-body">
            @foreach($posts as $post)
            <a href="{{ route('post.show',$post->slug) }}">  <p style="margin-bottom:15px;"> {{$post->subject}} </p></a>
            @endforeach
        </div>
    </div>
</div>

@include('partials._sideright')

</div>
@endsection