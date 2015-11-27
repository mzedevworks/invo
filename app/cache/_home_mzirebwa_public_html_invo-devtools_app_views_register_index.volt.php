<?php echo $this->getContent(); ?>

<div class="page-header">
  <h2>Register Tione Mudhara</h2>
</div>

<?php echo $this->tag->form(array('register', 'id' => 'registerForm', 'onbeforesubmit' => 'return false')); ?>
<filedset>
  <div class="control-group">
    <?php echo $form->label('name', array('class' => 'control-label')); ?>
     <div class="controls">
       <?php echo $form->render('name', array('class' => 'form-control')); ?>
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="name_alert">
	 <strong>Warning!</strong>Isai zita renyu rakazara Tapota
       </div>
     </div>
  </div>

  <div class="control-group">
    <?php echo $form->label('username', array('class' => 'control-label')); ?>
     <div class="controls">
       <?php echo $form->render('username', array('class' => 'form-control')); ?>
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="username_alert">
	 <strong>Warning!</strong>Please enter your desired user name
       </div>
     </div>
  </div>

  <div class="control-group">
    <?php echo $form->label('email', array('class' => 'control-label')); ?>
     <div class="controls">
       <?php echo $form->render('email', array('class' => 'form-control')); ?>
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="email_alert">
	 <strong>Warning!</strong>Please enter your email
       </div>
     </div>
  </div>

  <div class="control-group">
    <?php echo $form->label('password', array('class' => 'control-label')); ?>
     <div class="controls">
       <?php echo $form->render('name', array('class' => 'form-control')); ?>
       <p class="help-block">(mavara masere anodikanwa pano)</p>
       <div class="alert alter-warning" id="password_alert">
	 <strong>Warning!</strong>Please provide a valid passowrd iweka iwe.
       </div>
     </div>
  </div>

  <div class="control-group">
    <?php echo $form->label('repeatPassword', array('class' => 'control-label')); ?>
     <div class="controls">
       <?php echo $form->render('repeatPassword', array('class' => 'form-control')); ?>
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="repeatPassword_alert">
	 <strong>Warning!</strong>Mapasswords Akasiyana aya
       </div>
     </div>
  </div>

  <div class="form-actions">
    <?php echo $this->tag->submitButton(array('Register', 'class' => 'btn btn-primary', 'onclick' => 'return SignUp.validate();')); ?>
    <p class"help-block">Materms edu unomanzwisia here kana wasigna up wabvuma</p>
  </div>
</fieldset>
</form>
