<main>
    <div class="container">
        <div class="d-flex justify-content-evenly my-4">
            <a class="btn btn-outline-dark" href="./single-product-page.php?page=<?php echo $prevProduct['barcode']; ?>">
                < PREV</a>
                    <a class="btn btn-outline-dark" href="./all-products-page.php"> BACK TO SHOP </a>
                    <a class="btn btn-outline-dark" href="./single-product-page.php?page=<?php echo $nextProduct['barcode']; ?>">NEXT ></a>
        </div>
        <div class="row my-5">
            <div class="col-6">
                <img src="./public/theme/img/<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100%">
            </div>
            <div class="col-6">
                <h2><?php echo htmlspecialchars($product['title']); ?></h2>
                <h4><?php echo htmlspecialchars($product['price']); ?>€</h4>
                <p>Description: <?php echo htmlspecialchars($product['description']); ?></p>
                <h6>Barcode: <?php echo htmlspecialchars($product['barcode']); ?></h6>
                <h6 class="text-secondary">Category: <?php echo htmlspecialchars($product['category']); ?></h6><br>
                <button class="btn btn-dark">Add To Wishlist</button>
                <button class="btn btn-outline-dark">Add To Cart</button>
            </div>
        </div>
        <hr>
        <div class="text-center my-4">
            <h4>RELATED PRODUCTS</h4>
        </div>
    </div>
</main>