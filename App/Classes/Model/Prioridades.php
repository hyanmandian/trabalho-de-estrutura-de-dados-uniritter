<?php
include_once DOCROOT . 'Classes/Model/Session.php';
class Prioridades {

    const Vermelho = 0;
    const Laranja = 1;
    const Amarelo = 2;
    const Verde = 3;
    const Azul = 4;
    
    static $perguntas = array(
        "Comprometimento da via aérea?" => Prioridades::Vermelho,
        "Respiração ineficaz?" => Prioridades::Vermelho,
        "Choque?" => Prioridades::Vermelho,
        "Não responde a estímulo?" => Prioridades::Vermelho,
        "Em convulsão" => Prioridades::Vermelho,
        "Dor severa?" => Prioridades::Laranja,
        "Grande hemorragia incontrolável?" => Prioridades::Laranja,
        "Alteração do estado de consciência?" => Prioridades::Laranja,
        "Temperatura maior ou igual a 39°C?" => Prioridades::Laranja,
        "Trauma craniano severo?" => Prioridades::Laranja,
        "Dor moderada?" => Prioridades::Amarelo,
        "Pequena hemorragia incontrolável?" => Prioridades::Amarelo,
        "Võmito persistente?" => Prioridades::Amarelo,
        "Temperatura entre 38 e 39°C?" => Prioridades::Amarelo,
        "Idoso ou grávida sintomático?" => Prioridades::Amarelo,
        "Dor leve?" => Prioridades::Verde,
        "Náuseas?" => Prioridades::Verde,
        "Temperatura entre 37 e 38°C?" => Prioridades::Verde,
        "Outros sintomas" => Prioridades::Azul,
    );
    
    
    static function getCor($prioridade){
        switch ($prioridade) {
            case 0: 
                return "Vermelho";
            case 1: 
                return "Laranja";
            case 2: 
                return "Amarelo";
            case 3: 
                return "Verde";
            case 4: 
                return "Azul";
        }
    }
}
