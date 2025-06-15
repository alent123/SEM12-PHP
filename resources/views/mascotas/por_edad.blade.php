<html>
    <body>
        <h1>Mascotas ordenadas por edad ({{ $orden }})</h1>
        <ul>
            @foreach($mascotas as $mascota)
                <li>{{ $mascota->nombre }} - {{ $mascota->raza }} - {{ $mascota->edad }} años</li>
            @endforeach
        </ul>
    </body>
</html>
