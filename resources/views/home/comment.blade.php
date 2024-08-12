@php
    $limit = 50;
    $commentBody = $comment->body;
    $isLong = strlen($commentBody) > $limit;
    $shortComment = substr($commentBody, 0, $limit);
@endphp

<div class="media">
    <a class="pull-left" href="#">
        @if($comment->user->user_image)
            <img src="{{ asset('users/' . $comment->user->user_image) }}" alt="User Image" class="img-responsive img-circle">
        @else
            <img src="{{ asset('img/user.png') }}" alt="Default User Image" class="img-responsive img-circle">
        @endif
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{ $comment->user->name }}</h4>
        <p>
            <span class="short-comment">{{ $shortComment }}</span>
            @if ($isLong)
                <span class="full-comment" style="display: none;">{{ $commentBody }}</span>
                <a href="javascript:void(0);" class="show-more">Show more</a>
            @endif
        </p>
        <ul class="list-unstyled list-inline media-detail pull-left">
            <li><i class="fa fa-calendar"></i> {{$comment->created_at}}</li>
        </ul>
        <ul class="list-unstyled list-inline media-detail pull-right">
            <li class=""><a href="#">Reply: {{ $comment->replies->count() }}</a></li>
        </ul>

       

        <form action="{{ route('comments.reply', $comment->id) }}" method="POST" class="reply-form">
            @csrf
            <input type="hidden" name="article_id" value="{{ $comment->article_id }}">
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <textarea class="form-control" name="body" rows="2" placeholder="Reply to this comment"></textarea>
            <div class="mar-top clearfix">
                <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Reply</button>
            </div>
        </form>

        @if($comment->replies->count())
            <ul class="media-list">
                @foreach($comment->replies as $reply)
                    @include('home.comment', ['comment' => $reply])
                @endforeach
            </ul>
        @endif
    </div>
</div>