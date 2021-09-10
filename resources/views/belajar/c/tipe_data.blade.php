@extends('layouts.app')
@section('title_page')
    <title>Tipe Data Bahasa C</title>
@endsection
@section('custom_style')
    
    <link rel="stylesheet" href="{{ asset('css/style-sidebar.css') }}" />

    <!-- Link Highlight Js -->
    <link id="style-code" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/vs.min.css">

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
                    <h2>Tipe Data Bahasa C</h2>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="byline">
                                <address class="author">By <a rel="author" href="#">Arsal Fadilah</a> on <time pubdate
                                        datetime="2021-09-10" title="10 Sept 2021">10/09/2021</time></address>
                            </div>
                        </div>
                        <!-- Breadcumbs -->
                        <div class="col-xl-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">C</a></li>
                                    <li class="breadcrumb-item"><a href="#">Basic</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tipe Data</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- End Breadcumbs -->
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/e-12sICPlts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <h4>Pengertian</h4>
                    <p>Data adalah kumpulan fakta-fakta untuk memberikan sebuah gambaran terhadap suatu keadaan. Dalam bahasa pemrograman data-data ini memiliki nilai yang dapat berupa angka, karakter atau nilai kebenaran.</p>

                    <p>Oleh karena itu, munculah tipe data yakni sebuah pengelompokkan data. Tipe data dalam pemrograman dapat dibagi menjadi dua yaitu tipe data primitif dan tipe data bentukan.</p>
                    
                    <h4>Tipe Data</h4>
                    <p>Disini kita bahasa tipe data yang primitif. Tipe ini dapat ibaratkan seperti atom karena tipe ini berdiri sendiri. Dibawah ini adalah tipe data primitf dari bahasa C :</p>
                    <ul>
                        <li>Angka<br>
                        <ol>
                            <li><code>short int</code></li>
                            <li><code>unsigned short int</code></li>
                            <li><code>int</code></li>
                            <li><code>long int</code></li>
                            <li><code>unsigned long int</code></li>
                            <li><code>long long int</code></li>
                            <li><code>unsigned long long int</code></li>
                            <li><code>float</code></li>
                            <li><code>double</code></li>
                            <li><code>long double</code></li>
                        </ol></li>
                        <li>Karakter<br>
                            <ol>
                                <li><code>char</code></li>
                                <li><code>unsigned char</code></li>
                            </ol></li>
                        </li>
                        <li>Kebenaran<br>
                            <ol>
                                <li><code>bool</code></li>
                            </ol></li></li>
                    </ul>

                    <h4>Contoh Penggunaan</h4> 
                    @php
                        $code = 1
                    @endphp
                    <!-- Code Example -->
                    <div class="example-code">
                        <div class="code">
                            <!-- Please write exact structures code -->
                            <pre><code id="target-copy{{$code}}" class="language-c">int angka = 11;
char KARAKTER = 'c';
float ada12angka = 12.01f;
bool prog = true;
double n = 12.4;</code></pre>
                            <!-- Don't give space in the end of code pre -->
                        </div>
                        <div id="succes-copy{{$code}}" class="alert alert-success copy">
                            Succes Copy Text!
                        </div>
                        <div class="copy-btn d-flex justify-content-center mb-3">
                            <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to Clipboard" onclick="copyToClipboard('#target-copy{{$code}}', 'succes-copy{{$code++}}')">Copy</button>
                        </div>
                    </div>
                    <!-- End Code Example -->
                    <div class="alert alert-primary">
                        <div class="d-flex justify-content-center">
                            <a href="{{url('coming_soon')}}"><button class="btn btn-primary">
                                    Lanjut ke tahap berikutnya
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col">
                    <p class="text-center">ADVERTISEMENT</p>
                </div>
                <div class="col">

                </div>
            </div>
        </div>

    </div>
    <!-- End Content -->
@endsection
@section('custom_js')
        <!-- Required for highlight text -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
        <script>
            hljs.highlightAll();
        </script>
@endsection