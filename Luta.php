<?php

require_once './Lutador.php';

class Luta {

    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function __construct($desafiante, $desafiado) {
        $this->desafiante = $desafiante;
        $this->desafiado = $desafiado;
        $this->rounds = 3;
        $this->aprovada = false;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    private function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            echo '<br> Luta Provada <br>';
            return $this->aprovada = true;
        } else {
            echo 'Luta não pode acontecer, pois ' + $this->desafiante + ' tem peso diferente de ' + $this->desafiado + '.';
        }
    }

    public function lutar($l1, $l2) {
        if ($this->getAprovada()) {
            $this->punchOrKick($l1, $l2);
            if ($l1->getPontuacao() > $l2->getPontuacao()) {
                $l1->ganharLuta();
                $l2->perderLuta();
                echo '<br>'.$l1->getNome().' Venceu <br>';
            } elseif ($l2->getPontuacao() > $l1->getPontuacao()) {
                $l2->ganharLuta();
                $l1->perderLuta();
                echo '<br>'.$l2->getNome().' Venceu <br>';
            }  else {
              echo 'Testando a funcao';
              } 
        } else {
            echo '<br> Luta nao pode acontecer <br>';
        }
    }

    private function punchOrKick($l1, $l2) {
        $punchKickFo = 5; //0,1
        $punchKickFr = 2; //2,3
        $defende = 2; //8,9

        $nocoute = 100; //10
        $auxRound = 1;
        while ($this->getRounds() > 0) {
            echo '<br>' . $auxRound . 'º Round';
            for ($i = 0; $i < 3; $i++) {
                echo '<br>';
                
                $pont1 = rand(0, 22);
                switch ($pont1) {
// --------------------------- soco forte L1 -----------------------------------                    
                    case 0:
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        echo 'Soco Forte / Soco Forte';
                        break;
                    case 1:
                        echo 'Soco Forte / Soco Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFr);
                        break;
                    case 2:
                        echo 'Soco Forte / Chute Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 3:
                        echo 'Soco Forte / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFr);
                        break;
                    case 4:
                        echo 'Soco Forte / Defesa';
                        $l1->setPontuacao($l1->getPontuacao() - $defende);
                        break;
// --------------------------- soco fraco L1 -----------------------------------                    
                    case 5:
                        echo 'Soco Fraco / Soco Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 6:
                        echo 'Soco Fraco / Soco Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 7:
                        echo 'Soco Fraco / Chute Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 8:
                        echo 'Soco Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 8:
                        echo 'Soco Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 9:
                        echo 'Soco Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 10:
                        echo 'Soco Fraco / Defesa';
                        $l1->setPontuacao($l1->getPontuacao() - $defende);
                        break;
//----------------------------- Chute forte ------------------------------------                   
                    case 11:
                        echo 'Chute Forte / Soco Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 12:
                        echo 'Chute Forte / Soco Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFr);
                        break;
                    case 13:
                        echo 'Chute Forte / Chute Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 14:
                        echo 'Chute Forte / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFr);
                        break;
                    case 15:
                        echo 'Chute Forte / Defesa';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFo);

                        break;
// ---------------------------Chute fraco L1 -----------------------------------                    
                    case 16:
                        echo 'Chute Fraco / Soco Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 17:
                        echo 'Chute Fraco / Soco Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 18:
                        echo 'Chute Fraco / Chute Forte';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 19:
                        echo 'Chute Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 20:
                        echo 'Chute Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 21:
                        echo 'Chute Fraco / Chute Fraco';
                        $l1->setPontuacao($l1->getPontuacao() + $punchKickFr);
                        $l2->setPontuacao($l2->getPontuacao() + $punchKickFo);
                        break;
                    case 22:
                        echo 'Chute Fraco / Defesa';
                        $l1->setPontuacao($l1->getPontuacao() - $defende);
                        break;
                }
                
                if ($l1->getPontuacao() >= 40 && $l2->getPontuacao() < 40) {
                    echo '<hr>';
                    echo '<br>'.$l1->getNome().' Nocauteou '.$l2->getNome();
                    return $l1->setPontuacao($nocoute);
                } elseif ($l2->getPontuacao() >= 40 && $l1->getPontuacao() < 40) {
                    echo '<hr>';
                    echo '<br>'.$l2->getNome().' Nocauteou '.$l1->getNome();
                    return $l2->setPontuacao($nocoute);
                }
            }
            $this->setRounds($this->getRounds() - 1);
            $auxRound++;
        }
    }

}
