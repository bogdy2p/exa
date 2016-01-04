<?php

class Reea_Hydraimport_Model_Config_CustomSelectionBooleanOptions extends Mage_Core_Model_Config_Data
{
    /**
     * Xml config path to value of samplefield1fromgroup1 field from system.xml
     *
     */
    const XML_PATH_HYDRAIMPORT_DEFAULTGROUP_VALUES = 'pbcmagmiscriptsection/defaultgroup/script_verbose';

    const OPTION1_VALUE = 0;
    const OPTION2_VALUE = 1;

    public function getSomeValueFromSystemConfigFile()
    {
        return Mage::getStoreConfig(self::XML_PATH_HYDRAIMPORT_DEFAULTGROUP_VALUES);
    }

    /**
     * Fills the select field with values
     *
     * @return array
     */
    public function toOptionArray()
    {
    	/**
    	 *
    	 * If we were to choose "Cool custom value 4" from admin backend then
    	 * var_dump would result in "3" which is the value of const OPTION4_VALUE.
    	 *
    	 */
    	//var_dump($this->getSomeValueFromSystemConfigFile());

        return array(
            self::OPTION1_VALUE => Mage::helper('somecooldashhelper1')->__('False'),
            self::OPTION2_VALUE => Mage::helper('somecooldashhelper1')->__('True'),
        );
    }
}
