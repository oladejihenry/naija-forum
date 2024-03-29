@extends('main')

@section('body')
<div class="app-content">
@include('partials._sideleft')
<div class="center-content">
    <div class="cc-card">
        <div class="cc-card-header">
            <div style="font-size:12px;font-weight:600;color:#000">{{now()->format('l, d F Y')}}</div>
        </div>
        <div class="cc-body post-p">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach 
                </ul>
            </div>
            <br>
            @endif
            <form action="{{ route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}
                @include('form.edit')
            </form>
        </div>
    </div>
</div>


@include('partials._sideright')
</div>
@endsection