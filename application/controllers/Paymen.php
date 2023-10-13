<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paymen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function home()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tunggakan'] = $this->db->get_where('tunggakan', ['nis' => $this->session->userdata('email')])->row_array();


        $this->load->model('Paymen_model', 'jumlah');
        $data['jumlahpending'] = $this->jumlah->hitungJumlahPending();
        $data['jumlahsukses'] = $this->jumlah->hitungJumlahSukses();
        $data['jumlahseluruh'] = $this->jumlah->hitungJumlahSeluruh();

        $username = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('waktu_dibuat', 'DESC');
        $data['bayar'] = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email')])->result_array();
        // if ($username['email2'] == "") {
        //     redirect('paymen/email');
        // } else {

        $this->load->view('templates/paymen_header', $data);
        $this->load->view('templates/paymen_sidebar', $data);
        $this->load->view('paymen/home', $data);
        $this->load->view('templates/paymen_footer', $data);


        // }
    }

    public function history()
    {
        $data['title'] = 'History';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->order_by('waktu_dibuat', 'DESC');
        $data['transaksi'] = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email')])->result_array();


        $this->db->order_by('waktu_dibuat', 'DESC');
        $data['bayar'] = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email')])->result_array();

        $this->load->view('templates/paymen_header', $data);
        $this->load->view('templates/paymen_sidebar', $data);
        $this->load->view('paymen/history', $data);
        $this->load->view('templates/paymen_footer', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/paymen_header', $data);
        $this->load->view('templates/paymen_sidebar', $data);
        $this->load->view('paymen/profile', $data);
        $this->load->view('templates/paymen_footer', $data);
    }

    public function setting()
    {
        $data['title'] = 'setting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/paymen_header', $data);
        $this->load->view('templates/paymen_sidebar', $data);
        $this->load->view('paymen/setting', $data);
        $this->load->view('templates/paymen_footer', $data);
    }

    public function bayar()
    {
        $data['title'] = 'Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/paymen_header_js', $data);
        $this->load->view('paymen/bayar', $data);
        $this->load->view('templates/paymen_footer_js', $data);
    }
}
