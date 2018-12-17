<?php 
/**
* 
*/
class Buscar extends CI_Controller
{
	
	public function __construct()
        {
            parent::__construct();
            $this->load->model('buscar_model');
            $this->load->helper('url_helper');
        }

	

	public function index()
	{
		$data['title'] = "Buscar eventos";
		$data['eventos'] = $this->buscar_model->get_eventos();

		$this->load->view('templates/header', $data);
        $this->load->view('eventos/index', $data);
        $this->load->view('templates/footer', $data);

	}

	public function view($slug = NULL)
    {
        $data['evento_item'] = $this->buscar_model->get_eventos($slug);

        if (empty($data['evento_item']))
        {
                show_404();
        }

        $data['title'] = $data['evento_item']['titulo'];

        $this->load->view('templates/header', $data);
        $this->load->view('eventos/detalle', $data);
        $this->load->view('templates/footer');
    }
}


 ?>