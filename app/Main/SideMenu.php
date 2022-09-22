<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Dashboard'
                    ],
                ]
            ],
            'crud' => [
                'icon' => 'edit',
                'title' => 'Items',
                'sub_menu' => [
                    'item-list' => [
                        'icon' => '',
                        'route_name' => 'create-item',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'List of Item'
                    ],

                    ]

                ],
            'borrow items' => [
                'icon' => 'home',
                'title' => 'Borrowed Items',
                'sub_menu' => [
                    'borrow-list' => [
                        'icon' => '',
                        'route_name' => 'borrowlist',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'List of Borrowed Items'
                    ],
                ]
            ],
            'request item' => [
                'icon' => 'home',
                'title' => 'Requested Items',
                'sub_menu' => [
                    'request-list' => [
                        'icon' => '',
                        'route_name' => 'requestlist',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'List of Requested Items'
                    ],
                ]
            ],
            'profile' => [
                'icon' => 'settings',
                'title' => 'User Profile',
                'sub_menu' => [
                    'profile' => [
                        'icon' => 'user',
                        'route_name' => 'profile',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'profile'
                    ],
                    'changepass' => [
                        'icon' => 'user',
                        'route_name' => 'changepass',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Change Password'
                    ],
                ]
                
            ],
        ];
    }
}
