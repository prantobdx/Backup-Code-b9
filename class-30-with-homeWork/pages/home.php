<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Home</title>
</head>
<body>
<?php include 'pages/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">All Product</h1>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <?php foreach ($products as $product) {?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/image/<?php echo $product['image']?>" style="width: 100%" height="250px;">
                        <div class="card-body">
                            <h4>Name : <?php echo $product['name']?></h4>
                            <p>Product Price : <?php echo $product['price']?></p>
                            <p>Product Description : <?php echo $product['description']?></p>
                            <p>Made in : <?php echo $product['company_name']?></p>
                            <a href="action.php?page=details&&id=<?php echo $product['id']?>" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include 'pages/footer.php'?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>