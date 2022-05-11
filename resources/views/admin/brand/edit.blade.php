@extends('admin.admin_master')

@section('admin')
    <a href="{{ route('all.brand')}}" class="btn btn-md btn-info" style="margin-left: 1100px">Back</a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <div class="py-12">

        <div class="container">
            <div class="row">


                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header">Edit Brand</div>
                        <div class="card-body">


                            <form action="{{ url('brand/update/' . $brands->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
                                <div class="form-group">
                                    <label for="brand_name">Update Brand Name:</label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name"
                                        value="{{ $brands->brand_name }}">

                                    @error('brand_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_name">Update Brand Image:</label>
                                    <input type="file" class="form-control" id="brand_image" name="brand_image"
                                        value="{{ $brands->brand_image }}">

                                    @error('brand_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($brands->brand_image) }}" style="width:300px; height:150px">
                                </div>

                                <button type="submit" class="btn btn-info " style="margin-left: 140px">Update Brand
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
