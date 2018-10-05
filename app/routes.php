<?php

return [
    'GET' => [
        '/' => [
            'controller' => 'PagesController@tasks',
        ],
        '/tasks' => [
            'controller' => 'TasksController@index',
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
            'controller' => 'TasksController@store',
        ]
    ]
];