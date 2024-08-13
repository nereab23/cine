@foreach ($funciones as $funciones)
    <div>
        {{$funciones->fecha}}:<br>
        {{$funciones->hora}}<br>
        <hr>    
    </div>
@endforeach
