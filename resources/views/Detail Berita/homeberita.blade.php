@extends('berita/layouts.templateberita')
@section('content')

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="hero" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{ asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <div class="content">
                        <h2>Bagaimana Cara Kerja E-Damkar?</h2>
                        <p>
                            E-DAMKAR  merupakan sebuah platform aplikasi berbasis mobile yang terintegrasi dengan
                            website.
                            “E-Damkar” mempunyai makna yaitu Pemadam kebakaran.
                            Dengan menggunakan aplikasi ini membantu petugas pemadam kebakaran dalam menjalankan
                            tugasnya.
                        </p>
                        <p>
                            Dengan menggunakan E-Damkar ini petugas lebih efisien dalam
                            mengelola laporan yang masuk, memberikan informasi lengkap.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#">
                                <span>Baca selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End About Section -->

    <section id="hero" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">



                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <div class="content">
                        <h2>Bagaimana Cara Kerja E-Damkar?</h2>
                        <p>
                            E-DAMKAR  merupakan sebuah platform aplikasi berbasis mobile yang terintegrasi dengan
                            website.
                            “E-Damkar” mempunyai makna yaitu Pemadam kebakaran.
                            Dengan menggunakan aplikasi ini membantu petugas pemadam kebakaran dalam menjalankan
                            tugasnya.
                        </p>
                        <p>
                            Dengan menggunakan E-Damkar ini petugas lebih efisien dalam
                            mengelola laporan yang masuk, memberikan informasi lengkap.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#">
                                <span>Baca selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{ asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="layanan" class="features">
        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <h3>Layanan E-Damkar</h3>

            <div class="row">

                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('frontend/assets/img/features-3.png')}}" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="bi bi-fire"></i>
                            <div>
                                <h4>Laporan Kebakaran</h4>
                                <p>Salah satu layanan dari E-Damkar ini adalah
                                    masyarakat dapat melaporkan kejadian kebakaran dari berbagai lokasi di Kabupaten
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-cloud-lightning"></i>
                            <div>
                                <h4>Laporan Bencana Alam</h4>
                                <p>Salah satu layanan dari E-Damkar ini adalah masyarakat dapat
                                    melaporkan kejadian kebakaran dari berbagai lokasi di Kabupaten</p>
                            </div>
                                      
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="ri-brush-4-line"></i>
                            <div>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                    facere</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-magic-line"></i>
                            <div>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- End Feature Icons -->

        </div>

    </section><!-- End Features Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="berita" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Artikel Terbaru</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/kobong.jpeg')}}"
                                class="img-fluid" alt=""></div>
                        <span class="post-date">Senin, 05 Februari 2023 </span>
                        <h3 class="post-title">Kebakaran Pabrik dan Gudang di Kawasan Loceret</h3>
                        <p>
                            Berdasarkan informasi dan laporan dari Taman Nasional Bromo
                            Tengger Semeru bahwa telah terjadi kebakaran lahan di...
                        </p>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca
                                selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>


        </div>


    </section><!-- End Recent Blog Posts Section -->



</main><!-- End #main -->
@endsection
