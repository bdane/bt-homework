<div class="container">
    <div class="my-3">
        <form class="row" action="./products-page.php" method="get">
            <select name="sort-by" id="" class="col-2 me-3">
                <option value="">None</option>
                <option value="price-asc">By price asc</option>
                <option value="price-desc">By price desc</option>
            </select>
            <input class="col-7 me-1" type="text" name="filter">
            <button type="submit" class="btn btn-dark col-2">Search</button>
        </form>

    </div>

    <main>
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>
                <div class="card col-3 m-3" style="width: 18rem;">
                    <a href="./single-product-page.php?page=<?php echo $product['id']; ?>">
                        <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <a class=" text-decoration-none" href="./single-product-page.php?page=<?php echo $product['id']; ?>">
                            <h5 class="card-title text-dark"><?php echo $product['title']; ?></h5>
                        </a>
                        <h5 class="card-title text-success"><?php echo $product['price'] . " RSD"; ?></h5>
                        <p class="card-text"><?php echo $product['description'] ?></p>
                        <a href="./single-product-page.php?page=<?php echo $product['id']; ?>" class="btn btn-outline-dark">
                            View Details
                        </a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</div>