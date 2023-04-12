<?php

namespace App\Classes;

class Sidebar
{
    public static function menu() {
        return [
            [
                'type' => 'nav-link',
                'title' => 'sidebar.dashboard',
                'icon' => '<i class="fas fa-fire"></i>',
                'url' => 'home',
                'permissions' => [],
                'role' => ['superuser'],
                'children' => [],
            ],
        
            // CMS & BACKEND MANAGEMENT
            [
                'type' => 'menu-header',
                'title' => 'sidebar.cmsBackendManagement',
                'permissions' => [],
                'role' => ['superuser', 'superadmin'],
                'children' => [],
            ],
            [
                'type' => 'nav-link',
                'title' => 'sidebar.users',
                'icon' => '<i class="far fa-user"></i>',
                'url' => '',
                'permissions' => [],
                'role' => ['superuser', 'superadmin'],
                'children' => [
                    [
                        'title' => 'sidebar.admin',
                        'url' => 'users.index',
                        'permissions' => [],
                        'role' => ['superuser', 'superadmin']
                    ],
                    [
                        'title' => 'sidebar.permissions',
                        'url' => 'permissions.index',
                        'permissions' => [],
                        'role' => ['superuser', 'superadmin']
                    ],
                    [
                        'title' => 'sidebar.roles',
                        'url' => 'roles.index',
                        'permissions' => [], 
                        'role' => ['superuser', 'superadmin']
                    ],
                ]
            ],        
        ];
    }
}
