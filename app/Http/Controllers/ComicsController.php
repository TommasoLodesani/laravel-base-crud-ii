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

       $comic->save();

    }


    public function show(Comic $comic)
    {

      return view('admin.comics.show', compact('comic'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
