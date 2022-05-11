@extends('admin.admin_master')

@section('admin')
    <a href="{{ route('home.slider') }}" class="btn btn-md btn-info" style="margin-left: 1100px">Back</a>

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
                        <div class="card-header">Edit Slider</div>
                        <div class="card-body">


                            <form action="{{ url('slider/update/' . $sliders->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-10 offset-1">
                                    <div class="card card-default">
                                        <div class="card-header card-header-border-bottom">
                                            <h2>Basic Form Controls</h2>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="form-group">
                                                    <label for="sliderTittle">Slider Tittle</label>
                                                    <input type="text" class="form-control" id="sliderTittle" name="title"
                                                        placeholder="Enter tittle" value="{{ $sliders->title }}">

                                                </div>


                                                <div class="form-group">
                                                    <label for="description">Slider Description</label>
                                                    <textarea class="form-control" id="description" name="description"
                                                         rows="3">{{ $sliders->description}}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="SliderImage">Slider Image:</label>
                                                    <input type="text" class="form-control" id="image"
                                                        value="{{ $sliders->image }}" name="old_image">
                                                        <div class="form-group">
                                                            <img src="{{ asset($sliders->image) }}" style="width:300px; height:150px">
                                                        </div>

                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                                    <button type="submit" class="btn btn-primary btn-default">Update
                                                        Slider</button>

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
        </div>



    </div>
@endsection
