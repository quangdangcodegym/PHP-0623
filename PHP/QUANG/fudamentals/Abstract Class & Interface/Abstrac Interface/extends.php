<?php
 interface Fly{
    public function hello();
 }
 interface Runnale{
    public function hello();
 }


 class Bird implements Fly, Runnale {
    // cho phép triển khai 2 interface có phương thức cùng tên
    public function hello() {
            echo 'I am a bird';
        }

 }
?>