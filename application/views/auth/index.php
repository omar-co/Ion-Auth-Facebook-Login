<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        <h1><?php echo lang('index_heading'); ?></h1>
        <small><?php echo lang('index_subheading'); ?></small>


        <div id="infoMessage" class="<?php echo $message?'alert alert-danger':'' ?>"><?php echo $message; ?></div>

        <table class="table table-striped custab">
            <thead>
            <tr>
                <th><?php echo lang('index_fname_th'); ?></th>
                <th><?php echo lang('index_lname_th'); ?></th>
                <th><?php echo lang('index_email_th'); ?></th>
                <th><?php echo lang('index_groups_th'); ?></th>
                <th><?php echo lang('index_status_th'); ?></th>
                <th><?php echo lang('index_action_th'); ?></th>
            </tr>
            </thead>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php foreach ($user->groups as $group): ?>
                            <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?>
                            <br/>
                        <?php endforeach ?>
                    </td>
                    <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, '<span class="glyphicon glyphicon-ok"></span> '.lang('index_active_link'),'class="btn btn-success btn-xs"') : anchor("auth/activate/" . $user->id, '<span class="glyphicon glyphicon-remove"></span> '.lang('index_inactive_link'),'class="btn btn-danger btn-xs"'); ?></td>
                    <td><?php echo anchor("auth/edit_user/" . $user->id, '<span class="glyphicon glyphicon-edit"></span> Edit',"class='btn btn-info btn-xs'"); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <p><?php echo anchor('auth/create_user', lang('index_create_user_link')) ?>
            | <?php echo anchor('auth/create_group', lang('index_create_group_link')) ?></p>
    </div>
</div>