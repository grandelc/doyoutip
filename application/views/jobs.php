<?php echo anchor('service/add', 'Add Service', 'title="Add Service"'); ?>

<h2>Jobs</h2>

<?php $this->table->set_heading("Job Title");
echo $this->table->generate($services);