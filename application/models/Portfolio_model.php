<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    private $_table = "portfolios";

    public $portfolio_id;
    public $portfolio_name;
    public $portfolio_category;
    public $portfolio_date;
    public $portfolio_desc;
    public $portfolio_image = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'portfolio_name',
            'label' => 'Portfolio Name',
            'rules' => 'required'],

            ['field' => 'portfolio_date',
            'label' => 'Portfolio Date',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->order_by('portfolio_date','ASC')->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["portfolio_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->portfolio_id = uniqid();
        $this->portfolio_name = $post["portfolio_name"];
        $this->portfolio_category = $post["portfolio_category"];
        $this->portfolio_date = $post["portfolio_date"];
        $this->portfolio_desc = $post["portfolio_desc"];
        $this->portfolio_image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->portfolio_id = $post["portfolio_id"];
        $this->portfolio_name = $post["portfolio_name"];
        $this->portfolio_category = $post["portfolio_category"];
        $this->portfolio_date = $post["portfolio_date"];
        $this->portfolio_desc = $post["portfolio_desc"];
        if (!empty($_FILES["portfolio_image"]["name"])) {
            print_r($_FILES);
            $this->portfolio_image = $this->_uploadImage();
        } else {
            $this->portfolio_image = $post["old_image"];
        }
        
        return $this->db->update($this->_table, $this, array('portfolio_id' => $post['portfolio_id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("portfolio_id" => $id));   
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/portfolio/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->portfolio_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('portfolio_image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $portfolio = $this->getById($id);
        if ($portfolio->portfolio_image != "default.jpg") {
            $filename = explode(".", $portfolio->portfolio_image)[0];
            return array_map('unlink', glob(FCPATH."upload/portfolio/$filename.*"));
        }
    }
}