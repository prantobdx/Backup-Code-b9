<?php include 'pages/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Product Details</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="assets/img/<?php echo $productDetails['image'] ?>" alt="">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $productDetails['name'] ?></h4>
                        <p><?php  echo  $productDetails['price'] ?></p>
                        <p><?php  echo  $productDetails['description'] ?></p>
                        <p><?php  echo  $productDetails['company_name'] ?></p>
                        <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="btn btn-outline-primary">details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/footer.php' ?>