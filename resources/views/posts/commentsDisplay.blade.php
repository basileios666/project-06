@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
          <div class="single-comment justify-content-between d-flex">
          <div class="user justify-content-between d-flex">
          <div class="thumb" >
              <i class="fa fa-user" style="font-size:30px; width:15px;"></i>
            </div>
        <strong>{{ $comment->user->name }}</strong>
       
</div> 
</div><p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <div>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
       @include('posts.commentsDisplay', ['comments' => $comment->replies])
</div>
    </div>
@endforeach 