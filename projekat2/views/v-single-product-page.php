<div class="container">
    <main>
        <div class="row">
            <div class="col-8">
                <img src="./public/theme/img/<?php echo htmlspecialchars($product['img']); ?>" alt="">
            </div>
            <div class="col-4">
                <h2><?php echo htmlspecialchars($product['title']); ?></h2>
                <h3><?php echo htmlspecialchars($product['price']); ?></h3>
                <h4><?php echo htmlspecialchars($product['description']); ?></h4>
                <button>Add To Wishlist</button>
                <button>Add To Cart</button>
            </div>
        </div>
    </main>
</div>