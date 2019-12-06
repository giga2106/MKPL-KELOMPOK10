<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['Admin/Peralatan'] = 'Peralatan';
$route['Admin/Transaksi'] = 'Transaksi';
$route['Admin/Peralatan/Tambah_Peralatan'] = 'Peralatan/Tambah_Peralatan';
$route['Peralatan'] = 'Home/Peralatan';
$route['Pencarian'] = 'Home/Pencarian';
$route['Ubah-Profil/(:any)'] = 'Home/Profil/$1';
$route['Ubah_Profil/(:any)'] = 'Home/Update_profil/$1';
$route['Ubah-Password/(:any)'] = 'Home/Profil_pwd/$1';
$route['Ubah_Password/(:any)'] = 'Home/Update_profil_pwd/$1';
$route['Peralatan/Kategori/(:any)'] = 'Home/Kategori/$1';
$route['Peralatan/Merek/(:any)'] = 'Home/Merek/$1';
$route['Peralatan/Detail/(:any)'] = 'Home/Detail/$1';
$route['Transaksi'] = 'Home/Transaksi';
$route['Transaksi/Detail/(:any)'] = 'Home/Detail_Barang';
// $route['Keranjang'] = 'Home/Keranjang';
$route['Keranjang/Tambah'] = 'keranjang/add';
$route['Keranjang/Hapus'] = 'Keranjang/delete';
// $route['Keranjang/Bayar'] = 'Keranjang/bayar';
// $route['Keranjang/Update'] = 'Keranjang/Update';
// $route['Kategori'] = 'Home/nama_kategori/';
// $route['Produk'] = 'Home/Produk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
