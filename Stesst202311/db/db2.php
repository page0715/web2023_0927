<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB{
    protected $dsn="";
    protected $pdo;
    protected $table;
    
    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }



    function q($sql){
        return $this->pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);
    }

    private function a2s($array){
        foreach ($array as $col => $value){
            
        }
    }
}




function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:$url");
}

$Total=new DB('total');

?>