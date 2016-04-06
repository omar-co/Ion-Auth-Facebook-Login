<div class="container">
    <div class=" ">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h1><?php echo lang('login_heading'); ?></h1>
                    </div>
                    <?php echo lang('login_subheading'); ?>
                </div>
                <div class="panel-body">
                    <div id="infoMessage"
                         class="<?php echo $message ? 'alert alert-danger' : '' ?>"><?php echo $message; ?></div>

                    <?php echo form_open("auth/login", "role='form'"); ?>
                    <fieldset>
                        <div class="form-group">
                            <?php echo form_input($identity, '', array('class' => 'form-control', 'placeholder' => lang('login_identity_label'))); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_input($password, '', array('class' => 'form-control', 'placeholder' => lang('login_password_label'))); ?>
                        </div>

                        <?php echo lang('login_remember_label', 'remember'); ?>
                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                        <div class="form-group">
                            <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"'); ?>
                            <a class="btn btn-primary"
                               href="<?php echo base_url() . 'facebook' ?>">Login with Facebook</a>
                        </div>
                    </fieldset>
                    <?php echo form_close(); ?>

                    <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>