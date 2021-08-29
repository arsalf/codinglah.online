@extends('layouts.app')
@section('title_page')
    <title>Pengenalan Bahasa C</title>
@endsection
@section('custom_style')
    <link rel="stylesheet" href="{{ asset('css/style-sidebar.css') }}" />
    <style>
        #content {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
        }

        .cmain article.container {
            border: 0.5px solid rgba(0, 0, 0, 0.103);
            padding: 17px 30px;
            background-color: white;
        }

        .tahap-belajar-c {
            padding: 20px;
            margin-bottom: 25px;
            background-color: #D00A88;
            color: white;
        }

        .link-light:hover {
            color: #1E151C;
        }

        figure img.dennis-ritchie {
            height: 350px;
        }

        .col-md-2 {
            padding: 0;
        }

        div.content>div.row {
            margin-right: 0 !important;
        }

        @media screen and (max-width: 768px) {
            .leveling {
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 425px) {
            .row>*{
                padding-right: 0!important; 
            }
            .container {
                padding-right: 0.75rem;
                padding-left: 0.75rem;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Sidebar -->
    {{ View::make('belajar.c.sidebar') }}
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-9">
                <div class="container">
                    <h2>Pengenalan Bahasa C</h2>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="byline">
                                <address class="author">By <a rel="author" href="#">Arsal Fadilah</a> on <time pubdate
                                        datetime="2021-08-13" title="13 August 2021">13/08/2021</time></address>
                            </div>
                        </div>
                        <!-- Breadcumbs -->
                        <div class="col-xl-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">C</a></li>
                                    <li class="breadcrumb-item"><a href="#">Basic</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengenalan</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- End Breadcumbs -->
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dioXT0mnJQw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <h4>Pengertian</h4>
                    <p>Bahasa C (dibaca : "si") adalah salah satu bahasa pemrograman di tingkat menengah yang bersifat
                        prosedural
                        programming dengan pemrograman terstruktur dan memiliki tujuan yang umum.</p>

                    <h4>Pencipta</h4>
                    <p>Bahasa ini diciptakan oleh <a href="https://en.wikipedia.org/wiki/Dennis_Ritchie">Dennis Ritchie</a>
                        pada tahun
                        1972 atau setara dengan 49 tahun yang lalu.</p>

                    <h4>Kegunaan</h4>
                    <p>Bahasa C sering digunakan untuk membuat operasi sistem seperti windows, UNIX dan Linux. Selain itu,
                        bahasa ini
                        dapat digunakan untuk aplikasi, games, grafik dsb.</p>

                    <h4>Persiapan</h4>
                    <p>Sebelum memulai belajar bahasa C, siapkan terlebih dahulu bahan di bawah ini :</p>
                    <ul>
                        <li>IDE : CodeBlocks, Vs Code atau Dev C++</li>
                    </ul>

                    <p>Untuk lebih jelas liat dibagian tutorial mengenai <a href="#">cara menjalankan bahasa c</a> dengan
                        IDE
                        Codeblocks, Vs Code atau Dev C++.</p>

                    <div class="alert alert-primary">
                        <div class="d-flex justify-content-center">
                            <a href="#"><button class="btn btn-primary">
                                    Lanjut ke tahap berikutnya
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <p class="text-center">ADVERTISEMENT</p>
            </div>
        </div>

    </div>
    <!-- End Content -->
@endsection
