<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <h1><?php echo lang('edit_user_heading'); ?></h1>
        <small><?php echo lang('edit_user_subheading'); ?></small>

        <div id="infoMessage" class="<?php echo $message ? 'alert alert-danger' : '' ?>"><?php echo $message; ?></div>

        <?php echo form_open(uri_string()); ?>

        <div class="form-group">
            <?php echo lang('edit_user_fname_label', 'first_name', 'class="label-control"'); ?> <br/>
            <?php echo form_input($first_name, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_lname_label', 'last_name', 'class="label-control"'); ?> <br/>
            <?php echo form_input($last_name, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_company_label', 'company', 'class="label-control"'); ?> <br/>
            <?php echo form_input($company, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_phone_label', 'phone', 'class="label-control"'); ?> <br/>
            <?php echo form_input($phone, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_password_label', 'password', 'class="label-control"'); ?> <br/>
            <?php echo form_input($password, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm', 'class="label-control"'); ?><br/>
            <?php echo form_input($password_confirm, '', 'class="form-control"'); ?>
        </div>

        <?php if ($this->ion_auth->is_admin()): ?>

            <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
            <div class="checkbox">
                <?php foreach ($groups as $group): ?>
                    <label class="checkbox">
                        <?php
                        $gID = $group['id'];
                        $checked = null;
                        $item = null;
                        foreach ($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked = ' checked="checked"';
                                break;
                            }
                        }
                        ?>
                        <input type="checkbox" name="groups[]"
                               value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                        <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                    </label>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php echo form_hidden('id', $user->id); ?>
        <?php echo form_hidden($csrf); ?>

        <p><?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn btn-primary"'); ?></p>

        <?php echo form_close(); ?>
    </div>
</div>