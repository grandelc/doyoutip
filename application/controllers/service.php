<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Loads the models
		$this->load->helper("url");
		$this->load->library("table");

		$services = array();
		$this->load->model("Job");
		$jobs = $this->Job->get();

		foreach($jobs as $job){
			$services[] = array(
				$job->job_title,
				anchor('service/view/' . $job->id, "View") . " | " .
				anchor("service/delete/" . $job->id, "Delete"),
			);
		}

		// Displays a list of all the jobs
		$this->load->view('jobs', array("services" => $services));
	}

	/**
	* Adds a Job
	*/
	public function add(){
		
		$this->load->model("Job");

		$this->load->helper("url");
		$this->load->library("table");
		$this->load->library("form_validation");

		$jobs = $this->Job->get();
		$job_form_options = array();

		foreach($jobs as $id => $job){
			$job_form_options[$id] = $job->job_title;
		}

		$this->form_validation->set_rules(array(
			array(
				'field' => 'job_title',
				'label' => 'Job Title',
				'rules' => 'required',
			)
		));

		$this->form_validation->set_error_delimiters("<div class='alert alert-error'>", "</div>");
		if (!$this->form_validation->run()){

			$this->load->view('job_form', array(
				"job_form_options"=> $job_form_options,
			));

		} else {

			$this->load->model("Job");

			$job = new Job();
			$job->job_title = $this->input->post("job_title");
			$job->save();

			$this->load->view('job_form_success', array(
				'job' => $job
			));
		}

	}

	/**
	* Deletes a Job
	*/
	public function delete($id){
		$this->load->model(array('Job'));
		$job = new Job();
		$job->load($id);

		if(!$job->id) {
			show_404();
		}

		$job->delete();
		$this->load->view('job_deleted', array(
			'id' => $id,
		));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */