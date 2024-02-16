<?php
date_default_timezone_set("Aisa/Taipei");
session_start();
class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=db15";
    protected $pdo;
    protected $table;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    private function a2s($array){
        foreach ($array as $col=>$value){
            $tmp[] = "`$col`='$value'";
        }
        return $tmp;
    }

    private function sql_all($sql,$array,$other){
        if(isset($this->table) && !empty($this->table)){
            if(is_array($array)){
                if(!empty($array)){
                    $tmp=$this->a2s($array);
                    $sql .= " where " . join(" && ",$tmp);
                }
            }else{
                $sql .= " $array";
            }
            $sql .= $other;
            return $sql;
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

$User=new DB('user');

?>