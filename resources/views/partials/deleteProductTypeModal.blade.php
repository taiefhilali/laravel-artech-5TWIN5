<div class="modal fade" id="deleteProductTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Catalog Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form  method="POST" action=" {{ url('/admin/deleteCatalog') }} ">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="catalog_delete_id" id="productType_id">
                    <h6>Are you sure you want to delete this catalog?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes, Delete!</button>
                </div>
            </form>
        </div>
    </div>
</div>
