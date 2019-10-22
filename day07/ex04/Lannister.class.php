<?php


class Lannister {
    public function sleepWith($kek)
    {
        if ($kek instanceof self)
        {
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        }
        else
        {
            print("Let's do this." . PHP_EOL);
        }
    }
}


?>