@extends('admin.template.base')

@section('mainContent')
    <h1>Insert new Comic</h1>

    <form action="{{route('comics.update', ['comic'=> $comic])}}" method="post">
        @method('PUT')
        @csrf
        <div>

            <label for="">title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div>

            <label for="">price</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div>

            <label for="">series</label>
            <input type="text" name="series" id="series"value="{{$comic->series}}">
        </div>
        <div>

            <label for="">type</label>
            <input type="text" name="type" id="type"value="{{$comic->type}}">
        </div>

        <button>Save</button>


    </form>
@endsection
