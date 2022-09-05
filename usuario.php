<?php
require_once 'pessoa.php';
class usuario extends pessoa{
    private $login;
    private $totAssistindo;

    public function __construct($nome, $idade, $sexo,$login)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    public function assistirMaisUm(){
    $this->totAssistindo++;
    }
    public function setLogin(){
    return $this->login;    
    }
    public function getLogin($login){
    $this->login = $login;
    }
    public function setTotAssistindo($totAssistindo){
    $this->totAssistindo = $totAssistindo;
    }
    public function getTotassitindo(){
    return $this->totAssistindo;
    }
    
}