@extends('admin.admin_master')

@section('admin')

<div class="col-lg-10 offset-1">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>About Section</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.about')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="sliderTittle">About Tittle</label>
                    <input type="text" class="form-control" id="AboutTittle" name="title" placeholder="Enter tittle">
                   
                </div>
              
               
                <div class="form-group">
                    <label for="short description">Short Description</label>
                    <textarea class="form-control" id="short description" name="short_desc" rows="3"></textarea>
                </div>
                
               <div class="form-group">
                   <label for="long description">Long Description</label>
                   <textarea class="form-control" name="long_desc" id="long description" rows="4">

                   </textarea>
               </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Add About</button>
                <a href="{{ route('home.about')}}" class="btn btn-default btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>


   
</div>

 

@endsection