
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form action="" method="post" id="addProductForm">
        @csrf
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class='errorMsg'></div>
        <div class="form-group">
            <label for="name">Product Name : </label>
            <input type="text" class="form-control" name="name" placeholder="Inter product name" id="name">
        </div>
        <div class="form-group mt-3">
            <label for="price">Product Price : </label>
            <input type="text" class="form-control" name="price" placeholder="Inter product price" id="price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product">Save Product</button>
      </div>
    </div>
  </div>  
    </form>
  
</div>

