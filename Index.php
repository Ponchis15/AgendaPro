<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - DecoRom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #c2e9fb, #a1c4fd);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <div class="card col-md-4">
    <h2 class="text-center mb-4">Iniciar Sesión</h2>
    <form id="loginForm">
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
  </div>

  <script>
    // Si ya hay sesión iniciada, redirigir automáticamente
    const userRole = localStorage.getItem('userRole');
    if (userRole === 'admin') {
      window.location.href = 'admin.html';
    } else if (userRole === 'decorador') {
      window.location.href = 'decorador.html';
    }

    document.getElementById("loginForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      if (username === "admin" && password === "admin123") {
        localStorage.setItem('userRole', 'admin');
        window.location.href = "admin.html";
      } else if (username === "decorador" && password === "decorador123") {
        localStorage.setItem('userRole', 'decorador');
        window.location.href = "decorador.html";
      } else {
        alert("Credenciales incorrectas. Inténtalo nuevamente.");
      }
    });
  </script>
</body>

</html>
