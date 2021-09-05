@extends('layouts.app')
@section('title_page')
    <title>Output Bahasa C</title>
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
                    <h2>Output Bahasa C</h2>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="byline">
                                <address class="author">By <a rel="author" href="#">Arsal Fadilah</a> on <time pubdate
                                        datetime="2021-09-03" title="03 Sept 2021">03/09/2021</time></address>
                            </div>
                        </div>
                        <!-- Breadcumbs -->
                        <div class="col-xl-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">C</a></li>
                                    <li class="breadcrumb-item"><a href="#">Basic</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Output</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- End Breadcumbs -->
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-HVB0PrDkr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <h4>Pengertian</h4>
                    <p>Output (keluaran) dalam bahasa C digunakan untuk menampilkan angka atau text ke layar. Keyword output yang digunakan di bahasa C yaitu menggunakan <code>printf</code>. Keyword <code>printf</code> merupakan salah satu prosedur yang terdapat dalam file header <code>stdio.h</code>.</p>
     
                    @php
                        $code = 1
                    @endphp
                    <!-- Code Example -->
                    <div class="example-code">
                        <div class="code-header">
                            <h4>Contoh :</h4>
                        </div>
                        <div class="code">
                            <!-- Please write exact structures code -->
                            <pre><code id="target-copy{{$code}}" class="language-c">#include&lt;stdio.h&gt

int main(){
    printf("hello world");//menampilkan text hello world ke layar
    return 0;
}</code></pre>
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

                    <p>Salinlah kode di atas dan tempelkan di IDE Anda. Kemudian jalankan programnya dan lihat apa yang terjadi. Pasti text "hello world" akan muncul di layar Anda.</p>

                    <p>Kemudian coba hapus <code>#include &lt;stdio.h&gt</code>. Error akan muncul karena tidak ada library default yang tersedia jika tidak dipanggil secara manual</p>

                    <div class="alert alert-primary">
                        <div class="d-flex justify-content-center">
                            <a href="{{url('belajar/c/variabel')}}"><button class="btn btn-primary">
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
@section('custom_js')
        <!-- Required for highlight text -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
        <script>
            hljs.highlightAll();
        </script>
@endsection