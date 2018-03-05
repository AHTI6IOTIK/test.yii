<?php
/**
 *  @var $model app\models\Product;
 */

use yii\widgets\DetailView;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My test yii</title>
</head>
<body>
  <h1>Hello yii</h1>
  <?=$rd?>  <br>

  <b><?= $test ?></b><br><br>
  
  <?= DetailView::widget(['model' => $model]) ?>
</body>
</html>