<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function keHalDepan(){
		$data['judul'] = 'Halaman Depan';
		$data['terminal'] = $this->M_Guest->getDataTerminal()->result();

		//$data['tiket'] = $this->M_Guest->cari_tiket()->result();

		$this->load->view('guest/template/header',$data);
		$this->load->view('guest/halaman_depan');
		$this->load->view('guest/template/footer');
	}

	public function keHalKonfirmasi(){
		$data['judul'] = 'Halaman Konfirmasi';

		if(isset($_GET['kode'])):
			$kode = $_GET['kode'];
			$data['no_tiket'] = $this->M_Guest->getPembayaranWhere($kode)->row();
			$data['detail'] = $this->M_Guest->cekKonfirmasi($data['no_tiket']->no_tiket)->result();
			//$tiket = $this->M_Guest->getTiketWhere($data['no_tiket']->no_tiket)->row();

		endif;

		$this->load->view('guest/template/header',$data);
		$this->load->view('guest/halaman_konfirmasi',$data);
		$this->load->view('guest/template/footer');
	}

	public function keHalJadwal()
	{
		$data['judul'] = 'Halaman Jadwal';

		$data['jadwal'] = $this->M_Guest->getJadwal()->result();

		$this->load->view('guest/template/header',$data);
		$this->load->view('guest/halaman_jadwal');
		$this->load->view('guest/template/footer');

	}

	public function cariTiket()
	{

		$data = array(
			'asal' => $this->input->post('asal'),
			'tujuan' => $this->input->post('tujuan')
		);

		$data['tiket'] = $this->M_Guest->cari_tiket($data)->result();
		$data['penumpang'] = $this->input->post('jumlah');

		$data['judul'] = 'Halaman Depan';
		$data['terminal'] = $this->M_Guest->getDataTerminal()->result();

		$this->load->view('guest/template/header',$data);
		$this->load->view('guest/halaman_depan');
		$this->load->view('guest/template/footer');

	}

	public function pesan($id)
	{
		$data['judul'] = 'Formulir Data Diri';

		$data['info'] = $this->M_Guest->getDataInfoPesan($id)->row();
		$data['id_jadwal'] = $id;

		$this->load->view('guest/template/header',$data);
		$this->load->view('guest/data_diri');
		$this->load->view('guest/template/footer');
	}

	public function pesanTiket()
	{
		$penumpang = $this->input->post('penumpang');

	// Generate No Pembayaran
			$cek = $this->M_Guest->getPembayaran()->num_rows()+1;

			$no_pembayaran = 'RW014'.$cek;
			
			$harga = $this->input->post('harga');

			$total_pembayaran = $penumpang*$harga;

	// Input Pembayaran
			$no_tiket = 'T00'.$cek;

			$data = array(
				'no_pembayaran' => $no_pembayaran,
				'no_tiket' => $no_tiket,
				'total_pembayaran' => $total_pembayaran,
				'status' => 0
			);

			$this->M_Guest->insertPembayaran($data);

	// Generate Nomor Tiket
			$cek = $this->M_Guest->getTiket()->num_rows()+1;
	

	// Input data Penumpang
		for ($i=1;$i<=$penumpang;$i++) { 
			$data = array(
				'nomor_tiket' => $no_tiket,
				'nama' => $this->input->post('nama'.$i),
				'no_identitas' => $this->input->post('identitas'.$i)
			);

			$this->M_Guest->insertPenumpang($data);
		}

	// input Data Pemesan
		$data = array(

			'nomor_tiket' => $no_tiket,
			'id_jadwal' => $this->input->post('id_jadwal'),
			'nama_pemesan' => $this->input->post('nama_pemesan'), 
			'email' => $this->input->post('email'), 
			'no_telepon' => $this->input->post('no_telp'), 
			'alamat' => $this->input->post('alamat'),
			'tanggal' => date('Y-m-d')

		);

		$this->M_Guest->insertPemesanan($data);

		$this->session->set_flashdata('nomor', $no_pembayaran);//!!!
		$this->session->set_flashdata('total', $total_pembayaran);

		redirect('pembayaran', $total_pembayaran);
	}

	public function keHalamanPembayaran(){
			$data['judul'] = 'Konfirmasi Pembayaran';

			$this->load->view('guest/template/header', $data);
			$this->load->view('guest/pembayaran');
			$this->load->view('guest/template/footer');
		}

	public function cekKonfirmasi(){
		$kode = $this->input->post('kode');
		$no_tiket = $this->M_Guest->getPembayaranWhere($kode)->row();
		$data = $this->M_Guest->cekKonfirmasi($no_tiket->no_tiket);
		redirect("konfirmasi?kode=".$kode);

	}


	public function kirimKonfirmasi(){
		// Uploading Gambar
		$config['upload_path']          = './assets/bukti/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 2048; // 2MB

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}else{
			$data = $this->upload->data();
			$fileName = $data['file_name'];
			
			$no = $this->input->post('no_pembayaran');
			$this->M_Guest->insertBukti($fileName, $no );

			$this->session->set_flashdata("pesan","Berhasil Mengirim Bukti! Silahkan Cek Kembali 12 Jam Kemudian. Untuk Mengecek Pembayaran Anda");
			redirect("konfirmasi");
		}
	}

	public function print(){
		$data['judul'] = 'Print';

		$no_tiket = $this->input->post('no_tiket');

		$data['detail'] = $this->M_Guest->getPrint($no_tiket)->row();
		//$penumpang = array('penumpang' => $penumpang);
		//$data['penumpang'] = $this->M_Guest->cekKonfirmasi($no_tiket)->result();
		$data['jml_penumpang'] = $this->M_Guest->cekKonfirmasi($no_tiket)->num_rows();

		$this->load->view('guest/template/header', $data);
		$this->load->view('print',$data);
		$this->load->view('guest/template/footer', $data);
	}

}
