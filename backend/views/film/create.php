<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Film\Film */

$this->title = 'Create Film';
$this->params['breadcrumbs'][] = ['label' => 'Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
