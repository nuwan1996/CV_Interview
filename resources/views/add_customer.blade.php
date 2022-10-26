@extends ('layout')

@section('content-head')
    <title>Add Customer</title>
@endsection


@section('content-body')

<?php $code = "C0001"; ?>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-8">
    <div class="card card-plain">
      <div class="card-header">
        <h4 class="font-weight-bolder">Customer Registration</h4>
        <p class="mb-0">Enter the details of the customer to register</p>
      </div>
      <div class="card-body">
        <form role="form">
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" class="form-control" required>
          </div>
          <label class="form-label">Customer Code</label>
          <div class="input-group input-group-outline mb-3">
            
            <input type="text" class="form-control" required value="<?php echo $code; ?>" disabled>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Customer Address</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Customer Contact</label>
            <input type="number" class="form-control" required maxlength="10" minlength="10">
          </div>
          <div class="text-center">
            <button type="submit" value="Submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


@endsection