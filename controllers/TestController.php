<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Product;

class TestController extends Controller{


  /**
   * Displays testpage.
   *
   * @return string
   */
  
  public function actionIndex(){
    $model = new Product();

    $model->id = 12;
    $model->name = 'Goods1';
    $model->category = 'CategoryGoods';
    $model->price = 5645;

    return $this->render('index', [
      'rd' => $this->renderContent('renderContent'),
      'model' => $model,
      'test' => Yii::$app->test->getVar(),
    ]);
  }

}

?>