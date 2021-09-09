<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3>Product list
                    <a class="btn btn-sm btn-success float-right" href="{{route('brands.view')}}"> <i class="fa fa-plus-circle"></i> view Brands</a>
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">

                  <div class="table-responsive">
                  <table width="100%" id="example1" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Sl</th>
                          <th scope="col">Name</th>
                          <th scope="col">Selling Price</th>
                          <th scope="col">Buying Price</th>
                        </tr>
                      </thead>

                      <tbody>
                        Product::oderBy('id')->chunk(200,function($products){
                            @foreach($products as $key=> $product)
                        <tr>
                            <td> {{ $key+1 }}</td>
                            <td> {{ $product->name }}</td>
                            <td> {{ $product->selling_price }}</td>
                            <td>{{ $product ->buying_price }}</td>

                        </tr>
                        @endforeach

                });
                      </tbody>


                  </table>

                </div>

              </div>

              <!-- /.card -->

              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>

</body>
</html>
