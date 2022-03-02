@extends('layouts.master')

@section('title')
    Form Page   
@endsection

@section('content')
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label for="first-name">First name :</label>
        <br><br>
        <input type="text" id="first-name" name="first-name" autocomplete="off">
        <br><br>
        <label for="last-name">Last name :</label>
        <br><br>
        <input type="text" id="last-name" name="last-name" autocomplete="off">
        <br><br>
        <label for="gender">Gender :</label>
        <br><br>
        <input type="radio" id="male" value="male" name="gender" required>
        <label for="male">Male</label>
        <br>
        <input type="radio" id="female" value="female" name="gender" required>
        <label for="male">Female</label>
        <br><br>
        <label for="nationality">Nationality</label>
        <br><br>
        <select id="nationality" name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="japan">Japan</option>
            <option value="korea-dprk">Korea DPRK</option>
            <option value="china">People's Republic of China</option>
        </select>
        <br>
        <div>
            <p>Language Spoken</p>
            <input type="checkbox" id="bahasa-indonesia">
            <label for="bahasa-indonesia">Bahasa Indonesia</label>
            <br>
            <input type="checkbox" id="english">
            <label for="english">English</label>
            <br>
            <input type="checkbox" id="other">
            <label for="other">Other</label>
        </div>
        <br><br>
        <label for="bio">Bio</label>
        <br>
        <textarea name="bio" id="bio" rows="10" cols="30"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
@endsection