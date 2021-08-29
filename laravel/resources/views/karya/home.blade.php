@extends('layouts.app')
@section('title_page')
    <title>Karya : Programming Nusantara</title>
@endsection
@section('custom_style')
    <link rel="stylesheet" href="{{ asset('css/style-home-karya.css') }}" />
    <style>
        .row {
            height: calc(100vh - var(--nav-height));
        }

        #content {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
        }

        .carousel-indicators {
            margin-bottom: 0;
            top: 100%;
        }

        .wrapper-card {
            padding: 0 7rem !important;
        }

        @media screen and (max-width: 425px) {
            .wrapper-card {
                padding: 0 3rem !important;
            }
        }

    </style>
@endsection

@section('content')
    @php
    $count = 1;
    @endphp
    <!-- Content -->
    <section id="home">
        <div class="container">
            <div id="game" class="row justify-content-center align-content-center flex-wrap">
                <div class="col-sm-12 text-center">
                    <p style="font-size: 20px;font-weight: bold;">GAME TERPOPULER</p>
                    <!-- Slider main container -->
                    <div id="myCarouselGame" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($collectionKarya as $item)
                                @if (strtoupper($item->category) == 'GAME')
                                    <button type="button" data-bs-target="#myCarouselGame"
                                        data-bs-slide-to="{{ $count - 1 }}" class="{{ $count == 1 ? 'active' : '' }}"
                                        aria-current="{{ $count == 1 ? 'true' : '' }}"
                                        aria-label="Slide {{ $count++ }}"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($collectionKarya as $item)
                                @if (strtoupper($item->category) == 'GAME')
                                    <div class="carousel-item {{ $count++ == 1 ? 'active' : '' }}"
                                        data-bs-interval="3000">
                                        <div class="wrapper-card">
                                            <div class="card animate-up-5 swiper-slide">
                                                <img src="{{ $item->image }}" class="card-img-top rounded-top"
                                                    alt="img_{{ $item->title }}">
                                                <div class="card-body">
                                                    <small
                                                        class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i> {{ (double)$item->rating }}</small>
                                                    <h5 class="card-title mt-3"><a
                                                            href="{{ $item->link }}">{{ $item->title }}</a></h3>
                                                        <p class="card-text">{{ $item->description }}</p>
                                                        <a href="{{ $item->link }}"
                                                            class="btn btn-primary animate-up-2">Play</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarouselGame"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarouselGame"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @php
                        if ($count == 1) {
                            echo "<style>
                                #game{
                                    display: none;
                                }
                            </style>";
                        }
                    @endphp
                    <div class="wrapper-seemore">
                        <a href="/coming_soon"><button class="btn btn-secondary">See More</button></a>
                    </div>
                </div>

            </div>

            <div id="alat" class="row my-5 justify-content-center align-content-center flex-wrap">
                <div class="col-sm-12 text-center">
                    <p style="font-size: 20px;font-weight: bold;">ALAT TERPOPULER</p>
                    <!-- Slider main container -->
                    <div id="myCarouselAlat" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($collectionKarya as $item)
                                @if (strtoupper($item->category) == 'ALAT')
                                    <button type="button" data-bs-target="#myCarouselAlat"
                                        data-bs-slide-to="{{ $count - 1 }}" class="{{ $count == 1 ? 'active' : '' }}"
                                        aria-current="{{ $count == 1 ? 'true' : '' }}"
                                        aria-label="Slide {{ $count++ }}"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($collectionKarya as $item)
                                @if (strtoupper($item->category) == 'ALAT')
                                    <div class="carousel-item {{ $count++ == 1 ? 'active' : '' }}"
                                        data-bs-interval="3000">
                                        <div class="wrapper-card">
                                            <div class="card animate-up-5 swiper-slide">
                                                <img src="{{ $item->image }}" class="card-img-top rounded-top"
                                                    alt="img_{{ $item->title }}">
                                                <div class="card-body">
                                                    <small
                                                        class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i> {{ $item->rating }}</small>
                                                    <h5 class="card-title mt-3"><a
                                                            href="{{ $item->link }}">{{ $item->title }}</a></h3>
                                                        <p class="card-text">{{ $item->description }}</p>
                                                        <a href="{{ $item->link }}"
                                                            class="btn btn-primary animate-up-2">Play</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarouselAlat"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarouselAlat"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @php
                    if ($count == 1) {
                        echo "<style>
                            #alat{
                                display: none;
                            }
                        </style>";
                    }
                    @endphp
                    <div id="wrapper-seemore">
                        <a href="/coming_soon"><button class="btn btn-secondary">See More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection

@section('custom_js')
<script>
    document.documentElement.style.setProperty('--btn-height', document.getElementById("wrapper-seemore").offsetHeight + 'px');
</script>
@endsection
