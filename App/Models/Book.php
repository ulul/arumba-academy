<?php 
namespace App\Models;

use App\Models\Model;
use PDO;

class Book extends Model{

    private $table = "books";

    function get() {
        $stmt = $this->db->prepare("SELECT * FROM ". $this->table ."");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();

    }

    function find($id) {
    }

    function store($data) {
    }

    function update($id, $data) {
    }
}