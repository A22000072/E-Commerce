@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
@endsection
