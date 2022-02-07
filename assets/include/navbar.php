<?php if(isset($this->session->userdata['user'])){ 
  $user = $this->Model->select_where('users',$w=array('user_id'=>$this->session->userdata['user']['user_id']));
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome <?php echo $user[0]['user_fname'] ?> <?php echo $user[0]['user_lname'] ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('Blog') ?>">Home</a></li>
      <li><a href="<?php echo base_url('Posts') ?>" style="text-align:right;" class="pull-right">Post</a></li>
      <li><a href="<?php echo base_url('Login/logout') ?>" style="text-align:right;" class="pull-right">Logout</a></li>
    </ul>
    <div class="text-right">
      <img style="margin-top: 10px;margin-right: 10px;" src="<?php echo base_url('assets/uploads/users/') ?><?php echo $user[0]['user_img'] ?>" class="img-circle" alt="Cinque Terre" width="35" height="30"> 
    </div>
  </div>
</nav>
<?php }else{ redirect('Login'); } ?>