<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//web
Route::get('/beranda', 'UtamaController@home')->name('home');


//login&register
Route::get('/Pengguna/Daftar','AuthController@getRegister');
Route::post('/Pengguna/Daftar','AuthController@postRegister')-> name('register');
Route::get('/Pengguna/login','AuthController@getLogin');
Route::post('/Pengguna/login','AuthController@postLogin') ->name('login');
Route::get('/Pengguna/logout','AuthController@LogoutUser')->name('logout_user');

//user
Route::get('/User/dashboard_user','UserController@dashboard')->name('dashboard_user');
Route::get('/User/user_profile','UserController@user_profile')->name('user_profil');
Route::put('/User/ubah_profil/', 'UserController@update_profil')->name('update_profil');
Route::get('/User/TabelJadwal', 'UserController@tampiljadwaluser') -> name('tabel_jadwaluser');
Route::get('/User/form_jadwal','UserController@getFormJadwal');
Route::post('/User/form_jadwal','UserController@postFormJadwal') -> name('tambah_servis');
Route::delete('/User/TabelJadwal/{id}','UserController@hapus_jadwal')->name('hapus_jadwal');
Route::get('/User/form_jadwal/CariHarga','UserController@cariHarga') -> name('harga_servis');
Route::get('/User/KirimPesan','UserController@getFormInbox');
Route::post('/User/KirimPesan','UserController@postFormInbox')->name('user_kirimpesan');
Route::post('/User/HapusInbox','UserController@hapus_inbox')->name('hapus_inbox');
Route::get('/User/PesanTerkirim','UserController@tabel_pesanterkirim')-> name('tabel_pesanterkirim');
Route::get('/User/PesanTerkirim/{id}','UserController@hapus_pesanterkirim')->name('hapus_pesanterkirim');
Route::get('/User/BalasanPesan','UserController@tabel_inbox')-> name('tabel_inbox');

//admin
Route::get('/Admin/login_admin','AuthAdminController@getLoginAdmin');
Route::post('/Admin/login_admin','AuthAdminController@postLoginAdmin')->name('login_admin');
Route::get('/Admin/logout_admin','AuthAdminController@LogoutAdmin')->name('logout_admin');
Route::get('/Admin/dashboard_admin', 'AdminController@dashboard')->name('admin');
Route::get('/Admin/profil_admin','AdminController@admin_profil')->name('admin_profil');
Route::put('/User/ubah_profil/', 'AdminController@update_profil')->name('update_profiladmin');
Route::get('/Admin/TabelUsers', 'AdminController@tampiluser') -> name('daftar_user');
Route::get('/Admin/TabelServis', 'AdminController@tabel_servis') -> name('tabel_servis');
Route::get('/Admin/FormServis','AdminController@form_servis');
Route::post('/Admin/FormServis','AdminController@postFormServis')-> name('form_servis');
Route::get('/Admin/jadwal','AdminController@tabeljadwal')->name('jadwal');
Route::get('/Admin/AdminPesanTerkirim','AdminController@tabel_balaspesan')->name('admin_pesanterkirim');
Route::get('Admin/PesanTerkirim/{id}','AdminController@hapus_pesanterkirim')->name('admin_hapuspesan');
Route::get('Admin/BalasPesan/{id}','AdminController@balas_pesan')->name('admin_balaspesan');
Route::get('/Admin/TabelInbox','AdminController@tabel_inbox')->name('admin_inbox');
Route::get('/Admin/KirimPesan','AdminController@postBalasPesan')->name('admin_balas');

//CRUD
Route::resource('jadwal', 'Jadwal');
Route::resource('inbox', 'Inbox1');