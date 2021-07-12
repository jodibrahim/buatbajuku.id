@extends('layouts.app')

@section('content')
<div class ="container">
    <div class ="row justify-content-center">
         <div class="col-md-8">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
        
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
        @foreach($katalogs as $katalog)
      <div class="carousel-item col-md-3 active">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $katalog->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $katalog->nama_katalog }}</h5>
                
                <a href="{{ url('pesanans') }}/{{ $katalog->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        
        @endforeach
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
@endsection
