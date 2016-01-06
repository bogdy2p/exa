<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Apicaller
 *
 * @author pbc
 */
class Reea_Exacc_Helper_Apicaller extends Mage_Core_Helper_Abstract
{

    function testone()
    {

        return "testone Works";
    }

    function testtwo()
    {

        $get_parameters_available = [
            'lotid',
            'locid',
            'locname',
            'itmid',
            'info0',
            'info1',
            'info2',
            'info3',
            'info4',
            'info5',
            'info6',
            'info7',
            'info8',
            'info9',
            'infolot',
            'qbook',
            'qreal',
            'dif',
            'tax',
            'pin',
            'pout',
            'rack',
            'vendor',
            'datein',
            'vbook',
            'vreal',
            'wty_mts
'];
        $get_parameters_string    = "";

        foreach ($get_parameters_available as $get_parameter) {
            $get_parameters_string .= '&'.$get_parameter.'='.$get_parameter;
        }

        print_r($get_parameters_string);
        die();

        $get_parameters_string = $url_of_api_call       = "https://ro.expertaccounts.com//?api=public&t1=e7d22b2d896aff8c14d0f1f6c7ff151b&t2=dbea0e6a82f856ae53f9c827665af265&infos=";
    }

    function getcompletestockinfo()
    {
        $working_get_parameters = [
            'lotid',
            'locid',
            'locname',
            'itmid',
            'info0',
            'info1',
            'info2',
            'info3',
            'info4',
            'info5',
            'info6',
            'info7',
            'info8',
            'info9',
            'infolot',
            'tax',
            'pin',
            'pout',
            'wty_mts'];

        $not_working_parameters = [
            'qbook', //Error Column not exists
            'qreal', //Error Column not exists
            'dif', //Error Column not exists
            'rack', //Error Column not exists
            'vendor', //Error Column not exists
            'datein', //Error Column not exists
            'vbook', //Error Column not exists
            'vreal', //Error Column not exists
        ];

        $get_parameters_string = implode(",", $working_get_parameters);

        print_r($get_parameters_string);
    }
}