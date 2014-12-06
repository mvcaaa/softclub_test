<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
    echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
} ?>

<?php $form = ActiveForm::begin(array(
    'options' => array('class' => 'form-horizontal', 'role' => 'form'),
)); ?>
    <div class="form-group">
        <?php echo $form->field($model, 'email')->textInput(array('class' => 'form-control', 'value' => '')); ?>
    </div>
<?php echo Html::submitButton('Submit', array('class' => 'btn btn-primary pull-right'));
ActiveForm::end();

if (!Yii::$app->user->isGuest) {
    ?>
    <div class="clearfix"></div>
    <hr/>
    <table class="table table-striped table-hover">
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        <?php foreach ($models as $email): ?>
            <tr>
                <td>
                    <?php echo $email->id; ?>
                </td>
                <td><?php echo $email->email; ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($email->created_at)); ?></td>
                <td>
                    <?php echo Html::a('delete', array('site/delete', 'id' => $email->id)); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table> <? } ?>