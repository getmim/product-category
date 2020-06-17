<?php
/**
 * ProductCategoryChain
 * @package product-category
 * @version 0.0.1
 */

namespace ProductCategory\Model;

class ProductCategoryChain extends \Mim\Model
{

    protected static $table = 'product_category_chain';

    protected static $chains = [
        'product' => [
            'model' => 'Product\\Model\\Product',
            'field' => 'id'
        ]
    ];

    protected static $q = [];
}