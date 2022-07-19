@extends('admin.template.base')

@section('mainContent')
    <h1>Insert new Comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div>

            <label for="">title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>

            <label for="">description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>

            <label for="">price</label>
            <input type="text" name="price" id="price">
        </div>
        <div>

            <label for="">series</label>
            <input type="text" name="series" id="series">
        </div>
        <div>

            <label for="">type</label>
            <input type="text" name="type" id="type">
        </div>

        <button>Save</button>


    </form>
@endsection
