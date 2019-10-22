<?php
class Vector {
    const IDENTITY = "kek";
    const SCALE ="lol";
    const RX = "juj";
    const RY = "lol";
    const RZ ="gtg";
    const TRANSLATION = "hhh";
    const PROJECTION = "hh";
    
   static $verbose = false;
   
    public function __construct($arr) {
        if (isset($arr['preset']))
        {

        }
        printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) constructed.\n", $this->x, $this->y, $this->z,$this->w);
    }
    public function __destruct()
    {
         printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) destructed.\n", $this->x, $this->y, $this->z,$this->w);
    }
    function __toString()
    {
        if (Vertex::$verbose)
            return (sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f, Color:( red: %3d, green: %3d, blue: %3d ) )",$this->x, $this->y, $this->z,$this->w,$this->color->red,$this->color->green,$this->color->blue));
        else
            return (sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) )",$this->x, $this->y, $this->z,$this->w));
    }
    public static function doc()
    {
        $read = fopen("Vector.doc.txt", 'r');
        echo "\n";
        while ($read && !feof($read))
            echo fgets($read);
        echo "\n";
    }
}

?>