<?php

namespace application\controllers;

use yupe\components\controllers\FrontController;

class GidrodinamikaController extends FrontController
{
    
   public function actionIndex()
    {
       $this->render('index');
    }
    
   public function actionTest()
    {
       echo 'Hy from GD Controller';
    }
    

    /**
     * Отображение для ошибок:
     *
     * @return void
     */
    public function actionError()
    {
        $error = \Yii::app()->errorHandler->error;

        if (empty($error) || !isset($error['code']) || !(isset($error['message']) || isset($error['msg']))) {
            $this->redirect(['index']);
        }

        if (!\Yii::app()->getRequest()->getIsAjaxRequest()) {

            $this->render(
                'error',
                [
                    'error' => $error
                ]
            );
        }
    }
}
