<?php

class MW_Cmspro_Model_Mysql4_Newsnews_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('cmspro/newsnews');
    }
}