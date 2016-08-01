<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	
	<h2 class="text-center">Modify Data</h2>
	
	{data}
	
	<?php echo form_open('data/edit', array('class'=>'form white')); ?>
		
		<div class="form-group text-center text-danger">
			<?php echo validation_errors(); ?>
		</div>
		<div class="row">
			<div class="col-sm-4">
			
				<p class="form-group">
					<label for="Company">Company:</label>
					<input type="text" name="company" value="{company}" class="form-control" id="Company">
				</p>
				
				<p class="form-group">
					<label for="Email">Email:</label>
					<input type="text" name="email" value="{email}" class="form-control" id="Email">
				</p>
				
				<p class="form-group">
					<label for="Person">Contact Person:</label>
					<input type="text" name="person" value="{person}" class="form-control" id="Person">
				</p>
				
			</div>
			<div class="col-sm-4">
				
				<p class="form-group">
					<label for="Phone">Phone:</label>
					<input type="text" name="phone" value="{phone}" class="form-control" id="Phone">
				</p>
				
				<p class="form-group">
					<label for="Need">Need:</label>
					<textarea name="need" class="form-control" id="Need">{need}</textarea>
				</p>
				
			</div>
			<div class="col-sm-4">
				
				<p class="form-group">
					<label for="Address">Address:</label>
					<textarea name="address" style="min-height:120px" class="form-control" id="Address">{address}</textarea>
				</p>
				
				<p class="form-group text-right">
					<input class="btn btn-success" type="submit" name="submit" class="form-control">
				</p>
				
			</div>
		</div>

	<?php echo form_close(); ?>
	
	{/data}
		
</div>