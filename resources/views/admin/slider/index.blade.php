@extends('admin.admin_master')

@section('admin')

 
    <div class="py-12">

        <div class="container">
            <div class="row">
               
            <a href="{{ route('slider.add')}}" class="btn btn-info" style="margin-left: 900px">Add Slider</a>
                <br><br>
                <div class="col-md-12">
                    <div class="card">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif
                        <div class="card-header">
                            All Slider
                        </div>
                        <table class="table table-stripped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">S no</th>
                                    <th scope="col" width="25%">Slider Tittle</th>
                                    <th scope="col" width="15%">Description</th>
                                    <th scope="col" width="15%">Image</th>
                                    <th scope="col" width="15%">actions</th>
                                </tr>
                            </thead>
                            @php($i = 1)
                                @foreach ($sliders as $slider)
                                    <tbody>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->description}}</td>
                                           
                                            <td><img src="{{ asset($slider->image) }}" style="height:40px; width:70px">
                                            </td>
                                          
                                            <td>
                                                <a href="{{ url('slider/edit/' . $slider->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ url('slider/delete/' . $slider->id) }}"
                                                    onclick="return confirm('are you sure to delete')"
                                                    class="btn btn-danger">Delete</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                     
                        </div>
                    </div>

                </div>
            </div>



        </div>
    @endsection
