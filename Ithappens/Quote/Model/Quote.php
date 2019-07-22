<?php
/*
 * @package     Intelipost_Quote
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Ithappens\Quote\Model;

use Magento\Framework\Model\AbstractModel;

class Quote extends AbstractModel
{

protected function _construct()
{
    $this->_init('Ithappens\Quote\Model\Resource\Quote');
}

}

