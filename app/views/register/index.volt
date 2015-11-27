{{ content() }}

<div class="page-header">
  <h2>Register Tione Mudhara</h2>
</div>

{{  form('register', 'id': 'registerForm', 'onbeforesubmit': 'return false') }}
<filedset>
  <div class="control-group">
    {{ form.label('name', ['class': 'control-label']) }}
     <div class="controls">
       {{ form.render('name', ['class': 'form-control']) }}
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="name_alert">
	 <strong>Warning!</strong>Isai zita renyu rakazara Tapota
       </div>
     </div>
  </div>

  <div class="control-group">
    {{ form.label('username', ['class': 'control-label']) }}
     <div class="controls">
       {{ form.render('username', ['class': 'form-control']) }}
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="username_alert">
	 <strong>Warning!</strong>Please enter your desired user name
       </div>
     </div>
  </div>

  <div class="control-group">
    {{ form.label('email', ['class': 'control-label']) }}
     <div class="controls">
       {{ form.render('email', ['class': 'form-control']) }}
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="email_alert">
	 <strong>Warning!</strong>Please enter your email
       </div>
     </div>
  </div>

  <div class="control-group">
    {{ form.label('password', ['class': 'control-label']) }}
     <div class="controls">
       {{ form.render('name', ['class': 'form-control']) }}
       <p class="help-block">(mavara masere anodikanwa pano)</p>
       <div class="alert alter-warning" id="password_alert">
	 <strong>Warning!</strong>Please provide a valid passowrd iweka iwe.
       </div>
     </div>
  </div>

  <div class="control-group">
    {{ form.label('repeatPassword', ['class': 'control-label']) }}
     <div class="controls">
       {{ form.render('repeatPassword', ['class': 'form-control']) }}
       <p class="help-block">(required)</p>
       <div class="alert alter-warning" id="repeatPassword_alert">
	 <strong>Warning!</strong>Mapasswords Akasiyana aya
       </div>
     </div>
  </div>

  <div class="form-actions">
    {{ submit_button('Register', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
    <p class"help-block">Materms edu unomanzwisia here kana wasigna up wabvuma</p>
  </div>
</fieldset>
</form>
