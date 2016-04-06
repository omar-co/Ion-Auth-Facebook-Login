<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('forgot_password_heading'); ?></h1>
        <small><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></small>

        <div id="infoMessage" class="<?php echo $message?'alert alert-danger':'' ?>" role="alert"><?php echo $message; ?></div>

        <?php echo form_open("auth/forgot_password"); ?>

        <div class="form-group">
            <label
                for="identity" class="control-label"><?php echo(($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label>
            <?php echo form_input($identity,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-primary"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>