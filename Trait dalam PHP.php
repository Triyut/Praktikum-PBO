<?php
// Trait pertama
trait LoggerTrait {
    public function log($msg) {
        echo "Log: $msg\n";
    }
}

// Kelas pertama menggunakan trait LoggerTrait
class FileManager {
    use LoggerTrait;

    public function save() {
        $this->log("File saved!");
    }
}

// Kelas kedua juga menggunakan trait LoggerTrait
class UserManager {
    use LoggerTrait;

    public function createUser() {
        $this->log("User created!");
    }
}

// Menjalankan metode dari kedua class
$file = new FileManager();
$file->save();

$user = new UserManager();
$user->createUser();

echo "\n========================\n";

// Trait dengan nama method yang sama
trait A {
    public function hello() {
        echo "Hello from A\n";
    }
}

trait B {
    public function hello() {
        echo "Hello from B\n";
    }
}

// Mengatasi konflik method yang sama
class MyClass {
    use A, B {
        B::hello insteadof A;
        A::hello as helloFromA;
    }
}

$obj = new MyClass();
$obj->hello();        // Output: Hello from B
$obj->helloFromA();   // Output: Hello from A
?>