<?php

require_once "interface.php";
require_once "aluno.php";

class livro implements interfac{
    private $titulo;
    private $autor;
    private $totPag;
    private $emprestarLivro;
    private $aluno;

    // metodos 

    // interface
    function inserir($titulo,$autor,$totPag,$aluno){
        $this-> setTitulo($titulo);
        $this-> setAutor($autor);
        $this-> setTotPag($totPag);
        $this-> setAluno($aluno);
    }

    function descricao(){
        echo " <hr><br> <h1> Pessoa </h1> Aluno: {$this-> getAluno() -> getNome()} <br> Matricula: {$this-> getAluno() -> getMatricula() } <br>";
        if($this-> getEmprestarLivro(false) ){
            echo " livro ja emprestado ";
        }else{
            echo "Voce pode pegar esse livro emprestado";
        }
        echo " <hr> <h1> livro </h1> Titulo: {$this-> getTitulo()} <br> Autor: {$this-> getAutor()}";
    }
    function pegarLivro(){
        if($this-> getEmprestarLivro() != true){
            echo " emprestado com sucesso";
            $this-> setEmprestarLivro(true);
        }else{
            echo " livro ja emprestado, devolva para poder pegar outro";
        }
    }
    function devolverLivro(){
        if($this-> getEmprestarLivro(true)){
            echo " devolvido com sucesso ";
            $this-> setEmprestarLivro(false);
        }else{
            echo " Nao ha livro para devolver";
        }
    }
    
   

    // contrutor
    function __construct()
    {
        $this-> setTitulo("nd");
        $this-> setAutor("nd");
        $this-> setTotPag(0);
        $this-> setEmprestarLivro(false);
    }

    // --------------------------------------------------------
    // get
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
 
    public function getTotPag()
    {
        return $this->totPag;
    }

    public function getEmprestarLivro()
    {
        return $this->emprestarLivro;
    }
 
    public function getAluno()
    {
        return $this->aluno;
    }
 
    // set
    
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

    }
    
    public function setAutor($autor)
    {
        $this->autor = $autor;
         
    }
 
    public function setTotPag($totPag)
    {
        $this->totPag = $totPag;
         
    }
    public function setEmprestarLivro($emprestarLivro)
    {
        $this->emprestarLivro = $emprestarLivro;

        
    }
    
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;

    }
}