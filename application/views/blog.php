<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<?php if(isset($this->session->userdata['user'])){ ?>
<?php include('assets/include/navbar.php') ?>
<?php } ?>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<a href="<?php echo base_url('Login') ?>">Login</a>|<a href="<?php echo base_url('Register') ?>">Register</a>
   <div id="blog" class="row">      
   <?php foreach($x as $post){ ?>      
                 <div class="col-md-10 blogShort">
                     <h4><b><?php echo $post['post_title'] ?></b>
                     
                     </h4>
                     <img height="150" width="150" src="<?php echo base_url('assets/uploads/posts/') ?><?php echo $post['post_img'] ?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
                     <article><p>
                         <?php echo $post['post_desc'] ?> 
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="#">READ MORE</a> 
                 </div>
               <?php } ?>
             </div>
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>