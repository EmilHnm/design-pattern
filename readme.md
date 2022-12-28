# Design pattern

## Khái niệm

&nbsp;Design Pattern là một kỹ thuật trong lập trình hướng đối tượng. Được sử dụng thường xuyên trong các ngôn ngữ OOP. Nó sẽ cung cấp cho bạn các "mẫu thiết kế", giải pháp để giải quyết các vấn đề chung, thường gặp trong lập trình. Các vấn đề mà bạn gặp phải có thể bạn sẽ tự nghĩ ra cách giải quyết nhưng có thể nó chưa phải là tối ưu. Design Pattern giúp bạn giải quyết vấn đề một cách tối ưu nhất, cung cấp cho bạn các giải pháp trong lập trình OOP. Design Patterns không phải là ngôn ngữ cụ thể nào cả. 

## Tác dụng

&nbsp;Design Pattern có thể được sử dụng ở tất cả các giai đoạn của công việc lập trình. Nó có thể được sử dụng trước đây vì nó có thể được sử dụng làm hướng dẫn viết mã nguồn. Nó cũng thường được sử dụng sau bước lập trình vì tính hiệu quả của nó cho phép sử dụng nó làm khuôn mẫu để liên kết các mô-đun mã nguồn hiện có.

&nbsp; Design Pattern có thể được sử dụng để giải quyết các vấn đề chung trong lập trình. Nó cũng có thể được sử dụng để giải quyết các vấn đề chung trong thiết kế hệ thống. Nó cũng có thể được sử dụng để giải quyết các vấn đề chung trong thiết kế giao diện người dùng.

## Phân loại

&nbsp; Design Pattern được phân loại theo mục đích sử dụng. Có 3 loại chính:

* <strong>Creational Patterns</strong>: Tạo ra các đối tượng và ẩn việc tạo ra các đối tượng đó.

* <strong>Structural Patterns</strong>: Cung cấp các cấu trúc để kết hợp các đối tượng hoặc các lớp thành các cấu trúc lớn hơn.

* <strong>Behavioral Patterns</strong>: Cung cấp các cách thức để tăng tính linh hoạt và tái sử dụng trong các đối tượng.

## Các loại Design Pattern

### Creational Patterns

&nbsp;<strong>Creational Patterns</strong> là các mẫu thiết kế được sử dụng để tạo ra các đối tượng. Nó cung cấp các giải pháp để tạo ra các đối tượng một cách linh hoạt, tái sử dụng và đơn giản. Nó cũng giúp bạn giảm thiểu việc sử dụng các đối tượng mới trong mã nguồn của bạn.

&nbsp; Các <strong>Creational Patterns</strong> có thể được phân loại thành các nhóm dựa trên các đặc điểm chung của chúng. Các nhóm này bao gồm:

* <strong>Abstract Factory Pattern</strong>: Tạo ra các đối tượng liên quan hoặc có liên quan đến nhau mà không cần chỉ rõ các lớp cụ thể của chúng.

* <strong>Builder Pattern</strong>: Tạo ra các đối tượng phức tạp từ các đối tượng đơn giản và sử dụng các đối tượng đơn giản này để xây dựng và tạo ra các đối tượng phức tạp.

* <strong>Factory Pattern</strong>: Tạo ra các đối tượng mà không cần chỉ rõ các lớp cụ thể của chúng.

* <strong>Prototype Pattern</strong>: Tạo ra các đối tượng bằng cách sao chép các đối tượng hiện có mà không cần biết các lớp cụ thể của chúng.

* <strong>Singleton Pattern</strong>: Tạo ra một đối tượng duy nhất.

### Structural Patterns

&nbsp; <strong>Structural Patterns</strong> là các mẫu thiết kế được sử dụng để kết hợp các đối tượng hoặc các lớp thành các cấu trúc lớn hơn. Nó cung cấp các giải pháp để tăng tính linh hoạt và tái sử dụng trong các đối tượng.

&nbsp; Các <strong>Structural Patterns</strong> có thể được phân loại thành các nhóm dựa trên các đặc điểm chung của chúng. Các nhóm này bao gồm:

* <strong>Adapter Pattern</strong>: Cho phép các đối tượng với các giao diện không tương thích với nhau hoạt động cùng nhau.

* <strong>Bridge Pattern</strong>: Tách biệt một lớp lớn hoặc một lớp phức tạp thành các lớp con có thể độc lập.

* <strong>Composite Pattern</strong>: Tạo ra một cấu trúc cây từ các đối tượng có liên quan.

* <strong>Decorator Pattern</strong>: Cho phép bạn thêm các tính năng mới cho các đối tượng mà không cần thay đổi các lớp của chúng.

* <strong>Facade Pattern</strong>: Cung cấp một giao diện đơn giản cho một tập hợp các lớp.

* <strong>Flyweight Pattern</strong>: Cho phép bạn chia sẻ các đối tượng để giảm thiểu số lượng đối tượng được tạo ra và giảm thiểu bộ nhớ và thời gian sử dụng.

* <strong>Proxy Pattern</strong>: Cung cấp một đối tượng thay thế cho một đối tượng khác để kiểm soát truy cập, giảm thiểu chi phí hoặc tăng tính linh hoạt.

### Behavioral Patterns

&nbsp; <strong>Behavioral Patterns</strong> là các mẫu thiết kế được sử dụng để quản lý các thuật toán và giao tiếp giữa các đối tượng.

&nbsp; Các <strong>Behavioral Patterns</strong> có thể được phân loại thành các nhóm dựa trên các đặc điểm chung của chúng. Các nhóm này bao gồm:

* <strong>Chain of Responsibility Pattern</strong>: Cho phép bạn gửi yêu cầu theo một chuỗi các đối tượng.

* <strong>Command Pattern</strong>: Tạo ra các đối tượng đại diện cho các hành động và thực hiện các hành động này bằng cách gọi các phương thức của đối tượng đại diện.

* <strong>Interpreter Pattern</strong>: Cho phép bạn định nghĩa ngôn ngữ mới và xử lý các biểu thức trong ngôn ngữ đó.

* <strong>Iterator Pattern</strong>: Cho phép bạn duyệt qua các phần tử của một tập hợp mà không cần phải hiểu cấu trúc của nó.

* <strong>Mediator Pattern</strong>: Cho phép bạn giảm thiểu sự phụ thuộc giữa các đối tượng bằng cách định nghĩa một đối tượng trung gian.

* <strong>Memento Pattern</strong>: Cho phép bạn lưu trạng thái của một đối tượng mà không phá vỡ nguyên tắc bảo mật.

* <strong>Observer Pattern</strong>: Cho phép một đối tượng theo dõi các thay đổi của một đối tượng khác và được thông báo khi có sự thay đổi.

* <strong>State Pattern</strong>: Cho phép một đối tượng thay đổi hành vi của nó khi trạng thái của nó thay đổi.

* <strong>Strategy Pattern</strong>: Cho phép bạn định nghĩa một tập hợp các thuật toán, đóng gói mỗi thuật toán và làm cho chúng có thể thay đổi độc lập nhau.

* <strong>Template Method Pattern</strong>: Cho phép bạn định nghĩa một thuật toán trong một phương thức và cho phép các lớp con có thể thay đổi các bước của thuật toán mà không làm thay đổi cấu trúc của nó.

* <strong>Visitor Pattern</strong>: Cho phép bạn thêm các hành động mới vào một lớp mà không cần thay đổi lớp đó.


## Pattern trong Keywords


    