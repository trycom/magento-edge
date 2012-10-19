<?php

class Arush_Edge_Block_Page extends Mage_Adminhtml_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        // get the original theme
        $origTheme = Mage::getDesign()->getTheme('default');
    }
}