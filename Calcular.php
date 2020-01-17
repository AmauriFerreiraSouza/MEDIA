<?php
//crio meu objeto Calcular
class Calcular {
    //crio minhas propriedades privadas
    private $n1;
    private $n2;
    //crio meu metodo GET que me retorna o valor do meu N1
    public function getNumberOne(){
        return $this->n1; 
    }
    //crio meu metodo SET que recebe o valor do meu N1
    public function setNumberOne($numberOne){
        $this->n1 = $numberOne;
    }
    //crio meu metodo GET que me retorna o valor do meu N2
    public function getNumberTwo(){
        return $this->n2; 
    }
    //crio meu metodo SET que recebe o valor do meu N1
    public function setNumberTwo($numberTwo){
        $this->n2 = $numberTwo;
    }
    //crio meu metodo que faz o média dos valores
    public function media(){
        //armazeno em variáveis o retorno dos meus metodos GET
        $nOne = $this->getNumberOne();
        $nTwo = $this->getNumberTwo();
        //verifico se os valores são inteiros
        if(intval($nOne) && intval($nTwo)){
           //armazeno em uma variável o valor do meu calculo de média
           $media = ($nOne + $nTwo) / 2;
           return $media;
        }
    }
}