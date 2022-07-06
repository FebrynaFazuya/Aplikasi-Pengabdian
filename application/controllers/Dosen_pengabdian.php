<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_pengabdian extends CI_Controller{
    public function index(){
        $data['dosen']=$this->db->get('dosen_pengabdian')->result();
        $this->load->view('dosen_pengabdian',$data);
    }
    public function dosen(){
        $nama_dosen=$this->input->post('nama_dosen');
        $nidn=$this->input->post('nidn');
        $data_insert=array(
            'nama_dosen'=>$nama_dosen,
            'nidn'=>$nidn
        );
        $this->db->insert('dosen_pengabdian',$data_insert);
        $this->session->set_flashdata('flash','Data berhasil diSimpan');
        redirect('Dosen_pengabdian');
    }
    public function edit($id){
        $data['dosen']=$this->db->get_where('dosen_pengabdian',array('id'=>$id))->row_object();
        $this->load->view('edit_dosen',$data);
    }
    public function edit_action(){
        $id=$this->input->post('id');
        $nama_dosen=$this->input->post('nama_dosen');
        $nidn=$this->input->post('nidn');
        $data_insert=array(
            'nama_dosen'=>$nama_dosen,
            'nidn'=>$nidn
        );
        $this->db->where('id',$id);
        $this->db->update('dosen_pengabdian',$data_insert);
        $this->session->set_flashdata('flash','Data berhasil diEdit');
        redirect('Dosen_pengabdian');
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('dosen_pengabdian');
        $this->session->set_flashdata('flash','Data berhasil di Hapus');
        redirect('Dosen_pengabdian');
    }
}