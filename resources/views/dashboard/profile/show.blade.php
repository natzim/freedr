@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $profile->user->name }}</h4>
        </div>
    </div>
    <div class="container">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $profile->user->name }} - {{ $profile->title }}</span>
                <span class="badge teal white-text">{{ ucfirst($profile->category) }}</span>
                <p>{{ $profile->description }}</p>

                <p>{{ $profile->hourly_rate }} per hour</p>
            </div>
            <div class="card-action">
                <a href="/dashboard/profile/{{ $profile->id }}/portfolio">Portfolio</a>
                <a href="#">Reviews</a>
            </div>
        </div>
    </div>
@endsection