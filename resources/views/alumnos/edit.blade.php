<!-- resources/views/alumnos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
</head>
<body>
<h1>Editar Alumno</h1>
<form action="{{ route('alumnos.update', $alumno->CARNE) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="NOMBRE_ALUMNO">Nombre:</label>
        <input type="text" name="NOMBRE_ALUMNO" value="{{ $alumno->NOMBRE_ALUMNO }}" required>
    </div>
    <div>
        <label for="CORREO_INSTITUCIONAL">Correo Institucional:</label>
        <input type="email" name="CORREO_INSTITUCIONAL" value="{{ $alumno->CORREO_INSTITUCIONAL }}" required>
    </div>
    <div>
        <label for="TELEFONO">Teléfono:</label>
        <input type="text" name="TELEFONO" value="{{ $alumno->TELEFONO }}" required>
    </div>
    <button type="submit">Actualizar</button>
</form>
</body>
</html>
