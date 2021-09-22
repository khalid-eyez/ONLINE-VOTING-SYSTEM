<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>


<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'user']
                ]); ?>
            <?= $form->field($model, 'username', [
                    'inputOptions' =>[
                          //  'class'=> 'form-control form-control-user',
                        'placeholder' =>'Enter your username'
                    ]
            ])->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password', [
                    'inputOptions' =>[
                            //'class' => 'form-control form-control-user',
                        'placeholder' =>'Enter your password'
                    ]
            ])->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

<!--                <div class="form-group">-->
<!--                    <input type="email" class="form-control form-control-user"-->
<!--                           id="exampleInputEmail" aria-describedby="emailHelp"-->
<!--                           placeholder="Enter Email Address...">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <input type="password" class="form-control form-control-user"-->
<!--                           id="exampleInputPassword" placeholder="Password">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="custom-control custom-checkbox small">-->
<!--                        <input type="checkbox" class="custom-control-input" id="customCheck">-->
<!--                        <label class="custom-control-label" for="customCheck">Remember-->
<!--                            Me</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <a href="index.html" class="btn btn-primary btn-user btn-block">-->
<!--                    Login-->
<!--                </a>-->
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user  btn-block', 'name' => 'login-button']) ?>

            <?php ActiveForm::end() ?>
            <hr>
            <div class="text-center">
                <a class="small" href="<?php echo \yii\helpers\Url::to(['/site/forgot-password'])?>">Forgot Password?</a>
            </div>

        </div>
    </div>
</div>
