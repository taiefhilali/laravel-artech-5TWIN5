<div class="tab-pane" id="profile">
    <div class="profilei row">
        <div class="col-md-12">
            <h5 class="mb-0">4 REVIEWS FOR OUR PRODUCT</h5>
        </div>
    </div>

    <div class="profile-reviews">
        @foreach($feedbacks as $index => $feedback)
            @if ($index < 5)
                <div class="profilei1 row mt-4">
                    <div class="col-lg-1 col-md-2 col-2">
                        <div class="profilei1l">
                            <img src="img/51.jpg" class="w-100" alt="abc">
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-10 ps-0 col-10">
                        <div class="profilei1r p-3">
                            <h6 class="col_light font_14">
                                <span class="fw-bold">{{ $feedback->name}}</span>  {{ $feedback->date}}
                                <span class="pull-right col_yell">
                                    <!-- Your star rating display code goes here -->
                                </span>
                            </h6>

                           


  <form method="POST" action="{{ route('feedback.destroy', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="delete-feedback-form" data-feedback-id="{{ $feedback->id }}">
    @csrf
    @method('DELETE')
    <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $feedback->id }}" style="float: right; cursor: pointer;"></a>
</form>
             

                            <br>


                            <p id="feedback-description-{{ $feedback->id }}">{{ $feedback->description }}</p>

                            <input type="text" class="edit-description-input d-none" id="edit-feedback-description-{{ $feedback->id }}" value="{{ $feedback->description }}">
                            <a href="#" class="comment-icon fas fa-comment" data-feedback-id="{{ $feedback->id }}" style="float: right; font-size: 20px;   cursor: pointer;"></a>
                            <a href="#" class="view-comments-icon fas fa-eye" data-feedback-id="{{ $feedback->id }}" style="float: left; cursor: pointer; margin-bottom: 10px; margin-left: 2px; font-size: 20px;"></a>
<br>
                        </div>

                        <!-- form for create comment -->

                        <div class="comment-input" style="display: none;">
    <form method="POST" action="{{ route('comments.store', ['feedbackId' => $feedback->id]) }}">
        @csrf
        <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
        <input type="text" id="comment-input-{{ $feedback->id }}" class="form-control" name="descriptionComment" style="background-color: #252525 !important; color: white !important;" placeholder="Reply">
        <button type="submit" class="btn btn-primary" class="btn btn-primary mt-3" id="show-more-btn" style="background-color: #a81c51; border-color:#a81c51; color: #fff;">Submit Comment</button>
    </form>
</div>



<!-- end form for create comment -->


                    </div>
                </div>



               
                <div class="view-comments-container" id="view-comments-container-{{ $feedback->id }}" style="display: none">
    @foreach($feedback->comments as $comment)
        <div class="profilei1r p-3">
            <h6 class="col_light font_14">
                <span style="margin-bottom: 12px;" class="fw-bold">{{ $comment->dateComment }}</span>
                <br>
                <p style="margin-top: 16px">
                    {{ $comment->descriptionComment }}
                </p>
            </h6>
             <!-- Delete form for each comment -->
        <form method="POST" action="{{ route('comments.destroy', ['feedbackId' => $feedback->id, 'commentId' => $comment->id]) }}"  style="display: inline;"   class="delete-comment-form" data-feedback-id="{{ $comment->id }}">
            @csrf
            @method('DELETE')
            <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $comment->id }}" style="float: right; cursor: pointer;"></a>

        </form>

        <br>
    </div>
    @endforeach
</div>







            @else
                
                  <div class="profilei1 row mt-4 d-none additional-reviews">
                    <div class="col-lg-1 col-md-2 col-2">
                        <div class="profilei1l">
                            <img src="img/51.jpg" class="w-100" alt="abc">
                        </div>
                    </div>
                    <div class="col-lg-11 col-md-10 ps-0 col-10">
                   
                        <div class="profilei1r p-3">
                            <h6 class="col_light font_14">
                                <span class="fw-bold">{{ $feedback->name}}</span>  {{ $feedback->date}}
                                <span class="pull-right col_yell">
                                </span>
                            </h6>

                            <div class="edit-feedback-icons">
                          

</div>


                               <form method="POST" action="{{ route('feedback.destroy', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="delete-feedback-form" data-feedback-id="{{ $feedback->id }}">
    @csrf
    @method('DELETE')
    <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $feedback->id }}" style="float: right; cursor: pointer;"></a>
</form>
  
                            <br>
                            <p id="feedback-description-{{ $feedback->id }}">{{ $feedback->description }}</p>

<input type="text" class="edit-description-input d-none" id="edit-feedback-description-{{ $feedback->id }}" value="{{ $feedback->description }}">
<a href="#" class="comment-icon fas fa-comment" data-feedback-id="{{ $feedback->id }}" style="float: right; font-size: 20px;   cursor: pointer;"></a>
<a href="#" class="view-comments-icon fas fa-eye" data-feedback-id="{{ $feedback->id }}" style="float: left; cursor: pointer; margin-bottom: 10px; margin-left: 2px; font-size: 20px;"></a>
<br>
</div>

<!-- form for create comment -->
<div class="comment-input" style="display: none;">
    <form method="POST" action="{{ route('comments.store', ['feedbackId' => $feedback->id]) }}">
        @csrf
        <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
        <input type="text" id="comment-input-{{ $feedback->id }}" class="form-control" name="descriptionComment" style="background-color: #252525 !important; color: white !important;" placeholder="Reply">
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</div>
<!-- end form for create comment -->



</div>
</div>

            @endif
        @endforeach
    </div>
    <button class="btn btn-primary mt-3" id="show-more-btn" style="background-color: #a81c51; border-color:#a81c51; color: #fff;">Show More</button>

    @include('Feedback.createfeedback')
    















    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var showMoreButton = document.getElementById('show-more-btn');
            var additionalReviews = document.querySelectorAll('.additional-reviews');

            if (showMoreButton) {
                showMoreButton.addEventListener('click', function () {
                    additionalReviews.forEach(function (review) {
                        review.classList.toggle('d-none');
                    });

                    if (showMoreButton.innerText === 'Show More') {
                        showMoreButton.innerText = 'Show Less';
                    } else {
                        showMoreButton.innerText = 'Show More';
                    }
                });
            }

//  $('.edit-feedback').on('click', function () {
//     var feedbackId = $(this).data('feedback-id');
//     var productId = $(this).data('product-id'); // Assuming you have data-product-id attribute

//     $('#feedback-description-' + feedbackId).hide();
//     $('#edit-feedback-description-' + feedbackId).removeClass('d-none').data('product-id', productId).val($('#feedback-description-' + feedbackId).text()).focus();
// });

// $('form.edit-feedback-form').on('submit', function (e) {
//     e.preventDefault();

//     var feedbackId = $(this).data('feedback-id');
//     var productId = $('#edit-feedback-description-' + feedbackId).data('product-id');

//     $.ajax({
//         url: $(this).attr('action'),
//         method: $(this).attr('method'),
//         data: {
//             _token: $(this).find('input[name="_token"]').val(),
//             _method: $(this).find('input[name="_method"]').val(),
//             description: $('#edit-feedback-description-' + feedbackId).val(),
//             productId: productId,
//             feedbackId: feedbackId
//         },
//         success: function (response) {
//             $('#feedback-description-' + feedbackId).text(response.description);
//             $('#edit-feedback-description-' + feedbackId).addClass('d-none');
//             $('#feedback-description-' + feedbackId).show();
//             alert('Feedback updated successfully!');
//         },
//         error: function (error) {
//             console.error(error);
//         }
//     });
// });


            $(document).on('click', 'form.delete-feedback-form .delete-icon', function (e) {
                e.preventDefault();

                var feedbackId = $(this).data('feedback-id');
                var deleteForm = $(this).closest('form');

                $.ajax({
                    url: deleteForm.attr('action'),
                    method: deleteForm.attr('method'),
                    data: {
                        _token: deleteForm.find('input[name="_token"]').val(),
                        _method: deleteForm.find('input[name="_method"]').val(),
                    },
                    success: function (response) {
                        deleteForm.closest('.profilei1r').remove();
                        alert('Feedback deleted successfully!');
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });


            $(document).on('click', 'form.delete-comment-form .delete-icon', function (e) {
                e.preventDefault();

                var commentId = $(this).data('comment-id');
                var deleteForm = $(this).closest('form');

                $.ajax({
                    url: deleteForm.attr('action'),
                    method: deleteForm.attr('method'),
                    data: {
                        _token: deleteForm.find('input[name="_token"]').val(),
                        _method: deleteForm.find('input[name="_method"]').val(),
                    },
                    success: function (response) {
                        deleteForm.closest('.profilei1r').remove();
                        alert('Feedback deleted successfully!');
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });


            $(document).ready(function() {
        $(".comment-icon").click(function() {
            $(".comment-input").toggle();
            $(".view-comments-container").hide(); // Hide view comments container when showing comment input
        });
        $(".view-comments-icon").click(function() {
            var feedbackId = $(this).data("feedback-id");
            $("#view-comments-container-" + feedbackId).toggle();
        });

        
    });
        })
    </script>


</div>