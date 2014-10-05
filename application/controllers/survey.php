<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index()
	{
		$this->load->helper("url");

		// Loads the Jobs
		$services = array();
		$this->load->model("Job");
		$jobs = $this->Job->get();

		foreach($jobs as $job){
			$services[] = array(
				'id' => $job->id,
				'job_title'=> $job->job_title,
			);
		}

		$this->load->view("header");
		// Displays a list of all the jobs
		$this->load->view('survey', array("services" => $services));
		$this->load->view("footer");
	}

	public function submitTip(){
		$this->load->model("Tip");

		$tip = new Tip();
		$tip->job_id = $this->input->post("job_id");
		$tip->yes = $this->input->post("yes");
		$tip->no = $this->input->post("no");
		$tip->save();
	}
}

?>