<?php

class Lutador {
    private $nome ;
    private $nacionalidade ;
    private $idade ;
    private $altura ;
    private $peso ;
    private $categoria ;
    private $vitoria ;
    private $derrota ;
    private $empate ;
    private $pontuacao = 0;
    
    
    function __construct($nome, $nacionalidade, $idade, $altura, $peso,$vitoria,$derrota,$empate) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->vitoria = $vitoria;
        $this->derrota = $derrota;
        $this->empate = $empate;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }
    
    public function getPeso() {
        return $this->peso;
    }
    public function getPontuacao() {
        return $this->pontuacao;
    }

    public function setPontuacao($pontuacao): void {
        $this->pontuacao = $pontuacao;
    }

    
    public function getCategoria() {
        if($this->peso<=57.5){
            return $this->categoria = 'Leve';
        }
    }

    public function getVitoria() {
        return $this->vitoria;
    }

    public function getDerrota() {
        return $this->derrota;
    }

    public function getEmpate() {
        return $this->empate;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

        
    public static function apresentar($l1,$l2) {
        print 'Hoje teremos um grande espetaculo de luta entre os lutadores '.$l1->getNome().' e '.$l2->getNome().' abaixo veremos suas estatisticas <br><br>';
        echo  $l1->status()."<hr>";
        echo  $l2->status().'<br>';
    }
    public function status(){
        print 'Nome: '.$this->getNome().'<br>'.
              'Categoria :'.$this->getCategoria().'<br>'.
              'Nacionalidade: '.$this->getNacionalidade().'<br>'.
              'Altura :'.$this->getAltura().'<br>'.  
              'Idade :'.$this->getIdade().'<br>'.  
              'Peso: '.$this->getPeso().'<br>'.  
              'Vitoria: '.$this->getVitoria().'<br>'.  
              'Derrota: '.$this->getDerrota().'<br>'.  
              'Empate: '.$this->getEmpate().'<br>';  
    }
    public function ganharLuta(){
        $this->vitoria++;
        
    }
    public function perderLuta(){
        $this->derrota++;
    }
    public function empatarLuta(){
        $this->empate++;
    }
    public function lutar(){
        
    }
    
}
