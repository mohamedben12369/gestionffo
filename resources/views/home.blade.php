@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Home Page</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Formation Section -->
    <section class="formation-section">
        <h2>Our Formation Programs</h2>
        <p>We offer a variety of formation programs to help you grow and succeed. Explore our offerings below:</p>

        <div class="formation-list">
            <div class="formation-item">
                <h3>Program 1: Leadership Development</h3>
                <p>Enhance your leadership skills with our comprehensive development program.</p>
            </div>

            <div class="formation-item">
                <h3>Program 2: Technical Skills Training</h3>
                <p>Stay ahead in your career with our cutting-edge technical training courses.</p>
            </div>

            <div class="formation-item">
                <h3>Program 3: Personal Growth</h3>
                <p>Unlock your potential with our personal growth and self-improvement workshops.</p>
            </div>
        </div>
    </section>
</div>
@endsection
