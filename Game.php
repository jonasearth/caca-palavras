<?php

require_once "./IGame.php";
class Game implements IGame{

    private const letras = 'abcdefghijklmnopqrstuvwxyz';
    private $width;
    private $height;
    private $numberOfWords;
    private $listOfWords;
    private $map;

    function __construct($width, $height, $numberOfWords, $listOfWords)
    {
        $this->width = $width;
        $this->height = $height;
        $this->numberOfWords = $numberOfWords;
        $this->listOfWords = $listOfWords;
    }

    public function makeGame():void{
        $this->nullMap();
        $this->makeMap();
    }

    private function makeMap():void{
        shuffle($this->listOfWords);
        for ($count=0; $count < $this->numberOfWords; $count++) { 
            $done = false;
            while ($done == false) {
                $cache = false;
                $startLine = rand(0, $this->height - 1);
                $startCol = rand(0, $this->width - 1);
                $direcao =  rand(1, 8);
                switch ($direcao) {
                    case 1:
                        # oeste
                        $cache = null;
                        $endLine = $startLine - strlen($this->listOfWords[$count]);
                        if ($endLine < 0) {
                            break;
                        }
                        $currentLine = $startLine;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$startCol] == null || $this->map[$currentLine][$startCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$startCol] = $this->listOfWords[$count][$i];
                                $currentLine--;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;

                    case 3:
                        # Norte
                        $cache = null;
                        $endCol = $startCol - strlen($this->listOfWords[$count]);
                        if ($endCol < 0) {
                            break;
                        }
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$startLine][$currentCol] == null || $this->map[$startLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$startLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentCol--;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;

                    case 2:
                        # leste
                        $cache = null;
                        $endLine = $startLine + strlen($this->listOfWords[$count]);
                        if ($endLine > $this->height - 1) {
                            break;
                        }
                        $currentLine = $startLine;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$startCol] == null || $this->map[$currentLine][$startCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$startCol] = $this->listOfWords[$count][$i];
                                $currentLine++;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;

                        break;

                    case 4:
                        # sul
                        $cache = null;
                        $endCol = $startCol + strlen($this->listOfWords[$count]);
                        if ($endCol > $this->width - 1) {
                            break;
                        }
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$startLine][$currentCol] == null || $this->map[$startLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$startLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentCol++;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;
                    case 5:
                        # Noroeste
                        $cache = null;
                        $endLine = $startLine - strlen($this->listOfWords[$count]);
                        $endCol = $startCol - strlen($this->listOfWords[$count]);
                        if ($endLine < 0 or $endCol < 0) {
                            break;
                        }
                        $currentLine = $startLine;
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$currentCol] == null || $this->map[$currentLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentLine--;
                                $currentCol--;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;
                    case 7:
                        # Nordeste
                        $cache = null;
                        $endLine = $startLine - strlen($this->listOfWords[$count]);
                        $endCol = $startCol + strlen($this->listOfWords[$count]);
                        if ($endLine < 0 or $endCol > $this->width - 1) {
                            break;
                        }
                        $currentLine = $startLine;
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$currentCol] == null || $this->map[$currentLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentLine--;
                                $currentCol++;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;
                    case 6:
                        # suldeste
                        $cache = null;
                        $endLine = $startLine + strlen($this->listOfWords[$count]);
                        $endCol = $startCol + strlen($this->listOfWords[$count]);
                        if ($endLine > $this->height - 1 or $endCol > $this->width - 1) {
                            break;
                        }
                        $currentLine = $startLine;
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$currentCol] == null || $this->map[$currentLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentLine++;
                                $currentCol++;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
                                else {
                                    break;
                                }
                            }
                        }
                        $done = true;
                        break;
                    case 8:
                        # sudoeste.
                        $cache = null;
                        $endLine = $startLine + strlen($this->listOfWords[$count]);
                        $endCol = $startCol - strlen($this->listOfWords[$count]);
                        if ($endLine > $this->height - 1 or $endCol < 0) {
                            break;
                        }
                        $currentLine = $startLine;
                        $currentCol = $startCol;
                        for ($i = 0; $i <  strlen($this->listOfWords[$count]); $i++) {

                            if ($this->map[$currentLine][$currentCol] == null || $this->map[$currentLine][$currentCol] == $this->listOfWords[$count][$i]) {
                                $cache[$currentLine][$currentCol] = $this->listOfWords[$count][$i];
                                $currentLine++;
                                $currentCol--;
                            } else {
                                $cache = null;
                                break;
                            }
                        }

                        if ($cache === null) {
                            break;
                        }
                        foreach ($cache as $key => $val) {
                            foreach ($val as $k => $v) {
                                if ($this->map[$key][$k] == $v || $this->map[$key][$k] == null)
                                    $this->map[$key][$k] = $v;
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

    }

    public function renderGame():void{
        for ($i = 0; $i < $this->height; $i++) {
            echo "<br>";
            for ($a = 0; $a < $this->width; $a++) {
                if ($this->map[$i][$a] !== null)
                    echo "<button style='color:red; width: 20px; height:20px;'>" . $this->map[$i][$a] . "</button>";
                else {
                    echo "<button style='width: 20px; height:20px;' >" . Game::letras[rand(0, strlen(Game::letras) - 1)] . "</button>";
                }
            }
        }

    }

    private function nullMap():void{
        for ($i = 0; $i < $this->height; $i++) {
            for ($a = 0; $a < $this->width; $a++) {
                $this->map[$i][$a] = null;
            }
        }
    }
}