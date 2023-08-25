<?php
$servername = "localhost";
$database = "tadjiki";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// 
class myClass
{
    public $db;
    public function setDb($db){
        $this->db = $db;
    }
    public function putTajik($surname,$name,$cockSize){
        $this->db->query("INSERT INTO `pidori` ( `surname`, `name`,  `cock_size`) VALUES ( '$surname', '$name', '$cockSize')");
    }
    
}

$taj = new myClass();
$taj->setDb($conn);
$taj->putTajik('Садибегов','Рамазан','13');
$taj->putTajik('1','1',4);
$taj->putTajik('2','2',4);
$taj->putTajik('3','3',4);
$taj->putTajik('4','4',4);


// function putTajik($db,$surname,$name,$cockSize){
    //     $db->query("INSERT INTO `pidori` ( `surname`, `name`,  `cock_size`) VALUES ( '$surname', '$name', '$cockSize')");
    // }
    
    // putTajik($conn,'Садибегов','Рамазан','13');
    // putTajik($conn,'1','1',4);
    // putTajik($conn,'2','2',4);
    // putTajik($conn,'3','3',4);
    // putTajik($conn,'4','4',4);

// $conn->query('CREATE TABLE `tadjiki`.`pidori` (`id` INT NOT NULL AUTO_INCREMENT , `surname` VARCHAR(255) NULL , `name` VARCHAR(255) NULL , `patronymic` VARCHAR(255) NULL , `weight` INT NULL , `cock_size` INT NULL , `status` BOOLEAN NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;')


// class myClass
// {
//     public function sum($a,$b){
//         echo $a + $b;
//         echo PHP_EOL;
//         }

//     public function getTajik($name){
//         echo"$name pidor";
//     }
// }

// $someClass = new myClass();
// $someClass->sum(1,2);
// $someClass->getTajik('RASHIT');
?>

