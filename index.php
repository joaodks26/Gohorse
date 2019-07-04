
<?php


    function sub($numero1, $numero2)
    {
        $sub = $numero1 - $numero2;
        echo $sub;      
    }
    
    function multiplicacao($numero1, $numero2)
    {
        $multiplicacao = $numero1 * $numero2;
        echo $multiplicacao;
    }

    function soma($numero1, $numero2)
    {
        $variavelsoma = $numero1 + $numero2;
        return $variavelsoma;
    }

    function divisao($numero1, $numero2)
    {
        if ($numero2 == 0)
        {
            echo " Não dividimos por zero";
        }        
        else
        {
            $div = $numero1 / $numero2;
            echo $div;
        }
    }


    divisao(8, 10);