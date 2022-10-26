<?php
use App\Http\PostController;
?>

@extends ('layout')

@section('content-head')
    <title>Free Issues</title>
@endsection

@section('content-body')
<?php $product = array("Tomsato", "Potato", "Carrot"); ?>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-8">
    <div class="card card-plain">
      <div class="card-header">
        <h4 class="font-weight-bolder">Free Issues</h4>
      </div>
      <div class="card-body">
        <form role="form">
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Free Issue Label</label>
            <input type="text" class="form-control" name="label" required>
          </div>
          <label class="form-label">Type</label>
          <div class="input-group input-group-outline mb-3">
            <select class="form-control" name="type" required>
              <option value="0" selected="selected" disabled="disabled">Select Type</option>
              <option value="flat">Flat</option>
              <option value="multiple">Multiple</option></select>
          </div>
          <label class="form-label">Purchase Product</label>
          <div class="input-group input-group-outline mb-3">
            <select class="form-label" name="purchase" required id="purchase">
              <option value="0" selected="selected" disabled="disabled">Select Product</option>
              @foreach ($product as $product)
                  {{-- <option value="{{ $product -> $Product }}">{{ $product -> $Product }}</option> --}}
                  <option value="{{ $product }}">{{ $product }}</option>
              @endforeach
              </select>
          </div>
          <label class="form-label">Free Product</label>
          <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="free" id="free" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Purchase Quantity</label>
            <input type="number" class="form-control" name="purchase_qty" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Free Quantity</label>
            <input type="number" class="form-control" name="free_qty" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Lower Limit</label>
            <input type="number" class="form-control" name="lower" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Upper Limit</label>
            <input type="number" class="form-control" name="upper" required>
          </div>
          <div class="text-center">
            <button type="submit" value="Submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


@endsection