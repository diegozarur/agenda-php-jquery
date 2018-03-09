<?php

//include_once('models/model.php');
include_once('config/Database.php');
include_once('models/contato.php');


class ContatoController
{


    public function __construct()
    {
        //$this->model = new Model();
        $this->database = new Database();
        $this->contato = new Contato();
    }

    public function index()
    {
        include_once "views/index.php";
    }

    public function adiciona()
    {
        $erro = null;
        try {
            $data = $_REQUEST;

            if (empty($data['nome'])) {
                $_SESSION['Error'] = "You left one or more of the required fields.";
            }
            $this->redirect('index.php');

        } catch (ValidationException $e) {
            $result = $e->getErrors();
        }





    }

    public function redirect($location) {
        header('Location: '.$location);
    }

    private function stop($val)
    {
        echo '<pre>';
        var_dump($val);die();
        echo '</pre>';

        return $val;
    }

//    public function handleRequest() {
//        $op = isset($_GET['op'])?$_GET['op']:NULL;
//        try {
//            if ( !$op || $op == 'list' ) {
//                $this->listContacts();
//            } elseif ( $op == 'new' ) {
//                $this->saveContact();
//            } elseif ( $op == 'delete' ) {
//                $this->deleteContact();
//            } elseif ( $op == 'show' ) {
//                $this->showContact();
//            } else {
//                $this->showError("Page not found", "Page for operation ".$op." was not found!");
//            }
//        } catch ( Exception $e ) {
//// some unknown Exception got through here, use application error page to display it
//            $this->showError("Application error", $e->getMessage());
//        }
//    }
//
//    public function listContacts() {
//        $orderby = isset($_GET['orderby'])?$_GET['orderby']:NULL;
//        $contacts = $this->contactsService->getAllContacts($orderby);
//        include 'view/contacts.php';
//    }
//
//    public function saveContact() {
//
//        $title = 'Add new contact';
//
//        $name = '';
//        $phone = '';
//        $email = '';
//        $address = '';
//
//        $errors = array();
//
//        if ( isset($_POST['form-submitted']) ) {
//
//            $name       = isset($_POST['name']) ?   $_POST['name']  :NULL;
//            $phone      = isset($_POST['phone'])?   $_POST['phone'] :NULL;
//            $email      = isset($_POST['email'])?   $_POST['email'] :NULL;
//            $address    = isset($_POST['address'])? $_POST['address']:NULL;
//
//            try {
//                $this->contactsService->createNewContact($name, $phone, $email, $address);
//                $this->redirect('index.php');
//                return;
//            } catch (ValidationException $e) {
//                $errors = $e->getErrors();
//            }
//        }
//
//        include 'view/contact-form.php';
//    }
//
//    public function deleteContact() {
//        $id = isset($_GET['id'])?$_GET['id']:NULL;
//        if ( !$id ) {
//            throw new Exception('Internal error.');
//        }
//
//        $this->contactsService->deleteContact($id);
//
//        $this->redirect('index.php');
//    }
//
//    public function showContact() {
//        $id = isset($_GET['id'])?$_GET['id']:NULL;
//        if ( !$id ) {
//            throw new Exception('Internal error.');
//        }
//        $contact = $this->contactsService->getContact($id);
//
//        include 'view/contact.php';
//    }
//
//    public function showError($title, $message) {
//        include 'view/error.php';
//    }


}