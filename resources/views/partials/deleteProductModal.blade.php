<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Product Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form  method="POST" action=" {{ url('/admin/deleteProduct') }} ">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="product_delete_id" id="product_id">
                    <h6>Are you sure you want to delete this product?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes, Delete!</button>
                </div>
            </form>
        </div>
    </div>
</div>
