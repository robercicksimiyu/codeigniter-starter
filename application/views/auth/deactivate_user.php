<div class="container">
  <?php echo form_open("auth/deactivate/".$user->id,array("class"=>"col s12 signup-form"));?>
  <div class="panel panel-info">
    <h3 class="panel-heading">
      <?php echo lang('deactivate_heading');?>
    </h3>
  </div>
  <div class="text-danger" id="infoMessage"><?php echo $message;?></div>

  <p>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
  </p>

  <p>
    <input type="radio" name="confirm" value="no" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'),array('class'=>'btn'));?></p>

  <?php echo form_close();?>
</div>

