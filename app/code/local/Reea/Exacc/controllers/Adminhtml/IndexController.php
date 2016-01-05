<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Reea_Exacc_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('reea_exacc');
    }

    public function indexAction()
    {


        $apicaller = Mage::helper('reea_exacc/apicaller');

        echo $apicaller->testone();


        echo "<h1>";
        print_r("IT WORKS. !!!!!!!!!!!!!!");
        echo "</h1>";

    }
}