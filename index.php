
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

    function media($numero1, $numero2, $numero3, $numero4)
    {
        $media = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
        echo $media;
    }

    function fatorial($numero1)
    {
        for ($i = $numero1; $i >= 1; $i--)
        {
            $fatorial = $fatorial * $numero1;
            $numero1 = $numero1 -1;
        }
    }

