<div class="container">
      <?php echo form_open("auth/change_password",array("class"=>"col s12 signup-form"));?>
      <div class="panel panel-info">
           <h3 class="panel-heading">
                 <?php echo lang('change_password_heading');?>
           </h3>
      </div>
      <div class="text-warning" id="infoMessage"><?php echo $message;?></div>
      <p class="input-field">
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p class="input-field">
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p class="input-field">
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'),array("class"=>"btn"));?></p>

      <?php echo form_close();?>
</div>





