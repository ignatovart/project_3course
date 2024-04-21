<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = '';
    private $dbname = "kgeu_press_service";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function Submit() {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $errors = [];
        $errors[] = $this->validate_fname($fname);
        $errors[] = $this->validate_lname($lname);
        $errors[] = $this->validate_email($email);
        $errors[] = $this->validate_subject($subject);
        $errors[] = $this->validate_message($message);

        $errors = array_filter($errors);

        if (!empty($errors)) {
            return implode("<br>", $errors);
        }

        return $this->InsertAppeals($fname, $lname, $email, $subject, $message);
    }

    private function InsertAppeals($fname, $lname, $email, $subject, $message) {
        $sql = "INSERT INTO appeals (fname, lname, email, `subject`, `message`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return 'Ошибка при подготовке запроса: ' . $this->conn->error;
        }
        
        $stmt->bind_param("sssss", $fname, $lname, $email, $subject, $message);

        if (!$stmt) {
            return 'Ошибка при привязке значений: ' . $this->conn->error;
        }

        $result = $stmt->execute();

        if (!$result) {
            return 'Ошибка при выполнении запроса: ' . $this->conn->error;
        }

        $stmt->close();
        $this->closeConnection();

        return true;
    }

    private function validate_fname($name) {
        if (empty($name)) {
          return "Поле имени обязательно для заполнения";
        } 
        
        return null;
    }

    private function validate_lname($name) {
        if (empty($name)) {
          return "Поле фамилии обязательно для заполнения";
        } 
        
        return null;
    }
      
    private function validate_email($email) {
        if (empty($email)) {
          return "Поле электронной почты обязательно для заполнения";
        } else {
          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Неверный формат электронной почты";
            } 
        }
    
        return null;
    }
      
    private function validate_subject($subject) {
        if (empty($subject)) {
          return "Поле темы обязательно для заполнения";
        }
         
        return null;
    }
      
    private function validate_message($message) {
        if (empty($message)) {
          return "Поле сообщения обязательно для заполнения";
        }

        return null;
    }
}