<?php
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::class, [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <div class="input-group mb-3">

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose Image For Product</label>
        </div>
    </div>

    <?= $form->field($model, 'image'
    // [
    //             'template' =>'
   
    //         {input}
    //         {label}
           

    //         ',
    //         'inputOptions' => ['class' => 'custom-file-input'],
    //         'labelOptions' => 'custom-file-label'
    //     ]
        )->textInput(['type' => 'file']) ?>

    <?= $form->field($model, 'price')->textInput([
            'maxlength' => true,
            'type' => 'number'
    ]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
