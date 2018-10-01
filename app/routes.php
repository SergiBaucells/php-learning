<?php

return [
    'GET' => [
        '/' => [
            'controller' => 'PagesController@tasks',
        ],
        '/tasks' => [
            'controller' => 'PagesController@tasks',
        ],
        '/people' => [
            'controller' => 'PagesController@people',
        ],
        '/lessons' => [
            'controller' => 'PagesController@lessons',
        ],
        '/about' => [
            'controller' => 'PagesController@about',
        ],
        '/contact' => [
            'controller' => 'PagesController@contact',
        ]
    ],
    'POST' => [
        '/tasks' => [
            'controller' => 'PagesController@store',
        ]
    ]
];