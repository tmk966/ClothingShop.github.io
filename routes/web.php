<?php
//Admin

Route::get('admin/trang-chu','AdminController@trangchu');

Route::get('admin/loai-san-pham','AdminController@loaisp');

Route::get('admin/sua-lsp/{id}','AdminController@sualoaisp');

Route::get('admin/nha-cung-cap','AdminController@nhacc');

Route::post('admin/them-ncc','AdminController@ptncc');

Route::get('admin/san-pham','AdminController@spham');

Route::get('admin/them-sp','AdminController@themsp');

Route::get('admin/sua-sp/{id}','AdminController@suasp');
Route::post('admin/sua-sp/{id}','AdminController@pssp');
Route::post('admin/xoa-sp/{id}','AdminController@pxsp');

Route::get('admin/khach-hang','AdminController@kh');

Route::post('admin/khach-hang/{id}','AdminController@pxkh');

Route::get('admin/them-kh','AdminController@themkh');
Route::post('admin/them-kh','AdminController@ptkh');
Route::post('admin/them-kh','AdminController@ptkhs');

Route::get('admin/sua-kh/{id}','AdminController@suakh');
Route::post('admin/sua-kh/{id}','AdminController@pskh');

Route::get('admin/don-hang','AdminController@dh');
Route::get('admin/don-hang/chi-tiet/{id}','AdminController@chitiethd');
Route::post('admin/don-hang/chi-tiet/cap-nhat/{id}','AdminController@pcapnhat')->name('pcapnhat');


Route::post('admin/them-lsp','AdminController@ptlsp');

Route::post('admin/sua-lsp/{id}','AdminController@pslsp');

Route::post('admin/xoa-loai/{id}','AdminController@pxlsp');

Route::post('admin/them-sp','AdminController@ptsp');

Route::post('admin/them-nhacc','AdminController@ptncc');

Route::get('admin/sua-ncc/{id}','AdminController@suancc');

Route::post('admin/sua-ncc/{id}','AdminController@psncc');

Route::post('admin/xoa-ncc/{id}','AdminController@pxncc');

// Đăng nhập
Route::get('admin/dangnhap','AdminController@dangnhap');
Route::post('admin/dangnhap','AdminController@pdangnhap');
Route::get('admin/dang-xuat','AdminController@dangxuat');

//Thống kê sản phẩm
Route::get('admin/thong-ke','ThongKeController@thongke');
Route::post('admin/thong-ke','ThongKeController@postthongke');
Route::get('admin/hang-ton-kho','ThongKeController@hangtonkho');

// Du bao sp
Route::get('admin/du-bao', 'DuBaoController@index');

//Giao dien
Route::get('/','TrangChuController@trangchu')->name('trangchu');
Route::get('do-nam/{id}','TrangChuController@pdonam');
Route::get('do-nu/{id}','TrangChuController@pdonu');
Route::get('tim-kiem','TrangChuController@timkiem');

Route::get('tai-khoan','TrangChuController@tk');
Route::post('tai-khoan','TrangChuController@ptk');
Route::get('dang-ki','TrangChuController@dk');
Route::post('dang-ki','TrangChuController@pdk');
Route::get('chi-tiet/{id}','TrangChuController@ctiet');

Route::get('chinh-sach-doi-tra','TrangChuController@csdoitra');
//Chỉnh sửa thông tin khách hàng trang giao diện
Route::get('thong-tin-tai-khoan/{id}','TrangChuController@edit');
Route::post('chinh-sua-tai-khoan/{id}','TrangChuController@postedit');
Route::get('chinh-sua-tai-khoan/{id}','TrangChuController@getedit');

//Lịch sửa đặt mua hàng
Route::get('lich-su-mua-hang/{id}','TrangChuController@getlichsu');
//Sản phẩm tương tự


//thanh toan
Route::get('gio-hang','TrangChuController@gh');
Route::get('update-sl/{sl}/{id}/{rowid}','TrangChuController@getupdate')->name('updatesl');
Route::get('thanh-toan', 'TrangChuController@thanhtoan');

Route::post('mua-hang/{id}','TrangChuController@pmuahang'); // khi bấm nút mua hàng nó sẽ chuyển dữ liệu tới giỏ hàng

Route::get('dat-hang','TrangChuController@dathang')->name('dathang');
Route::get('xoa-sp-gh/{rowid}','TrangChuController@xspgh'); // xóa 1 sản phẩm trong giỏ hàng

Route::post('dang-ky','TrangChuController@pdangky');
Route::get('dang-xuat','TrangChuController@dangxuat');
Route::get('update-sp','TrangChuController@pupdatesp');


Route::get('pdf','PDFController@pdf')->name('hd');


?>
