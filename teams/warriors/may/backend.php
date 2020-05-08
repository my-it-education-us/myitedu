<?php

class Backend{
    public $input;
    public $mail;

    public function __construct()
    {
        $this->input = $_POST;
        $this->validateInputs();
    }

    protected function validateInputs(){
        if (empty($this->input['email']) || empty($this->input['message']) || empty($this->input['subject']) ){
            $this->redirect('http://myitedu.uz/teams/warriors/may/friday8.php','Yo bro, your form is empty.');
        }
    }
    public function redirect($url, $msg){
        $url .= '?msg='.$msg;
        header("Location: ". $url);
        exit($msg);
    }
    public function sendmail(){
       require_once 'mymail.php';
       echo "I am ready to send email now <br>";
       $mail = new Myitedu\MyiteduMail($this->input['email'],$this->input['subject'], $this->input['message']);
       $mail->send();
        echo "I have sent email already<br>";
    }

}

$mail = new Backend();
$mail->sendmail();
//$mail->redirect('http://myitedu.uz/teams/warriors/may/friday8.php','Sucess');
