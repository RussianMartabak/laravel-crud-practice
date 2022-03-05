@extends('layouts.master')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
@endpush

@section('title')
    Semua Cast
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="cast/create"><button type="button"  class="btn btn-primary d-block mx-auto">Tambah Cast</button></a>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="container">
        @foreach ($casts as $cast)
        <div class="card my-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$cast->nama}}</h5>
                <p class="card-text"></p>
                <a href="/cast/{{$cast->id}}" class="btn btn-primary">Detail</a>
                <a href="/cast/{{$cast->id}}/edit" class="btn btn-warning">Edit</a>
                <form class="d-inline" action="/cast/{{$cast->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div> 
        @endforeach
     
    </div>
@endsection