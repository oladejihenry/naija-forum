@extends('main')

@section('body')
<div class="app-content">
    @include('partials._sideleft')
    <div class="center-content">
        <div class="cc-card">
            <div class="cc-card-header">
                <div style="font-size:12px;font-weight:600;color:#000">Today's Date: {{ now()->format('l, d F Y')}}</div>
            </div>
            <div class="cc-body single-p">
                <div class="single-border">
                    <h3 style="margin-bottom:15px; color:#000">{{$post->subject}}</h3>
                    <p>By {{$post->user->username}} | 
                        <em>Posted: {{ $post->getTimeAgo($post->created_at) }}</em> | 
                        <em><a href="{{route('category', ['category'=>$post->categories()->first()->slug])}}">{{ $post->categories()->first()->name }}</a></em>
                    </p>
                </div>
                <br><br>
                <?php
                  $fragments = explode('</p>', $post->body);

                    foreach($fragments as $fragment){
                            $blocks[] = $fragment . "</p>";
                    }

                    array_splice($blocks,2,0,'<div style="float: none; margin:10px 0 10px -12px; text-align:center;">  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Ads 2 -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:250px"
                        data-ad-client="ca-pub-6604422038703603"
                        data-ad-slot="5339561598"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>')
                ?>
                {!! $body = implode($blocks) !!}

                <br><br>
                @guest
                <div class="all-edit">
                    <div class="post-body">
                        <a href="/login" style="color:#022B69;">(Reply Post)</a>
                    </div>
                </div>
                @endguest
                @if(Auth()->check())
                    @if(auth()->user()->id == $post->user_id)
                        <div class="all-edit">
                            <div class="post-body">
                                <a href="{{route('post.edit',$post->slug)}}" style="color:#022B69;">(Edit Post)</a>
                                <a href="/contact-us" style="color:#022B69;">(Report Post)</a>
                            </div>
                        </div>
                        <br><br>
                    @endif
                @endif
                
            </div>
        </div>
        <div class="comment-section">
            <div class="comment-talk">
                <h3>Comments</h3>
            </div>
            <br><br>
            @include('comment.list', ['comments' => $post->comments, 'post_id' => $post->id])
            <h5 style="padding-bottom:9px;">Leave Comment</h5>
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
            @if(Auth()->check())
                <form method="POST" action="{{ route('comments.store') }}">
                    {{csrf_field()}}
                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    <textarea style="padding:10px;border:1px solid #f0f0f0;width: 100%;" name="body" id="editor" cols="30" rows="7">{{old('body')}}</textarea>
                    <script>
                        var textarea = document.getElementById('editor');

                        sceditor.create(textarea, {
                            emoticons:{
                            dropdown: {
                                ':)': '../emoticons/smile.png',
                                ':angel:': '../emoticons/angel.png',
                                ':alien:': '../emoticons/alien.png',
                                ':blink:': '../emoticons/blink.png',
                                ':angry': '../emoticons/angry.png',
                                ':D': '../emoticons/grin.png',
                                ':P': '../emoticons/tongue.png',
                                ':blush:': '../emoticons/blush.png',
                                ':(': '../emoticons/cwy.png',
                                '<3': '../emoticons/heart.png'
                            }
                        },
                            format: 'xhtml',
                            icons: 'monocons',
                            style: '../minified/themes/content/default.min.css'
                        });
                    </script>
                    <br>
                    <div class="post-submit" style="text-align: left;">
                        <button type="submit">Drop Comment</button>
                    </div>
                </form>
             @endif
            <br><br>
            
            
        </div>
    </div>
    @include('partials._sideright')
</div>

@endsection