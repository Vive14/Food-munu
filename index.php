<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'mysapa');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM prodct";
    $result = $connect->query($sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="menu">
        <!-- title -->
        <div class="title">
            <h2>our menu</h2>
            <div class="underline"></div>
        </div>
        <!-- menu items -->
        <div class="section-center">
            <!-- single item -->
            <?php while($row = $result->fetch_assoc()): ?>
                <article class="menu-item">
                <img src="<?=$row['p_image']?>" class="photo" alt="menu item">
                <div class="item-info">
                    <header>
                        <h4><?=$row['p_title']?></h4>
                        <h4 class="price"><?=$row['p_price']?></h4>
                    </header>
                    <p class="item-text"><?=$row['p_detail']?></p>
                </div>
            </article>
            <?php endwhile ?>
            <!-- end of single item -->
        </div>
    </section>
</body>
</html>
