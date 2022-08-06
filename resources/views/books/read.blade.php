@extends('layouts.app')

@section('content')
    @include('messeges.messages')
    <h3 class="my-1 text-center">Tabla de Clietes</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edicion</th>
                <th scope="col">Año</th>
                <th scope="col">Autor</th>
                <th scope="col">Editorial</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bookss as $books)
                <tr>
                    <th scope="row">{{ $books->id_books }}</th>
                    <td>{{ $books->name }}</td>
                    <td>{{ $books->edition }}</td>
                    <td>{{ $books->year }}</td>
                    <td>{{ $books->author}}</td>
                    <td>{{ $books->Editorial_id}}</td>

                    <th>


                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
