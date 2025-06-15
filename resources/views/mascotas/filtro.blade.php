<html>
<body>
    <h1>
        Filtrado por tipo: {{ $tipo }}, raza: {{ $raza }}, mostrando {{ $limite }} resultados
    </h1>
    @if($mascotas->isEmpty())
        <p>No se encontraron mascotas con ese tipo y raza.</p>
    @else
        <ul>
            @foreach($mascotas as $mascota)
                <li>
                    {{ $mascota->nombre }} - {{ $mascota->tipo }} - {{ $mascota->raza }} - {{ $mascota->edad }} años
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
