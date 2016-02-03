<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(GidrodinamikaThemeEvents::HEAD_START);?>
    <?php Yii::app()->getController()->widget(
        'vendor.chemezov.yii-seo.widgets.SeoHead',
        [
            'httpEquivs' => [
                'Content-Type' => 'text/html; charset=utf-8',
                'X-UA-Compatible' => 'IE=edge,chrome=1',
                'Content-Language' => 'ru-RU'
            ],
            'defaultTitle' => $this->yupe->siteName,
            'defaultDescription' => $this->yupe->siteDescription,
            'defaultKeywords' => $this->yupe->siteKeyWords,
        ]
    ); ?>

    <?php
    
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/yupe.css');
    
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(GidrodinamikaThemeEvents::HEAD_END);?>
</head>

<body>

<?php \yupe\components\TemplateEvent::fire(GidrodinamikaThemeEvents::BODY_START);?>
    <section class="">
        <?php $this->widget(
                    'application.modules.menu.widgets.MenuWidget', array(
                        'name'         => 'top-menu',
                        'params'       => array('hideEmptyItems' => false),
                        'layoutParams' => array(
                            'htmlOptions' => array(
                                'class' => 'jqueryslidemenu',
                                'id'    => 'myslidemenu',
                            )
                        ),
                    )
                ); ?>
    </section>
    <section>
        <div class="container-fluid">
            <div class="col-sm-2 col-md-2 col-lg-2 hidden-xs">
              <?php /*$this->widget(
                    'application.modules.menu.widgets.MenuWidget', array(
                        'name'         => 'top-menu',
                        'layout'=>'sidebar',
                        'params'       => array('hideEmptyItems' => false),
                        'layoutParams' => array(
                            'htmlOptions' => array(
                                'class' => 'jqueryslidemenu',
                                'id'    => 'myslidemenu',
                            )
                        ),
                    )
                ); */?>
            </div>
            <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                <!-- flashMessages -->
                <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
                <!-- breadcrumbs -->
                <?php $this->widget(
                    'bootstrap.widgets.TbBreadcrumbs',
                    [
                        'links' => $this->breadcrumbs,
                    ]
                );?>
                <div class="row">
                    <?= $content; ?>
                </div>
                <!-- footer -->
                <?php $this->renderPartial('//layouts/_footer'); ?>
                <!-- footer end -->
            </div-->
        </div>
    </section>


<?php \yupe\components\TemplateEvent::fire(GidrodinamikaThemeEvents::BODY_END);?>

</body>
</html>
