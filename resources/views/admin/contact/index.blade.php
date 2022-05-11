@extends('admin.admin_master')

@section('admin')

    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif
                        <div class="card-header">
                            All Contact Messages
                        </div>
                        <table class="table table-stripped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sno </th>
                                    <th>Name *</th>
                                    <th>Email *</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            @php($i = 1)
                                @foreach ($contacts as $contact)
                                    <tbody>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at->diffForHumans() }}</td>
                                            <td>

                                                <a href="{{ url('contact/delete/' . $contact->id) }}"
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
