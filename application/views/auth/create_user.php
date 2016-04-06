<div class="container">
      <div class="row col-md-4 col-md-offset-4">
<h1><?php echo lang('create_user_heading');?></h1>
<small><?php echo lang('create_user_subheading');?></small>

<div id="infoMessage" class="<?php echo $message?'alert alert-danger':'' ?>"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <div class="form-group">
            <?php echo lang('create_user_fname_label', 'first_name','class="control-label"');?> <br />
            <?php echo form_input($first_name,'','class="form-control"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_lname_label', 'last_name','class="control-label"');?> <br />
            <?php echo form_input($last_name,'','class="form-control"');?>
      </div>
      
      <?php
      if($identity_column!=='email') {
          echo '<div class="form-group">';
          echo lang('create_user_identity_label', 'identity','class="control-label"');
          echo '<br />';
          echo form_error('identity','<div class="alert alert-danger">','</div>');
          echo form_input($identity,'','class="form-control"');
          echo '</div>';
      }
      ?>

      <div class="form-group">
            <?php echo lang('create_user_company_label', 'company','class="control-label"');?> <br />
            <?php echo form_input($company,'','class="form-control"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_email_label', 'email','class="control-label"');?> <br />
            <?php echo form_input($email,'','class="form-control"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_phone_label', 'phone','class="control-label"');?> <br />
            <?php echo form_input($phone,'','class="form-control"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_label', 'password','class="control-label"');?> <br />
            <?php echo form_input($password,'','class="form-control"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm','class="control-label"');?> <br />
            <?php echo form_input($password_confirm,'','class="form-control"');?>
      </div>


      <div class="form-group">
            <?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-primary"');?>
      </div>

<?php echo form_close();?>
</div></div>