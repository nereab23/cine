@foreach ($directores as $directores)
    <div>
        {{$directores->nombre}}:<br>
        {{$directores->defecha_nac}}<br>
        {{$directores->biografia}}:<br>
        <hr>    
    </div>
@endforeach
