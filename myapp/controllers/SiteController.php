<?php

namespace app\controllers;

use app\services\Film;
use Yii;
use yii\web\Controller;


class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * returns list of films from API call in json format
     */
    public function actionFilms()
    {
        $films = new Film;
        $films = $films->GetAllFilms();
        echo json_encode($films);
    }
}
