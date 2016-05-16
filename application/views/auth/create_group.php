<div class="container">

      <?php echo form_open("auth/create_group",array("class"=>"col s12 signup-form"));?>
            <div class="panel panel-info">
                  <h3 class="panel-heading">
                        <?php echo lang('create_group_heading');?>
                  </h3>
            </div>
            <div class="text-danger" id="infoMessage"><?php echo $message;?></div>

            <p class="input-field">
                  <?php echo lang('create_group_name_label', 'group_name');?> <br />
                  <?php echo form_input($group_name);?>
            </p>

            <p class="input-field">
                  <?php echo lang('create_group_desc_label', 'description');?> <br />
                  <?php echo form_input($description);?>
            </p>

            <p><?php echo form_submit('submit', lang('create_group_submit_btn'),array("class"=>"btn"));?></p>

      <?php echo form_close();?>
</div>
