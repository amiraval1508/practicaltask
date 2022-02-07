<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

</head>
<body>


<?php include('assets/include/navbar.php') ?>
<div class="container">
  <div class="row">
    <br><br><br><br><br><br>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <a href="<?php echo base_url('Posts') ?>" class="btn btn-sm pull-right btn-primary">List Post</a>
      <?php echo form_open_multipart('posts/insert') ?>
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h5 style="text-align: center;" class="card-title">Post</h5>
          </div>
          <div class="card-body">
            <div class="row">
                <h5 style="color:green;text-align: center;"><?php echo $this->session->flashdata('msg'); ?></h5>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Post Title','post_title') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'post_title','id'=>'post_title','placeholder'=>'Post Title')) ?>
                  <span style="color: red;"><?php echo form_error('post_title'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Image','image') ?>
                  <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img','id'=>'post_img')) ?>
                  <span style="color: red;"><?php echo $error; ?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('Start Date','start_date') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'post_start','id'=>'post_start','placeholder'=>'Start Date')) ?>
                  <span style="color: red;"><?php echo form_error('post_start'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_label('End Date','end_date') ?>
                  <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'post_end','id'=>'post_end','placeholder'=>'End Date')) ?>
                  <span style="color: red;"><?php echo form_error('post_end'); ?></span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo form_label('Description','desc') ?>
                        <textarea class="form-control" rows="2" name="post_desc" id="post_desc" placeholder="Description"></textarea>
                        <span style="color: red;"><?php echo form_error('post_desc'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <b>Is Active</b>&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="post_status" value="Active">Yes
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="post_status" value="Inactive">No
                  </label>
                  <span style="color: red;"><?php echo form_error('post_status'); ?></span>
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
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $(function () {
  $("#post_start").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
  $("#post_end").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

</script>
</html>