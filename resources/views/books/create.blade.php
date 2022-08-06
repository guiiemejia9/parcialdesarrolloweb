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
            <input type="text" class="form-control {{$errors->has('edition')? 'is-invalid':''}}" name="edition" id="edition"
                   value="{{isset($books->edition)?$books->edition:old('edition') }}" >
        </div>


        <div class="form-group">
            <label for="year">Año</label>
            <input type="date" class="form-control {{$errors->has('year')? 'is-invalid':''}}" name="year" id="year"
                   value="{{isset($books->year)?$books->year:old('Year') }}">
        </div>


        <div class="form-group">
            <label for="year">Author</label>
            <input type="text" class="form-control {{$errors->has('author')? 'is-invalid':''}}" name="author" id="author"
                   value="{{isset($books->author)?$books->author:old('author') }}">
        </div>
        <div class="form-group hidden">
            <label for="name">Editorial</label>
            <select name="Editorial_id" id="Editorial_id" class="form-control form-control-lg"
                    value="{{isset($books->Editorial_id)?$books->Editorial_id:old('Editorial_id') }}">
                <option selected>selecione</option>
                @foreach ($editorials as $editorial)

                    <option value="{{ $editorial->id_editorial }}">{{ $editorial->name }}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection
