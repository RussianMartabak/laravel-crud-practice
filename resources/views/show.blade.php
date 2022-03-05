@extends('layouts.master')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
@endpush

@section('title')
    {{$cast->nama}}
@endsection

@section('content')
    
   <h1>{{$cast->nama}}</h1>
   <h3>Age</h5>
    <br>
   <p>{{$cast->umur . " years old"}}</p>
   <h3>Bio</h5>
    <br>
   <p>{{$cast->bio}}</p>
   <a href="/cast/{{$cast->id}}/edit" class="btn btn-warning">Edit</a>

@endsection