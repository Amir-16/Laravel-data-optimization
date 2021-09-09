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
                  <h3 class="text-left">Brand list
                    <a class="btn btn-success float-right" href="{{route('brands.add')}}"> <i class="fa fa-plus-circle"></i> Add Brand</a>
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead class="text-white" style="background-color:#003366">
                      <tr class="text-white">
                        <th>Sl</th>
                        <th>Brand Name</th>
                        <th>Logo</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allData as $key=>$brand)
                 <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$brand->name}}</td>
                       <td><img src="{{(!empty($brand->image))?url('upload/brand_images/'.$brand->image):url('upload/no-image.jpg')}}"
                             style="width: 50px;height: 60px;border: 1px solid #00000" alt="">
                           </td>
                       <td>
                         <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-sm btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                         <a href="{{route('brands.delete',$brand->id)}}" id="deleteBrand" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                       </td>
                  </tr>
                      @endforeach

                    </tbody>
                  </table>

                </div>




              </div>
              <!-- /.card -->

              <!-- /.card -->

            </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>

</body>
</html>
