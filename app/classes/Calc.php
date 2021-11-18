<?php

namespace App\Classes;

class Calc
{
    public function sum(int $num)
    {
        for ($i = 0; $i < $num; $i++) {
            switch ($i) {
                case $i % 3 == 0 && $i % 5 == 0:
                    echo "Integraciones \n";
                    break;
                case $i % 3 == 0:
                    echo "Falabella \n";
                    break;
                case $i % 5 == 0:
                    echo "It \n";
                    break;
            }
        }
        return True;
    }
}
