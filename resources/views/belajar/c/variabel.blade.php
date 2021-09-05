@extends('layouts.app')
@section('title_page')
    <title>Variabel Bahasa C</title>
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
                    <h2>Variabel Bahasa C</h2>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="byline">
                                <address class="author">By <a rel="author" href="#">Arsal Fadilah</a> on <time pubdate
                                        datetime="2021-09-05" title="05 Sept 2021">05/09/2021</time></address>
                            </div>
                        </div>
                        <!-- Breadcumbs -->
                        <div class="col-xl-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">C</a></li>
                                    <li class="breadcrumb-item"><a href="#">Basic</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Variabel</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- End Breadcumbs -->
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/cINlLiicjeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <h4>Pengertian</h4>
                    <p>Variabel adalah nilai dari suatu data yang dapat diubah nilainya. Variabel mirip dengan wadah. Contoh, wadah untuk menyimpan buku biasanya menggunakan tas. Variabel juga sama, hanya saja variabel menyimpan data yang dapat berupa angka, karakter, boolean(kebenaran) dan semua data yang bertipe dapat disimpan oleh variabel.</p>
                    
                    <h4>Aturan Penamaan</h4>
                    <p>Setiap variabel harus diberi nama. contoh <code>umur</code> adalah variabel dengan nama umur. Penamaan variabel dalam bahasa C mempunyai aturan-aturan yang berlaku. Aturan tersebut ada 3 yaitu : </p>
                    <ol>
                        <li>Nama variabel hanya bisa terdiri dari huruf (boleh huruf kapital atau huruf kecil), angka dan garis bawah.</li>
                        <li>Huruf pertama variabel harus berupa huruf atau garis bawah.</li>
                        <li>Tidak ada peraturan seberapa panjang nama varibel dapat dibuat. Namun, disarankan agar tidak melebihi 31 karakter.</li>
                    </ol>

                    <p>Note : ketika mendeklarasikan variabel, sebelum nama harus menuliskan tipe datanya terlebih dahulu.</p>

                    <h4>Variabel Sah</h4> 
                    @php
                        $code = 1
                    @endphp
                    <!-- Code Example -->
                    <div class="example-code">
                        <div class="code">
                            <!-- Please write exact structures code -->
                            <pre><code id="target-copy{{$code}}" class="language-c">int angka;
char KARAKTER;
int ada12angka;
bool prog;
char n;
int _n;</code></pre>
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
                    
                    <h4>Variabel Tidak Sah</h4> 
                    <!-- Code Example -->
                    <div class="example-code">
                        <div class="code">
                            <!-- Please write exact structures code -->
                            <pre><code id="target-copy{{$code}}" class="language-c">int angka satu; //terdapat spasi
char 12KARTER; //awal huruf var dimulai dengan angka
int ada+12angka; //ada operator
prog; //tidak dideklarasikan tipe datanya
char n,; //ada koma atau token puctuators</code></pre>
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

                    <h4>Mengubah nilai variabel</h4>
                    <p>Perlu diperhatikan bahwa dalam bahasa C variabel hanya dapat diubah dengan data bertipe sama. Misal ketika pertama kali variabel dideklarasikan sebagai tipe integer (bilangan bulat) maka ketika diubah harus dengan nilai integer. Contoh :</p>
                    <div class="example-code">
                        <div class="code">
                            <!-- Please write exact structures code -->
                            <pre><code id="target-copy{{$code}}" class="language-c">int umur = 20; //umur bernilai 20
umur = 10; //disini umur berubah menjadi 10</code></pre>
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
                    <a href="https://php.id/ref/24288" target="_blank"><img class="img-fluid" src="https://php.id/img/hosting-gratis/120x600.png"></a>
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