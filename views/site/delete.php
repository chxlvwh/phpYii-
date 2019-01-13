<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '删除图书';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">

    <?php if (Yii::$app->session->hasFlash('deleteSuccessfully')): ?>

        <div class="alert alert-success">
            删除成功！
        </div>

    <?php elseif (Yii::$app->session->hasFlash('deleteFailed')): ?>

        <div class="alert alert-info">
            删除失败！
            <p>没有找到要删除的书籍！</p>
        </div>

    <?php else: ?>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => '请输入书名']) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    <?php endif; ?>
</div>
