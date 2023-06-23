# 1. Cài đặt docker trên máy local
# 2. Clone respo này về máy local
# 3. Chạy câu lệnh "docker-compose up -d"
# 4. Truy cập vào đường dẫn http://localhost:8080/HelloWorld và kiểm tra kết quả

Hiện tại chưa mount dữ liệu tự động khi khởi chạy nên hãy dùng HeidSQL hoặc Workbench kết nối vào container mysql đã khởi chạy
Host: localhost
User: root
Password: 12345678
Kết nối vào và tạo 1 database tên là "testdb" sau đó import file data.sql ở thư mục ./scripts/data.sql
Nếu không khi vào web sẽ báo lỗi không tồn tại table users
