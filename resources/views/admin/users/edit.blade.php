@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Users {{  $user->name }}</div>
                <div class="card-body">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="exampleInputName1" placeholder="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="exampleInputEmail1" placeholder="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                            <input type="password" class="form-control" minlength="8" name="password" id="password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection