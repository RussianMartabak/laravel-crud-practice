<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cast;

class CastController extends Controller
{
    //
    function Create() {
        return view('create');
    }
    function Index() {
        $casts = Cast::all();
        return view('allcast', compact('casts'));
    }
    function store(Request $request) {
        $cast = new Cast;
        $cast->nama = $request->name;
        $cast->umur = $request->age;
        $cast->bio = $request->bio;

        $cast->save();
        return redirect('/cast');
    }
    function show($cast_id) {
        $cast = Cast::where('id', $cast_id)->first();
        return view('show', compact('cast'));
    }
    function edit($cast_id) {
        $cast = Cast::where('id', $cast_id)->first();
        return view('edit', compact('cast'));
    }
    function update(Request $request, $cast_id) {
        $cast = Cast::find($cast_id);
        $cast->nama = $request->name;
        $cast->umur = $request->age;
        $cast->bio = $request->bio;
        $cast->save();
        return redirect('/cast');
    }
    function destroy($cast_id) {
        $cast = Cast::find($cast_id);
        $cast->delete();
        return redirect('/cast');
    }
}
