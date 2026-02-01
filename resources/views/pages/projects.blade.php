@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4 text-center">My Projects</h2>

    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('uploads/projects/'.$project->image) }}"
                     class="card-img-top" alt="project">

                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>

                    <span class="badge bg-primary">
                        {{ $project->tech_stack }}
                    </span>
                </div>

                <div class="card-footer bg-white text-center">
                    <a href="{{ $project->github_link }}" target="_blank"
                       class="btn btn-dark btn-sm">GitHub</a>

                    @if($project->live_link)
                    <a href="{{ $project->live_link }}" target="_blank"
                       class="btn btn-success btn-sm">Live</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
