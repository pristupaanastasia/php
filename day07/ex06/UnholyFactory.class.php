<?php
class UnholyFactory {
    private $_array = array();
    public function absorb($kek)
    {
        if ($kek instanceof Fighter)
        {
            if (!in_array($kek,$this->_array))
            {
                print("(Factory absorbed a fighter of type " .$kek->_name.")". PHP_EOL);
                $this->_array[]=$kek;
            }
            else
            {
                print("(Factory already absorbed a fighter of type ".$kek->_name.")". PHP_EOL);
            }
        }
        else
        {
            print("(Factory can't absorb this, it's not a fighter) ". PHP_EOL);
        }
    }
    public function fabricate($kek)
    {
        foreach( $this->_array as $key=>$value)
        {
            foreach( $value as $z=>$k)
            {
                if ($kek == $k)
                {
                    $new =  new $value;
                     print("(Factory fabricates a fighter of type ".$new->_name.")". PHP_EOL);
                    return($new);
                }
            }
        }
        print("(Factory hasn't absorbed any fighter of type ".$kek.")". PHP_EOL);
        return(NULL);
    }
}
?>