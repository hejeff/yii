<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-test">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Test page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
	<p>
    <?php echo Yii::$app->formatter->asEmail('cebe@example.com');?>
    </p>
</div>
