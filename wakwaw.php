<h1 class="mt-4"><?= $title ?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?= $breadcumb ?></li>
</ol>
<div class="card pt-4 pl-5 pr-5">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="" aria-describedby="helpId" value="<?= ($this->session->userdata('user')["session_nama_masyarakat"]); ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('nama_lengkap', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
            <div class="col-sm-8">
                <input type="text" name="tempat" id="tempat" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('tempat') ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('tempat', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" aria-describedby="helpId" value="<?= set_value('tanggal_lahir') ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('tanggal_lahir', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
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
                <small id="helpId" class="text-muted"><?php echo form_error('jenis_kelamin', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
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
                <small id="helpId" class="text-muted"><?php echo form_error('pendidikan_formal', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
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
                <small id="helpId" class="text-muted"><?php echo form_error('status', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
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
                <small id="helpId" class="text-muted"><?php echo form_error('status_kerja', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan</label>
            <div class="col-sm-8">
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('nama_perusahaan') ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('nama_perusahaan', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="mulai_bekerja" class="col-sm-3 col-form-label">Mulai Bekerja</label>
            <div class="col-sm-8">
                <input type="date" name="mulai_bekerja" id="mulai_bekerja" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('mulai_bekerja') ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('mulai_bekerja', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
            <div class="col-sm-8">
                <input type="text" name="nik" id="nik" class="form-control" placeholder="" aria-describedby="helpId" value="<?= ($this->session->userdata('user')["session_nik"]); ?>">
                <small id="helpId" class="text-muted"><?php echo form_error('nik', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
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
                <small id="helpId" class="text-muted"><?php echo form_error('divisi', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5"></textarea>
                <small id="helpId" class="text-muted"><?php echo form_error('alamat', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Upload Pembayaran</label>
            <div class="col-sm-8">
                <input type="file" name="foto" id="foto" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('foto') ?>" required>
                <small id="helpId" class="text-muted"><?php echo form_error('foto', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
            </div>
        </div>
        <br>
        <div class="form-group row justify-content-center">
            <button type="reset" class="btn btn-danger mr-2">Reset</button>
            <!-- <a href="<?= base_url('admin/pengguna/petugas') ?>" class="btn btn-warning mr-2">Kembali</a> -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>