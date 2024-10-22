@extends('layouts.app')

@section('content')
<div class="banner-container">
    @if ($project)
        <div class="banner-image mb-4">
            <img src="{{ $project['fields']['banner_image'] }}" class="card-img-top img-fluid" alt="case studies">
            <h2 class="banner-title text-dark">{{ $project['title'] }}</h2>
        </div>
    @endif
</div>

<div class="container text-center">
    <p>{{ $project['fields']['description'] }}</p>
    
    @if (!empty($project['tech_stacks']))
        <div class="row mt-5 mb-5">
            <h3 class="mb-5">Tech Stacks</h3>
            @foreach ($project['tech_stacks'] as $tech_stack)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="tech-stack-item text-center"> 
                        <img src="{{ $tech_stack['image'] }}" alt="{{ $tech_stack['name'] }} icon" class="tech-stack-icon img-fluid mx-auto d-block"> <!-- mx-auto d-block for centering -->
                        <p>{{ $tech_stack['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    @if (!empty($project['services_offered']))
        <div class="row mt-5 mb-5">
            <h3 class="mb-5">Services Offered</h3>
            @foreach ($project['services_offered'] as $service)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="tech-stack-item text-center"> 
                        <img src="{{ $service['image'] }}" alt="{{ $service['name'] }} icon" class="tech-stack-icon img-fluid mx-auto d-block"> <!-- mx-auto d-block for centering -->
                        <p>{{ $service['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
