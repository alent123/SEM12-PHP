<html>
<head>
    <title>Consultas de Mascotas</title>
</head>
<body>
    <h1>Consultas sobre mascotas</h1>

    <h2>Buscar por tipo</h2>
    <form action="{{ route('mascotas.por_tipo') }}" method="GET">
        <label>Tipo de mascota:</label>
        <input type="text" name="tipo" required>
        <button type="submit">Buscar</button>
    </form>

    <h2>Ordenar por edad</h2>
    <form action="{{ route('mascotas.por_edad') }}" method="GET">
        <label>Orden:</label>
        <select name="orden">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select>
        <button type="submit">Ordenar</button>
    </form>

    <h2>Filtrar por tipo y raza</h2>
    <form action="{{ route('mascotas.filtro') }}" method="GET">
        <label>Tipo:</label>
        <input type="text" name="tipo" required>
        <label>Raza:</label>
        <input type="text" name="raza" required>
        <label>Cantidad:</label>
        <input type="number" name="limite" value="5" required>
        <button type="submit">Filtrar</button>
    </form>
</body>
</html>
