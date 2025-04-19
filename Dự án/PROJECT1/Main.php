<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terraria World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="plan.css">
    <style>
        body {
            background-image: url(https://i.pinimg.com/originals/24/18/c0/2418c07e8952fde53b4ec9ef73b56a8e.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.62);
        }

        .navbar {
            opacity: 0.8;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/13.jpg" style="width: 80px"><b text-color: hsla(0, 0.00%,
                    0.80%, 0.00)>Terraria The Stores</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://terraria.fandom.com/wiki/Bosses">Figure Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/Anezu/session4/lab5btvn2.php">How
                            To Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact To UsWebsite</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Figure Idle
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><img src="img/1.jpg" style="width: 50px">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><img src="img/2.jpg" style="width: 50px">Another
                                    action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><img src="img/3.jpg" style="width: 50px">Something
                                    else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    $conn = mysqli_connect('localhost', 'root','','project1', 3306);
    $productlist = mysqli_query($conn, 'SELECT * FROM figure');
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($productlist as $item) {
                ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $item['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['name']; ?></h5>
                            <?php if ($item['sale_price'] == '0') { ?>
                                <p class="card-text">Price:<?= $item['price']; ?></p>
                                <?php
                            } else { ?>
                                <p class="card-text">Old:<s><?= $item['sale_price']; ?></s> Price:<?= $item['price']; ?></p>
                                <?php
                            }
                            ?>
                            <a href="#" class="btn btn-danger me-1">Add to Cart</a>


                            <a href="<?= $item['more']; ?>" class="btn btn-primary me-1">More</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>