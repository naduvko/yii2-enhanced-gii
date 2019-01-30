<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator \naduvko\enhancedgii\crud\Generator */
/* @var $relations array */
$tableSchema = $generator->getTableSchema();
$fk = $generator->generateFK($tableSchema);
echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */

<?php
$pk = empty($tableSchema->primaryKey) ? $tableSchema->getColumnNames()[0] : $tableSchema->primaryKey[0];
$modelClass = StringHelper::basename($generator->modelClass);
?>
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?>

    <?= "<?= " ?>$form->errorSummary($model); ?>

<?php
foreach ($tableSchema->getColumnNames() as $attribute) {
    if (!in_array($attribute, $generator->skippedColumns)) {
        echo "    <?= " . $generator->generateActiveField($attribute, $fk) . " ?>\n\n";
    }
}

?>
    <div class="form-group">
<?php if($generator->saveAsNew): ?>
<?= "    <?php if(Yii::\$app->controller->action->id != 'save-as-new'): ?>\n" ?>
<?= "        <?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<?= "    <?php endif; ?>\n" ?>
<?= "    <?php if(Yii::\$app->controller->action->id != 'create'): ?>\n" ?>
<?= "        <?= " ?>Html::submitButton(<?=$generator->generateString('Save As New')?>, ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
<?= "    <?php endif; ?>\n" ?>
<?php else: ?>
<?= "        <?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<?php endif; ?>
<?php if ($generator->cancelable): ?>
        <?= "<?= " ?>Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
<?php endif; ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
