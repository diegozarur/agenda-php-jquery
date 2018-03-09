<?php

class Database
{
    public function conecta()
    {
        $conn = new mysqli("127.0.0.1", "root", "", "agenda");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function openDb()
    {
        if (!mysqli_connect("localhost", "root", "")) {
            throw new Exception("Connection to the database server failed!");
        }
        if (!mysqli_select_db("mvc-crud")) {
            throw new Exception("No mvc-crud database found on database server.");
        }
    }

    public function closeDb() {
        mysqli_close();
    }


//    Atualiza o banco dinimicamente
    public function atualiza_banco($table, $data, $where)
    {
        $cols = array();

        foreach($data as $key=>$val) {
            $cols[] = "$key = '$val'";
        }
        $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

        return($sql);
    }

}


