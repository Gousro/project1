@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $users)
                            <tr>
                                <td class="text-center">{{ $users->name }}</td>
                                <td class="text-center">{{ $users->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.users.edit', $users->id) }}"><button type="button"
                                            class="btn btn-primary float-right">Edit</button></a>

                                    <form action="{{ route('admin.users.destroy', $users) }}" method="POST"
                                        class="float-right mr-1">
                                        @csrf
                                        {{ method_field( 'DELETE' ) }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection