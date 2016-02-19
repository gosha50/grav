<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgeakinian/Projects/grav-admin/user/themes/antimatter/blueprints/features.yaml',
    'modified' => 1454621597,
    'data' => [
        'title' => 'Features',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'features' => [
                            'type' => 'tab',
                            'title' => 'Features',
                            'fields' => [
                                'header.features' => [
                                    'name' => 'features',
                                    'type' => 'list',
                                    'label' => 'Features',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Subtitle'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
