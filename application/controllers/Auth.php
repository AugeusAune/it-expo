<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('auth');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            //validation success
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                    redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!
            </div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        $this->form_validation->set_rules('username', 'userName', 'required|trim');         //is_unique[from tabel user. name in input]
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email is already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'password dont match',
            'min_length' => 'password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registration');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date' => time(),
                'image' => 'default.jpg',

            ];


            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation!  your account has been created please Login!
            </div>');
            redirect('auth');
        }
    }

    public function block()
    {
        $this->load->view('auth/block');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logout
            </div>');
        redirect('auth');
    }
}
