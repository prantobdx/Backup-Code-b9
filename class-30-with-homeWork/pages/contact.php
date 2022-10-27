
<?php include 'pages/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Contact Us</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="row py-5">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-body">
                         <form action="action.php" method="post">
                             <label for="firstName" class="form-label">FirstName</label>
                             <input type="text" name="first_name" class="form-control" placeholder="First Name">

                             <label for="lastName" class="form-label">LastName</label>
                             <input type="text" name="last_name" class="form-control" placeholder="Last Name">

                             <label for="fullName" class="form-label">FullName</label>
                             <input type="text" disabled name="full_name" class="form-control " value="<?php echo isset($fullName)? $fullName :' '?>" placeholder="Full Name">

                             <input type="submit" class="btn btn-outline-secondary my-4 " name="full_name" value="Full-Name" >
                         </form>
                     </div>
                 </div>
             </div>
        </div>

    </div>
</section>

<?php include 'pages/footer.php'?>
