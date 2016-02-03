<?php

class m150210_063409_add_store_menu_item extends CDbMigration
{
	public function safeUp()
	{
        if(Yii::app()->hasModule('menu')) {

            Yii::import('application.modules.menu.models.*');

            Yii::import('application.modules.menu.MenuModule');

            $menu = Menu::model()->find(['order' => 'id ASC', 'limit' => 1]);

            if(null !== $menu) {

                $item = MenuItem::model()->find('href = :href', [':href' => '/store/product/index']);

                if(null != $item) {

                    $item = new MenuItem();
                    $item->menu_id = $menu->id;
                    
                    /* Костыль, ибо в модели:
                     * 'title_attr'       => 'varchar(150) NOT NULL',
                     * 'before_link'      => 'varchar(150) NOT NULL',
                     * 'after_link'       => 'varchar(150) NOT NULL',
                     * 'target'           => 'varchar(150) NOT NULL',
                     * 'rel'              => 'varchar(150) NOT NULL',
                     * Устанавливаем значения, чтобы миграция сработала
                     */
                    $item->class = '';
                    $item->after_link='';
                    $item->before_link='';
                    $item->title_attr='';
                    $item->target='';
                    $item->rel='';
                    //конец костыля
                    
                    $item->title   = 'Магазин';
                    $item->href    = '/store/product/index';
                    $item->parent_id = 0;
                    $item->condition_name = null;
                    $item->save();
                }
            }
        }
	}

	public function safeDown()
	{
        if(Yii::app()->hasModule('menu')) {

            Yii::import('application.modules.menu.models.*');

            Yii::import('application.modules.menu.MenuModule');

            $item = MenuItem::model()->find('href = :href', [':href' => '/store/product/index']);

            if($item !== null) {
                $item->delete();
            }
        }
	}
}
