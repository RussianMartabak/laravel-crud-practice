@extends('layouts.master')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush

@section('title')
    Create a Cast
@endsection

@section('content')
    <div class="container">
        <form action="/cast" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter Name" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="age">Age</label>
                <input type="text" class="form-control" autocomplete="off" pattern="\d+" title="age is a number" name="age" placeholder="Enter Age" id="age" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Biography</label>
                <textarea name="bio" class="form-control" id="bio" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection