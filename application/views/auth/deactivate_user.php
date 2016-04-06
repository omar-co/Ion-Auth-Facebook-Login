<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('deactivate_heading'); ?></h1>
        <?php echo sprintf(lang('deactivate_subheading'), $user->username); ?>

        <?php echo form_open("auth/deactivate/" . $user->id); ?>

        <div class="form-group">
            <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
            <input type="radio" name="confirm" value="yes" checked="checked"/>
            <?php echo lang('deactivate_confirm_n_label', 'confirm', 'confirm'); ?>
            <input type="radio" name="confirm" value="no"/>
        </div>


        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id' => $user->id)); ?>

        <div class="form-group">
            <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
