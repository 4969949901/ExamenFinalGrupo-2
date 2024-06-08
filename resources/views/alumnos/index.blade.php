<!-- resources/views/alumnos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
</head>
<body>
<h1>Lista de Alumnos</h1>
<a href="{{ route('alumnos.create') }}">Crear nuevo alumno</a>
<table>
    <thead>
    <tr>
        <th>CARNE</th>
        <th>Nombre</th>
        <th>Correo Institucional</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->CARNE }}</td>
            <td>{{ $alumno->NOMBRE_ALUMNO }}</td>
            <td>{{ $alumno->CORREO_INSTITUCIONAL }}</td>
            <td>{{ $alumno->TELEFONO }}</td>
            <td>
                <a href="{{ route('alumnos.show', $alumno->CARNE) }}">Ver</a>
                <a href="{{ route('alumnos.edit', $alumno->CARNE) }}">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno->CARNE) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
