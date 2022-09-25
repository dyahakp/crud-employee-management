<?php

class Model_karyawan extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('karyawan');
    }

    public function tambah_karyawan($data, $table)
    {
        $this->db->insert($table, $data);

    }
    public function edit_karyawan($where, $table)
    {
       return $this->db->get_where($table, $where); //menjalankan data yang dipilih berdasarkan id yg dimiliki
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detail_data($id = NULL){
        $query = $this->db->get_where('karyawan',array('id' =>$id))->row();
        return $query;
    }

    public function jumlah_data(){
        //return $this->db->select('karyawan, count(*)'); 
        return $this->db->get('karyawan')->num_rows();
       

    }
}
