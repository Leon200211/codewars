<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d

class Lex
{
    public int $n;
    public array $p;
    public array $used;
    public string $str;

    public function __construct(int $n) {
        $this->n = $n;
    }

    public function makeLex(int $pos) {
        if ($pos === $this->n) {
            for ($i = 0; $i < $this->n; $i++) {
                echo $this->p[$i];
            }

            return;
        }

        for ($i = 0; $i < $this->n; $i++) {
            if (!$this->used[$i]) {
                $this->used[$i] = true;
                $this->p[$pos] = $i;

                $this->makeLex($pos + 1);

                $this->p[$pos] = 0;
                $this->used[$i] = false;
            }
        }
    }
}

function permutations(string $s): array {
    $lex = new Lex(strlen($s));

    exit();
}