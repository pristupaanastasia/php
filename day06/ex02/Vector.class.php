<?php
class Vector {
    private $_x;
    private $_y;
    private $_z;
    private $_color;
    private $_w = 0.0;
    static $verbose = false;
   
    public function __construct($arr) {
        if (isset($arr['dest']))
        {
            $dest = $arr['dest'];
            if (isset($arr['orig']))
                $orig = $arr['orig'];
            else
                $orig = new Vertex(array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ));
            $this->_x = $dest->getX();
            $this->_y = $dest->getY();
            $this->_z = $dest->getZ();
            $this->_x = $this->_x - $orig->getX();
            $this->_y = $this->_y - $orig->getY();
            $this->_z = $this->_z - $orig->getZ();
        }
        printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) constructed.\n", $this->_x, $this->_y, $this->_z,$this->_w);
    }
    public function magnitude()
    {
        return(sqrt($this->_x * $this->_x + $this->_y * $this->_y + $this->_z * $this->_z));
    }
    public function normalize()
    {
        $norm = $this->magnitude();
        $x = $this->_x / $norm;
        $y = $this->_y / $norm;
        $z = $this->_z / $norm;
        $f = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ) );
        return(new Vector( array('dest' => $f )));
    }
    public function add($rhs)
    {
        $x = $rhs->_x + $this->_x;
        $y = $rhs->_y + $this->_y;
        $z = $rhs->_z + $this->_z;
        $d = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ));
        return( new Vector( array('dest' => $d )));
    } 
    public function opposite()
    {
        $x = - $this->_x;
        $y = - $this->_y;
        $z = - $this->_z;
        $d = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ));
        return( new Vector( array('dest' => $d )));
    }
    public function sub($rhs)
    {
        $x = - $rhs->_x + $this->_x;
        $y = - $rhs->_y + $this->_y;
        $z = - $rhs->_z + $this->_z;
        $d = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ));
        return( new Vector( array('dest' => $d )));
    }
    public function  dotProduct($rhs)
    {
        $kek = $rhs->_x * $this->_x + $rhs->_y * $this->_y + $rhs->_z * $this->_z;
        return($kek);
    }
    public function cos($rhs)
    {
        $l1 = $rhs->magnitude();
        $l2 = $this->magnitude();
        $qv = $this->dotProduct($rhs);
        $cos = $qv / ($l1 * $l2);
        return($cos);
    }
    public function scalarProduct($k)
    {
        $x = $this->_x * $k;
        $y = $this->_y * $k;
        $z = $this->_z * $k;
        $d = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ));
        return( new Vector( array('dest' => $d )));
    }
    public function crossProduct($rhs)
    {
        $x = $this->_y * $rhs->_z - $this->_z * $rhs->_y;
        $y =  $this->_z * $rhs->_x - $this->_x * $rhs->_z;
        $z = $this->_x * $rhs->_y - $this->_y * $rhs->_x;
        $d = new Vertex(array( 'x' => $x, 'y' => $y, 'z' => $z ));
        return( new Vector( array('dest' => $d )));
    }
    public function __destruct()
    {
         printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) destructed.\n", $this->_x, $this->_y, $this->_z,$this->_w);
    }
    function __toString()
    {
        if (Vertex::$verbose)
            return (sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f, Color:( red: %3d, green: %3d, blue: %3d ) )",$this->_x, $this->_y, $this->_z,$this->_w,$this->_color->red,$this->_color->green,$this->_color->blue));
        else
            return (sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f )",$this->_x, $this->_y, $this->_z,$this->_w));
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