<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        if ($this->session->userdata('role_id') == 2) {
            redirect('auth/block');
        }
    }

    public function index()
    {

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->view('admin/index');
    }


    public function adddata()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('nama_cagar', 'Nama Cagar', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/adddata');
        } else {

            $nama_cagar = htmlspecialchars($this->input->post('nama_cagar', true));
            $lokasi = htmlspecialchars($this->input->post('lokasi', true));
            $kategori =  htmlspecialchars($this->input->post('kategori', true));
            $provinsi =  htmlspecialchars($this->input->post('provinsi', true));
            $deskripsi =  htmlspecialchars($this->input->post('deskripsi', true));
            $gambar = $_FILES['image'];

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    file you upload not a image
                    </div>');
                    redirect('admin/adddata');
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }


            $data = [
                'nama_cagar' => $nama_cagar,
                'lokasi' => $lokasi,
                'kategori' => $kategori,
                'provinsi' => $provinsi,
                'gambar' => $gambar,
                'deskripsi' => $deskripsi
            ];


            $this->db->insert('data_cagar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success Add Data
            </div>');
            redirect('admin/adddata');
        }
    }

    public function data()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }


        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/itexpo/admin/data';
        $config['total_rows'] = $this->db->get('data_cagar')->num_rows();
        $config['per_page'] = 5;

        //styling

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '  <li class="page-item">';
        $config['first_tag_close'] = '  </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '  <li class="page-item">';
        $config['last_tag_close'] = '  </li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '  <li class="page-item">';
        $config['next_tag_close'] = '  </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '  <li class="page-item">';
        $config['prev_tag_close'] = '  </li>';

        $config['cur_tag_open'] = '  <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '  </a></li>';

        $config['num_tag_open'] = '  <li class="page-item ">';
        $config['num_tag_close'] = '  </li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['cagar'] = $this->db->get('data_cagar', $config['per_page'], $data['start'])->result_array();

        $this->load->view('admin/data', $data);
    }

    public function detail($id)
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['detail'] = $this->db->get_where('data_cagar', ['id' => $id])->row_array();
        $this->load->view('admin/detail', $data);
    }

    public function hapus($id)
    {

        $db = $this->db->get_where('data_cagar', ['id' => $id])->row_array();

        $gambar = $db['gambar'];

        unlink(FCPATH . './assets/img/' . $gambar);

        $this->db->where('id', $id);
        $this->db->delete('data_cagar');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success Delete Data
            </div>');
        redirect('admin/data');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $data['editi'] = $this->db->get_where('data_cagar', ['id' => $id])->row_array();
        $data['kategori'] = [
            'bangunan',
            'tarian',
            'benda',
            'alatmusik'
        ];

        $this->form_validation->set_rules('nama_cagar', 'Nama Cagar', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/edit', $data);
        } else {

            $nama_cagar = htmlspecialchars($this->input->post('nama_cagar', true));
            $lokasi = htmlspecialchars($this->input->post('lokasi', true));
            $kategori =  htmlspecialchars($this->input->post('kategori', true));
            $provinsi =  htmlspecialchars($this->input->post('provinsi', true));
            $deskripsi =  htmlspecialchars($this->input->post('deskripsi', true));

            // jika ada gambar yang akan diupload
            $gambar = $_FILES['image']['name'];

            if ($gambar) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['editi']['gambar'];
                    if ($old_image = $data['editi']['gambar']) {
                        unlink(FCPATH . './assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama_cagar' => $nama_cagar,
                'lokasi' => $lokasi,
                'kategori' => $kategori,
                'provinsi' => $provinsi,
                'deskripsi' => $deskripsi
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_cagar', $data);


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your data Has been Updated!
            </div>');
            redirect('admin/data');
        }
    }

    public function komen()
    {

        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/itexpo/admin/komen';
        $config['total_rows'] = $this->db->get('comment')->num_rows();
        $config['per_page'] = 6;

        //styling

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '  <li class="page-item">';
        $config['first_tag_close'] = '  </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '  <li class="page-item">';
        $config['last_tag_close'] = '  </li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '  <li class="page-item">';
        $config['next_tag_close'] = '  </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '  <li class="page-item">';
        $config['prev_tag_close'] = '  </li>';

        $config['cur_tag_open'] = '  <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '  </a></li>';

        $config['num_tag_open'] = '  <li class="page-item ">';
        $config['num_tag_close'] = '  </li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['komen'] = $this->db->get('comment', $config['per_page'], $data['start'])->result_array();


        $this->load->view('admin/komen', $data);
    }

    public function hapuskomen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('comment');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success Delete Data
            </div>');
        redirect('admin/komen');
    }
}
