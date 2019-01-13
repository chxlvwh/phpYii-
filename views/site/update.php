<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '修改图书';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-lg-5">

        <?php if (Yii::$app->session->hasFlash('updateFailed')): ?>

            <div class="alert alert-info">
                更新失败！
                <p>没有找到相关图书！</p>
            </div>

        <?php elseif (Yii::$app->session->hasFlash('updateSuccessfully')): ?>

            <div class="alert alert-info">
                更新成功！
            </div>

        <?php else: ?>

            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(); ?>

                        <h1>请输入要修改的图书id</h1>

                        <?= $form->field($model, 'id')->textInput(['autofocus' => true, 'placeholder' => '请输入id']) ?>

                        <h1>请输入修改后的图书信息</h1>

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
</div>
