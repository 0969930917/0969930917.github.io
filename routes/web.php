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

// route Hiển thị màn hình hello 
Route::get('/hello', 'ExampleController@hello')->name('example.hello');

Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/danhsachloai', function() {
//     // Truy van database, table Loai
//     // hien thi
//     return 'Hello, day la chuc nang danh sach loai';
// });
Route::get('/danhsachloai', 'LoaiController@hienthimanhinhdanhsach');
Route::get('/danhsachloai/taomoi', 'LoaiController@taomoi');

// Route::get('/danhsachloai/taomoi', function() {
//     return 'Hello, day la chuc nang them moi danh sach loai';
// });


// Các route dành riêng cho backend
Route::group(['middleware' => 'auth'], function()
{
    // Dashboard
    Route::get('/admin', 'BackendController@dashboard')->name('backend.dashboard');

    // Chủ đề
    Route::get('/admin/chude', 'ChuDeController@index')->name('backend.chude.index');
    Route::get('/admin/chude/create', 'ChuDeController@create')->name('backend.chude.create');
    Route::post('/admin/chude/store', 'ChuDeController@store')->name('backend.chude.store');
    Route::get('/admin/chude/edit/{id}', 'ChuDeController@edit')->name('backend.chude.edit');
    Route::put('/admin/chude/update/{id}', 'ChuDeController@update')->name('backend.chude.update');
    Route::delete('/admin/chude/delete/{id}', 'ChuDeController@destroy')->name('backend.chude.destroy');

    // Loại
    Route::get('/admin/loai', 'LoaiController@index')->name('backend.loai.index');
    Route::get('/admin/loai/create', 'LoaiController@create')->name('backend.loai.create');
    Route::post('/admin/loai/store', 'LoaiController@store')->name('backend.loai.store');
    Route::get('/admin/loai/edit/{id}', 'LoaiController@edit')->name('backend.loai.edit');
    Route::put('/admin/loai/update/{id}', 'LoaiController@update')->name('backend.loai.update');
    Route::delete('/admin/loai/delete/{id}', 'LoaiController@destroy')->name('backend.loai.destroy');

    // Vận chuyển
    Route::get('/admin/vanchuyen', 'VanChuyenController@index')->name('backend.vanchuyen.index');
    Route::get('/admin/vanchuyen/create', 'VanChuyenController@create')->name('backend.vanchuyen.create');
    Route::post('/admin/vanchuyen/store', 'VanChuyenController@store')->name('backend.vanchuyen.store');
    Route::get('/admin/vanchuyen/edit/{id}', 'VanChuyenController@edit')->name('backend.vanchuyen.edit');
    Route::put('/admin/vanchuyen/update/{id}', 'VanChuyenController@update')->name('backend.vanchuyen.update');
    Route::delete('/admin/vanchuyen/delete/{id}', 'VanChuyenController@destroy')->name('backend.vanchuyen.destroy');

    // Khách hàng
    Route::get('/admin/khachhang', 'KhachHangController@index')->name('backend.khachhang.index');
    // Route::get('/admin/khachhang/create', 'KhachHangController@create')->name('backend.khachhang.create');
    // Route::post('/admin/khachhang/store', 'KhachHangController@store')->name('backend.khachhang.store');
    // Route::get('/admin/khachhang/edit/{id}', 'KhachHangController@edit')->name('backend.khachhang.edit');
    // Route::put('/admin/khachhang/update/{id}', 'KhachHangController@update')->name('backend.khachhang.update');
    Route::delete('/admin/khachhang/delete/{id}', 'KhachHangController@destroy')->name('backend.khachhang.destroy');
    
    // Xuất xứ
    Route::get('/admin/xuatxu', 'XuatXuController@index')->name('backend.xuatxu.index');
    Route::get('/admin/xuatxu/create', 'XuatXuController@create')->name('backend.xuatxu.create');
    Route::post('/admin/xuatxu/store', 'XuatXuController@store')->name('backend.xuatxu.store');
    Route::get('/admin/xuatxu/edit/{id}', 'XuatXuController@edit')->name('backend.xuatxu.edit');
    Route::put('/admin/xuatxu/update/{id}', 'XuatXuController@update')->name('backend.xuatxu.update');
    Route::delete('/admin/xuatxu/delete/{id}', 'XuatXuController@destroy')->name('backend.xuatxu.destroy');

    // Màu
    Route::get('/admin/mau', 'MauController@index')->name('backend.mau.index');
    Route::get('/admin/mau/create', 'MauController@create')->name('backend.mau.create');
    Route::post('/admin/mau/store', 'MauController@store')->name('backend.mau.store');
    Route::get('/admin/mau/edit/{id}', 'MauController@edit')->name('backend.mau.edit');
    Route::put('/admin/mau/update/{id}', 'MauController@update')->name('backend.mau.update');
    Route::delete('/admin/mau/delete/{id}', 'MauController@destroy')->name('backend.mau.destroy');

    // Sản phẩm
    Route::get('/admin/sanpham', 'SanPhamController@index')->name('backend.sanpham.index');
    Route::get('/admin/sanpham/create', 'SanPhamController@create')->name('backend.sanpham.create');
    Route::post('/admin/sanpham/store', 'SanPhamController@store')->name('backend.sanpham.store');
    Route::get('/admin/sanpham/edit/{id}', 'SanPhamController@edit')->name('backend.sanpham.edit'); 
    Route::put('/admin/sanpham/update/{id}', 'SanPhamController@update')->name('backend.sanpham.update');
    Route::delete('/admin/sanpham/delete/{id}', 'SanPhamController@destroy')->name('backend.sanpham.destroy');
    Route::get('/admin/sanpham/print', 'SanPhamController@print')->name('backend.sanpham.print');
    Route::get('/admin/sanpham/pdf', 'SanPhamController@pdf')->name('backend.sanpham.pdf');

    // Tạo route Báo cáo Đơn hàng 
    Route::get('/admin/baocao/donhang', 'Backend\BaoCaoController@donhang')->name('backend.baocao.donhang'); 
    Route::get('/admin/baocao/donhang/data', 'Backend\BaoCaoController@donhangData')->name('backend.baocao.donhang.data');
});



Route::get('/home', 'HomeController@index');

// Gọi hàm đăng ký các route dành cho Quản lý Xác thực tài khoản (Đăng nhập, Đăng xuất, Đăng ký)
// các route trong file `vendor\laravel\framework\src\Illuminate\Routing\Router.php`, hàm auth()
// Auth::routes();

// Xác thực Routes...
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');
// Đăng ký Routes...
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\RegisterController@register');
// Quên mật khẩu Routes...
Route::get('/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/admin/password/reset', 'Auth\ResetPasswordController@reset');

Route::post('/admin/activate/{nv_ma}', 'BackendController@activate')->name('activate');

// Các route dành riêng cho frontend
// Namespace PHP
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');





Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');






Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');

Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');



Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');
Route::get('/san-pham/{id}', 'Frontend\FrontendController@productDetail')->name('frontend.productDetail');

Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');

Route::post('/dat-hang', 'Frontend\FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'Frontend\FrontendController@orderFinish')->name('frontend.orderFinish');