<?php

use yii\helpers\Html;
$this->title = 'โรงพยาบาลธัญญารักษ์าสงขลา';
?>
<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>">ไปที่ test1</a>
<br>

<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'teststestsets','lname'=>'eststestsetest']);
?>
<a href="<?=$route2?>">ไปที่ test2</a>
<br>

<?=
Html::a('ลิงค์ไปที่ test2',['test/test2','name'=>'Tanatta','lname'=>'Lomkong',],['class'=>'btn btn-success']);       
?>
