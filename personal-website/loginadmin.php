<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
  <div class="container login-container" style="max-width: 400px; margin: 100px auto;">
    <h2 class="text-center mb-4">Login - Admin</h2>
    <?php if (isset($_SESSION["errors"])): ?>
                <div class="alert alert-danger p-2 mb-2" role="alert">
                    <ul>
                        <?php foreach($_SESSION["errors"] as $errorlog): ?>
                            <li><?php echo $errorlog; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php unset($_SESSION['errors']); endif; ?>
    <form action="./handel/handlelogin.php" method="post">
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email (test@test.com)" >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Password (12345678)" >
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
