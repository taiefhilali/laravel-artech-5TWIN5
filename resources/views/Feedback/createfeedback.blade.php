<form action="{{ route('feedback.store', ['productId' => $product->id]) }}" method="post">
    @csrf
    <div class="profilei row mt-4">
        <div class="col-md-12">
            
            <h5 class="text-uppercase">Add a review</h5>
            <p>Your email address will not be published. Required fields are marked *</p>
            <!-- <h5 class="text-uppercase">Your Rating</h5> -->
            <!-- <div class="col-md-6">
                <h6 class="mb-3">Ratings <span class="text-danger">*</span></h6>
                <div id="star-rating"></div> -->
                <input type="hidden" name="ratings" id="ratings">

                <span class="col_yell">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </span>

            </div>
    </div>
    <div class="profilei2 row mt-3">
        <div class="col-md-12">
            <h6 class="mb-3">Your review <span class="text-danger">*</span></h6>
            <textarea class="form-control form_text" name="description"></textarea>
        </div>
        <div class="col-md-6">
            <h6 class="mb-3">Ratings <span class="text-danger">*</span></h6>
            <input class="form-control" type="text" name="ratings">
        </div>
    </div>
    <div class="profilei2 row mt-3">
        <div class="col-md-6">
            <h6 class="mb-3">Name <span class="text-danger">*</span></h6>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="col-md-6">
            <h6 class="mb-3">Email <span class="text-danger">*</span></h6>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
    </div>
    <div class="profilei2 row mt-3">
        <div class="col-md-12">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="customCheck1" name="save_info">
                <label class="form-check-label" for="customCheck1">Save my name and email in this browser for the next time I comment.</label>
            </div>
            <button type="submit" class="button ps-4 pe-4 pt-2 pb-2">SUBMIT</button>
        </div>
    </div>
</form>
