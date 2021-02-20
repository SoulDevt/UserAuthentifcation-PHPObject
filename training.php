<?php

    class User {
        public  $userName;
        protected $mail;
        public  $role = 'member';

        public function __construct($userName, $mail) {
            $this->userName = $userName;
            $this->mail = $mail;
        }

        public function __destruct() {
            
        }

        public function addFriend() {
            return "$this->userName a ajouté un nouveau ami";
        }

        public function message() {
            return "$this->mail sent a message";
        }

        //getters
        public function getMail() {
            return $this->mail;
        }

        //setters
        public function setMail($mailUpdate) {
            if(strpos($mailUpdate, '@') > -1) {
                $this->mail = $mailUpdate;
            } 
        }

    }

    class AdminUser extends User {
        public $level;
        public $role = "admin";
        public function __construct($userName, $mail, $level) {
            $this->level = $level;
            parent::__construct($userName, $mail);

        }
        public function message() {
            return "$this->mail, an admin, sent a message";
        }

    }

    $userOne = new User('mario', 'mario@gmail.com');
    $userTwo = new User('luigi', 'luigi@gmail.com');
    $userThree = new AdminUser('SoulLeBoss','tqt@gmail.com', 5);

    echo $userThree->userName . '<br>';
    echo $userThree->getMail() . '<br>';
    echo $userThree->level . '<br>';
    echo $userOne->message() . '<br>';
    echo $userThree->message() . '<br>';

    
    //echo get_class($userOne);
    // echo $userOne->userName . '<br>';
    // echo $userOne->mail . '<br>';
    // echo $userOne->addFriend() . '<br>';

    // echo $userTwo->userName . '<br>';
    // echo $userTwo->mail . '<br>';
    // echo $userTwo->addFriend() . '<br>';
    // $userOne->setMail("a@a.com");
    // echo $userOne->getMail();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object</title>
</head>
<body>
    
</body>
</html>