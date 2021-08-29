@extends('layouts.app')
@section('title_page')
    <title>Tantangan : Programming Nusantara</title>
@endsection
@section('custom-style')
    
@endsection
@section('content') 
    <!-- Content -->
    <section class="home-tantangan">
        <div class="container">
            <div class="row">
                @foreach ($collectionBahasa as $item)
                <div class="col-sm-4 d-flex justify-content-center align-content-center flex-wrap">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front d-flex justify-content-center align-content-center flex-wrap">
                                <img id="img_{{$item->id}}" class="img-fluid" src="{{$item->image}}" alt="{{$item->name}}" style="width:280px;height:300px;">
                            </div>
                            <div class="flip-card-back d-flex justify-content-center align-content-center flex-wrap">
                                <div class="">
                                    <button class="btn btn-primary mb-2">
                                        <a href="{{$item->basic}}" class="link-light">Basic</a>
                                    </button>
                                    <br>
                                    <button class="btn btn-primary mb-2">
                                        <a href="{{$item->inter}}" class="link-light">Intermediate</a>
                                    </button>
                                    <br>
                                    <button class="btn btn-primary mb-2">
                                        <a href="{{$item->pro}}" class="link-light">Pro</a>
                                    </button>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection
@section('custom_js')
    
@endsection