@extends('layouts.app')

@section('content')
<div class="banner-container">
    @if ($featured_image)
        <div class="banner-image mb-4">
            <img src="{{ $featured_image }}" class="card-img-top img-fluid" alt="case studies">
            <h2 class="banner-title">Projects</h2>
        </div>
    @endif
</div>
<div class="container">
    

    <div class="row mt-5">
        @foreach($projects as $project)
            <div class="col-md-4">
                <a href="{{ get_permalink($project['ID']) }}">
                    <div class="card mb-4 ">
                        @if(isset($project['fields']['banner_image']))
                            <img src="{{ $project['fields']['banner_image'] }}" class="card-img-top img-fluid project_image" alt="{{ $project['title'] }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            
                            @if(!empty($project['tech_stacks']))
                                <div class="tech-stacks">
                                    
                                        @foreach($project['tech_stacks'] as $tech_stack) 
                                            <span class="tech-stack">{{ $tech_stack['name'] }}</span>
                                        @endforeach
                                    
                                </div>
                            @endif

                            <p class="project-description">{{ $project['fields']['description'] }}</p> 
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        
    </div>
</div>

@endsection