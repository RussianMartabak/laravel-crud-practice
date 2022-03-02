@extends('layouts.master')

@section('title')
   Welcome 
@endsection

@section('content')

    <h1>SELAMAT DATANG! {{$fname . " " . $lname}}</h1>
    <h3>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</h3>
@endsection
