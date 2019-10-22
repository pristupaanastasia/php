<?php


class Jaime extends Lannister {
    public function sleepWith($kek)
    {
        if ($kek instanceof Lannister)
        {
            $kek->sleepWith($this);
        }
        else
        {
            print("Let's do this." . PHP_EOL);
        }
    }
}


?>