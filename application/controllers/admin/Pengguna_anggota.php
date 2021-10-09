<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_anggota extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekAdmin();
    }

    public function index()
    {
        $Pengguna_anggota = $this->M_all->tampilSemua('tb_anggota')->result_array();
        $data = [
            "pengguna_anggota"     => $Pengguna_anggota,
            "title"                => 'Data anggota',
            "breadcumb"            => 'Pengguna / anggota',
            "content"              => 'pengguna/anggota/index'
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    public function hapus($id)
    {
        $where = [
            'id'    => $id
        ];
        $hapus = $this->M_all->hapus('tb_anggota', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data berhasil dihapus')";
            echo "</script>";
            redirect('admin/pengguna/anggota', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data gagal dihapus')";
            echo "</script>";
            redirect('admin/pengguna/anggota', 'refresh');
        }
    }
}
