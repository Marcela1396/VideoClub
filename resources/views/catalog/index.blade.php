@extends('layouts.master')
@section('content')
<div class="container">
    <div class = "row">
        @foreach($peliculas as $p)
        <div class = "col-md-4">
            <div class="card" style="width: 15rem;">
            <img src='{{url("/img/$p->poster")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p class="card-text" align="justify"> {{ $p->synopsis }} </p>
                    <p class="card-text" align="justify"> Año: {{ $p->year }} </p>
                    <p class="card-text" align="justify"> Director: {{ $p->director }} </p>
                    @if($p->rented == 0)
                        <p class="card-text" align="justify"> Estado: Disponible </p>
                    @else
                        <p class="card-text" align="justify"> Estado: Ocupada </p>
                    @endif
                    
                    <a href="#" class="btn btn-primary">Editar Pelicula</a> <br><br>
                    <a href="#" class="btn btn-danger">Devolver Pelicula</a>
                </div>
            </div>
        </div>
        @endforeach
        <br> <br>
        <div class = "col-md-12" align="center">
            <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>    
</div>
@stop
