# IS207.M12.HTCL


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
  </a>

  <h3 align="center">Revo Shop</h3>

  <p align="center">
    Quản lý website bán quần áo qua mạng
    <br />
    <a href="https://github.com/IS207-Group12-github-io/IS207-Group12/issues"><strong>Khám phá »</strong></a>
    <br />
    <br />
    <a href="https://github.com/IS207-Group12-github-io/IS207-Group12">Xem Demo</a>
    ·
    <a href="https://github.com/IS207-Group12-github-io/IS207-Group12/issues">Báo lỗi</a>
    ·
    <a href="https://github.com/IS207-Group12-github-io/IS207-Group12/issues">Cách yêu cầu</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Mục lục</summary>
  <ol>
    <li>
      <a href="#">Mục tiêu đồ án</a>
      <ul>
        <li><a href="#">Các công nghệ</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Các Modules</a>
    </li>
    <li><a href="#">Yêu cầu hệ thống</a></li>
    <li><a href="#">Liên hệ</a></li>
    <li><a href="#">Bản quyền</a></li>
    <li><a href="#">Cài đặt và sử dụng</a></li>
    <li><a href="#">Tài liệu tham khảo</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## Mục tiêu của đồ án
Đây là project của môn học Phát triển ứng dụng web - UIT. Nội dung là tạo một trang web quản lý shop bán quần áo qua mạng

Trang web phải đảm bảo được các mục tiêu:
- Giúp khách hàng mua hàng được nhanh chóng và đúng sản phẩm mình cần.
- Tiện lợi cho người bán hàng dễ dàng quản lý cửa hàng của mình.
- Giao diện đơn giản, load nhanh.
## Các thành viên tham gia project

## <h2 id="dsthanhvien">Các thành viên tham gia project</h2>
 
| STT| Họ tên         | MSSV                 | FB                                                   |   SĐT     |     Nhiệm vụ    |   Đánh giá % |
|:--:|----------------|------------------------|----------------------------------------------------|-----------|-----------------|--------------|
| 1  | Nguyễn Văn Nhật Huy | 19521628 |[Nhật Huy](https://www.facebook.com/nhathuy17.uit/)         |0923109817 |Trưởng nhóm      |     30       |
| 2  | Nguyễn Văn Quốc Huy | 19521629 |[Quốc Huy](https://www.facebook.com/profile.php?id=100008429490554) |0937193524 |Code Frontend    |     30       | 
| 3  | Nguyễn Vũ Huy       | 19521630 |[Vũ Huy](https://www.facebook.com/profile.php?id=100039144286472) |0376754758 |Code Frontend   |     20       |
| 4  | Tràn Đức Vĩ         | 19522514 |[Đức Vĩ](https://www.facebook.com/ducvitran123) |0358003250 |Thiết kế database|     20       |


# <h2 id="chucnang">Tóm tắt chức năng</h2>
- Khách hàng:<br/>
  + Đăng nhập, đăng ký, lấy lại mật khẩu
  + Mua và đặt hàng
  + Nhận Email để gửi feedback hoặc contact với chủ shop
  + Đọc tin tức <br/>
- Admin:<br/>
  Thêm sửa xóa xem trạng thái ẩn hiện các mục sau:
  + Danh mục sản phẩm
  + Thương hiệu sản phẩm
  + sản phẩm <br/>

### Xây dựng bởi

Trang web được xây dựng bởi các thư viện, framwork hiện đại:
* Frontend: [Bootstrap](https://getbootstrap.com) + [JQuery](https://jquery.com)
* Backend: [Laravel](https://laravel.com)

<p align="right">(<a href="#top">back to top</a>)</p>

# Các modules
- Quản lý cửa hàng (thêm, sửa, xóa thông tin) dành cho người bán:
  + Người dùng: chỉnh sửa thông tin, thay đổi mật khẩu, ban hành lệnh cấm với người dùng, giải quyết khiếu nại của người dùng.
  + Đơn hàng: kiểm tra đơn hàng, xóa đơn hàng, chỉnh thông tin đơn hàng.
  + Sản phẩm: thêm hạng mục sản phẩm, thêm sản phẩm vào cửa hàng, xóa sản phẩm, cập nhật thông tin sản phẩm (giá cả, tình trạng còn hàng).
- Đặt hàng.
- Tìm kiếm sản phẩm.
- Vận chuyển
- Áp dụng các mã khuyến mãi

# Yêu cầu hệ thông:
- Laravel 5.8+

## Liên hệ

Nguyễn Văn Nhật Huy [.Nhật Huy](https://www.facebook.com/nhathuy17.uit/)

Project Link: [https://github.com/IS207-Group12-github-io/IS207-Group12)


# Cài đặt và sử dụng
# <h2 id="caidat">Cài đặt và sử dụng</h2>
## <h3 id="setup">Setup môi trường</h3>
Bước 1: Tải và cài Xampp 7.4.24
- Link tải: [Xampp](https://www.apachefriends.org/download.html)

Bước 2: Tải Composer:
- Link tải: [Composer](https://getcomposer.org/download/)
- Sau khi tải xong Composer bắt đầu bật Xampp chạy server và tạo dự án

3. Tải và cài đặt Visual Code

## <h3 id="start">Khởi động dự án</h3>
- Bước 1: Vào github của nhóm (IS207-Grounp12)[https://github.com/IS207-Group12-github-io/IS207-Group12] bắt đầu clone project về máy dùng cầu lênh:
```sh
   git clone https://github.com/IS207-Group12-github-io/IS207-Group12.git
   ```
- Bước 2: Vào path C:\xampp\htdocs dùng câu lệnh:
```sh
   composer create-project --prefer-dist laravel/laravel revoshop "5.8.*"
   ```
Để tạo project tên RevoShop.
- Bước 3: Bắt đầu đi copy source project ở folder public và resources/views, route/web.php sang dự án mới tạo.
- Bước 4: Tạo các controller HomeController, CategoryProduct, BrandProduct, ProductController dùng câu lệnh:
```sh
   php artisan make:controller ControllerName 
   ```
- Bước 4: Tạo các migration create_tbl_admin, create_tbl_category_product, create_tbl_brand, create_tbl_product dùng câu lênh:
```sh
   php artisan make:migration MigrationName --create=Tên table trong database 
   ```
- Bước 5: Chạy dự án trên xampp 

# <h2 id="banquyen">Bản quyền</h3>
Copyright © 2021, [RevoShop](https://github.com/IS207-Group12-github-io/IS207-Group12).

# Tài liệu tham khảo 
- https://www.w3schools.com/
- https://www.laravel.com/
