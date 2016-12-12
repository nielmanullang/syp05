<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        [
                            'label' => 'Bahan Pustaka',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Buku', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-buku/index']],
                                ['label' => 'CD/DVD', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-kaset/index']],
//                                ['label' => 'Pustaka Baru', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/pesan-pinjam/pustaka-baru']],
//                                ['label' => 'Bahan Pustaka Baru', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-kaset/index']],
                            ],
                        ],
                        // ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                        ['label' => 'Artikel', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['/master-artikel/index']],
                        ['label' => 'Pengumuman', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['/master-pengumuman/index']],
//                        ['label' => 'Log', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['/log/index']],
                        [
                            'label' => 'Tambahan',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pengguna', 'icon' => 'glyphicon glyphicon-user', 'url' => ['/pengguna/index']],
                                ['label' => 'Pengaturan Akun', 'icon' => 'glyphicon glyphicon-edit', 'url' => ['/auth-assignment'], 'visible' => Yii::$app->user->can('administrator'),],
                                ],
                        ],
                        [
                            'label' => 'Aktivitas',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pinjaman Anda', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/peminjaman/index']],
                                ['label' => 'Pesanan Anda', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/pemesanan/index']],
                            ], 'visible' => !Yii::$app->user->isGuest,
                        ],
                        ['label' => 'Pemesanan', 'icon' => 'glyphicon glyphicon-edit', 'url' => ['/pesan-pinjam/pemesanan'], 'visible' => Yii::$app->user->can('staff'),],
                        ['label' => 'Peminjaman', 'icon' => 'glyphicon glyphicon-edit', 'url' => ['/pesan-pinjam/pinjam'], 'visible' => Yii::$app->user->can('staff'),],
                        ['label' => 'Pengembalian', 'icon' => 'glyphicon glyphicon-edit', 'url' => ['/pesan-pinjam/kembali'], 'visible' => Yii::$app->user->can('staff'),],
//                        ['label' => 'Revoke', 'icon' => 'glyphicon glyphicon-edit', 'url' => ['/auth-assignment'], 'visible' => Yii::$app->user->can('administrator'),],
                    ],
                ]
        )
        ?>

    </section>

</aside>