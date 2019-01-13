<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '新增图书';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <?php if (Yii::$app->session->hasFlash('addSuccessfully')): ?>

        <div class="alert alert-success">
            新增成功！
        </div>

    <?php else: ?>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => '请输入书名']) ?>

                    <?= $form->field($model, 'author')->textInput(['placeholder' => '请输入作者']) ?>

                    <?= $form->field($model, 'sn')->textInput(['placeholder' => '请输入序列号'])  ?>

                    <?= $form->field($model, 'publishCompany')->textInput(['placeholder' => '请输入出版社'])  ?>


                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    <?php endif; ?>
</div>
