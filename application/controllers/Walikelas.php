<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walikelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Instrumen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tunggakan'] = $this->db->get('tunggakan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function kekurangan()
    {
        $data['title'] = 'Kekurangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tunggakan'] = $this->db->get('tunggakan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/kekurangan', $data);
        $this->load->view('templates/footer');
    }

    public function catatanpembayaran()
    {
        $data['title'] = 'Catatan Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Walikelas_model', 'walikelas');
        $data['pembayaran'] = $this->walikelas->getPembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/catatanpembayaran', $data);
        $this->load->view('templates/footer');
    }
}
