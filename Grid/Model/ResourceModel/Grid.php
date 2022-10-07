<?php
namespace Praveen\Grid\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Grid extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('student','id');
    }
}