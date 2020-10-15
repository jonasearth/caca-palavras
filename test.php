<?php
$letras = 'abcdefghijklmnopqrstuvwxyz';

echo "<br>";
$palavras = [
    "cachorro",
    "ratasana",
    "igreja",
    "expeliarmos",
    "hipopotamo",
    "responsabilidade",
    "pediatra",
    "programador",
    "habilitacao",
    "condominio",
    "ceifador",
    "catequismo",
    "industrial",
    "revolucao",
    "amantes",
    "velocidade",
    "eloquente",
    "bilingue",
    "terapauta",
    "jocelino",
    "strogonoff",
    "cachorro",
    "ratasana",
    "igreja",
    "expeliarmos",
    "hipopotamo",
    "responsabilidade",
    "pediatra",
    "programador",
    "habilitacao",
    "condominio",
    "ceifador",
    "catequismo",
    "industrial",
    "revolucao",
    "amantes",
    "velocidade",
    "eloquente",
    "bilingue",
    "terapauta",
    "jocelino",
    "strogonoff",
    "cachorro",
    "ratasana",
    "igreja",
    "expeliarmos",
    "hipopotamo",
    "responsabilidade",
    "pediatra",
    "programador",
    "habilitacao",
    "condominio",
    "ceifador",
    "catequismo",
    "industrial",
    "revolucao",
    "amantes",
    "velocidade",
    "eloquente",
    "bilingue",
    "terapauta",
    "jocelino",
    "strogonoff",
    "cachorro",
    "ratasana",
    "igreja",
    "expeliarmos",
    "hipopotamo",
    "responsabilidade",
    "pediatra",
    "programador",
    "habilitacao",
    "condominio",
    "ceifador",
    "catequismo",
    "industrial",
    "revolucao",
    "amantes",
    "velocidade",
    "eloquente",
    "bilingue",
    "terapauta",
    "jocelino",
    "strogonoff"
];
$mapa = null;
$colunas = 20;
$linhas = 24;


for ($i = 0; $i < $linhas; $i++) {
    for ($a = 0; $a < $colunas; $a++) {
        $mapa[$i][$a] = null;
    }
}
foreach ($palavras as $key => $palavra) {
    $done = false;
    while ($done == false) {
        $cachePalavra = false;
        $linhaInicial = rand(0, $linhas - 1);
        $colunaInicial = rand(0, $colunas - 1);
        $direcao =  rand(1, 8);
        switch ($direcao) {
            case 1:
                # oeste
                $cachePalavra = null;
                $finalLinha = $linhaInicial - strlen($palavra);
                if ($finalLinha < 0) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaInicial] == null || $mapa[$linhaAtual][$colunaInicial] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaInicial] = $palavra[$i];
                        $linhaAtual--;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;

            case 3:
                # Norte
                $cachePalavra = null;
                $finalColuna = $colunaInicial - strlen($palavra);
                if ($finalColuna < 0) {
                    break;
                }
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaInicial][$colunaAtual] == null || $mapa[$linhaInicial][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaInicial][$colunaAtual] = $palavra[$i];
                        $colunaAtual--;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;

            case 2:
                # leste
                $cachePalavra = null;
                $finalLinha = $linhaInicial + strlen($palavra);
                if ($finalLinha > $linhas - 1) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaInicial] == null || $mapa[$linhaAtual][$colunaInicial] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaInicial] = $palavra[$i];
                        $linhaAtual++;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;

                break;

            case 4:
                # sul
                $cachePalavra = null;
                $finalColuna = $colunaInicial + strlen($palavra);
                if ($finalColuna > $colunas - 1) {
                    break;
                }
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaInicial][$colunaAtual] == null || $mapa[$linhaInicial][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaInicial][$colunaAtual] = $palavra[$i];
                        $colunaAtual++;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;
            case 5:
                # Noroeste
                $cachePalavra = null;
                $finalLinha = $linhaInicial - strlen($palavra);
                $finalColuna = $colunaInicial - strlen($palavra);
                if ($finalLinha < 0 or $finalColuna < 0) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaAtual] == null || $mapa[$linhaAtual][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaAtual] = $palavra[$i];
                        $linhaAtual--;
                        $colunaAtual--;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;
            case 7:
                # Nordeste
                $cachePalavra = null;
                $finalLinha = $linhaInicial - strlen($palavra);
                $finalColuna = $colunaInicial + strlen($palavra);
                if ($finalLinha < 0 or $finalColuna > $colunas - 1) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaAtual] == null || $mapa[$linhaAtual][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaAtual] = $palavra[$i];
                        $linhaAtual--;
                        $colunaAtual++;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;
            case 6:
                # suldeste
                $cachePalavra = null;
                $finalLinha = $linhaInicial + strlen($palavra);
                $finalColuna = $colunaInicial + strlen($palavra);
                if ($finalLinha > $linhas - 1 or $finalColuna > $colunas - 1) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaAtual] == null || $mapa[$linhaAtual][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaAtual] = $palavra[$i];
                        $linhaAtual++;
                        $colunaAtual++;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;
            case 8:
                # sudoeste.
                $cachePalavra = null;
                $finalLinha = $linhaInicial + strlen($palavra);
                $finalColuna = $colunaInicial - strlen($palavra);
                if ($finalLinha > $linhas - 1 or $finalColuna < 0) {
                    break;
                }
                $linhaAtual = $linhaInicial;
                $colunaAtual = $colunaInicial;
                for ($i = 0; $i <  strlen($palavra); $i++) {

                    if ($mapa[$linhaAtual][$colunaAtual] == null || $mapa[$linhaAtual][$colunaAtual] == $palavra[$i]) {
                        $cachePalavra[$linhaAtual][$colunaAtual] = $palavra[$i];
                        $linhaAtual++;
                        $colunaAtual--;
                    } else {
                        $cachePalavra = null;
                        break;
                    }
                }

                if ($cachePalavra === null) {
                    break;
                }
                foreach ($cachePalavra as $key => $val) {
                    foreach ($val as $k => $v) {
                        if ($mapa[$key][$k] == $v || $mapa[$key][$k] == null)
                            $mapa[$key][$k] = $v;
                        else {
                            break;
                        }
                    }
                }
                $done = true;
                break;
        }
    }
}


for ($i = 0; $i < $linhas; $i++) {
    echo "<br>";
    for ($a = 0; $a < $colunas; $a++) {
        if ($mapa[$i][$a] !== null)
            echo "<button style='color:red; width: 20px; height:20px;'>" . $mapa[$i][$a] . "</button>";
        else {
            echo "<button style='width: 20px; height:20px;' >" . $letras[rand(0, strlen($letras) - 1)] . "</button>";
        }
    }
}
