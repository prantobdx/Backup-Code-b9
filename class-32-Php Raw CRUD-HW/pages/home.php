
<?php include 'pages/header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Insert Student Details</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <h1 class="text-center"><?php echo isset($message) ? $message : ' '?></h1>
                        <div class="card-body ">
                            <form action="action.php" method="post">
                                <label for="" class="">Name</label>
                                <input type="text" name="name" class="form-control mb-3" placeholder="Your name">
                                <label for="" class="">Roll</label>
                                <input type="text" name="roll" class="form-control mb-3" placeholder="Roll Number">
                                <label for="" class="">Phone</label>
                                <input type="text" name="phone" class="form-control mb-3" placeholder="Phone">
                                <label for="" class="">Email</label>
                                <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                <label for="" class="">Department</label>
                                <input type="text" name="dept" class="form-control mb-3" placeholder="Department">
                                <label for="" class="">Session</label>
                                <input type="text" name="session" class="form-control mb-3" placeholder="Session">
                                <label for="" class="">Address</label>
                                <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Address"></textarea>
                                <input type="submit" name="submit_btn" class="btn btn-danger btn-block form-control mt-4" placeholder="Seip Id">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'pages/footer.php'?>
