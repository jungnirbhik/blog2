<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }

      html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 4;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
</head>
<body class="d-flex align-items-center py-5 bg-body-tertiary">
<main class="form-register w-100 m-auto">
  <form action="register_process.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">User Registration</h1>

    
      
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username"required>
      <label for="floatingInput">Username</label><br>
    </div>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput"  placeholder="someone@gmail.com"required>
      <label for="floatingInput">Email</label><br>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"required>
      <label for="floatingPassword">Password</label><br>
    </div>
    <div class="form-floating">
      <input name="repassword" type="repassword" class="form-control" id="floatingPassword" placeholder="repassword"required>
      <label for="floatingPassword">repassword</label><br>
    </div>
  <div class="my-2">Already have an account? <a href="login.php">Login here</a></div>

    <div class="form-check text-start my-3">
      <input name="terms" class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">Accept terms and conditions
      <label class="form-check-label" for="flexCheckDefault">
        
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Submit</button>
<b/r>
    <p class ="mt-4 mb-4 text-muted">&copy;copyright <?=date("Y")?></p>
  </form>
</main>
</body>
</html>

