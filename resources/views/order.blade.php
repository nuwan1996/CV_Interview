@extends ('layout')

@section('content-head')
    <title>Place Order</title>
@endsection


@section('content-body')

<?php 
$order_no = "PO0001"; 
$product = "Tomato";
$price = 50;
?>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-8">
    <div class="card card-plain">
      <div class="card-header">
        <h4 class="font-weight-bolder">Place Order</h4>
      </div>
      <div class="card-body">
        <form role="form">
          <label class="form-label">Customer Name</label>
          <div class="input-group input-group-outline mb-3">
            <select class="form-control" name="cutomer" required>
            <option value="0" selected="selected" disabled="disabled">Select a customer</option>
            <option value=""></option></select>
          </div>
          <label class="form-label">Order Number</label>
          <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" disabled value="<?php echo $order_no; ?>">
          </div>
          
          <div class="container-fluid py-4">
            <div class="row">
              <div class="col-12">
                <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Products</h6>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0" id="ordertable">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                            
                          </tr>
                        </thead>
                        </table></div></div></div></div></div></div>


                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Product</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Quantity</label>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-group input-group-outline mb-3">
                                <select class="form-control" id="product01">
                                  <option value="<?php echo $product; ?>"><?php echo $product; ?></option></select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-group input-group-outline mb-3">
                                <input type="number" class="form-control" id="qty">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" data-target="infoToast" onclick="addFunction()">Add</button>
                          </div></div>

                <div class="text-center">
                  <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Order</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  function addFunction() {
    var table = document.getElementById("ordertable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = document.getElementById('product01').value;
    cell2.innerHTML = "<?php echo $price; ?>";
    cell3.innerHTML = document.getElementById('qty').value;
    cell4.innerHTML = parseInt(cell2) * parseInt(cell3);
  }
  </script>
@endsection