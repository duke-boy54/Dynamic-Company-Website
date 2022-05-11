@extends('admin.admin_master')

@section('admin')

 
    <div class="py-12">

        <div class="container">
            <div class="row">
               
            <a href="{{ route('about.add')}}" class="btn btn-info" style="margin-left: 900px">Add About</a>
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
                            About Section
                        </div>
                        <table class="table table-stripped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">S no</th>
                                    <th scope="col" width="10%">Tittle</th>
                                    <th scope="col" width="15%">Short Description</th>
                                    <th scope="col" width="25%">Long Description</th>
                                    <th scope="col" width="15%">actions</th>
                                </tr>
                            </thead>
                            @php($i = 1)
                                @foreach ($abouts as $about)
                                    <tbody>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->short_desc}}</td>
                                             <td>{{ $about->long_desc}}</td>
                                           
                                          
                                            <td>
                                                <a href="{{ url('about/edit/' . $about->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ url('about/delete/' . $about->id) }}"
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
