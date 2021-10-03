<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function keHalLogin()
		{
			$this->load->view('admin/login');
		}

		public function login()
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password'))
				 );

			$cek = $this->M_Admin->cekLogin($data);

			if ($cek > 0) { //Jika $cek TRUE
				$sess = array(
					'status' => TRUE,
					'level' => 'admin' 
				);

				$this->session->set_userdata($sess);

				redirect(base_url('admin/homepage'));
			}else{
				redirect(base_url('login'));
			}

		}

		public function homepage()
		{
			if ($this->session->status==TRUE) {

				$this->load->view('admin/homepage');
			}else{
				redirect(base_url('login'));
			}
		}

		public function keHalDasboard()
		{
			if ($this->session->status==TRUE) {

				$data['terminal'] = $this->M_Admin->getDataTerminal()->result();

				$this->load->view('admin/dasboard', $data);
			}else{
				redirect(base_url('login'));
			}
		}

		public function tambah_terminal()
		{
			$nama = $this->input->post('terminal');

			$input = $this->M_Admin->tambah_terminal($nama);

			redirect(base_url('admin/dashboard'));
		}

		public function hapus_terminal($id)
		{
			$delete = $this->M_Admin->delete_terminal($id);
			redirect(base_url('admin/dashboard'));
		}

		public function keHalEdit($id)
		{
			$data['data_terminal'] = $this->M_Admin->getDataEdit($id)->row();
			$this->load->view('admin/edit_terminal',$data);
		}

		public function edit_terminal()
		{
			$nama = $this->input->post('lokasi_terminal');

			$edit = $this->M_Admin->edit_terminal($nama);

			redirect(base_url('admin/dashboard'));
		}

		public function keHalKelolaJadwal()
		{
			if ($this->session->status==TRUE) {

			$data['terminal'] = $this->M_Admin->getDataTerminal()->result();

			$data['jadwal'] = $this->M_Admin->getJadwal()->result();

			$this->load->view('admin/kelola_jadwal',$data);

			}else{
				redirect(base_url('login'));
			}
		}

		public function tambah_jadwal()
		{
			$data = array(
				'nama_bus' => $this->input->post('nama_bus'),
				'asal' => $this->input->post('asal'),
				'tujuan' => $this->input->post('tujuan'),
				'tgl_berangkat' => $this->input->post('tgl_berangkat'),
				'tgl_sampai' => $this->input->post('tgl_sampai'),
				'kelas' => $this->input->post('kelas'),
				'harga' => $this->input->post('harga')
			);

			$this->M_Admin->tambah_jadwal($data);

			redirect(base_url('admin/dashboard/kelola-jadwal'));

		}

		public function hapusJadwal($id)
		{
			$this->M_Admin->hapusJadwal($id);
			redirect(base_url('admin/dashboard/kelola-jadwal'));
		}

		public function keHalEditJadwal($id)
		{
			$data['data_edit'] = $this->M_Admin->getDataEditJadwal($id)->row();
			$data['terminal'] = $this->M_Admin->getDataTerminal()->result();

			$this->load->view('admin/edit_jadwal', $data);
		}

		public function editJadwal()
		{
			$data = array(
				'nama_bus' => $this->input->post('nama_bus') , 
				'asal' => $this->input->post('asal') , 
				'tujuan' => $this->input->post('tujuan') , 
				'tgl_berangkat' => $this->input->post('tgl_berangkat') , 
				'tgl_sampai' => $this->input->post('tgl_sampai') , 
				'kelas' => $this->input->post('kelas') ,
				'harga' => $this->input->post('harga')
			);

			$this->M_Admin->edit_jadwal($data);

			redirect(base_url('admin/dashboard/kelola-jadwal'));
		}

		public function keHalamanKonfirPem()
		{
			if ($this->session->status==TRUE) {

			$data['list']	= $this->M_Admin->getKonfirmasiPembayaran()->result();

			$this->load->view('admin/konfirmasi_pembayaran', $data);

			}else{
				redirect(base_url('login'));
			}
		}

		public function verifikasiPembayaran($id)
		{
			$update = $this->M_Admin->updatePembayaran($id);

			if($update){
				$this->session->set_flashdata('pesan','Berhasil Melakukan Verifikasi!');
				redirect('admin/konfirmasi-pembayaran');
			}else{
				echo "gagal";
			}
		}

		public function dataPenumpang()
		{
			if ($this->session->status==TRUE) {

			$data['penumpang'] = $this->M_Admin->getDataPenumpang()->result();

			$this->load->view('admin/data_penumpang',$data);

			}else{
				redirect(base_url('login'));
			}
		}

		public function HalEditPenumpang($id)
		{
			
			$data['data_penumpang'] = $this->M_Admin->getDataEditPenumpang($id)->row();

			$this->load->view('admin/edit-penumpang',$data);
		}

		public function editPenumpang()
		{
			$data = array( 
				'nama' => $this->input->post('nama') , 
				'no_identitas' => $this->input->post('no_identitas')  
			);

			$this->M_Admin->editPenumpang($data);

			redirect(base_url('admin/dataPenumpang'));
		}

		public function logout()
		{
			session_destroy();
			redirect(base_url('admin/keHalLogin'));
		}


}
