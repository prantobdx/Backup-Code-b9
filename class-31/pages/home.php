
<?php include 'pages/header.php' ?>

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
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body ">
                            <form action="action.php" method="post">
                                <label for="" class="">Name</label>
                                <input type="text" name="name" class="form-control mb-3" placeholder="your name">
                                <label for="" class="">Phone</label>
                                <input type="text" name="phone" class="form-control mb-3" placeholder="phone">
                                <label for="" class="">Email</label>
                                <input type="email" name="email" class="form-control mb-3" placeholder="email">
                                <label for="" class="">Seip Id</label>
                                <input type="number" name="seip_id" class="form-control mb-3" placeholder="Seip Id">

                                <input type="submit" name="submit_btn" class="btn btn-danger mt-3" placeholder="Seip Id">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'pages/footer.php'?>
