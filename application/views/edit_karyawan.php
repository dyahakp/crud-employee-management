<div class="container-fluid">
<h3><i class="fas fa-edit"></i> DATA KARYAWAN</h3>
<?php var_dump($karyawan);?>
<?php foreach ($karyawan as $emp): ?>
<form method="post" action="<?php echo base_url() . 'data_karyawan/update' ?>">
<div class="form-group">
            <label>Nama Lengkap Karyawan</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $emp->id ?>">
            <input type="text" name="nama" class="form-control" required value="<?php echo $emp->nama ?> ">
        </div>

        <div class="form-group">
            <label>NIK KTP</label>
            <input type="text" name="NIK" class="form-control" required value="<?php echo $emp->NIK ?> ">
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <br>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if($emp->jenis_kelamin == 'Laki-Laki'): ?> checked<?php endif; ?>> Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($emp->jenis_kelamin == 'Perempuan'): ?> checked<?php endif; ?>> Perempuan 
                <?php echo($emp->jenis_kelamin=='Laki-Laki');?>
            </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required value="<?php echo $emp->tempat_lahir?>">
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required value="<?php echo $emp->tanggal_lahir?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="textarea" name="alamat" class="form-control" required value="<?php echo $emp->alamat?>">
        </div>

        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" required value="<?php echo $emp->tanggal_masuk?>">
        </div>

        <div class="form-group">
            <label>No Telepone</label>
            <input type="text" name="no_telp" class="form-control" required value="<?php echo $emp->no_telp?>">
        </div>

        <div class="form-group">
            <label for="agama">Agama</label>
            <br>
            
            <select class="form-control" name="agama" class="form-control">
           
            <option value="Islam" <?php if($emp->agama == 'Islam'): ?> selected<?php endif; ?>>Islam</option>
            <option value="Kristen" <?php if($emp->agama == 'Kristen'): ?> selected<?php endif; ?> >Kristen</option>
            <option value="Katolik" <?php if($emp->agama == 'Katolik'): ?> selected<?php endif; ?>>Katolik</option>
            <option value="Buddha" <?php if($emp->agama == 'Buddha'): ?> selected<?php endif; ?>>Buddha</option>
            <option value="Hindu" <?php if($emp->agama == 'Hindu'): ?> selected<?php endif; ?>>Hindu</option>
            <option value="Konghuchu" <?php if($emp->agama == 'Konghchu'): ?> selected<?php endif; ?>>Konghuchu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status_nikah">Status Nikah</label>
            <br>
            <select class="form-control" name="status_nikah">
            <option value="nikah">Sudah Menikah</option>
            <option value="single">Single (Belum menikah)</option>
            </select>
        </div>

        <div class="form-group">
        <label>Pendidikan Terkahir Karyawan</label>
        <input type="text" name="pendidikan" class="form-control" required value="<?php echo $emp->pendidikan ?> ">
        </div>

        <div class="form-group">
        <label for="status_karyawan">Status Karyawan</label>
            <br>
            <select class="form-control" name="status_karyawan">
            <option value="kontrak">Pegawai Kontrak</option>
            <option value="tetap">Pegawai Tetap</option>
            <option value="outsourhing">Pegawai Outsourhing</option>
            <option value="non-aktif">Non-Aktif</option>
            </select>
        </div>


        <div class="form-group">
            <label for="divisi">Divisi</label>
            <br>
            <select class="form-control" name="divisi">
            <option value="IT">Information Technologhy</option>
            <option value="FI">Finance</option>
            <option value="HR">Human Resources</option>
            <option value="SL">Sales</option>
            <option value="AU">Audit</option>
            </select>
        </div>

        <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required value="<?php echo $emp->jabatan ?> ">
        </div>

        <div class="form-group">
            <label for="golongan">Golongan Karyawan</label>
            <br>
            <select class="form-control" name="golongan">
            <option value="supervisor">Supervisor</option>
            <option value="manager">Manager</option>
            <option value="staf">Staf</option>
            <option value="analyst">analyst</option>
            <option value="support">Support staff</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan Perubahan</button>
    </form>

    <?php endforeach;?>

</div>