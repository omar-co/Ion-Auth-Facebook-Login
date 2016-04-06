<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('edit_group_heading'); ?></h1>
        <small><?php echo lang('edit_group_subheading'); ?></small>

        <div id="infoMessage" class="<?php echo $message?'alert alert-danger':'' ?>" role="alert"><?php echo $message; ?></div>

        <?php echo form_open(current_url()); ?>

        <div class="form-group">
            <?php echo lang('edit_group_name_label', 'group_name','class="control-label"'); ?>
            <?php echo form_input($group_name,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_group_desc_label', 'description'); ?>
            <?php echo form_input($group_description,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo form_submit('submit', lang('edit_group_submit_btn'),'class="btn btn-primary"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
