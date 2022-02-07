<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
  
<div class="container">
  <div class="row">
    <br><br><br><br><br><br><br><br><br><br>
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h5 style="color:green;text-align: center;"><?php echo $this->session->flashdata('msg'); ?></h5>
      <h5 style="color:red;text-align: center;"><?php echo $this->session->flashdata('error'); ?></h5>
      <?php echo form_open('Login/signin') ?>
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h5 style="text-align: center;" class="card-title">Login</h5>
            <a class="pull-right" href="<?php echo base_url('Register') ?>">Register</a>
          </div>
          <div class="card-body">
            <div class="form-group">
              <?php echo form_label('Email','email') ?>
              <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'email','id'=>'email','placeholder'=>'Email')) ?>
              <span style="color:red;"><?php echo form_error('email') ?></span>
            </div>
            <div class="form-group">
              <?php echo form_label('Password','password') ?>
              <?php echo form_input(array('type'=>'password','class'=>'form-control','name'=>'password','id'=>'password','placeholder'=>'Password')) ?>
              <span style="color:red;"><?php echo form_error('password') ?></span>
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