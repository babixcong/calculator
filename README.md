## About COMPOSER

Là tool quản lý dependencies cho PHP. Cho biết project dùng các dependencies nào vào + cho phép install/update

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## `composer update`

Để bắt đầu cài đặt các dependencies đã được định nghĩa vào dự án, nên chạy `composer update`
Composer sẽ làm 2 việc:
- Sẽ resolve tất cả dependencies được liệt kê trong file `composer.json` và viết vào file `composer.lock`. Chốt các version của các dependencies. Nên commit lên VCS để mọi người khác đều dùng chung version.
- Chạy câu lệnh `install`. Composer sẽ tải xuống các file của dependencies vào thư mục `/vendor` 

Nếu đã có file `composer.lock` trước đó thì nó sẽ update tất cả version của package lên mới nhất + ghi lại file composer.lock lên version mới.

## `composer install` (cài đặt từ file composer.lock)

Nếu đã có file `composer.lock` (đã từng chạy `composer update` trước đó rồi).

Đồng thời khi chạy `composer install` khi đã có file `composer.lock` sẽ resolve và install tất cả dependencies được list trong `composer.json` nhưng Composer sẽ 
dùng version trong `composer.lock` để đảm bảo version của các packages đồng nhất với mọi ngừoi của project. 

## `Packagist`

Là Repository chính của Composer

## `Autoloading`

Với các package có chỉ định thông tin `autoload` => Composer sẽ sinh ra file `vendor/autoload.php`  


