<?php
// login-form.php
if (isset($_GET['error'])) {
    $error = "Username atau password salah!";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin - YLBH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { background: #f4f4f4; }
    .login-container {
      max-width: 400px; margin: 80px auto; padding: 2rem;
      background: white; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    .form-control:focus {
      border-color: #800000;
      box-shadow: 0 0 0 0.2rem rgba(128, 0, 0, 0.25);
    }
    .btn-primary { background-color: #800000; border: none; }
    .btn-primary:hover { background-color: #a52a2a; }
  </style>
</head>
<body>
  <div class="login-container">
    <h4 class="text-center mb-4">Login Admin YLBH</h4>

    <?php if (isset($error)) : ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>

    <div class="text-center mt-3">
      <a href="../index.html" class="text-decoration-none text-muted small">
        ← Kembali ke Beranda
      </a>
    </div>
  </div>
</body>
</html>
