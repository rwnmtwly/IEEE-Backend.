<?php
/** @var $model app\models\User */
?>


<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('',"")?>

  <?php echo $form->field($model, 'email')?>
  <?php echo $form->field($model, 'password')->passwordField()?>
  
  <button type="submit" class="btn btn-primary">Submit</button>

<?php echo \app\core\form\Form::end()?>


<!-- <form action="" method="post">
<div class="row">
  <div class="col"><div class="mb-3">
    <label>Firstname</label>
    <input type="text" name = "firstname" class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : ''?>">
    <div class="invalid-feedback">
      <?php echo $model->getFirstError('firstname')?>
    </div>
  </div></div>
  <div class="col"><div class="mb-3">
    <label>Lastname</label>
    <input type="text" name = "lastname" class="form-control">
  </div></div>
</div>
  
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name = "email" class="form-control">
  </div>


  <div class="mb-3">
    <label>Password</label>
    <input type="password" name = "password" class="form-control">
  </div>


  <div class="mb-3">
    <label>Confirm Password</label>
    <input type="password" name = "confirmPassword" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->