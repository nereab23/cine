@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        categorias
       </div>
       <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categorias as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$item->nombre}}:</td>
                    <td>{{$item->descripcion}}</td> 
                    <td>
                        <a href="{{url('categorias/'.$item->id.'/edit')}}">
                            <button type="button" class="btn btn-outline-primary"><i class="fas fas-pencil"></i>Editar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </div>

@endsection()


