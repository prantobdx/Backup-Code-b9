<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="action.php?page=home" class="navbar-brand">ShobKisu</a>
            <ul class="navbar-nav">
                <li "><a href=" action.php?page=home" class="nav-link text-white">Home</a></li>
                <li><a href="action.php?page=about" class="nav-link text-white">About</a></li>
                <li class="dropdown"><a href="action.php?page=product" class="nav-link dropdown-toggle text-white"
                        data-bs-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php foreach ( $categories as $category )
{
    ?>
                        <li><a href="action.php?page=category&&id=<?php echo $category['id'] ?>"
                                class="dropdown-item"><?php echo $category['name'] ?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li><a href="action.php?page=gallery" class="nav-link text-white">Gallery</a></li>
                <li><a href="action.php?page=contact" class="nav-link text-white">Contact</a></li>
                <li><a href="action.php?page=calculator" class="nav-link text-white">Calculator</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>