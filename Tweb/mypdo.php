<?php
/**
 * Created by PhpStorm.
 * User: toad
 * Date: 2018/1/16
 * Time: 下午 07:39
 */

class MyPDO extends PDO{
    private $_dsn='mysql:host=localhost;dbname=104021046';
    private $_user='104021046';
    private $_passwd='#Toh8ohf+';
    private $_encode='utf8';
    private $_stmt;
    function __construct()
    {
        try{
        parent::__construct($this->_dsn,$this->_user,$this->_passwd );
        $this->_setEncode();
        }catch(exception $ex){
            print_r($ex);
        }
    }

    private function _setEncode(){
        $this->query("SET NAMES '{$this->_encode}'");
    }

    function bindQuery($sql,array $bind=[]){
     $this->_stmt=$this->prepare($sql);
     $this->_bind($bind);
     $this->_stmt->execute();
     return $this->_stmt->fetchAll();
    }

    private function _bind($bind){
        foreach ($bind as $key => $value){
            $this->_stmt->bindValue($key,$value,is_numeric($value)?PDO::PARAM_INT:PDO::PARAM_STR);
        }
    }

    function error(){
        $error= $this->_stmt->errorInfo();
        echo 'errorCode:'.$error[0].'<br>';
        echo 'errorString:'.$error[2].'<br>';
    }
}

?>