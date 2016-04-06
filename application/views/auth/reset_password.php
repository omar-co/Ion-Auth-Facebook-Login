<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('reset_password_heading'); ?></h1>

        <div id="infoMessage" class="<?php echo $message ? 'alert alert-danger' : '' ?>"><?php echo $message; ?></div>

        <?php echo form_open('auth/reset_password/' . $code); ?>

        <div class="form-group">
            <label
                for="new_password" class="control-label"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label>
            <br/>
            <?php echo form_input($new_password,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm','class="label-control"'); ?> <br/>
            <?php echo form_input($new_password_confirm,'','class="form-control"'); ?>
        </div>

        <?php echo form_input($user_id); ?>
        <?php echo form_hidden($csrf); ?>

        <div class="form-group">
            <?php echo form_submit('submit', lang('reset_password_submit_btn'),'class="btn btn-primary"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
