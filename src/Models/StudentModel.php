<?php

namespace Caraballo\Gs\Models;
use Caraballo\Gs\Core\Crud;
use Caraballo\Gs\Core\Database;

class StudentModel extends Database implements Crud {

    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        parent::__construct();
        $this->id = 0;
        $this->name = "";
        $this->couse = "";
        $this->year_level = 0;
        $this->section = "";
    }
    public function find(){

    }
    public function create(){
    }
    public function read(){
        try {
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

    }
    public function update(){

    }
    public function delete(){
        
    }

}