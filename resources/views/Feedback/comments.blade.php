<div class="comment-input" id="comment-input-{{ $feedback->id }}" style="display: none;">
    <form method="POST" action="{{ route('comments.store', ['feedbackId' => $feedback->id]) }}" >
        @csrf
        <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
        <input type="text" id="comment-input-{{ $feedback->id }}" class="form-control" name="descriptionComment" style="background-color: #252525 !important; color: white !important;" placeholder="Reply">
        <button type="submit" class="btn btn-primary" class="btn btn-primary mt-3" id="show-more-btn" style=" border-color:#a81c51;background-color:#a81c51; color: #fff;">Submit Comment</button>
    </form>
</div>
  </div>


                </div>
<!-- end form for create comment -->


                                    <!--  view comment -->

<div class="view-comments-container" id="view-comments-container-{{ $feedback->id }}" style="display: none">
    @foreach($feedback->comments as $comment)
        <div class="profilei1r p-3" style="background-color: #252525; width: 1190px; height:130px" >
            <h6 class="col_light font_14">
                <span style="margin-bottom: 12px;" class="fw-bold">{{ $comment->dateComment }}</span>
                <br>
                <div id="comment-container-{{ $comment->id }}">
                <p id="comment-description-{{ $comment->id }}"  style="margin-top: 16px; font-size: 20px;">
    {{ $comment->descriptionComment }}
</p>

<br>


<!-- input for editing comment -->
<form method="POST" action="{{ route('comments.update', ['feedbackId' => $feedback->id, 'commentId' => $comment->id]) }}" class="update-comment-form " data-comment-id="{{ $comment->id }}">
    @csrf
    @method('PUT')
    <input type="text" class="edit-description-input d-none" id="edit-comment-description-{{ $comment->id }}" value="{{ $comment->descriptionComment }}" style="width: 1080px; background-color: #ffffff!important; height: 50px;  border: 1px solid #252525!important;">
</form>
<!-- end input for editing comment -->






                </div>
               <a href="#" class="edit-icon fas fa-edit" data-comment-id="{{ $comment->id }}" style="float: right; cursor: pointer;"></a>
            
            <!-- Delete icon -->
            <form method="POST" action="{{ route('comments.destroy', ['feedbackId' => $feedback->id, 'commentId' => $comment->id]) }}" style="display: inline;" class="delete-comment-form" data-feedback-id="{{ $comment->id }}">
                @csrf
                @method('DELETE')
                <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $comment->id }}" style="float: right; margin-right: 15px; cursor: pointer;"></a>
            </form>
                <br>
            </h6>
        </div>
    @endforeach
    
</div>
