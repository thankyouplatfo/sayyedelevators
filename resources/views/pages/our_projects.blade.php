@extends('layouts.app')
@section('content')
    <!-- Project Section -->
    <div class="w3-container w3-padding-64" id="projects">
        <a href="{{ route('projects.index') }}" target="_blank">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">المشاريع</h3>
        </a>
    </div>

    <div class="w3-row-padding">
        @foreach ($projects as $project)
            <div class="w3-col l3 m6 w3-margin-bottom w3-right">
                <style>
                    #project-card:hover #project-desc {
                        display: block !important;
                    }
                </style>
                <div class="w3-display-container" id="project-card">
                    <div class="w3-display-topright w3-black w3-padding">{{ Str::limit($project->alt, 25, '...') }}
                    </div>
                    <img src="{{ asset(Str::contains($project->path, ['placeholder.com']) ? $project->path : asset('storage/' . $project->path)) }}"
                        alt="{{ $project->alt }}" style="width:100%">
                    <div class="w3-container w3-card-2" style="margin: 0!important;display:none" id="project-desc">
                        <p>
                            {{ $project->alt }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
