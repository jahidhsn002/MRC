<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	
	<h2 class="text-center">Change Today</h2>
	
	<?php foreach($data as $field): ?>
		
		<div class="form-group text-center text-danger">
			<?php echo validation_errors(); ?>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<?php echo form_open('data/change/'.$field['id'], array('class'=>'form white')); ?>
				
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
						<input type="text" name="next" value="<?php echo mdate('%Y-%m-%d', $field['next']); ?>" class="form-control" id="Next">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</p>

				<p class="form-group">
					<label for="Comment">Comment:</label>
					<textarea name="comment" style="min-height:220px;" class="form-control" id="Comment"><?php echo $field['comment']; ?></textarea>
				</p>
				
				<p class="form-group text-right">
					<input class="btn btn-success" type="submit" name="submit" class="form-control">
				</p>
				
				<?php echo form_close(); ?>
				
			</div>
			<div class="col-sm-4"></div>
		</div>
	
	<?php endforeach; ?>
		
</div>