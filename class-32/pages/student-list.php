
<?php include 'pages/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Student Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <h1 class="text-center"><?php echo isset($message) ? $message : ' '?></h1>
                    <div class="card-body ">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Session</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>
                            <?php foreach( $studentInfos as $studentInfo ) { ?>
                            <tr>
                                <td><?php echo $studentInfo['id'] ?></td>
                                <td><?php echo $studentInfo['name'] ?></td>
                                <td><?php echo $studentInfo['roll'] ?></td>
                                <td><?php echo $studentInfo['phone'] ?></td>
                                <td><?php echo $studentInfo['email'] ?></td>
                                <td><?php echo $studentInfo['dept'] ?></td>
                                <td><?php echo $studentInfo['session'] ?></td>
                                <td><?php echo $studentInfo['address'] ?></td>
                                <td>
                                    <a href="action.php?page=update-student-info&&studentId=<?php echo $studentInfo['id']?>" class="btn btn-primary">Edit</a>
                                    <a href="action.php?page=delete-info&&id=<?php echo $studentInfo['id']?>" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/footer.php'?>
