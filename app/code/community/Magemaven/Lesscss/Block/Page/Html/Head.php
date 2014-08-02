<?php

class Magemaven_Lesscss_Block_Page_Html_Head extends Mage_Page_Block_Html_Head
{
    protected function &_prepareStaticAndSkinElements($format, array $staticItems, array $skinItems,
                                                      $mergeCallback = null)
    {
        $format = str_replace('<link rel="stylesheet" type="text/css" href="%s"%s />', '<link type="text/css" href="%s"%s rel="stylesheet" />', $format);
        return parent::_prepareStaticAndSkinElements($format, $staticItems, $skinItems, $mergeCallback);
    }
}
