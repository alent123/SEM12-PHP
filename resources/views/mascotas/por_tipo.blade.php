<html>
<body>
    <h1>Mascotas de tipo: {{ $tipo }}</h1>
    @if($mascotas->isEmpty())
        <p>No se encontraron mascotas de este tipo.</p>
    @else
        <ul>
            @foreach($mascotas as $mascota)
                <li>
                    {{ $mascota->nombre }} - 
                    {{ $mascota->raza }} - 
                    {{ $mascota->edad }} años - 
                    {{ $mascota->peso }} kg
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
