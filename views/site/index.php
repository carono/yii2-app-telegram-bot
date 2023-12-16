<?php

/* @var $this yii\web\View */

$this->title = '';
$loginForm = new \app\models\forms\LoginForm();


?>


<div class="loginColumns">
    <div class="row">
        <?= \app\widgets\Alert::widget() ?>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center login">
                    Вход
                </div>
                <div class="ibox-content">
                    <?= $this->render('login'); ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center login">
                    Регистрация
                </div>
                <div class="ibox-content">
                    <?= $this->render('register'); ?>
                </div>
            </div>
        </div>
    </div>
</div>