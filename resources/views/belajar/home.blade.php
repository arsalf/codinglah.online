@extends('layouts.app')
@section('title_page')
    <title>Belajar : Programming Nusantara</title>
@endsection
@section('content')
<style>
    img.zoom-out{
        width: 20rem;
        height: 22rem;
    }
    .wrapper{
        padding: 20px;
    }
    .row{
        width: 100%;
        margin: 0;
    }
    @media screen and (max-width: 425px){
        img.zoom-out{
            height: 20rem;
        }
        div.col-md-4{
            padding: 0;
        }
    }
</style>
    <!-- Content -->
    <section class="home-belajar">
        <div class="container">
            <div class="row">
                @foreach ($collectionBahasa as $item)
                <div class="col-md-4 d-flex justify-content-center mb-3">
                    <a href="{{$item->link}}">
                        <div class="wrapper">
                        <img class="img-fluid zoom-out" src="{{$item->image}}" alt="{{$item->name}} Logo">
                        </div>
                    </a>
                </div>   
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection