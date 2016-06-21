<?php

namespace backend\controllers;

use Yii;
use backend\models\Phones;
use common\models\User;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * ThirdpartyController
 */
class ThirdpartyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    // Disables csrf validation to enable the third party app to sip through
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }


    // Main third party API function
    public function actionGetphone()
    {
        //authorize third party based on app_id and app_secret params
        $user = User::find()
                    ->where(['app_id' => Yii::$app->request->post('app_id')])
                    ->andwhere(['app_secret' => Yii::$app->request->post('app_secret')])
                    ->one();

        if(!empty($user))//check is third party is authorized
        {
            $phone = Phones::find()
                    ->where(['phone_imei' => Yii::$app->request->post('imei')])
                    ->one();

            if(empty($phone)) //It is better practice to send an HTTP 400 error header along with the error message
                $phone = ['error' => 'Phone not found'];
        }
        else // It is better practice to send an HTTP 301 error header along with the error message
            $phone = ['error' => 'You are not authorized to access the requested resources'];


        // send a json response to the third party app
        header('Content-type: application/json');
        echo Json::encode($phone);
        Yii::$app->end();
    }

}
