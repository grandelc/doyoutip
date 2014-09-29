<?php 

	class Job extends MY_Model{

		const DB_TABLE 	  = "jobs";
		const DB_TABLE_PK = "id";

		/**
		* Unique identifier for the Job table
		* @var int
		*/
		public $id;

		/**
		* The name of the job
		* @var string
		*/
		public $job_title;

	}

?>