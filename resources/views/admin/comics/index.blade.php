@extends('admin.template.base')

@section('mainContent')
    <main>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>price</th>
                    <th>series</th>
                    <th>type</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)

                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic'=> $comic])}}" class="btn btn-primary"> View</a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', ['comic'=> $comic])}}" class="btn btn-primary"> Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', ['comic'=> $comic])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>



        <
    </main>

@endsection
