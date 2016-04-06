<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('create_group_heading'); ?></h1>
        <small><?php echo lang('create_group_subheading'); ?></small>

        <div id="infoMessage" class="<?php echo $message?'alert alert-danger':'' ?>" role="alert"><?php echo $message; ?></div>

        <?php echo form_open("auth/create_group"); ?>

        <div class="form-group">
            <?php echo lang('create_group_name_label', 'group_name','class="control-label"'); ?> <br/>
            <?php echo form_input($group_name,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('create_group_desc_label', 'description','class="control-label"'); ?> <br/>
            <?php echo form_input($description,'','class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo form_submit('submit', lang('create_group_submit_btn'),'class="btn btn-primary"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
