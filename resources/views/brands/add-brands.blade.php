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
              <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                  <!-- Custom tabs (Charts with tabs)-->
                  <div class="card">
                    <div class="card-header">
                      <h3>
                        @if(isset($editData))
                        Edit Brand
                        @else
                        Add brand
                        @endif
                        <a class="btn btn-success float-right" href="{{route('brands.view')}}"> <i class="fa fa-list"></i>View Brand </a>
                      </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{(@$editData)?route('brands.update',$editData->id):route('brands.store')}}" id="myform" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="name">Brand Name</label>
                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control form-group-sm" placeholder="Enter Brand Name">
                              <font style="color:red"> {{($errors->has('name'))?($errors->first('name')):''}}</font>
                          </div>

                       <div class="form-group col-md-3">
                            <label for="image">Logo</label>
                           <input type="file" name="image" class="form-control form-group-sm" id="image">
                      </div>


                    <div class="form-group col-md-3">
                  <img id="showImage" src="{{(!empty($editData->image))?url('upload/brand_images/'.$editData->image):url('upload/no-image.jpg')}}" style="width: 100px; height: 110px; border: 1px solid: #000;">
                     </div>


                       <div class="form-group col-md-2" style="padding-top:35px">
                           <input type="submit" class="btn btn-success btn-rounded" value="{{(@$editData)?'Update Brand':'Add Brand'}}">
                      </div>

                        </div>
                      </form>

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
