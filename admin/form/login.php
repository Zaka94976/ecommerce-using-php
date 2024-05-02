<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
<div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto Shadow bg-white p-3  border border-primary mt-3">

                <form action="login1.php" method="POST" >
                    <div class="mb-3">
                        <p class=" text-center fw-bold fs-3 text-warning">Login:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name </label>
                        <input type="text" name="username" class="form-control" placeholder="Enetr username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password </label>
                        <input type="password" name="Userpassword" class="form-control" placeholder="Enetr userpassword">
                    </div>
                    <button class=" bg-danger fs-4 fw-bold my-3 form-control text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>