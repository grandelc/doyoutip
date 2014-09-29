<?php echo validation_errors(); ?>
<?php echo anchor('service', 'Back to Services', 'title="Back to Services"'); ?>

<form method="post">
	<div>
		<label for="job_id">Job Title</lable>
		<input type="text" name="job_title" value="" />
	</div>

	<div>
		<input type="submit" value="Save" />
	</div>
</form>