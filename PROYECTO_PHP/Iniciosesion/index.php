<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cruc en php y msql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    


<link rel="stylesheet" href="style1.css">


  
</head>
<body>
    
<button class="volver" onclick="">Volver</button>


  <div class="form-container">
    <h2>Agregar Usuario</h2>
    <form action="#" method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="contrasena">Contraseña:</label>
      <div class="password-container">
        <input type="password" id="contrasena" name="contrasena" required>
        <button type="button" class="toggle-password" onclick="togglePassword()">Ver</button>
      </div>

      <button type="submit">Agregar</button>
    </form>
  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById("contrasena");
      const btn = document.querySelector(".toggle-password");
      if (input.type === "password") {
        input.type = "text";
        btn.textContent = "Ocultar";
      } else {
        input.type = "password";
        btn.textContent = "Ver";
      }
    }
  </script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>