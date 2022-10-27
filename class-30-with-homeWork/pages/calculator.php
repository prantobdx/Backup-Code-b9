<?php include 'pages/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Calculator</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="row py-5">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-body">
                         <form action="action.php" method="post">
                             <label for="firstNumber" class="form-label">First-Number</label>
                             <input type="number" name="first_number" class="form-control" placeholder="First Number" id="firstNumber">

                             <label for="secondNumber" class="form-label">Second-Number</label>
                             <input type="number" name="last_number" class="form-control" placeholder="Last Number">

                             <div class="py-4">
                                 <label><input type="radio" id="rad1" name="option" value="+"/>Collection<br></label>
                                 <label><input type="radio" id="rad2" name="option" value="-"/>Extraction<br></label>
                                 <label><input type="radio" id="rad3" name="option" value="*"/>Multiplication<br></label>
                                 <label><input type="radio" id="rad4" name="option" value="/"/>Division<br></label>
                                 <label><input type="radio" id="rad4" name="option" value="%"/>Modulas<br></label><br>
                             </div>

                             <label for="result" class="form-label">Result</label>
                             <input type="number"  name="result" class="form-control " value="<?php echo isset($result)? $result :' '?>" placeholder="Full Name">

                             <input type="submit" class="btn btn-outline-secondary my-4 " name="get_result" value="Result" >
                         </form>
                     </div>
                 </div>
             </div>
        </div>

    </div>
</section>
<?php include 'pages/footer.php'?>