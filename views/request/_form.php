<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <!-- Если пользователь админ, он может выбрать статус -->
    <?php if(Yii::$app->user->identity->username=='admin')
    echo $form->field($model, 'id_status')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Status::find()->all(),'id','status')) ?>
    
    <!-- <?= $form->field($model, 'id_user')->textInput() ?>  -->

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
