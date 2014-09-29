<?php 

	class Tip extends My_Model{

		const DB_TABLE 	  = "tips";
		const DB_TABLE_PK = "id";

		/**
		* Unique identifier for the Tip table
		* @var int
		*/
		public $tip_id;

		/**
		* The forein key to the Job table
		* @var string
		*/
		public $job_id;

		/**
		* Job is tipped
		* @var int
		*/
		public $yes;

		/**
		* Job is not tipped
		* @var int
		*/
		public $no;

	}

?>