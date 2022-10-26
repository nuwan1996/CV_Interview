@extends ('layout')

@section('content-head')
    <title>Add Product</title>
@endsection


@section('content-body')

<?php $code = 'P0001'; ?>


<div class="row">
<div class="col-md-3"></div>
<div class="col-md-8">
    <div class="card card-plain">
      <div class="card-header">
        <h4 class="font-weight-bolder">Product Registration</h4>
        <p class="mb-0">Enter the details of the product to register</p>
      </div>
      <div class="card-body">
        <form role="form" action="add" method="POST">
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" required>
          </div>
          <label>Product Code</label>
          <div class="input-group input-group-outline mb-3">
            
            <input type="text" class="form-control" name="product_code" required value="<?php echo $code; ?>" disabled>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" required>
          </div>
          <div><label for="Expiry">Expiry Date</label></div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label"></label>
            <input type="date" class="form-control" name="date" required>
          </div>
          
          <div class="text-center">
            <button type="submit" value="Submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">ADD</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


@endsection