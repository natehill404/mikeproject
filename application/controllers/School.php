<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class School extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->rbac->hasPrivilege('class', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'classes/index');
        $data['title']      = 'Add School';
        $data['title_list'] = 'School List';

        $this->form_validation->set_rules(
            'school', $this->lang->line('school'), array(
                'required',
                array('school_exist', array($this->school_model, 'school_exists')),
            )
        );
        //$this->form_validation->set_rules('sections[]', $this->lang->line('section'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {

        } else {
            $school       = $this->input->post('school');
            $school_array = array(
                'house_name' => $this->input->post('school'),
                'is_active' =>1
            );
           // $sections = $this->input->post('sections');
            $this->school_model->add($school_array);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
            redirect('school');
        }
      
        $schools = $this->school_model->getAll();
        $data['schools'] = $schools;
        $this->load->view('layout/header', $data);
        $this->load->view('school/schoolList', $data);
        $this->load->view('layout/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->rbac->hasPrivilege('class', 'can_delete')) {
            access_denied();
        }
        $data['title'] = 'Schoo List';
        $this->school_model->remove($id);
        redirect('school');
    }

    public function edit($id)
    {
        if (!$this->rbac->hasPrivilege('class', 'can_edit')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'classes/index');
        $data['title']      = 'Edit School';
        $data['id']         = $id;
        //$vehroute           = $this->classsection_model->getByID($id);
        //$data['vehroute']   = $vehroute;
        $data['title_list'] = 'School List';

        $this->form_validation->set_rules(
            'school', $this->lang->line('school'), array(
                'required',
                array('school_exists', array($this->school_model, 'school_exists')),
            )
        );
       // $this->form_validation->set_rules('sections[]', $this->lang->line('sections'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            //$vehicle_result       = $this->section_model->get();
            $schools = $this->school_model->getAll();
            $editschool = $this->school_model->getAll($id);
            $data['schools'] = $schools;
            $data['editschool'] = $editschool;
            $this->load->view('layout/header', $data);
            $this->load->view('school/schoolEdit', $data);
            $this->load->view('layout/footer', $data);
        } else {
           
            $school       = $this->input->post('school');
            $school_array = array(
                'id'=>$id,
                'house_name' => $this->input->post('school'),
                'is_active' =>1
            );
           // $sections = $this->input->post('sections');
            $this->school_model->add($school_array);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
            redirect('school');
        }
    }

}
