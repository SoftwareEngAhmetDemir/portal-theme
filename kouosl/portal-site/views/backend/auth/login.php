<style>
.A
{
    width: 400px;
    height: 100px;
    background-color: red;
font-size: 40px;
padding-left: 40px;
   margin-left: 40px;
    margin-top: 200px;
}
    .A:hover:before
    {
content: "Tiklayin  ";
    font-weight: bolder;
    color: yellow;
    }
    .B
    {
        background-color: #4db3a2;
        width: 500px;
        height: 500px;
        position: relative;
        left: 300px;
        top: 0px;
    }
</style>
<?php
$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');
$query=mysqli_query($myconn,'select * from background');
while ($rows=mysqli_fetch_array($query))
{
    echo '<body  background="data:image/jpeg;base64,'.base64_encode($rows['pic']).'
"  style="background-repeat: no-repeat; background-size: cover;"></body>';
}

?>
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '';
?>
    <h1 class="img"><?= Html::encode($this->title) ?>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="B">
          <div>
              <?php echo Html::submitButton('Seyahat', ['class' => 'btn btn-primary A', 'name' => 'login-button']) ?>
          </div>
    </div>
            <?php ActiveForm::end(); ?>
    </h1>