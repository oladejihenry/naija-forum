@foreach ($post->comments as $comment)
<div style="padding: 10px 0px;margin-bottom:20px; border-top: 1px solid #ececec;border-bottom: 1px solid #ececec;">
    <h5 class="card-title" style="font-size:15px;">RE: {{$post->subject}}</h5>
    <p style="color:#022B69;font-size: 15px;">{!! $comment->body !!}</p>
    <p style="color:#022B69"><small class="text-muted">{{$comment->created_at->format('M d, Y')}} by <em>{{$comment->user->name}}</em></small></p>
    <a href="#">(Modify)</a>
</div>
@endforeach