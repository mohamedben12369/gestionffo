@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Role</h1>
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Role</button>
    </form>
</div>
@endsection