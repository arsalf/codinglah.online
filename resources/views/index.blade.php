@extends('layouts.app')
@section('title_page')
    <title>Programming Nusantara</title>
@endsection
@section('custom_style')
    <style>
        #content {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
        }

        .cover {
            color: #fff;
            background-image: url("../img/background_1.jpeg");
            height: calc(100vh - var(--nav-height));
        }

        .cover h1 {
            font-weight: bold;
        }

        .mask {
            background-color: rgba(0, 0, 0, 0.6);
        }

    </style>
@endsection
@section('content')
    <section id="cover">
        <div class="cover bg-image d-flex justify-content-center align-items-center">
            <div class="mask">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <h1 class="text-center code">Coders;<br><span class="txt-rotate" data-period="1000"
                            data-rotate='[ "Selamat Datang di PN!", "Selamat Belajar!", "Selamat Ngoding!", "Nikmati Kebebasan!" ]'></span><br><i
                            class="far fa-smile"></i></h1>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-white footer-index">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button">
                    <i class="fab fa-google"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button">
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- End Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <!-- Form -->
                <form action="assets/php/insert.php" method="POST">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Daftarkan e-mail untuk mendapat pemberitahuan</strong>
                            </p>
                        </div>
                        <!-- End Grid column-->
                        <!-- Input -->
                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" name="email" class="form-control" required>
                                <label class="form-label" for="form5Example2">Email address</label>
                            </div>
                        </div>
                        <!-- End Grid column-->
                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <input type="submit" name="submitmailonly" value="Submit" placeholder="Submit"
                                class="btn btn-outline-light mb-4">
                        </div>
                        <!--End Grid column-->
                        <!-- End Input -->
                    </div>
                    <!--End Grid row-->
                </form>
                <!-- End Form -->
            </section>
            <!-- End Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Programming Nusantara atau PROGUSA adalah salah satu website belajar bahasa pemrograman di
                    Indonesia. PROGUSA melakukan pembelajaran dari dasar hingga menjadi profesional. PROGUSA
                    memberikan materi-materi dalam bentuk text maupun video yang bisa di akses
                    secara gratis oleh semua kalangan umat manusia di alam semesta ini.
                </p>
            </section>
            <!-- End Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-center"><a class="text-white" href="#">Tentang Kami</a></h5>
                    </div>
                    <!--End Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-center"><a class="text-white" href="#">Ketentuan
                                Penggunaan</a></h5>
                    </div>
                    <!-- End Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-center"><a class="text-white" href="#">Kebijakan Pribadi</a>
                        </h5>
                    </div>
                    <!-- End Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-center"><a class="text-white" href="#">Kontak</a></h5>
                    </div>
                    <!-- End Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- End Section: Links -->
        </div>
        <!-- End Grid container -->
    </footer>
@endsection
