
@extends('front_master')

@section('content')


    <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                @include('pages.navbar')
            </nav>
            @include('pages.banner_page')
        </div>
    <!-- Navbar & Hero End -->


    <!-- Destination Start -->
    @include('pages.desitination')
    <!-- Destination Start -->
@endsection


