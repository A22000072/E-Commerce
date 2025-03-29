@extends('layouts.app_user')

@section('title', 'Profile')

@section('content')
<div class="profile-container">
    <!-- Header -->
    <div class="profile-header">
        <img src="{{ asset('images/product1.jpg') }}" alt="Profile Picture">
        <h2>Muhammad Akbar Fauzi</h2>
        <p>Videographer | Creative Media Specialist</p>
    </div>

    <!-- Info Section -->
    <div class="profile-info">
        <div class="info-item">
            <label>Email:</label>
            <span>akbar.fauzi@gmail.com</span>
        </div>
        <div class="info-item">
            <label>Phone:</label>
            <span>+62 812 3456 7890</span>
        </div>
        <div class="info-item">
            <label>Location:</label>
            <span>Bandung, Indonesia</span>
        </div>
        <div class="info-item">
            <label>Skills:</label>
            <span>Photography, Videography, Editing</span>
        </div>
    </div>

    <!-- Footer -->
    <div class="profile-footer">
        <button class="edit-btn">Edit Profile</button>
    </div>
</div>
@endsection