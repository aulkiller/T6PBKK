<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("portfolio_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["portfolios"] = $this->portfolio_model->getAll();
        $this->load->view("admin/portfolio/list", $data);
    }

    public function add()
    {
        $portfolio = $this->portfolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portfolio->rules());

        if ($validation->run()) {
            $portfolio->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/portfolio/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/portfolios');
       
        $portfolio = $this->portfolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portfolio->rules());

        if ($validation->run()) {
            $portfolio->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["portfolio"] = $portfolio->getById($id);
        if (!$data["portfolio"]) show_404();
        
        $this->load->view("admin/portfolio/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->portfolio_model->delete($id)) {
            redirect(site_url('admin/portfolios'));
        }
    }
}