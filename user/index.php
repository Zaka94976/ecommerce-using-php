<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home</title>
    <?php
    include 'header.php'
    ?>
</head>

<body>
    <div class="container-fluid ">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-warning font-monospace text-center my-3">Home</h1>
                <?php
                include 'config.php';
                $record = mysqli_query($con, "SELECT * FROM `tdlproduct`");
                while ($row = mysqli_fetch_array($record)) {
                    $check_page=$row['Pcategory'];
                    if( $check_page==='Home'){
                    echo "
                            <div class='col-md-4 col-md-4 my-4'>
                            <form action='Insertcart.php' method='POST'>
                                 <div class='card auto' style='width: 18rem;'>
                                 <img src='../admin/product/$row[Pimage]' class='card-img-top'>
                                    <div class='card-body text-center'>
                                  <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
                                 <p class='card-text  text-danger fs-4 fw-bold'>RS:$row[PPrice]</p> 
                                 <input type='hidden' name='PName' value='$row[PName]'>
                                 <input type='hidden' name='PPrice' value='$row[PPrice]'>
                                 <input type ='number' name='PQuantity' value ='min='1' max='20' placeholder='Quantity'><br><br>
                                 <input type ='submit' name='addCart' class='btn btn-danger text-white w-100' value='Add To cart'  > 
                                 </div>
                             </div>
                             </form>
                       </div>
             ";
                }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
