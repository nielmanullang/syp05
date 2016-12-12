<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
/* <?= $form->field($model, 'user_id')->textInput() ?> di dalam form */
?>

<div class="announcement-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <section class="invoice">
        <div class="box box-widget">
            <div class='box-header with-border'>                
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <!--<i class="fa fa-info-circle "></i> Create New Artikel-->

                        </h2>
                    </div><!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">

                    <!-- Table row -->

                    <div class="col-xs-12">
                        <table class="table table-striped">
                            <?= $form->field($model, 'judul')->textInput(); ?>

                            <?=
                            $form->field($model, 'isi')->widget(CKEditor::className(), [
                                'editorOptions' => [
                                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                    'inline' => false, //по умолчанию false
                                ],]);
                            ?>


                            <?=
                            $form->field($model, 'file[]')->widget(FileInput::classname(), [
                                'options' => ['multiple' => 'true', 'rows' => 1],
                                'pluginOptions' => [
                                    'uploadUrl' => Url::to(['/upload/artikel']),
                                    'showUpload' => true,
                                    'browseLabel' => 'Browse File'
                                ],
                            ])
                            ?>




                        </table>
                    </div><!-- /.col -->
                    <!-- /.row -->
<?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Edit', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    <div class="row">
                        <!-- accepted payments column -->
                    </div><!-- /.row -->
                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-11 pull-right">

                        </div>
                    </div>           

                </div>           
            </div>                 
    </section><!-- /.content -->  
<?php ActiveForm::end(); ?>
</div>
