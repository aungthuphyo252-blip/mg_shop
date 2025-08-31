<?php
class IndexModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function fetchAll($table) {
        $query = "SELECT * FROM " . $table;
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO " . $table . " ($columns) VALUES ($placeholders)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function update($table, $data, $id) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE " . $table . " SET $set WHERE id = :id";
        $data['id'] = $id;
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function delete($table, $id) {
        $query = "DELETE FROM " . $table . " WHERE id = :id";
        $stmt = $this->db->prepare($query);
        return $stmt->execute(['id' => $id]);
    }
}
?>