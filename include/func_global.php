<?php
function dd($val) {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
    die;
}

function get_products_by_category($categoryId): array
{
    $sql = 'SELECT * FROM products WHERE category_id = :category_id';
    return fetchAll(
        $sql,
        ['category_id' => $categoryId]
    );
}