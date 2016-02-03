<?php

Yii::import('application.modules.menu.components.YMenu');

$this->widget(
    'booster.widgets.TbMenu',
    array(
        'type' => 'list',
        'items' => $this->params['items'],       
    )
);

