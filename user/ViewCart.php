<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>viewCart</title>
</head>

<body>
    <?php
    include 'header.php'
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning ">My cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justufy-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-border text-center">
                    <thead class="bg-danger text-white fs-5 ">
                        <th>index no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th> Product Quantity</th>
                        <th>Total price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $value['productPrice'] * $value['productQuantity'];
                                echo "
                                <form action='Insertcart.php' method='POST'>
                                <tr>
                                <td>$key</td>
                                <td><input type ='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                <td><input type ='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                <td><input type ='text' name='PQuantity' value='$value[productQuantity]'></td>
                                <td> $total</td>
                                <td><button name='Update' class='btn-danger'>Update</button></td>
                                <td><button name='remove' class='btn-danger'>Delete</button></td>
                                <td><input type ='text' name='item' value='$value[productName]'></td>
                                </tr>
                                </form>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>