<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Wedding Ngafif & Vany</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <style>
        :root{
    --pink: #f14e95;
    --bg: #0a0a0a;
    --shadow: 0 2px 2px rgba(0 0 0/0.5);
}

body{
    font-size: 1.4rem;
    font-family: 'Work Sans', sans-serif;
    min-height: 4000px;
}

.hero::before{
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-image: url(img/vn.jpg);
    z-index: -1;
    background-size: cover;
    background-position: center;
}
.hero h1, hero h4, hero p{
    text-shadow: var(--shadow);
}
.hero{
    min-height: 100vh;

}
.hero h1 {
    font-family: 'sacramento', cursive;
}
.hero a{
    color: var(--pink);
    background: white;
}
.hero a:hover{
    background-color: var(--pink);
    color: white;
}
.mynavbar{
    background-color: rgba(255, 255, 255, 0.3) !important;
    backdrop-filter: blur(4px);
}
.mynavbar .offcanvas{
    height: 100vh;
}
.mynavbar .navbar-brand, 
.mynavbar .offcanvas-title{
    font-family: 'Sacramento', cursive;
    font-size: 2rem;
    font-weight: bold;
}
.mynavbar .nav-link{
    font-size: 1 rem;
    text-transform: uppercase
}
.home{
    background-image: url('img/floral.png');
    background-size: cover;
    background-repeat: repeat-y;
    min-height: 100vh;
    margin-top: -1.6rem; 
    padding-top: 8rem;
    padding-bottom: 5rem;
    text-align: center;
}
.home h2{
    color: var(--pink);
    font-family: 'Sacramento', cursive;
    font-size: 5rem;
    font-weight: bold;
}
.home h3{
    color: #444;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}
.home p{
    font-size: 1rem;
    color: #666;
}
.home .couple{
    margin-top: 100px;
}
.home .couple h3{
    font-family: 'sacramento';
    font-size: 2.5rem;
    color: var(--pink);
}
.home .couple img{
    width: 90% ;
}
.nav-item{
    font-size: 0.5rem;
}



/* Media Query */
/* Laptop */
@media (max-width: 992px){
    html{
        font-size: 70%;
    }
}


/* Tablet */
@media (max-width: 768px){
    html{
        font-size: 65%;
    }
    .mynavbar .nav-link{
        font-size: 2rem;
        text-align: center;
    }
    .sticky-top{
        overflow: hidden;
    }
}

/* monile phoe */
@media (max-width: 576px){
    html{
        font-size: 60%;
    }
}
    </style>
  </head>

  <body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h4>Kepada Bpk/Ibu/Saudara/i,</h4>
            <h1>Ngafif Hasyim Ash'ari & Vany Ripani</h1>
            <p>Akan melangsungkan pernikahan dalam :</p>
            <a href="#home" class="btn btn-lg">Lihat Undangan</a>
        </main>
    </section>

    <nav class="navbar navbar-expand-md sticky-top mynavbar">
      <div class="container">
        <a class="navbar-brand" href="#">NgafifVany</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NgafifVany</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" id="home">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="info">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="story">Our Story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rspv">RSPV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gift">Gits</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <section class="home" id="home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2>Acara Pernikahan</h2>
            <h3>Diselenggarakan pada 20 November di Bandung, Jawa Barat</h3>
            <p>oleh karena itu kami mengundang saudara/i untuk hadir pada acara kami</p>
          </div>
        </div>

        <div class="row couple">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-8 text-end">
                <h3>Ngafif Hasyim Ash'ari S.IT</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sunt rem unde, expedita similique ratione?</p>
                <p>putra dari bapak lorem<br> dan <br> Ibu Ipsum</p>
              </div>
              <div class="col-4">
                <img src="img/ngafif400.png" alt="" class="img-responsive rounded-circle">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-4">
                <img src="img/vany400.png" alt="" class="img-responsive rounded-circle">
              </div>
              <div class="col-8 text-start" >
                <h3>Vany Ripani Ter.kep
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sunt rem unde, expedita similique ratione?</p>
                <p>putra dari bapak lorem<br> dan <br> Ibu Ipsum</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <ul>
      
    </ul>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      const stickyTop = document.querySelector('.sticky-top')
      const offcanvas = document.querySelector('.offcanvas')

      offcanvas.addEventListener('show.bs.offcanvas', function(){
        stickyTop.style.overflow = 'visible'
      })


      offcanvas.addEventListener('hidden.bs.offcanvas', function(){
        stickyTop.style.overflow = stickyTop.style.overflow = 'hidden'
      })
    </script>
  </body>
</html>