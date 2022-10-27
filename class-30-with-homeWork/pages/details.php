<?php include 'pages/header.php'?>
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
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/image/<?php echo $productById['image']?>" style="max-height: 450px;" width="100%;">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4>Product Name : <?php echo $productById['name']?></h4>
                        <p>Category name : <?php echo $productById['category_name']?></p>
                        <p>Brand Name : <?php echo $productById['brand_name']?></p>
                        <p>Product Price : <?php echo $productById['price']?></p>
                        <p>Product Description : <?php echo $productById['description']?></p>
                        <p>Made in : <?php echo $productById['company_name']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'pages/footer.php'?>