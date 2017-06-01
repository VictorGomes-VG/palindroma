<?php
    echo 'digite uma palavra:';

    $palavra = trim(fgets(STDIN));

//funcao de VICTOR GOMES

    function palindroma($palavra)
    {
        $lista1 = array();
        $lista2 = array();

        $parametro = strlen($palavra) - 1;

        for ($i = 0; $i <= $parametro; $i++) {
            $lista2[] = $palavra[$i];
        }

        for ($j = $parametro; $j >= 0; $j--) {
            $lista1[] = $palavra[$j];
        }

        if ($lista1 == $lista2) {return true;
        } else {
            return false;
        }

    }

    var_dump(palindroma($palavra));




