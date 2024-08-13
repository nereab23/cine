@foreach ($reservas as $reservas)
    <div>
        {{$reservas->asientos}}:<br>
        <hr>    
    </div>
@endforeach
