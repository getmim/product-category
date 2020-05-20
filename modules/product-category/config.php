<?php

return [
    '__name' => 'product-category',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-category.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-category' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => [
            [
                'product' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [
            'ProductCategory\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-category/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'category' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'ProductCategory\\Model\\ProductCategoryChain',
                            'field' => 'product'
                        ],
                        'identity' => 'product_category'
                    ],
                    'model' => [
                        'name' => 'ProductCategory\\Model\\ProductCategory',
                        'field' => 'id'
                    ],
                    'format' => 'product-category'
                ]
            ],
            'product-category' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'parent' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductCategory\\Model\\ProductCategory',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product-category'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'product-category-chain' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'product'
                ],
                'product_category' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductCategory\\Model\\ProductCategory',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'product-category'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];