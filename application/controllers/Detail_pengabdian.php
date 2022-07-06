<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pengabdian extends CI_Controller{

    public function index($id){
        $data['dosen']=$this->db->get_where('dosen_pengabdian',array('id'=>$id))->row_object();
        $data['pengabdian']=$this->db->get('tbl_pengabdian')->result();
        $this->load->view('detail_pengabdian',$data);
    }

    public function simpan_pengabdian(){
        $id = $this->input->post('id');
        $nama_dosen = $this->input->post('nama_dosen');
        $nidn = $this->input->post('nidn');
        $judul = $this->input->post('judul');
        $topik = $this->input->post('topik');
        $link = $this->input->post('link');
        $waktu = date('Y-m-d',strtotime($this->input->post('waktu')));
        $alamat = $this->input->post('alamat');
        $mahasiswa1 = $this->input->post('mahasiswa1');
        $nim1 = $this->input->post('nim1');
        $mahasiswa2 = $this->input->post('mahasiswa2');
        $nim2 = $this->input->post('nim2');
       

        $data_insert = array(
            'nama_dosen' => $nama_dosen,
            'nidn' => $nidn,
            'judul' => $judul,
            'topik' => $topik,
            'waktu' => $waktu,
            'tempat' => $alamat,
            'nama_mahasiswa1' => $mahasiswa1,
            'nim1' =>$nim1,
            'link_publikasi' => $link,
            'nama_mahasiswa2' => $mahasiswa2,
            'nim2' => $nim2
        );
       
        $this->db->insert('tbl_pengabdian', $data_insert);
        $this->session->set_flashdata('flash','Data berhasil diSimpan');
        redirect('Detail_pengabdian/index/'.$id);
    }

    public function edit($id, $id_dosen){
        $data['pengabdian']=$this->db->get_where('tbl_pengabdian',array('id_tbl'=>$id))->row_object();
        $data['dosen']=$id_dosen;
        $this->load->view('edit_pengabdian',$data);
    }

    public function edit_action(){
        $id_dosen = $this->input->post('id_dosen');
        $id = $this->input->post('id');
        $nama_dosen = $this->input->post('nama_dosen');
        $nidn = $this->input->post('nidn');
        $judul = $this->input->post('judul');
        $topik = $this->input->post('topik');
        $link = $this->input->post('link');
        $waktu = date('Y-m-d',strtotime($this->input->post('waktu')));
        $alamat = $this->input->post('alamat');
        $mahasiswa1 = $this->input->post('mahasiswa1');
        $nim1 = $this->input->post('nim1');
        $mahasiswa2 = $this->input->post('mahasiswa2');
        $nim2 = $this->input->post('nim2');
       

        $data_insert = array(
            'judul' => $judul,
            'topik' => $topik,
            'waktu' => $waktu,
            'tempat' => $alamat,
            'nama_mahasiswa1' => $mahasiswa1,
            'nim1' =>$nim1,
            'link_publikasi' => $link,
            'nama_mahasiswa2' => $mahasiswa2,
            'nim2' => $nim2
        );
       
      $this->db->set($data_insert);
      $this->db->where('id_tbl', $id);
      $this->db->update('tbl_pengabdian');
        $this->session->set_flashdata('flash','Data berhasil di Edit');
        redirect('Detail_pengabdian/index/'.$id_dosen);
    }

    public function delete($id, $id_dosen){
        $this->db->where('id_tbl', $id);
        $this->db->delete('tbl_pengabdian');
        $this->session->set_flashdata('flash','Data berhasil di Hapus');
        redirect('Detail_pengabdian/index/'.$id_dosen);
    
    }

}