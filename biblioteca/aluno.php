<?php

class aluno{

    private $nome;
    private $idade;
    private $matricula;
 
    function inserir($nome,$idade,$matricula){
        $this-> setNome($nome);
        $this-> setIdade($idade);
        $this-> setMatricula($matricula);
    }


    // construtor 

    function __construct()
    {
        $this-> setNome("nd");    
        $this-> setidade(0);
        $this-> setMatricula("nd");
    }

    // ------------------------------------------------------
    // get
    public function getNome()
    {
        return $this-> nome;
    }

    public function getIdade()
    {
        return $this-> idade;
    }

    public function getMatricula()
    {
        return $this-> matricula;
    }
 
    // set
 
    public function setNome($nome)
    {
        $this-> nome = $nome;

        
    }

    public function setIdade($idade)
    {
        $this-> idade = $idade;

        
    }
 
    public function setMatricula($matricula)
    {
        $this-> matricula = $matricula;

         
    }


}