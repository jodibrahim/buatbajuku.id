@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="mt-3">


  <h1 class="mb-3">Turnamen Terbaru</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-3 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ url('uploads/mlbb-war-friday-s1-banner.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style=" background : orange; width: 20px;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style=" background : orange; width: 20px;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-0">
        <div class="container-fluid">
        <div class="mt-3">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <a href="{{ url('/') }}"><h5 class="mb-0 font-weight-bold">Lihat Turnamen Lainnya</h5></a>
                    </button>
   
   </div>
   </div>
   </div>
   </div>
</div>
</div>

<div class="row">
                        <div class="col">
                            <div class="block-title-wrap">
                                <h4 class="block-title">
                                    <span class="pulldown-size">Podcast Pilihan</span>
                                </h4>
                                <div class="readmore"><a href="/media">
                                    <span>Podcast Selanjutnya <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <article class="post">
                                    <figure class="post-image">
                                        <a href="/media/esports/free-fire/ffml-season-3-match-day-1">
                                            <div class="lazyload-wrapper">
                                                <img alt="A view of the sea" src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2021/01/free-fire-master-league-featured-2-320x180.jpg" class="img-fluid">
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="/media/esports/free-fire/ffml-season-3-match-day-1">Hari Pertama FFML Season 3 Divisi 1 Berlangsung Sengit, ONIC OLYMPUS Triple Booyah!</a>
                                        </h2>
                                        <p class="post-meta">
                                            <span class="post-category">Esports</span>
                                            <span class="post-date">Januari 16, 2021</span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-3">
                                <article class="post">
                                    <figure class="post-image">
                                        <a href="/media/esports/free-fire/pembagian-grup-ffml-season-3">
                                            <div class="lazyload-wrapper">
                                                <img alt="A view of the sea" src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2021/01/grup-ffml-season-3-featured-320x180.jpg" class="img-fluid">
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="/media/esports/free-fire/pembagian-grup-ffml-season-3">Inilah Seluruh Tim dan Pembagian Grup Free Fire Master league (FFML) Season III, Cek Grup Jagoanmu!</a>
                                        </h2>
                                        <p class="post-meta">
                                            <span class="post-category">Esports</span>
                                            <span class="post-date">Januari 16, 2021</span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-3">
                                <article class="post">
                                    <figure class="post-image">
                                        <a href="/media/esports/free-fire/update-map-bermuda-remastered-ff">
                                            <div class="lazyload-wrapper">
                                                <img alt="A view of the sea" src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2021/01/update-bermuda-cv-320x180.jpg" class="img-fluid">
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="/media/esports/free-fire/update-map-bermuda-remastered-ff">Seperti Apa Update Garena di Map Bermuda Free Fire? Ini Detailnya!</a>
                                        </h2>
                                        <p class="post-meta">
                                            <span class="post-category">Esports</span>
                                            <span class="post-date">Januari 16, 2021</span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-3">
                                <article class="post">
                                    <figure class="post-image">
                                        <a href="/media/esports/mobile-legends/turnamen-mobile-legend-iec-cup-adv">
                                            <div class="lazyload-wrapper">
                                                <img alt="A view of the sea" src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2021/01/turnamen-mobile-legend-320x180.jpg" class="img-fluid">
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="/media/esports/mobile-legends/turnamen-mobile-legend-iec-cup-adv">Dijamin oleh GGWP.ID, Turnamen MLBB Team IEC Cup Season 4 Sudah Dibuka</a>
                                        </h2>
                                        <p class="post-meta">
                                            <span class="post-category">Esports</span>
                                            <span class="post-date">Januari 16, 2021</span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
