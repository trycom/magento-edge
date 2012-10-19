<?php
/**
* Arush Edge block
*
* @codepool   Local
* @category   Arush
* @package    Arush_Edge
* @module     Edge
*/
class Arush_Edge_Block_Sync extends Mage_Core_Block_Template
{
    public function getEdgeOn()
      {
  		  return (boolean)Mage::getStoreConfig('edge/sync/edge_on');
      }

    public function getEdgeCode()
      {        
          return (string)Mage::getStoreConfig('edge/sync/edge_code');
      }

}
