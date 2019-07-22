<?php
/*
 * @package     Intelipost_Quote
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Ithappens\Quote\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Quote extends AbstractDb
{

protected function _construct()
{
    $this->_init('ithappens_quote', 'id');
}

}

