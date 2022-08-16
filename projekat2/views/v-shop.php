<div class="container py-5">
    <div class="row">
        <!-- ASAIDE START -->
        <asaid class="col-3 shadow bg-body rounded px-0 d-none d-xl-block">
            <div class="bg-dark py-3 px-4 rounded mb-4">
                <h3 class="text-light mb-0">FILTERS</h3>
            </div>
            <div class="p-4">
                <div class="mb-4">
                    <form action="./all-products-page.php" method="get">
                        <h5>Sort by</h5>
                        <div class="mb-2">
                            <div class="mb-2">
                                <select class="form-select" aria-label="Default select example" name="order-by" id="order-by">
                                    <option value="NULL">-- Choose an option --</option>
                                    <option value="name-asc">Name ASC</option>
                                    <option value="name-desc">Name DESC</option>
                                    <option value="price-asc">Price ASC</option>
                                    <option value="price-desc">Price DESC</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-dark px-4">Sort</button>
                        </div>
                    </form>
                    <br>
                    <h5>Category</h5>
                    <form action="./all-products-page.php" method="get">
                        <div class="form-check mb-4">
                            <input type="checkbox" name="woman" id="woman" value="w">
                            <label for="woman">Woman</label><br>
                            <input type="checkbox" name="man" id="man" value="m">
                            <label for="man">Man</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark" value="Apply filter">
                    </form>
                </div>
            </div>
        </asaid>
        <!-- ASAIDE END -->
        <main class="col-9 ps-5">
            <div class="mb-5">
                <form action="./all-products-page.php" method="get">
                    <div class="row justify-content-between">
                        <div class="col-10 ps-0">
                            <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                        </div>
                        <button class="btn btn-outline-dark col-2" type="submit">Search</button>
                    </div>
                </form>
                <p class="red"><?php echo $searchMsg; ?></p>
            </div>
            <div class="row justify-content-between">
                <?php foreach ($availableProducts as $product) {
                    /* $counter++;
                if ($counter > $itemsPerRow) {
                    $counter = 0;
                } */ ?>
                    <div class="col-3 shadow bg-body rounded mb-5 p-4" style="width: 18rem;">
                        <div class="">
                            <a href="#"><img src="./public/theme/img/<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="card-title mb-2 text-dark"><?php echo htmlspecialchars($product['title']); ?></h4>
                                </a>
                                <h5 class="card-title mb-1 text-primary"><?php echo htmlspecialchars($product['price']); ?> €</h5>
                                <h6 class="card-title text-secondary mb-1"><?php echo htmlspecialchars($product['category']); ?></h6>
                                <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                                <a href="./single-product-page.php?page=<?php echo $product['barcode']; ?>" class="btn btn-dark">View Details</a>
                                <a href="#" class="btn btn-outline-dark">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
</div>