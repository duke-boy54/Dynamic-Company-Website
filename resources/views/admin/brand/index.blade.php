 @extends('admin.admin_master')

 @section('admin')

     <div class="py-12">

         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="card">

                         @if (session('success'))
                             <div class="alert alert-success alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 <strong>{{ session('success') }}</strong>
                             </div>
                         @endif
                         <div class="card-header">
                             All Category
                         </div>
                         <table class="table table-stripped table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>Sno</th>
                                     <th>Brand Name</th>
                                     <th>Brand Image</th>
                                     <th>Created At</th>
                                     <th>actions</th>
                                 </tr>
                             </thead>
                             @php($i = 1)
                                 @foreach ($brands as $brand)
                                     <tbody>
                                         <tr>
                                             <td>{{ $i++ }}</td>
                                             <td>{{ $brand->brand_name }}</td>
                                             <td><img src="{{ asset($brand->brand_image) }}" style="height:40px; width:70px">
                                             </td>
                                             <td>{{ $brand->created_at->diffForHumans() }}</td>
                                             <td>
                                                 <a href="{{ url('brand/edit/' . $brand->id) }}" class="btn btn-info">Edit</a>
                                                 <a href="{{ url('brand/delete/' . $brand->id) }}"
                                                     onclick="return confirm('are you sure to delete')"
                                                     class="btn btn-danger">Delete</a>

                                             </td>
                                         </tr>
                                     </tbody>
                                 @endforeach
                             </table>
                             {{ $brands->links() }}
                         </div>
                     </div>

                     <div class="col-lg-4">
                         <div class="card">
                             <div class="card-header">Add Brand</div>
                             <div class="card-body">


                                 <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                                     @csrf
                                     <div class="form-group">
                                         <label for="brand_name">Brand Name:</label>
                                         <input type="text" class="form-control" id="brand_name" name="brand_name">

                                         @error('brand_name')
                                             <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                     </div>

                                     <div class="form-group">
                                         <label for="category_name">Brand Image:</label>
                                         <input type="file" class="form-control" id="email" name="brand_image">

                                         @error('brand_image')
                                             <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                     </div>

                                     <button type="submit" class="btn btn-primary">Add Brand </button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>



         </div>
     @endsection
