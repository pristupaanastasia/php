<?php
require_once 'Color.class.php';
class Vertex {
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;
   static $verbose = true;
   
    public function __construct($vertex) {
        if (isset($vertex['x']) && isset($vertex['y']) && isset($vertex['z'])) {
                $this->_x = $vertex['x'];
                $this->_y= $vertex['y'];
                $this->_z = $vertex['z'];
                if (isset($vertex['color']))
                    $this->_color = $vertex['color'];
                else
                    $this->_color = new Color( array( 'red' => 255   , 'green' => 255   , 'blue' => 255 ) );
        }
        if (Vertex::$verbose) {
           printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, Color:( red: %3d, green: %3d, blue: %3d ) ) constructed.\n", $this->_x, $this->_y, $this->_z,$this->_w,$this->_color->red,$this->_color->green,$this->_color->blue);
        }
    }

    function getX()
    {
        return $this->_x;
    }
    function getY()
    {
        return $this->_y;
    }
    function getZ()
    {
        return $this->_z;
    }
    function setX($x)
    {
        $this->_x = $x;
    }
    function setY($y)
    {
        $this->_y = $y;
    }
    function setZ($z)
    {
        $this->_z = $z;
    }
    public function __destruct()
    {
        if (Vertex::$verbose)
            printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, Color:( red: %3d, green: %3d, blue: %3d ) ) destructed.\n", $this->_x, $this->_y, $this->_z,$this->_w, $this->_color->red,$this->_color->green,$this->_color->blue);
    }
    function __toString()
    {
        if (Vertex::$verbose)
            return (vsprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, Color:( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z,$this->_w,$this->_color->red,$this->_color->green,$this->_color->blue)));
        else
        return (vsprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f )", array($this->_x, $this->_y, $this->_z,$this->_w)));
    }
    public static function doc()
    {
        $read = fopen("Vertex.doc.txt", 'r');
        echo "\n";
        while ($read && !feof($read))
            echo fgets($read);
        echo "\n";
    }
}

?>