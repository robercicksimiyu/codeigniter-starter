<div class="container">
      <?php echo form_open(current_url(),array("class"=>"col s12 signup-form"));?>
      <div class="panel panel-info">
            <h3 class="panel-heading">
                  Create User
            </h3>
      </div>
      <div class="text-danger" id="infoMessage"><?php echo $message;?></div>
      <p class="input-field">
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p class="input-field">
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'),array("class"=>"btn"));?></p>

      <?php echo form_close();?>
</div>

