@extends('layouts.app')
@section('title_page')
    <title>Cara Install Laravel Menggunakan Composer di Windows 10</title>
@endsection
@section('custom_style')
<style>
    #content{
        margin-top: 15px;
    }
    ol.tutorial-laravel>li {
        padding: 10px;
    }
</style>
@endsection
@section('content')
        <!-- Content -->
        <section class="main-tutorial">
            <article class="container">
                <header>
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <h1>Cara Membuat Project Laravel Menggunakan Composer di Windows 10 !!!</h1>
                        </div>
                        <div class="col-md-4">
                            <!-- Breadcumbs / Path File -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Tutorial</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laravel</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Install</li>
                                </ol>
                            </nav>
                            <!-- End Breadcumbs -->
                        </div>
                        <div class="byline col-md-12">
                            <address class="author">
                                By <a rel="author" href="#">Arsal Fadilah</a> on 
                                <time pubdatedatetime="2021-08-14" title="14 August 2021">14 August 2021</time>
                            </address>
                        </div>
                    </div>
    
                </header>
                <div class="row">
                    <div class="d-flex justify-content-center mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bqTiZG4DBZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
    
                    <div class="col-xl-8">
                        <div class="isi">
                            <p>
                                Laravel adalah salah satu framework PHP yang dapat membantu pengerjaan pembuatan website dinamis semakin mudah. Banyak perusahaan atau industri yang ingin memakai framework ini di website mereka karena selain mudah digunakan juga memiliki keamanan yang
                                dapat dibilang sangat baik.
                            </p>
    
                            <p>
                                Lansung saja tanpa banyak basa-basi karena kalian ke sini pasti mencari cara untuk membuat project baru di laravel. Mungkin kalian adalah pemain baru di laravel sehingga butuh tutorial ini.
                            </p>
    
                            <div class="alert alert-primary">
                                <h2>Ikuti tutorial berikut secara terurut agar meminimalisir error!</h2>
                            </div>
                            <ol class="tutorial-laravel">
                                <li>Siapkan bahan-bahan di bawah ini :
                                    <ul>
                                        <li><a href="https://www.apachefriends.org/download.html">XAMPP</a></li>
                                        <li><a href="https://getcomposer.org/download/">Composer</a></li>
                                        <li>Text Editor : (Notepad, Notepad++, Vs Code, dsb)</li>
                                    </ul>
                                </li>
                                <li>Install Xampp. Bagi yang belum tahu lihat di <a href="#">Cara Install Xampp !!!</a></li>
                                <li>Cari di mana file composer.exe berada dan buka file tersebut<br><img class="img-fluid" src="/img/tutorial/laravel/step-buka-composer.jpg"></li>
                                <li>Pilih install for all users<br><img class="img-fluid" src="/img/tutorial/laravel/step-install-for-all-user.jpg"></li>
                                <li>Klik Next<br><img class="img-fluid" src="/img/tutorial/laravel/step-klik-next-composer.jpg"></li>
                                <li>Browse path php.exe yang berada di folder Xampp<br><img class="img-fluid" src="/img/tutorial/laravel/step-pilih-path.jpg"></li>
                                <li>Kosongkan proxy url dan klik next<br><img class="img-fluid" src="/img/tutorial/laravel/step-next-aja.jpg"></li>
                                <li>Klik install<br><img class="img-fluid" src="/img/tutorial/laravel/step-klik-install.jpg"></li>
                                <li>Tunggu proses instalasi sampai beres seperti ini<br><img class="img-fluid" src="/img/tutorial/laravel/step-finish.jpg"><br>
                                    <div class="alert alert-info"><i class="fas fa-exclamation-triangle"></i> Jika terjadi error dengan pesan ada komponen yang tidak terunduh silakan pilih retry dan tunggu beberapa saat hingga proses instalasi selesai</div>
                                </li>
                                <li>Masuk ke folder htdocs yang ada di Xampp<br><img class="img-fluid" src="/img/tutorial/laravel/path-htdoics.jpg"></li>
                                <li>Ketikkan cmd di path htdocs<br><img class="img-fluid" src="/img/tutorial/laravel/tulis-cmd-di-path.jpg"></li>
                                <li>Pada cmd yang baru terbuka, ketikan :
                                    <div class="code">composer create-project laravel/laravel nama_project --prefer-dist</div><br><img class="img-fluid" src="/img/tutorial/laravel/ketikan-composer.jpg">
                                </li>
                                <li>Tunggu untuk beberapa saat. Kemudian liat di folder htdocs, folder nama_project sudah tersedia berarti project laravel siap digunakan.<br><img class="img-fluid" src="/img/tutorial/laravel/sukses-laravel.jpg"><br>
                                    <img class="img-fluid" src="/img/tutorial/laravel/sukses-laravel2.jpg"></li>
                            </ol>
                            <p>Nah itu tadi di atas adalah tutorial mengenai cara membuat project baru laravel menggunakan composer di windows 10. Bagaimana mudah bukan?. Cukup sampai di sini tutorial dari mimin. Semoga bermanfa'at yah teman-teman!</p>
                            <p>Salam hormat,</p>
                            <p>Programming Nusantara</p>
                            <!-- add some p to make a new paragraph -->
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1">
                        <div class="container shadow p-3">
                            <h5 class="text-center">Tutorial Terkait</h5>
                            <ul>
                                <li><a href="#">Belum ada lagi</a></li>
                                <li><a href="#">...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- video belum ada : templatenya udah ada -->
                <!-- <div class="c-vid-content text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ipIKT2TJ_oo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
            </article>
        </section>
        <!-- End Content -->    
@endsection