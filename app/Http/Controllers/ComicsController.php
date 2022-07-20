<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }


    public function create()
    {
        return view('admin.comics.create');
    }


    public function store(Request $request)
    {
       $data = $request->all();
       $comic = new Comic();
       $comic->title = $data['title'];
       $comic->price = $data['price'];
       $comic->type = $data['type'];
       $comic->series = $data['series'];

       $comic->save();

       return redirect()->route('comics.show', ['comic'=> $comic->id]);

    }


    public function show(Comic $comic)
    {

      return view('admin.comics.show', compact('comic'));
    }


    public function edit(Comic $comic)
    {

        return view('admin.comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $formData =  $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', ['comic'=> $comic]);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
