<?php
namespace Magpieinfotech\Volunteers\Model\ResourceModel;

class Volunteers extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('volunteers', 'entity_id');
    }
}
?>