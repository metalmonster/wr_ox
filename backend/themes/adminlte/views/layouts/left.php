<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                                'label' => 'ข้อมูลพื้นฐาน',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'ข้อมูลบริษัท', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/company',],
                                    ['label' => 'หน่วย', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/unit',],
                                    ['label' => 'ชื่อแก๊ส', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/gas',],
                                    ['label' => 'สถานะท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/tankstatus',],
                                    ['label' => 'สถานะแลกเปลี่ยนท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/dealtank',],
                                    ['label' => 'ข้อมูลท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/tank',],
                                ],
                            ],
                    [
                                'label' => 'ระบบจัดการ',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'ข้อมูลบริษัท', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/company',],
                                    ['label' => 'หน่วย', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/unit',],
                                    ['label' => 'ชื่อแก๊ส', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/gas',],
                                    ['label' => 'สถานะท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/tankstatus',],
                                    ['label' => 'สถานะแลกเปลี่ยนท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/dealtank',],
                                    ['label' => 'ข้อมูลท่อ', 'icon' => 'fa fa-circle-o', 'url' => '?r=inventory/tank',],
                                ],
                            ],
                ],
                
            ]
                
        ) ?>

    </section>

</aside>
