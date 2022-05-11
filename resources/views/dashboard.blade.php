<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>



        <div class="container">
             <div class="row">
                 <table class="table table-stripped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sno</th>
                          <th>name</th>
                          <th>Email</th>
                          <th>Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                            @php($i = 1)
                           @foreach($users as $user)
                           <tr>
                           <td>{{$i++}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->created_at}}</td>
                            </tr>

                        @endforeach
                 </table>
             </div>

        </div>
    </div>
</x-app-layout>
