<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	public function cekLogin($data)
	{
		// SELECT * FROM admin
		return $this->db->get_where('admin',$data)->num_rows(); 
	}


	public function getDataTerminal()
	{
		return $this->db->get('terminal');
	}

	public function tambah_terminal($nama)
	{
		$data = array(
			'lokasi_terminal' => $nama, 
		); 
		return $this->db->insert('terminal',$data);
	}

	public function delete_terminal($id)
	{
		$this->db->where('id',$id);

		return $this->db->delete('terminal');
	}

	public function getDataEdit($id)
	{
		$data = array(
			'id' =>$id, 
		);
		return $this->db->get_where('terminal',$data);
	}

	public function edit_terminal($nama)
	{
		$data = array(
			'lokasi_terminal' => $nama, 
		);
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('terminal',$data);
	}

	public function tambah_jadwal($data)
	{
		return $this->db->insert('jadwal',$data);
	}

	public function getJadwal()
	{
		$this->db->select('jadwal.*, Asal.lokasi_terminal AS ASAL, Tujuan.lokasi_terminal AS TUJUAN ');
		$this->db->from('jadwal');
		$this->db->join('terminal as Asal','jadwal.asal = Asal.id','left');
		$this->db->join('terminal as Tujuan','jadwal.tujuan = Tujuan.id','left');
		return $this->db->get();
	}

	public function hapusJadwal($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('jadwal');
	}

	public function getDataEditJadwal($id)
	{
		$data = array(
			'jadwal.id' => $id, 
		);

		$this->db->select('jadwal.*, Asal.lokasi_terminal AS ASAL, Tujuan.lokasi_terminal AS TUJUAN ');
		$this->db->from('jadwal');
		$this->db->where($data);
		$this->db->join('terminal as Asal','jadwal.asal = Asal.id','left');
		$this->db->join('terminal as Tujuan','jadwal.tujuan = Tujuan.id','left');
		return $this->db->get();
	}

	public function edit_jadwal($data)
	{
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('jadwal',$data);
	}

	public function getKonfirmasiPembayaran()
	{
		$where = array(
			'status'	=> 1
		);
		return $this->db->get_where('pembayaran', $where);
	}

	public function updatePembayaran($id)
	{
		$data = array(
			'status'	=> 2
		);
		$this->db->where('id', $id);
		return $this->db->update('pembayaran', $data);
	}

	public function getDataPenumpang()
	{
		return $this->db->get('penumpang');
	}

	public function getDataEditPenumpang($id)
	{
		$data = array(
			'penumpang.id' => $id, 
		);

		$this->db->select('penumpang.*,nama,no_identitas');
		$this->db->from('penumpang');
		$this->db->where($data);
		return $this->db->get();
	}

	public function editPenumpang($data)
	{ 
		
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('penumpang',$data);
	}

}