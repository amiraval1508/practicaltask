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


<?php include('assets/include/navbar.php') ?>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <a href="<?php echo base_url('Posts/create') ?>" class="btn btn-sm pull-right btn-primary">Add Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Post Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($x as $p){ ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $p['post_title'] ?></td>
                <td><a href="<?php echo base_url('Posts/edit_post/') ?><?php echo $p['post_id'] ?>" class="btn btn-xs fa fa-edit btn-primary"></a></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr No</th>
                <th>Post Title</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>