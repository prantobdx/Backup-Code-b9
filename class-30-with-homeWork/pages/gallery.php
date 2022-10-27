<?php include 'pages/header.php'?>

<div class="first-div text-center">
    <div class="img-main my-3">
        <img src="assets/img/img5.jpg" alt="" id="mainImage" style="width: 500px; height: 450px;">
    </div>

    <div class="img-div my-4">

        <img src="assets/img/img10.jpg" alt="" class="img ms-2" style="width: 200px; height: 160px;">
        <img src="assets/img/img2.jpg" alt="" class="img ms-2" style="width: 200px; height: 160px;">
        <img src="assets/img/img6.jpg" alt="" class="img ms-2" style="width: 200px; height: 160px;">
        <img src="assets/img/img3.jpg" alt="" class="img ms-2" style="width: 200px; height: 160px;">
        <img src="assets/img/img4.jpg" alt="" class="img ms-2" style="width: 200px; height: 160px;">

    </div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script>
$('.img').click(function() {
    var img = $(this).attr('src');
    $('#mainImage').attr('src', img);
})
// val dile value nibe ba dhorbe
// text dile value ta dhakabe
</script>

<?php include 'pages/footer.php'?>