<div class="container">
    <h3><?php echo lang('forgot_password_heading');?></h3>
    <p class="text-info"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>


    <div class="text-warning"><?php echo $message;?></div>

    <?php echo form_open("auth/forgot_password");?>

    <div class="input-field">
        <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
        <?php echo form_input($identity);?>
    </div>

    <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),array('class' => 'btn '));?></p>

    <?php echo form_close();?>
</div>

