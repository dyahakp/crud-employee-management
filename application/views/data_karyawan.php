<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_karyawan"><i class="fas fa-plus fa-sm"></i>Tambah Karyawan
</button>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Jabatan</th>
        <th>Divisi</th>
        <th>No Telp</th>
        <th>Status Karyawan</th>
        <th colspan="3">Aksi</th>
    </tr>

    <?php
$no = 1;
foreach ($karyawan as $emp): ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $emp->nama ?></td>
    <td><?php echo $emp->jabatan ?></td>
    <td><?php echo $emp->divisi ?></td>
    <td><?php echo $emp->no_telp ?></td>
    <td><?php echo $emp->status_karyawan ?></td>
    <td><?php echo anchor('data_karyawan/detail/' . $emp->id, ' <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
    <td><?php echo anchor('data_karyawan/edit/' . $emp->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
    <td><?php echo anchor('data_karyawan/hapus/' . $emp->id, ' <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>

    </td>
</tr>
    <?php endforeach;?>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_karyawan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'data_karyawan/tambah_aksi/' ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Lengkap Karyawan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label>NIK KTP</label>
            <input type="text" name="NIK" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenis_kelamin" value= "Perempuan" required > Perempuan
            <input type="radio" name="jenis_kelamin" value= "Laki-Laki" required> Laki-Laki
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="textarea" name="alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" required>
        </div>

        <div class="form-group">
            <label>No Telepone</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="agama">Agama</label>
            <br>
            <select class="form-control" name="agama" class="form-control">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="buddha">Buddha</option>
            <option value="hindu">Hindu</option>
            <option value="konghuchu">Konghuchu</option>
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
        <input type="text" name="pendidikan" class="form-control" required>
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
        <input type="text" name="jabatan" class="form-control" required>
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

        <div class="form-group">
        <label>Upload Foto Karyawan</label>
        <input type="file" name="foto" class="form-control" required>
        </div>



      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <?php echo form_close(); ?>
    </div>
      </form>
    </div>
  </div>
</div>