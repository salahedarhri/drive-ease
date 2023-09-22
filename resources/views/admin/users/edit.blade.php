<!-- resources/views/admin/users/edit.blade.php -->

@extends('admin.layout')

@section('content')
    <h1>Edit User: {{ $user->name }}</h1>

    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')

        <!-- Add input fields for user information here -->
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <!-- Add more fields as needed -->

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
