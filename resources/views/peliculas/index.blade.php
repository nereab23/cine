@foreach ($peliculas as $peliculas)
    <div>
        {{$peliculas->titulo}}:<br>
        {{$peliculas->descripcion}}<br>
        {{$peliculas->anio}}<br>
        {{$peliculas->duracion}}<br>
        <hr>    
    </div>
@endforeach
