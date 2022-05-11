@extends('admin.admin_master')

@section('admin')

<div class="col-lg-10 offset-1">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Basic Form Controls</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="sliderTittle">Slider Tittle</label>
                    <input type="text" class="form-control" id="sliderTittle" name="title" placeholder="Enter tittle">
                   
                </div>
              
               
                <div class="form-group">
                    <label for="description">Slider Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="SliderImage">Slider Image:</label>
                    <input type="file" class="form-control" id="image" name="image">

                    @error('brand_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>


   
</div>

 

@endsection