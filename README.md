# Website Bán Giày Dép (LeoPard Store)

Đây là một ứng dụng web được thiết kế để bán các sản phẩm giày dép, với các chức năng cơ bản như xem sản phẩm, thêm, sửa, xóa (CRUD), phân trang, đăng nhập, đăng xuất, tìm kiếm, lọc sản phẩm theo loại và thanh toán.

## Công Nghệ Sử Dụng

- Ngôn ngữ lập trình: PHP
- Framework CSS: Bootstrap 4
- Hệ quản trị cơ sở dữ liệu: MySQL
- Ngôn ngữ lập trình client-side: JavaScript
- Mô hình MVC (Model-View-Controller)

## Cài Đặt Và Khởi Chạy

Để cài đặt và chạy ứng dụng trên localhost sử dụng XAMPP, làm theo các bước sau:

1. **Cài Đặt XAMPP**:
   - Tải và cài đặt XAMPP từ [trang chủ Apache Friends](https://www.apachefriends.org/index.html).
   
2. **Import Cơ Sở Dữ Liệu**:
   - Mở phpMyAdmin từ giao diện quản lý của XAMPP (http://localhost/phpmyadmin/).
   - Import file cơ sở dữ liệu đã cung cấp (`leopard_store.sql`) vào cơ sở dữ liệu.

3. **Thiết Lập Dự Án**:
   - Đưa toàn bộ mã nguồn của dự án vào thư mục `htdocs` của XAMPP (vd: `C:\xampp\htdocs\web_ban_giay_dep`).
   - Chỉnh sửa file cấu hình kết nối đến cơ sở dữ liệu (`config.php`) để phù hợp với môi trường cài đặt của bạn.

4. **Khởi Động Apache và MySQL**:
   - Khởi động XAMPP và bật Apache và MySQL.
   - Truy cập vào trang web bằng đường dẫn: `http://localhost/web_ban_giay_dep`.

5. **Sử Dụng Ứng Dụng**:
   - Đăng nhập với tài khoản quản trị để quản lý sản phẩm và người dùng.

## Các Tính Năng Chính

- **Xem Sản Phẩm**: Hiển thị danh sách sản phẩm và chi tiết sản phẩm.
- **Thêm, Sửa, Xóa (CRUD)**: Quản lý sản phẩm và người dùng.
- **Phân Trang**: Phân trang cho danh sách sản phẩm.
- **Đăng Nhập, Đăng Xuất**: Quản lý phiên đăng nhập người dùng.
- **Tìm Kiếm**: Tìm kiếm sản phẩm theo từ khóa.
- **Lọc Sản Phẩm Theo Loại**: Hiển thị sản phẩm theo từng danh mục.
- **Thanh Toán**: Giao diện thanh toán đơn hàng.
