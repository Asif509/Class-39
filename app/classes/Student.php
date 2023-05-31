<?php

namespace App\classes;

class Student
{
    public $student, $students, $name, $email, $mobile, $image, $imageName, $imageDirectory;

    public $file, $filepath, $fileData;

    public function __construct($post =null, $files = null)
    {

        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->mobile = $post['mobile'];

        $this ->image = $files['image'];

    }
    public function addStudent()
    {
        $this->imageName = time(). $this->image['name'];
        $this->imageDirectory = 'assets/img/upload-files/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        $this->filepath = 'hello.txt';
        $this ->file = fopen($this->filepath, 'a');
        $this->fileData = "$this->name,$this->email,$this->mobile,$this->imageDirectory";
        fwrite($this->file,$this->fileData);
        fclose($this->file);
        echo 'success';
        exit();
    }
}