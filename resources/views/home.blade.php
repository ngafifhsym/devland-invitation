@extends('layouts.main')

@section('container')

<main>
    
    <section id="hero" class="hero" style="background-color: #ffffff; padding-bottom: 8vh">
        <div class="container-xl px-md-4 px-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-0">
                    <h1 class="hero-title font-weight-bold mb-4 text-black">Buat Undangan Online Digital Website Untuk <span style="color: #2a5b47" id="typing">Acara Apapun</span></h1>
                    <p class="mb-4">Buat undangan online digital website custom dengan Satu Momen, meski kamu gaptek tetap bisa bikin undangan website sendiri dari smart phone. Cukup pilih tema, edit detail acara, upload foto, semua bisa selesai dalam hitungan menit.</p>
                    <a href="{{ route('home.send') }}" target="_BLANK" rel="nofollow" title="Konsultasi undangan digital gratis" class="bg-success btn btn-secondary rounded-pill d-block d-md-inline-flex">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m3 21 1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 1 0-1 0v1Zm0 0a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="btn btn-success">Konsultasi Gratis</span>
                    </a>
                </div>
                <div class="col-lg-6 mt-5">
                    <div id="carouselExampleInterval" style="padding-bottom: 24vh" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="3000">
                            <img src="img/iklan.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000"> 
                            <img src="img/iklan.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hero" class="hero" style="background-color: #2a5b47; padding-bottom: 20vh">
        <div style="height: 100px;">
            <img src="/img/hero.png" class="mh-100" style="width: 100px; height: 200px;">
            <img src="/img/hero.png" class="mh-100" style="width: 100px; height: 200px;">
        </div>
        <div style="height: 100px;">
            <img src="/img/hero.png" class="mh-100" style="width: 100px; height: 200px;">
            <img src="/img/hero.png" class="mh-100" style="width: 100px; height: 200px;">
        </div>
    </section>
    <section id="hero" class="hero" style="background-color: #ffffff; padding-bottom: 20vh">
        <div class="container-xl px-md-4 px-lg-5 hero pb-5" style="padding-top: 8rem;">
            <div class="row align-items-center" style="margin-top: 3rem">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img width="380" height="300" style="width: 90%; max-width: 600px; height: auto;" src="img/iklan.png" title="buat undangan online digital website" alt="buat undangan online digital website">
                    </div>
                </div>
                <div class="col-lg-6 mb-lg-0">
                    <h1 class="hero-title font-weight-bold mb-4 text-white">Buat Undangan Online Digital Website Untuk <span style="color: #2a5b47" id="typing">Acara Apapun</span></h1>
                    <p class="mb-4 text-white">Buat undangan online digital website custom dengan Satu Momen, meski kamu gaptek tetap bisa bikin undangan website sendiri dari smart phone. Cukup pilih tema, edit detail acara, upload foto, semua bisa selesai dalam hitungan menit.</p>
                    <a href="{{ route('home.send') }}" target="_BLANK" rel="nofollow" title="Konsultasi undangan digital gratis" class="bg-success btn btn-secondary rounded-pill d-block d-md-inline-flex">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m3 21 1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 1 0-1 0v1Zm0 0a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="btn btn-success">Konsultasi Gratis</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const options = {
            strings: ["Acara Pernikahan", "Acara Ulang Tahun", "Acara Reuni", "Acara Khitanan"],
            typeSpeed: 50,
            backSpeed: 50,
            backDelay: 2000,
            startDelay: 500,
            loop: true
        };

        const typed = new Typed("#typing", options);

        var images = [
                "img/hero.png",
                "img/iklan.png",
            ]

            var currentIndex = 0;
            var imageElement = document.getElementById('rotating-image');

            function rotateImage() {
                currentIndex = (currentIndex + 1) % images.length;
                imageElement.src = images[currentIndex];
            }

            // Ganti gambar setiap 3 detik
            setInterval(rotateImage, 3000);
    });
</script>

@endsection