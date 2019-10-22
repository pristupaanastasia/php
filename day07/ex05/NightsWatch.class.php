<?php


class NightsWatch {
    private $_list = array();
	public function recruit($kek) {
    if ($kek instanceof IFighter)
        $this->_list[] = $kek;
    }
    public function fight() {
    foreach ($this->_list as $lol)
        {
         $lol->fight();
        }
    }
}
?>