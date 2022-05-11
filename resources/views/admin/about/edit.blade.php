@extends('admin.admin_master')

@section('admin')
    <a href="{{ route('home.about') }}" class="btn btn-md btn-info" style="margin-left: 1100px">Back</a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <div class="py-12">

        <div class="container">
            <div class="row">


                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">Edit About</div>
                        <div class="card-body">


                            <form action="{{ url('about/update/' . $abouts->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-10 offset-1">
                                    <div class="card card-default">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="aboutTittle">About Tittle</label>
                                            <input type="text" class="form-control" id="AboutTittle" name="title" value="{{ $abouts->title}}"
                                                    placeholder="Enter tittle">

                                            </div>


                                            <div class="form-group">
                                                <label for="short description">Short Description</label>
                                            <textarea class="form-control" id="short description" name="short_desc" 
                                                    rows="2">
                                                    {{ $abouts->short_desc}}
                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="long description">Long Description</label>
                                            <textarea class="form-control" name="long_desc" id="long description" "
                                                    rows="4">
                                                    {{ $abouts->long_desc}}
                                                               </textarea>
                                            </div>

                                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                                <button type="submit" class="btn btn-primary btn-default">Update
                                                    About</button>
                                                <a href="{{ route('home.about') }}"
                                                    class="btn btn-default btn-primary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>

                </form>
            </div>
        </div>
    </div>




    </div>
@endsection
