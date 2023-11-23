@php
    $title = "WrongCode | 404 | Page Not Found";
    $keywords = "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE";
    $description = "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy";
@endphp
@extends('wrongcode.common.layout')
@section('content')

<div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Not Found</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="{{route('root')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="{{route('root')}}">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('root')}}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->

@endsection
@section('script')


@endsection
