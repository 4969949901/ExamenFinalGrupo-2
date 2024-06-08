<!-- resources/views/alumnos/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Alumno</title>
</head>
<body>
<h1>Detalles del Alumno</h1>
<p><strong>CARNE:</strong> {{ $alumno->CARNE }}</p>
<p><strong>Nombre:</strong> {{ $alumno->NOMBRE_ALUMNO }}</p>
<p><strong>Correo Institucional:</strong> {{ $alumno->CORREO_INSTITUCIONAL }}</p>
<p><strong>Teléfono:</strong> {{ $alumno->TELEFONO }}</p>
<a href="{{ route('alumnos.index') }}">Volver</a>
</body>
</html>
