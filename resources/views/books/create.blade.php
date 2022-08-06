@extends('layouts.app')


@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('books-create') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro de Libro</h3>
        @include('messeges.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($books->name)?$books->name:old('name') }}">
        </div>

        <div class="form-group">
            <label for="ediction">Edicion</label>
            <input type="text" class="form-control {{$errors->has('ediction')? 'is-invalid':''}}" name="ediction" id="ediction"
                   value="{{isset($books->ediction)?$books->ediction:old('ediction') }}" >
        </div>


        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control {{$errors->has('year')? 'is-invalid':''}}" name="year" id="year"
                   value="{{isset($books->year)?$books->year:old('Year') }}">
        </div>


        <div class="form-group">
            <label for="year">Author</label>
            <input type="number" class="form-control {{$errors->has('author')? 'is-invalid':''}}" name="year" id="author"
                   value="{{isset($books->author)?$books->author:old('author') }}">
        </div>
        <div class="form-group hidden">
            <label for="name">Editorial</label>
            <select name="Editorial_id_editorial" id="Editorial_id_editorial" class="form-control form-control-lg"
                    value="{{isset($books->Editorial_id_editorial)?$books->Editorial_id_editorial:old('Editorial_id_editorial') }}">
                <option selected>selecione</option>
                @foreach ($editorials as $editorial)

                    <option value="{{ $editorial->Editorial_id_editorial }}">{{ $editorial->name }}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection
