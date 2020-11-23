<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/index');
    }


    public function category()
    {
        $keyword = $this->input->post('keyword');

        $this->db->like('nama_cagar', $keyword);
        $this->db->or_like('provinsi', $keyword);
        $this->db->or_like('kategori', $keyword);

        $data['cate'] = $this->db->get('data_cagar', 12)->result_array();
        $data['count'] = $this->db->get('data_cagar')->num_rows();
        $this->load->view('user/category', $data);
    }

    public function detail($id)
    {
        $data['detail'] = $this->db->get_where('data_cagar', ['id' => $id])->row_array();

        $this->load->view('user/detail', $data);
    }

    public function about()
    {

        $this->form_validation->set_rules('depan', 'Nama Depan', 'trim|required');
        $this->form_validation->set_rules('belakang', 'Nama Belakang', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/about');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('depan', true) . ' ' . $this->input->post('belakang', true)),
                'email' => htmlspecialchars($this->input->post('email')),
                'pesan' => htmlspecialchars($this->input->post('pesan')),

            ];

            $this->db->insert('comment', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation!  your message is send
            </div>');
            redirect('user/about');
        }
    }
}
