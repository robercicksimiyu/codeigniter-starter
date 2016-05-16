<div class="container">

<?php echo form_open("auth/login",array("class"=>"col s6 container login-form"));?>
  <div class="panel panel-info">
    <h3 class="panel-heading">
      <?php echo lang('login_heading');?>
    </h3>
  </div>
    <div class="text-danger" id="infoMessage"><?php echo $message;?></div>

    <div class="col s12 input-field">
      <?php echo form_input($identity);?>
      <?php echo lang('login_identity_label', 'identity');?>
    </div>
    <div class="col s12 input-field">
      <?php echo form_input($password);?>
      <?php echo lang('login_password_label', 'password');?>
    </div>
    <p class="col s12">
      <input type="checkbox" id="remember" name="remember" />
      <label for="remember"><?php echo lang('login_remember_label', 'remember');?></label>
    </p>



  <p><button class="btn btn-primary waves-effect waves-light" type="submit" name="action">Log In
      <i class="material-icons right"></i>
    </button></p>

  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

<?php echo form_close();?>


</div>