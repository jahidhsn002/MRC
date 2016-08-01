<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	
	<h2 class="text-center">New Data</h2>
	
	<?php 
		$now = 1472508000;
		$human = unix_to_human($now);
		$unix = human_to_unix("2016-08-30 00:00 AM");
		// echo $human;
		// echo $unix;
	?>
	
	<?php echo form_open('data/add', array('class'=>'form white')); ?>
		
		<div class="form-group text-center text-danger">
			<?php echo validation_errors(); ?>
		</div>
		<div class="row">
			<div class="col-sm-4">
			
				<p class="form-group">
					<label for="Company">Company:</label>
					<input type="text" name="company" class="form-control" id="Company">
				</p>
				
				<p class="form-group">
					<label for="Status">Status:</label>
					<select name="status" class="form-control" id="Status">
						<option value="natural">Nutral</option>
						<option value="dark_green">Super Positive</option>
						<option value="light_green">Positive</option>
						<option value="dark_red">Negative</option>
						<option value="completed">Completed</option>
					</select>
				</p>
				
				<p class="form-group">
					<label for="Next">Next:</label>
					<div class="input-group date" onload="$(this).datepicker()" data-date-format="yyyy-mm-dd" data-provide="datepicker">
						<input type="text" name="next" class="form-control" id="Next">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</p>
				
				<p class="form-group">
					<label for="Need">Need:</label>
					<textarea name="need" class="form-control" id="Need"></textarea>
				</p>
				
			</div>
			<div class="col-sm-4">
				
				<p class="form-group">
					<label for="Person">Contact Person:</label>
					<input type="text" name="person" class="form-control" id="Person">
				</p>
				
				<p class="form-group">
					<label for="Phone">Phone:</label>
					<input type="text" name="phone" class="form-control" id="Phone">
				</p>
				
				<p class="form-group">
					<label for="Email">Email:</label>
					<input type="text" name="email" class="form-control" id="Email">
				</p>
				
				<p class="form-group">
					<label for="Address">Address:</label>
					<textarea name="address" class="form-control" id="Address"></textarea>
				</p>
				
			</div>
			<div class="col-sm-4">
			
				<p class="form-group">
					<label for="Comment">Comment:</label>
					<textarea name="comment" style="min-height:220px;" class="form-control" id="Comment"></textarea>
				</p>
				
				<p class="form-group text-right">
					<input class="btn btn-success" type="submit" name="submit" class="form-control">
				</p>
				
			</div>
		</div>

	<?php echo form_close(); ?>
		
</div>