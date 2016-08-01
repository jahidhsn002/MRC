<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	<h2>Manage Data</h2>
	<?php if($success != ''){ ?>
		<div class="text-center text-success" style="margin-bottom: 5px;margin-top: 5px;">
			<div class="bg-success" style="border: 1px solid #cccccc;padding: 5px;"><b><?php echo $success; ?></b></div>
		</div>
	<?php }else if($error != ''){ ?>
		<div class="text-center text-danger" style="margin-bottom: 5px;margin-top: 5px;">
			<div class="bg-danger" style="border: 1px solid #cccccc;padding: 5px;"><b><?php echo $error; ?></b></div>
		</div>
	<?php } ?>
	<div class="table-responsive" data-pattern="priority-columns">
		<table id="data" class="table white table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th data-priority="1">Company</th>
					<th data-priority="3">Next</th>
					<th data-priority="4">Need</th>
					<th data-priority="5">Person</th>
					<th data-priority="6">Phone</th>
					<th data-priority="7">Email</th>
					<th data-priority="8">Address</th>
					<th data-priority="9">Comment</th>
					<th data-priority="10">User</th>
					<th data-priority="11">Entry</th>
					<th data-priority="2" class="text-right">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $field): ?>
				<tr class="<?php echo $field['status']; ?>">
					<td><?php echo $field['company']; ?></td>
					<td><?php echo mdate('%Y-%m-%d', $field['next']); ?></td>
					<td><?php echo $field['need']; ?></td>
					<td><?php echo $field['person']; ?></td>
					<td><?php echo $field['phone']; ?></td>
					<td><?php echo $field['email']; ?></td>
					<td><?php echo $field['address']; ?></td>
					<td><?php echo $field['comment']; ?></td>
					<td><?php echo $field['user_name']; ?></td>
					<td><?php echo mdate('%Y-%m-%d', $field['time']); ?></td>
					<td class="text-right">
						<a class="btn btn-sm btn-success" href="<?php echo site_url('data/change'); ?>/<?php echo $field['id']; ?>"><span class="glyphicon glyphicon-ok"></span></a>
						<a class="btn btn-sm btn-success" href="<?php echo site_url('data/edit'); ?>/<?php echo $field['id']; ?>"><span class="glyphicon glyphicon-tasks"></span></a>
						<a class="btn btn-sm btn-danger" href="<?php echo site_url('data/remove'); ?>/<?php echo $field['id']; ?>"><span class="glyphicon glyphicon-remove-circle"></span></a> 
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
