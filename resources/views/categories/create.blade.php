@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Nova Categoria</h3>

        {!! Form::open(['url' => route('categories.store'), 'class' => 'form']) !!}

        @include('categories._form')

        <div class="form-group">
            {!! Form::submit('Criar Categoria', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
