@extends('layouts.app_user')

@section('title', 'Profile')

@section('content')
<div class="profile-container">
    <!-- Header -->
    <div class="profile-header">
        <img src="{{ asset('images/product1.jpg') }}" alt="Profile Picture">
        <h2>{{ Auth::user()->name }}</h2>
        <p>Videographer | Creative Media Specialist</p>
    </div>

    <!-- Info Section -->
    <div class="profile-info">
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="info-item">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" required>
            </div>
            <div class="info-item">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" required>
            </div>

            <div class="profile-footer">
                <button type="submit" class="edit-btn">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
