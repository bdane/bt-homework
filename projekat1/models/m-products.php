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
        if (str_contains(strtolower($product['title']), strtolower($term))) {
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

/* function sortByPrice($allProducts)
{
    $availableProducts = getAvailableProducts($allProducts);
    $sortedByPrice = [];
    $minPrice = $availableProducts[0]['price'];
    foreach ($availableProducts as $key => $product) {
        if ($product[$key]['price'] < $minPrice) {
            $minPrice = $product[$key]['price'];
        }
    }
} */

function sortByPriceASC($allProducts)
{
    $availableProducts = getAvailableProducts($allProducts);
    $sortedByPrice = [];
    $minArray = $availableProducts[0];
    $minPrice = $availableProducts[0]['price'];
    for ($i = 0; $i < count($availableProducts); $i++) {
        for ($j = $i; $j < count($availableProducts); $j++) {
            if ($i != $j) {
                if ($availableProducts[$i]['price'] < $minPrice) {
                    $minPrice = $availableProducts[$i]['price'];
                    $minArray = $availableProducts[$i];
                }
            }
        }
        $sortedByPrice[] = $minArray;
    }
    return $sortedByPrice;
}

$allProducts = [
    [
        'id' => 1,
        'title' => 'SAKO S1 CRNI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-crni-01.png",
        'price' => '4300',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 2,
        'title' => 'SAKO S2 BELI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-beli-01.png",
        'price' => '4200',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 3,
        'title' => 'SAKO S3 ANTRACIT',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-antracit-01.png",
        'price' => '4000',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 4,
        'title' => 'SAKO S4 CIKLAMA',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-ciklama-01.png",
        'price' => '4100',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 5,
        'title' => 'SAKO S5 MINT',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-mint-01.png",
        'price' => '4250',
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
        'title' => 'SAKO S7 SVETLOZELENI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-svetlozeleni-01.png",
        'price' => '4350',
        'category' => 'Garderoba',
        'tag' => ['prolece', 'leto'],
        'brand' => 'BRANKO',
        'available' => true
    ],
    [
        'id' => 8,
        'title' => 'SAKO S8 TAMNOZELENI',
        'description' => 'Mnogo lep sako. Super-ekstra kvalitet.',
        'img' => "./public/theme/img/Sako-FRENDY-tamnozeleni-01.png",
        'price' => '4050',
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
