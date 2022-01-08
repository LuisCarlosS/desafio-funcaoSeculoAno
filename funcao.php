<?php
function SeculoAno($ano)
{
    $seculo = 1;
    $anosPorSeculo = 100;
    $restoDivisao = $ano % $anosPorSeculo;
    
    if ($restoDivisao == 0) {
        $seculo = $ano / $anosPorSeculo;
    } else {
        $inteiroDivisao = intval($ano / $anosPorSeculo);
        $seculo = $inteiroDivisao + 1;
    }
    return $seculo;
}

echo SeculoAno(1515);