<?php
namespace WebTechnologyCodes\ZipcodeAvailablity\Block\Adminhtml\Zipavail\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('zipavail_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Zipavail Information'));
    }
}