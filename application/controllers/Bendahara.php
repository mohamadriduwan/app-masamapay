<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bendahara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function tunggakan()
    {
        $data['title'] = 'Tunggakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tunggakan'] = $this->db->get('tunggakan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/tunggakan', $data);
        $this->load->view('templates/footer');
    }

    public function pembayaran()
    {
        $data['title'] = 'Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Bendahara_model', 'bendahara');
        $data['pembayaran'] = $this->bendahara->pembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function belumtercatat()
    {
        $data['title'] = 'Belum Tercatat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Bendahara_model', 'bendahara');
        $data['pembayaran'] = $this->bendahara->pembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/belumtercatat', $data);
        $this->load->view('templates/footer');
    }

    public function catatpembayaran()
    {
        $data['title'] = 'catatpembayran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = [
            'link_id' => $this->input->post('link_id'),
            'id_flip' => $this->input->post('id_flip'),
            'id_pencatat' => $this->input->post('id_pencatat'),
            'nama_pencatat' => $this->input->post('nama_pencatat'),
            'waktu_tercatat' => $this->input->post('waktu_tercatat')
        ];
        $this->db->insert('data_tercatat', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data sudah tercatat!</div>');
        redirect('bendahara/pembayaran');
    }
}
