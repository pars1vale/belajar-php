<?php
$products = [
    [
        'name' => 'Anggora',
        'price' => 1000000,
        'desc' => 'Anggora turki adalah salah satu ras kucing domestik alami tertua. Ras ini berasal dari Ankara, Turki. Kucing ini sangat populer dan terkenal di Indonesia.',
        'img' => 'assets/anggora.png'
    ],
    [
        'name' => 'Persia',
        'price' => 1500000,
        'desc' => 'Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek. Namanya mengacu pada Persia.',
        'img' => 'assets/persia.png'
    ],
    [
        'name' => 'British Shorthair',
        'price' => 1200000,
        'desc' => 'Kucing bulu pendek britania adalah salah satu ras kucing tertua di inggris. Kucing ini adalah kucing berbadan sedang dengan bulu yang pendek.',
        'img' => 'assets/british.png'
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo">
                    <img src="assets/logo.png" alt="" />
                </div>
                <input type="checkbox" id="click" />
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="login.php" class="btn_login">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>

            <div class="cards-categories">
                <h2>Cat Categories</h2>
                <div class="card-categories">
                    <?php foreach ($products as $product) : ?>
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo $product['img']; ?>" alt="gambarProduct" />
                            </div>
                            <div class="card-content">
                                <h5><?php echo $product['name']; ?></h5>
                                <p><?php echo $product['desc']; ?></p>
                                <p class="price"><span>Rp.<?php echo $product['price']; ?></p>
                                <button class="btn_belanja" type="submit">Beli</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
        <footer>
            <h4>&copy; Muhammad Ridho 2024</h4>
        </footer>
    </div>
</body>

</html>