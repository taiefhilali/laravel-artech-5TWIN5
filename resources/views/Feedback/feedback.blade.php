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
                   
                    <div class="col-lg-11 col-md-10 ps-0 col-10">
                        <div class="profilei1r p-3">
                            <h6 class="col_light font_14">
                                <span class="fw-bold">Siwar:</span>  {{ $feedback->date}}
                                <span class="pull-right col_yell">
                                    <!-- Your star rating display code goes here -->
                                </span>
                            </h6>

                        
                        
                            <a href="#" class="edit-icon fas fa-edit" data-feedback-id="{{ $feedback->id }}"  style="float: right;margin-left:15px; cursor: pointer;"></a>

                     <!-- feedback edit icon -->
  <form method="POST" action="{{ route('feedback.destroy', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="delete-feedback-form" data-feedback-id="{{ $feedback->id }}">
    @csrf
    @method('DELETE')
    <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $feedback->id }}" style="float: right; cursor: pointer;"></a>
</form>
             

                            <br>

                            <p id="feedback-description-{{ $feedback->id }}">{{ $feedback->description }}</p>
                            <form method="POST" action="{{ route('feedback.update', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="update-feedback-form " data-feedback-id="{{ $feedback->id }}">
                
    @csrf
    @method('PUT')
    <input type="text" class="edit-description-input d-none" id="edit-feedback-description-{{ $feedback->id }}" value="{{ $feedback->description }}" style="width: 850px; background-color: #ffffff!important; height: 50px;  border: 1px solid #252525!important;">
</form>
                            <a href="#" class="comment-icon fas fa-comment" data-feedback-id="{{ $feedback->id }}" style="float: right; font-size: 20px;   cursor: pointer;"></a>
                            <a href="#" class="view-comments-icon fas fa-eye" data-feedback-id="{{ $feedback->id }}" style="float: left; cursor: pointer; margin-bottom: 10px; margin-left: 2px; font-size: 20px;"></a>
<br>
                        </div>

                        <!--  comment section -->

                        @include('Feedback.comments')



                        <!--  comment section -->




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
<!-- feedback edit icon -->
<a href="#" class="edit-icon fas fa-edit" data-feedback-id="{{ $feedback->id }}"  style="float: right;margin-left:15px; cursor: pointer;"></a>
                       
                          <!-- feedback edit icon -->





                               <form method="POST" action="{{ route('feedback.destroy', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="delete-feedback-form" data-feedback-id="{{ $feedback->id }}">
                                 @csrf
                               @method('DELETE')
                    <a href="#" class="delete-icon fas fa-trash-alt delete-feedback" data-feedback-id="{{ $feedback->id }}" style="float: right; cursor: pointer;"></a>
                           
                </form>

                            <br>
                            <p id="feedback-description-{{ $feedback->id }}">{{ $feedback->description }}</p>
                            <form method="POST" action="{{ route('feedback.update', ['productId' => $product->id, 'feedbackId' => $feedback->id]) }}" class="update-feedback-form " data-feedback-id="{{ $feedback->id }}">
                
    @csrf
    @method('PUT')
    <input type="text" class="edit-description-input d-none" id="edit-feedback-description-{{ $feedback->id }}" value="{{ $feedback->description }}" style="width: 850px; background-color: #ffffff!important; height: 50px;  border: 1px solid #252525!important;">
</form>
                            <a href="#" class="comment-icon fas fa-comment" data-feedback-id="{{ $feedback->id }}" style="float: right; font-size: 20px;   cursor: pointer;"></a>
                            <a href="#" class="view-comments-icon fas fa-eye" data-feedback-id="{{ $feedback->id }}" style="float: left; cursor: pointer; margin-bottom: 10px; margin-left: 2px; font-size: 20px;"></a>
<br>
                        </div>

  <!--  comment section -->

  @include('Feedback.comments')



<!--  comment section -->





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
        var feedbackId = $(this).data('feedback-id');
        $("#comment-input-" + feedbackId).toggle(); 
        $(".view-comments-container").hide(); 
    });
        $(".view-comments-icon").click(function() {
            var feedbackId = $(this).data("feedback-id");
            $("#view-comments-container-" + feedbackId).toggle();
        });

        
    });


    // $('.edit-feedback').on('click', function () {
        
    //     var feedbackId = $(this).data('feedback-id');
    //     $('#feedback-description-' + feedbackId).hide();
    //     $('#edit-feedback-description-' + feedbackId).removeClass('d-none');
    //     $('#edit-feedback-description-' + feedbackId).focus();
    // });

    $('.edit-icon').on('click', function () {
  
        var feedbackId = $(this).data('feedback-id');
      $('#feedback-description-' + feedbackId).hide();
      $('#edit-feedback-description-' + feedbackId).removeClass('d-none');
      $('#edit-feedback-description-' + feedbackId).focus();
});


$('form.update-feedback-form').on('submit', function (e) {
    e.preventDefault(); 
    var feedbackId = $(this).data('feedback-id');
    var form = $(this); 

    $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        headers: {
            'Accept': 'application/json',
        },
        data: {
            _token: form.find('input[name="_token"]').val(),
            _method: form.find('input[name="_method"]').val(),
            description: $('#edit-feedback-description-' + feedbackId).val()
        },        success: function (response) {
            $('#feedback-description-' + feedbackId).text(response.feedback.description);

            $('#edit-feedback-description-' + feedbackId).addClass('d-none');
            $('#feedback-description-' + feedbackId).show().focus();

            $('#feedback-description-' + feedbackId).fadeIn(500);

            alert('Comment updated successfully!');
        },
        error: function (error) {
            if (error.responseJSON) {
                alert(error.responseJSON.message);
            } else {
                alert('An unknown error occurred.');
            }
        }
    });
});

document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault();
  // Submit the form using AJAX or another method
});






$('form.update-comment-form').on('submit', function (e) {
    e.preventDefault(); 

    var commentId = $(this).data('comment-id');
    var form = $(this); 

    $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        headers: {
            'Accept': 'application/json',
        },
        data: {
            _token: form.find('input[name="_token"]').val(),
            _method: form.find('input[name="_method"]').val(),
            descriptionComment: $('#edit-comment-description-' + commentId).val()
        },        success: function (response) {
            $('#comment-description-' + commentId).text(response.comment.descriptionComment);

            $('#edit-comment-description-' + commentId).addClass('d-none');
            $('#comment-description-' + commentId).show().focus();

            $('#comment-description-' + commentId).fadeIn(500);

            alert('Comment updated successfully!');
        },
        error: function (error) {
            if (error.responseJSON) {
                alert(error.responseJSON.message);
            } else {
                alert('An unknown error occurred.');
            }
        }
    });
});


$('.edit-icon').on('click', function () {
    var commentId = $(this).data('comment-id');
    $('#comment-description-' + commentId).hide();
    $('#edit-comment-description-' + commentId).removeClass('d-none');
    $('#edit-comment-description-' + commentId).focus();
});

    
    })
    </script>


</div>