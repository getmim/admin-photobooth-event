<?php

return [
    '__name' => 'admin-photobooth-event',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-photobooth-event.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-photobooth-event' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'admin-photobooth' => NULL
            ],
            [
                'lib-form' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.photobooth.index' => [
                'event' => [
                    'label' => 'Event',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type' => 'event']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Event\\Model\\Event',
                            'field' => 'id'
                        ]
                    ]
                ]
            ],
            'admin.photobooth.edit' => [
                'event' => [
                    'label' => 'Event',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type' => 'event']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Event\Model\Event',
                            'field' => 'id'
                        ]
                    ]
                ]
            ]
        ]
    ]
];