<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <h1>Acceso a la página</h1>

  <form action="?method=auth" method="post">
    <label for="">Nombre:  </label>
    <input type="text" name="name">
    <br>
    <label for="">Contraseña:  </label>
    <input type="text" name="password">
    <br>
    <input type="submit" value="Acceder">
  </form>
</body>
</html>