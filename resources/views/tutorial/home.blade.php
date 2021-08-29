@extends('layouts.app')
@section('title_page')
    <title>Tutorial : Programming Nusantara</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/home-tutorial.css')}}" />
        <!-- Content -->
        <section class="home-tutorial">
            <div class="container">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($collectionBahasa as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$item->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$item->id}}" aria-expanded="false" aria-controls="flush-collapse{{$item->id}}">
                          Tutorial {{$item->name}}
                        </button>
                        </h2>
                        <div id="flush-collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$item->id}}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="{{$item->link}}" class="nav-link">{{$item->title}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                        
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Content -->
@endsection