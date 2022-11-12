<?php

namespace App\Main;

class SideMenu
{
    public static function menu(): array
    {
        return [
            'dashboard-overview-1' => [
                'icon' => 'home',
                'route_name' => 'dashboard',
                'params' => [
                    'layout' => 'side-menu',
                ],
                'title' => 'Dashboard'
            ],
            'products' => [
                'icon' => 'shopping-bag',
                'title' => 'Products',
                'sub_menu' => [
                    'product-list' => [
                        'icon' => '',
                        'route_name' => 'product-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Daftar Produk'
                    ],
                    'add-product' => [
                        'icon' => '',
                        'route_name' => 'add-product',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Tambah Produk',
                    ],
                ]
            ],
            'categories' => [
                'icon' => 'tag',
                'route_name' => 'categories',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Categories'
            ],
            'transactions' => [
                'icon' => 'dollar-sign',
                'title' => 'Transactions',
                'sub_menu' => [
                    'transaction-list' => [
                        'icon' => '',
                        'route_name' => 'transaction-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Daftar Transaksi'
                    ],
                    'transaction-detail' => [
                        'icon' => '',
                        'route_name' => 'transaction-detail',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Detail Transaksi'
                    ]
                ]
            ],
            'seller-list' => [
                'icon' => 'users',
                'route_name' => 'seller-list',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Pelaku UMKM'
            ],
            'setting' => [
                'icon' => 'settings',
                'title' => 'Pengaturan',
                'sub_menu' => [
                    'update-profile' => [
                        'icon' => '',
                        'route_name' => 'update-profile',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Update profile'
                    ],
                    'change-password' => [
                        'icon' => '',
                        'route_name' => 'change-password',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Ubah Sandi'
                    ]
                ]
            ],
        ];
    }
}
