<?php
class Data_karyawan extends CI_Controller
{
    public function index()
    {
        $data['karyawan'] = $this->model_karyawan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $NIK = $this->input->post('NIK');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $no_telp = $this->input->post('no_telp');
        $agama = $this->input->post('agama');
        $status_nikah = $this->input->post('status_nikah');
        $pendidikan = $this->input->post('pendidikan');
        $status_karyawan = $this->input->post('status_karyawan');
        $divisi = $this->input->post('divisi');
        $jabatan = $this->input->post('jabatan');
        $golongan = $this->input->post('golongan');
        $foto = $_FILES['foto']['name'];
        if ($foto = "") {} else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gambar gagal di upload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = array(
            'NIK' => $NIK,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'tanggal_masuk' => $tanggal_masuk,
            'no_telp' => $no_telp,
            'agama' => $agama,
            'status_nikah' => $status_nikah,
            'pendidikan' => $pendidikan,
            'status_karyawan' => $status_karyawan,
            'divisi' => $divisi,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'foto' => $foto,
        );

        $this->model_karyawan->tambah_karyawan($data, 'karyawan');
        redirect('data_karyawan/index');

    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['karyawan'] = $this->model_karyawan->edit_karyawan($where, 'karyawan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $NIK = $this->input->post('NIK');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $no_telp = $this->input->post('no_telp');
        $agama = $this->input->post('agama');
        $status_nikah = $this->input->post('status_nikah');
        $pendidikan = $this->input->post('pendidikan');
        $status_karyawan = $this->input->post('status_karyawan');
        $divisi = $this->input->post('divisi');
        $jabatan = $this->input->post('jabatan');
        $golongan = $this->input->post('golongan');
        $data = array(
            'NIK' => $NIK,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'tanggal_masuk' => $tanggal_masuk,
            'no_telp' => $no_telp,
            'agama' => $agama,
            'status_nikah' => $status_nikah,
            'pendidikan' => $pendidikan,
            'status_karyawan' => $status_karyawan,
            'divisi' => $divisi,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
        );
        $where = array(
            'id' => $id,
        );
        $this->model_karyawan->update_data($where, $data, 'karyawan');
        redirect('data_karyawan/index');
    }
    public function hapus($id){
        $where = array('id'=>$id);
        $this->model_karyawan->hapus_data($where,'karyawan');
        redirect('data_karyawan/index');
    }

    public function detail ($id){
        $this->load->model('model_karyawan');
        $detail = $this->model_karyawan->detail_data($id);
		$data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_karyawan', $data);
        $this->load->view('templates/footer');
    }
}
