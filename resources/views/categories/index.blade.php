@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Categorias</h3>

            <a href="{{ routeTenant('categories.create') }}" class="btn btn-default">Nova Categoria</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ routeTenant('categories.edit', ['id' => $category->id]) }}" class=" btn btn-default btn-sm">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
