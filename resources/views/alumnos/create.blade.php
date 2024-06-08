<!-- resources/views/alumnos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear Alumno</title>
</head>
<body>
<h1>Crear Alumno</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <div>
        <label for="CARNE">CARNE:</label>
        <input type="text" name="CARNE" value="{{ old('CARNE') }}" required>
    </div>
    <div>
        <label for="NOMBRE_ALUMNO">Nombre:</label>
        <input type="text" name="NOMBRE_ALUMNO" value="{{ old('NOMBRE_ALUMNO') }}" required>
    </div>
    <div>
        <label for="CORREO_INSTITUCIONAL">Correo Institucional:</label>
        <input type="email" name="CORREO_INSTITUCIONAL" value="{{ old('CORREO_INSTITUCIONAL') }}" required>
    </div>
    <div>
        <label for="TELEFONO">Teléfono:</label>
        <input type="text" name="TELEFONO" value="{{ old('TELEFONO') }}" required>
    </div>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
