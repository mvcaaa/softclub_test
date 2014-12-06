<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Emails;
use yii\helpers\Url;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new Emails;
        $models = Yii::$app->user->isGuest ? array () : Emails::find()->all();


        if (isset($_POST)) {
            $model->load($_POST);

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Запись сохранена');
                return $this->goHome();
            }
        }
        return $this->render('index', array('models' => $models, 'model' => $model));
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionDelete($id = NULL)
    {
        if (!Emails::deleteAll('id = ' . $id))
            Yii::$app->session->setFlash('error', 'Внутренняя ошибка - невозможно удалить запись');

        return $this->goHome();
    }

}
