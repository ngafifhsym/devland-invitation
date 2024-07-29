@extends('layouts.main')

@section('container')
<section id="product" class="product" style="background-color: #2a5b47; padding-bottom: 10vh">
    <div class="container justify-content-center text-center text-white">
        <h2>Katalog</h2>
        <p></p>
    </div>
    <div class="container-xl px-md-4 px-lg-5 hero pb-5" style="padding-top: 8rem;">
        <div class="row justify-content-center align-items-center" style="margin-top: -3rem">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mb-lg-0">
                <div class="card mx-auto" style="width: 100%; max-width:15rem;">
                    <img src="img/mockup.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Flower</h5>
                      <p class="card-text">Design sederhana yang memukau dengan dibekali beberapa fitur seperti comment,RSVP</p>
                      <a href="#" class="btn btn-primary">Pesan</a>
                      <a href="/flower" class="btn btn-warning"><i class="bi bi-eye"></i> Priview</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mb-lg-0">
                <div class="card mx-auto" style="width: 100%; max-width:15rem;">
                    <img src="img/bunga2.jpg" width="100px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Pesan</a>
                      <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Priview</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mb-lg-0">
                <div class="card mx-auto" style="width: 100%; max-width:15rem;">
                    <img src="img/hero.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Pesan</a>
                      <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Priview</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mb-lg-0">
                <div class="card mx-auto" style="width: 100%; max-width:15rem;">
                    <img src="img/hero.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Pesan</a>
                      <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Priview</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
</section>
@endsection