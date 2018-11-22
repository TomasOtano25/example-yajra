@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> --}}

                <table id="users-table" class="table border" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr> 
                                @endforeach 
                            </tbody>     --}}
                    </table>
                    
                    

                    {{-- <table id="myTable" class="table border mt-2" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                   </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                        {{ $users->links() }} --}}
            </div>
        </div>  
        </div>
    </div>
</div>
{{-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
@push('scripts')
    <script>
    $(function () { 
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('get.users') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: "name" },
                { data: 'email', name: "email" }                
            ]
        });
    });
    </script>
@endpush
@endsection
