<?php
/**
 * @category   Smso
 * @package    Ovesenterprise_Smso
 * @copyright  Copyright (c) 2020 Smso (https://www.smso.ro/)
 * @author     Lilian Codreanu <lilian.codreanu@ovesenterprise.com>
 */

class Ovesenterprise_Smso_Model_System_Config_Source_Sender
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach(Mage::getModel('smso/service_smso')->getSenderList() as $itemObject) {
            $options[] = [
                'value' => $itemObject->id,
                'label' => $itemObject->name
            ];
        }

        return $options;
    }
}