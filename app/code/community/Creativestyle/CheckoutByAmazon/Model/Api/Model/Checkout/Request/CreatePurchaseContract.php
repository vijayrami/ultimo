<?php

/**
 * Amazon Checkout API: CreatePurchaseContract request model
 *
 * Fields:
 * <ul>
 * <li>PurchaseContractMetadata: byte[]</li>
 * </ul>
 *
 * This file is part of The Official Amazon Payments Magento Extension
 * (c) creativestyle GmbH <amazon@creativestyle.de>
 * All rights reserved
 *
 * Reuse or modification of this source code is not allowed
 * without written permission from creativestyle GmbH
 *
 * @category   Creativestyle
 * @package    Creativestyle_CheckoutByAmazon
 * @copyright  Copyright (c) 2011 - 2013 creativestyle GmbH (http://www.creativestyle.de)
 * @author     Marek Zabrowarny / creativestyle GmbH <amazon@creativestyle.de>
*/
class Creativestyle_CheckoutByAmazon_Model_Api_Model_Checkout_Request_CreatePurchaseContract extends Creativestyle_CheckoutByAmazon_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'PurchaseContractMetadata' => array('FieldValue' => null, 'FieldType' => 'byte[]')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'CreatePurchaseContract';
        if ($this->issetPurchaseContractMetadata()) {
            $params['PurchaseContractMetadata'] = $this->getPurchaseContractMetadata();
        }
        return $params;
    }

}