@extends('admin.template.base')

@section('mainContent')
    <main>


        @foreach ($comics as $comic)
        <div>
            <h4>
                ID: {{$comic->id}}

            </h4>
            <h4>
                Titolo :{{$comic->title}}

            </h4>
            <h4>
                Descrizione:{{$comic->description}}

            </h4>
        </div>

        @endforeach

        <
    </main>

@endsection
