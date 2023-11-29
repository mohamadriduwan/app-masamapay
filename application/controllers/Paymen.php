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
        $data['tunggakan'] = $this->db->get_where('tunggakan', ['nis' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/paymen_header_js', $data);
        $this->load->view('paymen/bayar', $data);
        $this->load->view('templates/paymen_footer_js', $data);
    }

    public function transfer()
    {
        if (isset($_POST['jumlahpembayaran']) && empty($_POST['jumlahpembayaran'])) {
            redirect('paymen/bayar');
        } else {
            $data['title'] = 'Pilih VA Bank';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/paymen_header_js', $data);
            $this->load->view('paymen/transfer', $data);
            $this->load->view('templates/paymen_footer_js', $data);
        };
    }

    public function cobacoba()
    {
        $data['title'] = 'Rekening VA';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $title = $this->input->post('title', true);
        $amount = $this->input->post('amount', true);
        $expired_date = $this->input->post('expired_date', true);
        $is_address_required = $this->input->post('is_address_required', true);
        $sender_phone = $this->input->post('sender_phone', true);
        $sender_name = $this->input->post('sender_name', true);
        $sender_email = $this->input->post('sender_email', true);
        $sender_bank = $this->input->post('sender_bank', true);

        $payloads = [
            "title" => $title,
            "type" => "SINGLE",
            "amount" => $amount,
            "expired_date" => $expired_date,
            "redirect_url" => "https://pay.masamabakung.sch.id/paymen/history",
            "is_address_required" => $is_address_required,
            "is_phone_number_required" => 1,
            "step" => 3,
            "sender_name" => $sender_name,
            "sender_email" => $sender_email,
            "sender_phone_number" => $sender_phone,
            "sender_bank" => $sender_bank,
            "sender_bank_type" => "virtual_account"
        ];

        $data['amount'] = $amount;
        $data['bank'] = $sender_bank;
        $insert = [
            'sender_bank' => $sender_bank,
            'nis' => $user['email'],
            'title' =>  $title,
            'amount' =>  $amount,
            'expired_date' => $expired_date,
            'is_address_required' => $is_address_required,
            'name' =>   $sender_name,
            'email' => $sender_email,
            'phone' => $sender_phone,
            'status_pengiriman' => 0
        ];

        // print_r($payloads);
        $this->load->view('templates/paymen_header_js', $data);
        $this->load->view('paymen/rekening', $data);
        $this->load->view('templates/paymen_footer_js', $data);
    }

    public function kwitansi()
    {
        if (isset($_POST['jumlahpembayaran']) && empty($_POST['jumlahpembayaran'])) {
            redirect('paymen/bayar');
        } else {
            $data['title'] = 'Kwitansi';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/paymen_header_js', $data);
            $this->load->view('paymen/kwitansi', $data);
            $this->load->view('templates/paymen_footer_js', $data);
        };
    }

    public function pdf()
    {
        $data['title'] = 'Kwitansi';
        // Load library
        $this->load->library('dompdf_gen');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('paymen/kwitansi_pdf', $data);


        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);


        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Kwitansi.pdf", array('Attachment' => 0));
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

    public function editprofile($id)
    {
        $data['title'] = 'Edit ' . ucwords($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['namasaya'] = $id;

        $this->load->view('templates/paymen_header_profile', $data);
        $this->load->view('paymen/editprofile/' . $id, $data);
        $this->load->view('templates/paymen_footer_js', $data);
    }
}
