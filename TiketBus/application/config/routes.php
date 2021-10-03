<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['login'] = 'admin/keHalLogin';
$route['prosesLogin'] = 'admin/login';
$route['homepage'] = 'admin/homepage';

$route['admin/dashboard'] = 'admin/keHalDasboard';

$route['tambahTerminal'] = 'admin/tambah_terminal';
$route['admin/dashboard/edit/(:any)'] = 'admin/keHalEdit/$1';
$route['editTerminal'] = 'admin/edit_terminal';
$route['hapusTerminal/(:any)'] = 'admin/hapus_terminal/$1';

$route['admin/dashboard/kelola-jadwal'] = 'admin/keHalKelolaJadwal';
$route['tambahJadwal'] = 'admin/tambah_jadwal';
$route['hapusJadwal/(:any)'] = 'admin/hapusJadwal/$1';
$route['admin/dashboard/edit-jadwal/(:any)'] = 'admin/keHalEditJadwal/$1';
$route['editJadwal'] = 'admin/editJadwal';

$route['admin/konfirmasi-pembayaran'] = 'admin/keHalamanKonfirPem';
$route['Verifikasi/(:num)'] = 'admin/verifikasiPembayaran/$1';

$route['dataPenumpang'] = 'admin/dataPenumpang';
$route['editPenumpang/(:any)'] = 'admin/halEditPenumpang/$1';
$route['edit-penumpang'] = 'admin/editPenumpang';


$route['logout'] = 'admin/logout';

//guest
$route['jadwal'] = 'guest/keHalJadwal';
$route['konfirmasi'] = 'guest/keHalKonfirmasi';
$route['default_controller'] = 'guest/keHalDepan';
$route['cariTiket'] = 'guest/cariTiket';

$route['pesan/(:any)'] = 'guest/pesan/$1';
$route['pesanTiket'] = 'guest/pesanTiket';

$route['pembayaran'] = 'guest/keHalamanPembayaran';

$route['cekKonfirmasi'] = 'guest/cekKonfirmasi';
$route['kirimKonfirmasi'] = 'guest/kirimKonfirmasi';

$route['print'] = 'guest/print';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
