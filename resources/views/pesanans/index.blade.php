@extends('layouts.app')

@section('content')
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $katalogs->nama_katalogs }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $katalogs->gambar }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $katalogs->nama_katalogs }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <div class="panel-heading"><h2>Pemesanan</h2></div>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $katalogs->keterangan }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Jumlah pesanan</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('pesanans') }}/{{ $katalogs->id }}" >
                                            @csrf
                                                <input type="text" name="jumlah_pesanans" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Pesan</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        
<body>
<div class="container">
     
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Upload design disini</h2></div>
      <div class="panel-body">
     
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
    
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        </form>
    
      </div>
    </div>
</div>
</body>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
