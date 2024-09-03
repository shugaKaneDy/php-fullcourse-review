<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-success-subtle">

  <h3 class="my-5 text-center">Sign Up</h3>
  <div class="d-flex justify-content-center bg-body-tertiary p-5 rounded shadow-sm w-25 mx-auto mb-5">
    <form action="includes/sign-up.formhandler.inc.php" method="post">
      <div class="mb-3">
        <input class="form-control" type="text" name="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <input class="form-control" type="password" name="pwd" placeholder="Password">
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="email" placeholder="E-Mail">
      </div>
      <div class="text-center">
        <button class="btn btn-success">Sign-up</button>
      </div>
    </form>
  </div>

  <h3 class="my-5 text-center">Change Account</h3>
  <div class="d-flex justify-content-center bg-body-tertiary p-5 rounded shadow-sm w-25 mx-auto mb-5">
    <form action="includes/sign-up.userupdate.inc.php" method="post">
      <div class="mb-3">
        <input class="form-control" type="text" name="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <input class="form-control" type="password" name="pwd" placeholder="Password">
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="email" placeholder="E-Mail">
      </div>
      <div class="text-center">
        <button class="btn btn-secondary">Update</button>
      </div>
    </form>
  </div>

  <h3 class="my-5 text-center">Delete Account</h3>
  <div class="d-flex justify-content-center bg-body-tertiary p-5 rounded shadow-sm w-25 mx-auto mb-5">
    <form action="includes/sign-up.userdelete.inc.php" method="post">
      <div class="mb-3">
        <input class="form-control" type="text" name="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <input class="form-control" type="password" name="pwd" placeholder="Password">
      </div>
      <div class="text-center">
        <button class="btn btn-danger">Delete</button>
      </div>
    </form>
  </div>

  <h3 class="my-5 text-center">Search</h3>
  <div class="d-flex justify-content-center bg-body-tertiary p-5 rounded shadow-sm w-25 mx-auto mb-5">
    <form action="search.php" method="post">
      <div class="mb-3">
        <input class="form-control" type="text" name="userSearch" placeholder="Username">
      </div>
      <div class="text-center">
        <button class="btn btn-primary">Search</button>
      </div>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>