<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_list_model extends CI_Model
{
    private $_table = "contact_list";

    public $contact_id;
    public $contact_label;
    public $contact_text;
    public $image = "default_contact.jpg";

    public function rules()
    {
        return [
            ['field' => 'contact_label',
            'label' => 'Contact Label',
            'rules' => 'required'],

            ['field' => 'contact_text',
            'label' => 'Contaxt Text',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["contact_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->contact_id = uniqid();
        $this->contact_label = $post["contact_label"];
        $this->contact_text = $post["contact_text"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->contact_id = $post["id"];
        $this->contact_label = $post["contact_label"];
        $this->contact_text = $post["contact_text"];
        return $this->db->update($this->_table, $this, array('contact_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("contact_id" => $id));
    }
}