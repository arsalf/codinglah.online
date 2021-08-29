@extends('layouts.app')
@section('title_page')
    <title>Artikel : Programming Nusantara</title>
@endsection
@section('content')
<!-- Custom CSS -->
<link type="text/css" href="{{asset('css/home-artikel.css')}}" rel="stylesheet">
    <!-- Content -->
    <section id="home">
        <div class="container">
            <div class="row">
                @php
                    $count = 1;
                @endphp
                @foreach ($collectionArtikel as $item)
                    @if ($count++ != 4)
                    <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-4">
                        <div class="card shadow animate-up-5">
                            <img src="{{$item->image}}" class="card-img-top rounded-top" alt="image_{{$item->title}}">
                            <div class="card-body text-center">
                                <small class="card-subtitle mb-2 text-muted">{{$item->category}}</small>
                                <h5 class="card-title mt-3"><a href="{{$item->link}}">{{$item->title}}</a></h3>
                                    <p class="card-text">{{$item->description}}</p>
                                    <a href="{{$item->link}}" class="btn btn-primary animate-up-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    @else
                    @php
                        $count = 1;
                    @endphp
                    </div>    
                    <div class="row">
                    @endif               
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection