@extends('layouts.app')


@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('Books-create') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro de Libro</h3>
        @include('messeges.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($customer->name)?$customer->name:old('name') }}">
        </div>

        <div class="form-group">
            <label for="ediction">Edicion</label>
            <input type="text" class="form-control {{$errors->has('ediction')? 'is-invalid':''}}" name="ediction" id="ediction"
                   value="{{isset($Books->ediction)?$Books->ediction:old('ediction') }}" >
        </div>


        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control {{$errors->has('year')? 'is-invalid':''}}" name="year" id="year"
                   value="{{isset($Books->year)?$Books->year:old('Year') }}">
        </div>


        <div class="form-group">
            <label for="year">Author</label>
            <input type="number" class="form-control {{$errors->has('author')? 'is-invalid':''}}" name="year" id="author"
                   value="{{isset($Books->author)?$Books->author:old('author') }}">
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection
