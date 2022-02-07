<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />


</head>
<body>
  
<div class="container">
  <div class="row">
    <br><br><br><br><br><br><br><br><br><br>
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php echo form_open_multipart('Register/register_user') ?>
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h5 style="text-align: center;" class="card-title">Register</h5>
            <a class="pull-right" href="<?php echo base_url('Login') ?>">Login</a>
          </div>
          <div class="card-body">
            <div class="row">
              <h5 style="color:green;text-align: center;"><?php echo $this->session->flashdata('msg'); ?></h5>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('First Name','firstname') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'user_fname','id'=>'user_fname','placeholder'=>'First Name')) ?>
                  <span style="color: red;"><?php echo form_error('user_fname'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Last Name','lastname') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'user_lname','id'=>'user_lname','placeholder'=>'Last Name')) ?>
                  <span style="color: red;"><?php echo form_error('user_lname'); ?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Email','email') ?>
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'user_email','id'=>'user_email','placeholder'=>'Email')) ?>
                <span style="color: red;"><?php echo form_error('user_email'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Password','password') ?>
                  <?php echo form_input(array('type'=>'password','class'=>'form-control','name'=>'user_pass','id'=>'user_pass','placeholder'=>'Password')) ?>
                  <span style="color: red;"><?php echo form_error('user_pass'); ?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Date of Birth (DOB)','dob') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'user_dob','id'=>'user_dob','placeholder'=>'Date of Birth')) ?>
                  <span style="color: red;"><?php echo form_error('user_dob'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Image','image') ?>
                  <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'user_img','id'=>'user_img')) ?>
                  <span style="color: red;"><?php echo $error; ?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <b>Role</b>&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="user_role" value="Admin">Admin
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="user_role" value="User">User
                  </label>
                  <span style="color: red;"><?php echo form_error('user_role'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-header">
            <button type="submit" name="submit" value="submit" class="btn btn-sm btn-primary pull-right">Submit</button>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $(function () {
  $("#user_dob").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

</script>