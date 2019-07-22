<?php
/*
 * @package     Intelipost_Pickup
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Ithappens\Pickup\Block;

class Store extends \Magento\Framework\View\Element\Template
{

public function __construct(
    \Magento\Framework\View\Element\Template\Context $context
)
{
    $this->setTemplate('store.phtml');

    parent::__construct($context);
}

public function getAjaxStoreUrl()
{
    return $this->getUrl('Ithappens_Pickup/store/index');
}

}

