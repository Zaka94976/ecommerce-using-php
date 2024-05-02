<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product-page</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto  border border-primary mt-3">

                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class=" text-center fw-bold fs-3 text-warning">product Detail:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name </label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enetr Product name ">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price </label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enetr Product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Add Product image </label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select page Category </label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <button class=" bg-danger fs-4 fw-bold my-3 form-control text-white" name="submit">Uplode</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto ">
                <table class="table table-hover border border-warning  my-5">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center ">
                        <th>Id</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>image</th>
                        <th>Category</th>
                        <th>Delete</th>
                    </thead>
                    <tbody class="text-cenetr">
                        <?php
                        include 'config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tdlproduct`");
                        while ($row = mysqli_fetch_array($Record))
                            echo "
           
           <tr>
            <td>$row[Id]</td>
            <td>$row[PName]</td>
            <td>$row[PPrice]</td>
            <td><img src='$row[Pimage]' height='50px' width='200px'</td>
            <td>$row[Pcategory]</td>
            <td><a href='' class='btn btn-danger'>Home</a></td>
           </tr>
          ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>