<?php

class YaroskovCtrl
{
    public $data = [
        'title' => 'yaroskov',
        'email' => 'yaroskov@yandex.ru',
    ];

    public $mainMenu = [
        [
            'sectionTitle' => 'Backend Packages',
            'section' => 'backend',
            'menuItems' => [
                ['title' => 'Data', 'link' => 'data',],
                ['title' => 'Resource', 'link' => 'resource',],
                ['title' => 'Html', 'link' => 'html',],
                ['title' => 'Time', 'link' => 'time',],
            ]
        ],
        [
            'sectionTitle' => 'Frontend Packages',
            'section' => 'frontend',
            'menuItems' => [
                ['title' => 'Filters Catalog', 'link' => 'filters-catalog',],
                ['title' => 'Webpack', 'link' => 'webpack',],
            ]
        ],
        [
            'sectionTitle' => 'Database Queries',
            'section' => 'sql',
            'menuItems' => [
                ['title' => 'INNER JOIN', 'link' => 'inner-join',],
                ['title' => 'LEFT JOIN', 'link' => 'left-join',],
                ['title' => 'RIGHT JOIN', 'link' => 'right-join',],
            ]
        ],
    ];
}