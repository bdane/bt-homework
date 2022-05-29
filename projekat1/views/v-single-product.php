<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-5">
                <img src="<?php echo $getProduct['img']; ?>" alt="..." height="600px">
            </div>
            <div class="col-7">
                <h1 class="card-title mb-4"><?php echo htmlspecialchars($getProduct['title']); ?></h1>
                <h2 class="text-success"><?php echo htmlspecialchars($getProduct['price']) . " RSD"; ?></h2>
                <br>
                <h5>Description:</h5>
                <p><?php echo htmlspecialchars($getProduct['description']); ?></p>
                <p><strong>Category: </strong><?php echo htmlspecialchars($getProduct['category']); ?></p>
                <p><strong>Tags: </strong><?php foreach ($getProduct['tag'] as $tag) {
                                                echo $tag . " ";
                                            } ?></p>
                <p><strong>Brand: </strong><?php echo htmlspecialchars($getProduct['brand']) ?></p>
                <a class="btn btn-outline-dark btn-lg px-5" href="./checkout-page.php">BUY</a>
                <!-- <button type="submit" class="btn btn-outline-dark btn-lg px-5">BUY</button> -->
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-outline-dark" href="./single-product-page.php?page=<?php echo $prevProduct['id']; ?>">
                < PREV</a>
                    <a class="btn btn-outline-dark" href="#"> - </a>
                    <a class="btn btn-outline-dark" href="./single-product-page.php?page=<?php echo $nextProduct['id']; ?>">NEXT ></a>
        </div>
        <div class="row">
            <?php
            if (count($relatedProducts) > 0) {
            ?>
                <hr class="my-5">
                <?php
                foreach ($relatedProducts as $relatedProduct) {
                ?>
                    <div class="card col-4 m-3" style="width: 18rem;">
                        <a href="./single-product-page.php?page=<?php echo $relatedProduct['id']; ?>"><img src="<?php echo $relatedProduct['img']; ?>" class="card-img-top" height="300px" alt="..."></a>
                        <div class="card-body">
                            <a class=" text-decoration-none" href="./single-product-page.php?page=<?php echo $relatedProduct['id']; ?>">
                                <h5 class="card-title text-dark"><?php echo $relatedProduct['title']; ?></h5>
                            </a>
                            <h5 class="card-title text-success"><?php echo $relatedProduct['price'] . " RSD"; ?></h5>
                            <p class="card-text"><?php echo $relatedProduct['description'] ?></p>
                            <a href="./single-product-page.php?page=<?php echo $relatedProduct['id']; ?>" class="btn btn-outline-dark">
                                View Details
                            </a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</main>