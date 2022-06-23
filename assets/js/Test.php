<?php

namespace js;
use \PDO;

class Test extends Database {

    public function getUsers(){
        $sql = "SELECT * FROM users";

        $query = $this->db->query($sql);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}