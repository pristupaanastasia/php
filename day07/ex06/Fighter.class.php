<?php
abstract class Fighter {
    public $_name;
	public function __construct($kek) {
        $this->_name = $kek;
    }
    abstract public function fight($target);
}
?>
