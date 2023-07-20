<?php
/**
class Fruit {
  // Properties
  private $name;
  private $color;

  function __construct($name, $color)
  {
        $this->name = $name;
        $this->color = $color;
  }
  // Methods
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
}

$apple = new Fruit("Apple", "yellow");
echo $apple->getName();

class Student{
        private $id;
        private $name;
        private $age;
        private $gender;
        private $phone;

        function __construct($id, $name, $age, $gender, $phone){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->phone = $phone;
        }
        function getName() {
            return $this->name;
        }
        function getPhone() {
            $result = $this->phone;     // NULL
            $result = substr($result, 0, 7) . "xxx";
            return $result;
        }
        function setAge($age){
            if($age > 100){
                throw new Exception("Tuổi quá lớn không hợp lệ");
            }
            $this->age = $age;
        }
    }

    $s1 = new Student(1, "Hau", 28, "Name", "0399578111");
    $s2 = new Student(2, "Thuận", 30, "Name", "0399578222");

    $flag = true;   // mới đầu là nhập đúng
    do{
        try{
            $s2->setAge(200);
        }catch(Exception $e){
            $flag = false;
        }
    }while(!$flag);


    class Student{
    private $id;
    private $name;
    private $age;
    private $gender;
    private $phone;

    // hàm khởi tạo: tạo đối tượng, cập nhật giá trị cho thuộc tính
    // khi tạo hàm khởi tạo: có thể tùy chỉnh số lượng tham số
    // khi không định nghĩa hàm khởi tạo thì php tự tạo cho một hàm khởi tạo ko tham số
    function __construct($id, $name, $gender){
        var_dump($this->phone);
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
    }
    function getName() {
        return $this->name;
    }
    function getPhone() {
        $result = $this->phone;     // NULL
        $result = substr($result, 0, 7) . "xxx";
        return $result;
    }
    function setAge($age){
        if($age > 100){
            throw new Exception("Tuổi quá lớn không hợp lệ");
        }
        $this->age = $age;
    }
}

$s1 = new Student(1, "Hau", 28, "Name", "0399578111");
$s2 = new Student(2, "Thuận", 30, "Name", "0399578222");
**/
    
    


    
    

    
?>