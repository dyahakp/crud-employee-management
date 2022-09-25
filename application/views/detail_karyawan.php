<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL KARYAWAN <?php echo $detail->nama?></strong></h4>
		<table class="table btn-sm">
			<tr>
				<td>
					<img src="<?php echo base_URL();?>uploads/<?php echo $detail->foto; ?>" width="150" height="200"  >
				</td>
				<td></td>
			</tr>
    			<tr>
				<th>Nama</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>NIK KTP</th>
				<td><?php echo $detail->NIK ?></td>
			</tr>
    		<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $detail->jenis_kelamin ?></td>
			</tr>
			<tr>
				<th>Tempat, Tanggal Lahir</th>
				<td><?php echo $detail->tempat_lahir?> , <?php echo $detail->tanggal_lahir?> </td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><span><?php echo $detail ->alamat?></span></td>
			</tr>
			<tr>
				<th>Tanggal Masuk</th>
				<td><?php echo $detail ->tanggal_masuk ?></td>
			</tr>
            <tr>
				<th>No Telepon</th>
				<td><?php echo $detail ->no_telp ?></td>
			</tr>
            <tr>
				<th>Agama</th>
				<td><?php echo $detail ->agama ?></td>
			</tr>
            <tr>
				<th>Status Nikah</th>
				<td><?php echo $detail ->status_nikah ?></td>
			</tr>
            <tr>
				<th>Pendidikan</th>
				<td><?php echo $detail ->pendidikan ?></td>
			</tr>
            <tr>
				<th>Status Karyawan</th>
				<td><?php echo $detail ->status_karyawan ?></td>
			</tr>
            <tr>
				<th>Divisi</th>
				<td><?php echo $detail ->divisi ?></td>
			</tr>
            <tr>
				<th>Jabatan</th>
				<td><?php echo $detail ->jabatan?></td>
			</tr>
            <tr>
				<th>Golongan</th>
				<td><?php echo $detail ->golongan ?></td>
			</tr>
    		</table>
		</table>
		<a href="<?php echo base_url('data_karyawan/index');?>" class="btn btn-primary">Kembali</a>
	</section>
</div>