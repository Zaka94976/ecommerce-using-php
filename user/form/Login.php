<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace  border border-info ">
        <p class="text-warning fs-3 fw-bold my-3 text-center">Login</p>
        <form action="Login.php" method="POST">
          <div class="mb-3">
            <label for="Username">Username:</label>
            <input type="text" name="name" placeholder="Enter User Name" class="form-control">
          </div>
          <div class="mb-3">
            <button type="submit" name="submit" class="w-100 bg-warning fs-4 text-white">Login</button>
          </div>
          <div class="mb-3">
            <a href="Registration.php" class="w-100 bg-danger fs-4 text-white btn">Already have an account</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
