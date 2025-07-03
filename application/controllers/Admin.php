    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model(['Artikel_model', 'Feedback_model']);
            $this->load->library('form_validation');
            $this->load->helper('url');
        }

        public function dashboard() {
            $data['artikel_count'] = $this->Artikel_model->count();
            $data['feedback_count'] = $this->Feedback_model->count();
            $data['main_view'] = 'admin/dashboard';
            $this->load->view('layouts/admin_layout', $data);
        }

        public function artikel() {
            $data['main_view'] = 'admin/artikel_list';
            $data['artikel'] = $this->Artikel_model->get_all();
            $this->load->view('layouts/admin_layout', $data);
        }

        public function artikel_form($id = null) {
            if ($id) {
                $data['artikel'] = $this->Artikel_model->get($id);
            }

            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['main_view'] = 'admin/artikel_form';
            $this->load->view('layouts/admin_layout', $data);
            } else {
                $post = $this->input->post();
                $this->Artikel_model->save($post, $id);
                $this->session->set_flashdata('success', 'Artikel berhasil disimpan!');
                redirect('admin/artikel');
            }
        }

        public function artikel_delete($id) {
            $this->Artikel_model->delete($id);
            $this->session->set_flashdata('success', 'Artikel berhasil dihapus!');
            redirect('admin/artikel');
        }

        public function feedback()
        {
            $data['main_view'] = 'admin/feedback_list';
            $data['feedbacks'] = $this->Feedback_model->get_all();
            $this->load->view('layouts/admin_layout', $data);
        }

        
        public function feedback_form() {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('pesan', 'Pesan', 'required');
            
            if ($this->form_validation->run() == FALSE) {
            $data['main_view'] = 'admin/feedback_form';
            $this->load->view('layouts/admin_layout', $data);
            } else {
                $this->Feedback_model->save($this->input->post());
                $this->session->set_flashdata('success', 'Terima kasih atas feedback Anda!');
                redirect('admin/feedback');
            }
        }
    }