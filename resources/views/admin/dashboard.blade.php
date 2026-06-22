@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">
    Dashboard Overview
</h2>

<div class="alert alert-primary">

    <h5 class="mb-1">
        Welcome back, Administrator 👋
    </h5>

    <p class="mb-0">
        Manage your services, articles, team members,
        and company content from one place.
    </p>

</div>

<div class="row">

    <div class="col-md-3">
        <div class="card card-custom">
            <div class="card-body text-center">
                <h5>Services</h5>
                <h2>{{ $totalServices }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-custom">
            <div class="card-body text-center">
                <h5>Articles</h5>
                <h2>{{ $totalArticles }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-custom">
            <div class="card-body text-center">
                <h5>Team Experts</h5>
                <h2>{{ $totalTeams }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-custom">
            <div class="card-body text-center">
                <h5>Contacts</h5>
                <h2>{{ $totalContacts }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection