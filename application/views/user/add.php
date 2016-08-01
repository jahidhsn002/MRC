<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	
	<h2 class="text-center">Add User</h2>
	
	<?php echo form_open('user/add', array('class'=>'form white')); ?>
		
		<div class="form-group text-center text-danger">
			<?php echo validation_errors(); ?>
		</div>
		<p class="form-group">
			<label for="Name">Name:</label>
			<input type="text" name="name" class="form-control" id="Name">
		</p>

		<p class="form-group">
			<label for="Email">Email:</label>
			<input type="email" name="email" class="form-control" id="Email">
		</p>
		
		<p class="form-group">
			<label for="Pass">Password:</label>
			<input type="password" name="pass" class="form-control" id="Pass">
		</p>
		
		<p class="form-group text-center">
			<label class="radio-inline"><input value="admin" type="radio" name="roll">Admin</label>
			<label class="radio-inline"><input value="worker" type="radio" name="roll">Worker</label>
		</p>
		
		<p class="form-group text-right">
			<input class="btn btn-success" type="submit" name="submit" class="form-control">
		</p>

	<?php echo form_close(); ?>
		
</div>