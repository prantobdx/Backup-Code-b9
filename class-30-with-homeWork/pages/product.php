<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <div class="row py-5">
            <?php foreach ($products as $product){ ?>
            <div class="col-md-4">
                <div class="card">
                        <img src="assets/image/<?php echo $product['image'] ?>" style="height:250px;">
                    <div class="card-body">
                        <h4><?php echo $product['name']?></h4>
                        <p><?php echo $product['price']?></p>
                        <p><?php echo $product['description']?></p>
                        <p><?php echo $product['company_name']?></p>
                        <a class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                        <a class="btn btn-success" href="action.php?page=product-details&&id=<?php echo $product['id']?>">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<?php include 'pages/footer.php'?>
