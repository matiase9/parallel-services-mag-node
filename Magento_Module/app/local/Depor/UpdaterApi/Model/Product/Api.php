<?php

class Depor_Updater_Model_Product_Api extends Mage_Api_Model_Resource_Abstract
{
  public function getProductCustom($idProduct) 
  {
    $productDetails = Mage::getModel("catalog/product")
      ->addAttributeToSelect('*')
      ->load($idProduct);

    return (!empty($productDetails)) ? $productDetails : null;
  }
}