<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/inner_header.php';
}

?>


<center><div class="container" style="min-height: 700px; margin-top: 180px;">
<?php if ($this->session->flashdata('errmsg')) {?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $this->session->flashdata('errmsg'); ?>
    </div>
<?php  } ?>	
<div class="card" style="width: 38rem; padding-top: 30px; padding-bottom: 30px; background-color: whitesmoke;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h2 class="card-title"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Login</h2>
    <br>

    <?php if ($this->session->flashdata('errmsg')) {
		echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
	}
	?>

	<?php echo validation_errors(); ?>
	<?php echo form_open('Login/LoginUser'); ?>

	<div class="col-lg-6">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		</div>
		<br>
		<button type="submit" class="btn btn-success">Submit</button>

		<?php echo form_close(); ?>
	</div>
  </div>
</div>
</div></center>