<?php

/**
 * Function returns all products.
 * @return array
 */
function getAvailableProducts(array $allProducts): array
{
    foreach ($allProducts as $product) {
        if ($product['available']) {
            $availableProducts[] = $product;
        }
    }
    return $availableProducts;
}

/**
 * Function returns one product by ID.
 */
function getSingleProductById(array $allProducts, int $id): array
{
    foreach ($allProducts as $singleProduct) {
        if ($singleProduct['id'] == $id) {
            return $singleProduct;
        } /* else {
            return false;
        } */
    }
}

function getNextProduct($allProducts, $id)
{
    $availableProducts = getAvailableProducts($allProducts);
    foreach ($availableProducts as $key => $singleProduct) {
        if ($singleProduct['id'] == $id) {
            if ($key < count($availableProducts) - 1) {
                return $availableProducts[$key + 1];
            } else {
                return $availableProducts[0];
            }
        }
    }
}

function getPrevProduct($allProducts, $id)
{
    $availableProducts = getAvailableProducts($allProducts);
    foreach ($availableProducts as $key => $singleProduct) {
        if ($singleProduct['id'] == $id) {
            if ($key > 0) {
                return $availableProducts[$key - 1];
            } else {
                return $availableProducts[count($availableProducts) - 1];
            }
        }
    }
}

function getFilteredByTitle($allProducts, $term)
{
    $availableProducts = GetAvailableProducts($allProducts);
    $filteredByTitle = [];
    foreach ($availableProducts as $product) {
        if (str_contains($product['title'], $term)) {
            $filteredByTitle[] = $product;
        }
    }
    return $filteredByTitle;
}

function filteredByCategory($allProducts, $currentProduct)
{
    $availableProducts = getAvailableProducts($allProducts);
    $filterdProducts = [];
    foreach ($availableProducts as $product) {
        if ($product['category'] == $currentProduct['category'] && $currentProduct['id'] != $product['id']) {
            $filterdProducts[] = $product;
        }
    }
    return $filterdProducts;
}

function getRelatedProducts($allProducts, $currentProduct)
{
    $filteredProducts = filteredByCategory($allProducts, $currentProduct);
    if (count($filteredProducts) > 3) {
        for ($i = 0; $i < 3; $i++) {
            $relatedProducts[] = $filteredProducts[$i];
        }
        return $relatedProducts;
    } else {
        return $filteredProducts;
    }
}

$allProducts = [
    [
        'id' => 1,
        'title' => 'SAKO S1 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 2,
        'title' => 'SAKO S2 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 3,
        'title' => 'SAKO S3 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 4,
        'title' => 'SAKO S4 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 5,
        'title' => 'SAKO S5 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 6,
        'title' => 'SAKO S6 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => false
    ],
    [
        'id' => 7,
        'title' => 'SAKO S7 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 8,
        'title' => 'SAKO S8 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 9,
        'title' => 'SAKO S9 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => false
    ],
    [
        'id' => 10,
        'title' => 'SAKO S10 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 11,
        'title' => 'SAKO S11 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 12,
        'title' => 'SAKO S12 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ]
];
