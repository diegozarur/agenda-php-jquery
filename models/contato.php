<?php
include_once('config/Database.php');

class Contato
{


    public function __construct() {
        $this->database = new Database();
    }


    public function salvar( $data)
    {

        $conn = $this->database->conecta();


        $nome = $data['nome'];
        $descricao = $data['descricao'];
        $preco = $data['preco'];

        $query = "INSERT INTO produtos (nome, descricao, preco) VALUES('$nome','$descricao','$preco')";


        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        return $data;
    }

//    public function getAllContacts($order) {
//        try {
//            $this->database->openDb();
//            $res = $this->contactsGateway->selectAll($order);
//            $this->database->closeDb();
//            return $res;
//        } catch (Exception $e) {
//            $this->database->closeDb();
//            throw $e;
//        }
//    }
//
//    public function getContact($id) {
//        try {
//            $this->openDb();
//            $res = $this->contactsGateway->selectById($id);
//            $this->closeDb();
//            return $res;
//        } catch (Exception $e) {
//            $this->closeDb();
//            throw $e;
//        }
//        return $this->contactsGateway->find($id);
//    }
//
//    private function validateContactParams( $name, $phone, $email, $address ) {
//        $errors = array();
//        if ( !isset($name) || empty($name) ) {
//            $errors[] = 'Name is required';
//        }
//        if ( empty($errors) ) {
//            return;
//        }
//        throw new ValidationException($errors);
//    }
//
//    public function createNewContact( $name, $phone, $email, $address ) {
//        try {
//            $this->openDb();
//            $this->validateContactParams($name, $phone, $email, $address);
//            $res = $this->contactsGateway->insert($name, $phone, $email, $address);
//            $this->closeDb();
//            return $res;
//        } catch (Exception $e) {
//            $this->closeDb();
//            throw $e;
//        }
//    }
//
//    public function deleteContact( $id ) {
//        try {
//            $this->openDb();
//            $res = $this->contactsGateway->delete($id);
//            $this->closeDb();
//        } catch (Exception $e) {
//            $this->closeDb();
//            throw $e;
//        }
//    }

}