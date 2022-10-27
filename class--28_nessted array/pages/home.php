
<?php include'pages/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">All Product Info</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4">
                    <div class="card mt-5">
                        <img src="assets/img/<?php echo $product['image'] ?>" alt=""  height="280px">
                        <div class="card-body">
                            <h4><?php echo $product['name'] ?></h4>
                            <p><?php echo $product['price'] ?></p>
                            <p><?php echo $product['description'] ?></p>
                            <p><?php echo $product['company_name'] ?></p>
                            <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="btn btn-outline-primary">details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include'pages/footer.php'?>
