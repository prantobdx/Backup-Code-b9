<?php include 'pages/header.php'?>
<head>
    <link rel="stylesheet" href="assets/css/jquery.flipster.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="hero">
    <h2 class="text-center text-bg-dark">Animal Gallery</h2>
    <div class="carousel">
        <ul>
            <li><img src="assets/image/img1.jpg"></li>
            <li><img src="assets/image/img2.jpg"></li>
            <li><img src="assets/image/img3.jpg"></li>
            <li><img src="assets/image/img4.jpg"></li>
            <li><img src="assets/image/img5.jpg"></li>
            <li><img src="assets/image/img6.jpg"></li>
            <li><img src="assets/image/img7.jpg"></li>
            <li><img src="assets/image/img8.jpg"></li>
            <li><img src="assets/image/img9.jpg"></li>
            <li><img src="assets/image/img10.jpg"></li>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.flipster.min.js"></script>
<script>
    $('.carousel').flipster({
        style:'carousel',spacing:-0.3,
    });
</script>
<?php include 'pages/footer.php'?>
