<h1 class="mt-4"><?= $title ?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?= $breadcumb ?></li>
</ol>
<?php
if ($this->session->flashdata('error') != '') {
    echo '<div class="alert alert-danger" role="alert">';
    echo $this->session->flashdata('error');
    echo '</div>';
}
?>
<div class="card pt-4 pl-5 pr-5">
    <form action="<?= base_url() ?>pengguna/tambah" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="" aria-describedby="helpId" value="<?= ($this->session->userdata('user')["session_nama_masyarakat"]); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
            <div class="col-sm-8">
                <input type="text" name="tempat" id="tempat" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('tempat') ?>">

            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" aria-describedby="helpId" value="<?= set_value('tanggal_lahir') ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8">
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="pendidikan_formal" class="col-sm-3 col-form-label">Pendidikan Formal</label>
            <div class="col-sm-8">
                <select class="form-control" name="pendidikan_formal" id="pendidikan_formal">
                    <option value="">-- Pilih Pendidikan --</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status Perkawinan</label>
            <div class="col-sm-8">
                <select class="form-control" name="status" id="status">
                    <option value="Status Perkawinan">Status Perkawinan</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Lajang">Lajang</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="status_kerja" class="col-sm-3 col-form-label">Status Pekerjaan</label>
            <div class="col-sm-8">
                <select class="form-control" name="status_kerja" id="status_kerja">
                    <option value="Status Kerja">Status Kerja</option>
                    <option value="Kontrak">Kontrak</option>
                    <option value="Tetap">Tetap</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan</label>
            <div class="col-sm-8">
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('nama_perusahaan') ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="mulai_bekerja" class="col-sm-3 col-form-label">Mulai Bekerja</label>
            <div class="col-sm-8">
                <input type="date" name="mulai_bekerja" id="mulai_bekerja" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('mulai_bekerja') ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
            <div class="col-sm-8">
                <input type="text" name="nik" id="nik" class="form-control" placeholder="" aria-describedby="helpId" value="<?= ($this->session->userdata('user')["session_nik"]); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-3 col-form-label">Divisi/Posisi</label>
            <div class="col-sm-8">
                <select class="form-control" name="divisi" id="divisi">
                    <option value="">-- Pilih Divisi --</option>
                    <option value="PLH">PLH</option>
                    <option value="PLB Petugas">PLB Petugas</option>
                    <option value="Strelisasi Jalur">Strelisasi Jalur</option>
                    <option value="Patroli Jalur">Patroli Jalur</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Upload Pembayaran</label>
            <div class="col-sm-8">
                <input type="file" name="foto" id="foto" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('foto') ?>">
            </div>
        </div>
        <br>
        <div class="form-group row justify-content-center">
            <button type="reset" class="btn btn-danger mr-2">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>