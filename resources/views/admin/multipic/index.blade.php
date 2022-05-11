@extends('admin.admin_master')

@section('admin')

    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-group">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif

                        <table class="table table-stripped table-hovered table-bordered ">

                            <thead>
                                <tr>
                                    <th class="text-center" scope="col" width="5%">S No</th>
                                    <th class="text-center" scope="col" width="15%">Image</th>
                                    <th class="text-center" scope="col" width="15%">Action</th>

                                </tr>
                            </thead>
                            @php($i=1)
                            @foreach ($images as $multi)
                                <tbody>
                                <td>{{ $i++}}</td>

                                    <td>
                                        <div class="col-md-4 ">
                                            <div class="card">
                                                <img src="{{ asset($multi->image) }}" alt=""
                                                    style="height:70px; width:70px;">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-default " href="">Edit</a>
                                        <a class="btn btn-danger btn-default "
                                            href="{{ url('image/delete/' . $multi->id) }}">Delete</a>

                                    </td>



                                </tbody>
                            @endforeach

                        </table>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Multi Image</div>
                        <div class="card-body">


                            <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">
                                    <label for="image">Multi Image:</label>
                                    <input type="file" c lass="form-control" id="email" name="image[]" multiple="">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Image </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
