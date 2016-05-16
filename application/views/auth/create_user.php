
<div class="container">

<?php echo form_open("auth/create_user",array("class"=>"col s12 signup-form"));?>
      <div class="panel panel-info">
            <h3 class="panel-heading">
                  Create User
            </h3>
      </div>
      <div class="text-danger" id="infoMessage"><?php echo $message;?></div>

      <div class="row">
            <div class="input-field col s6">
                  <?php echo form_input($first_name);?>
                  <?php echo lang('create_user_fname_label', 'first_name');?>

            </div>

            <div class="input-field col s6">
                  <?php echo form_input($last_name);?>
                  <?php echo lang('create_user_lname_label', 'last_name');?>
            </div>
      </div>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <div class="row">
            <div class="input-field col s6">
                  <?php echo lang('create_user_email_label', 'email');?> <br />
                  <?php echo form_input($email);?>
            </div>

            <div  class="input-field col s6">
                  <?php echo lang('create_user_phone_label', 'phone');?> <br />
                  <?php echo form_input($phone);?>
            </div>
      </div>

      <div class="row">
            <div  class="input-field col s6">
                  <?php echo lang('create_user_password_label', 'password');?> <br />
                  <?php echo form_input($password);?>
            </div>

            <div class="input-field col s6">
                  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                  <?php echo form_input($password_confirm);?>
            </div>
      </div>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'),array("class"=>'btn'));?></p>

<?php echo form_close();?>
</div>
