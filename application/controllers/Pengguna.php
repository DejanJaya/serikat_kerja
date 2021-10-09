<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekUser();
    }


    public function index()
    {
        // $regis = $this->M_all->tampilSemua('tb_regis')->result();
        $data = [
            "title"             => 'Form Verifikasi Keanggotaan',
            "breadcumb"         => 'Form Verifikasi / Data',
            "content"           => 'regis/index'
            // "regis"         => $regis
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    public function hak_kewajiban()
    {
        $data = [
            "title"             => 'Hak Dan Kewajiban Keanggotaan',
            "breadcumb"         => 'Hak Dan Kewajiban / UUD',
            "content"           => 'hak_kewajiban/index'
            // "regis"         => $regis
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('tempat', 'Tempat', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('pendidikan_formal', 'Pendidikan Formal', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('status_kerja', 'Status Kerja', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('mulai_bekerja', 'Mulai Bekerja', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('divisi', 'Divisi', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => '%s harus diisi']);

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '1000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $data = [
                    'nama_lengkap'   => $this->input->post('nama_lengkap'),
                    'tempat'   => $this->input->post('tempat'),
                    'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                    'pendidikan_formal'   => $this->input->post('pendidikan_formal'),
                    'status'   => $this->input->post('status'),
                    'status_kerja'   => $this->input->post('status_kerja'),
                    'nama_perusahaan'   => $this->input->post('nama_perusahaan'),
                    'mulai_bekerja'   => $this->input->post('mulai_bekerja'),
                    'nik'   => $this->input->post('nik'),
                    'divisi'   => $this->input->post('divisi'),
                    'alamat'   => $this->input->post('alamat'),
                    'foto'          => $this->upload->data()["file_name"]
                ];
                $tambah = $this->M_all->simpan('tb_regis', $data);
                if ($tambah) {
                    echo "<script>";
                    echo "alert('Data berhasil diverifikasi')";
                    echo "</script>";
                    redirect(base_url('pengguna'), 'refresh');
                } else {
                    echo "<script>";
                    echo "alert('Data gagal diverifikasi')";
                    echo "</script>";
                    redirect(base_url('pengguna'), 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('pengguna');
        }
    }
}
