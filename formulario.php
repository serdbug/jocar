<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    
    <form method="post" action="agregar.php">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>

        <label for="dni">DNI:</label>
        <input type="number" name="dni" id="dni" required><br><br>
        
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
