<div class="container">



<?php echo form_open(uri_string(),array("class"=>"col s12 signup-form"));?>
    <div class="panel panel-info">
        <h3 class="panel-heading">
            <?php echo lang('edit_user_heading');?>
        </h3>
    </div>
    <div class="text-danger" id="infoMessage"><?php echo $message;?></div>
    <div class="row">
        <div class="col s6 input-field">
            <?php echo form_input($first_name);?>
            <?php echo lang('edit_user_fname_label', 'first_name');?>
        </div>
        <div class="col s6 input-field">
            <?php echo form_input($last_name);?>
            <?php echo lang('edit_user_lname_label', 'last_name');?>
        </div>
    </div>

      <div class="input-field">
            <?php echo form_input($company);?>
            <?php echo lang('edit_user_company_label', 'company');?>
      </div>

      <div class="input-field" >
            <?php echo form_input($phone);?>
            <?php echo lang('edit_user_phone_label', 'phone');?>
      </div>

     <div class="row">
         <div class="input-field col s6">
             <?php echo form_input($password);?>
             <?php echo lang('edit_user_password_label', 'password');?>
         </div>

         <div class="input-field col s6">
             <?php echo form_input($password_confirm);?>
             <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
         </div>

     </div>




      <?php if ($this->ion_auth->is_admin()): ?>
          <div class="panel panel-info">
              <h4 class="panel-heading">
                  <?php echo lang('edit_user_groups_heading');?>
              </h4>
          </div>

          <div class="row">

              <?php foreach ($groups as $group):?>
                  <p class="col s3">
                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                      <label class="checkbox">
                      <?php
                          $gID=$group['id'];
                          $checked = null;
                          $item = null;
                          foreach($currentGroups as $grp) {
                              if ($gID == $grp->id) {
                                  $checked= ' checked="checked"';
                              break;
                              }
                          }
                      ?>
                      <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                      </label>
                  </p>
              <?php endforeach?>
          </div>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'),array("class"=>'btn'));?></p>

<?php echo form_close();?>
</div>
