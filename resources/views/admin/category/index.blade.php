@extends('admin.admin_master')

@section('admin')
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                                    <th>name</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            {{-- @php($i = 1) --}}
                            @foreach ($categories as $category)
                                <tbody>
                                    <tr>
                                        <td>{{ $categories->firstItem() + $loop->index }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('category/edit/' . $category->id) }}"
                                                class="btn btn-info">Edit</a>
                                            <a href="{{ url('category/delete/' . $category->id) }}"
                                                class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{-- {{ $categories->links() }} --}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">


                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name">Category Name:</label>
                                    <input type="text" class="form-control" id="email" name="category_name">

                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">


                        <div class="card-header">
                            Trash List
                        </div>
                        <table class="table table-stripped table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Sno</th>
                                    <th>name</th>
                                    <th>User</th>
                                    <th>Deleted At</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            {{-- @php($i = 1) --}}
                            @foreach ($trashCat as $category)
                                <tbody>
                                    <tr>
                                        <td>{{ $categories->firstItem() + $loop->index }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>{{ $category->deleted_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('category/restore/' . $category->id) }}"
                                                class="btn btn-info">Restore</a>
                                            <a href="{{ url('category/pdelete/' . $category->id) }}"
                                                class="btn btn-danger">P delete</a>

                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{-- {{ $categories->links() }} --}}
                    </div>
                </div>

                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
@endsection
