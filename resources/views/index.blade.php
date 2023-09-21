@extends('layouts.template')

@section('header')
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/jebcdev.jpg" alt="Mi Avatar
        "
            style="border-radius: 50%; width: 200px; height: 200px;" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Juan Benjumea Correa</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Desarrollador Web</p>
    </div>
@endsection

@section('content')
@endsection

@section('portfolioitems')
    <div>
        <h2>Mís Proyectos</h2>
    </div>
    @foreach ($projects as $project)
        <div class="col-md-6 col-lg-4 mb-5">
            <h2>{{ $project->name }}</h2>
            <a href="#portfolio">{{-- {{ $project->url }} --}}
                <div class="portfolio-item mx-auto">

                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                        <div class="portfolio-item-caption-content text-center text-white"><i></i>
                            {{ $project->name }}
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset($project->image) }}" alt="{{ $project->name }}" />
                </div>

            </a>
            <div>
                {{ $project->description }}
            </div>
        </div>
    @endforeach
@endsection
