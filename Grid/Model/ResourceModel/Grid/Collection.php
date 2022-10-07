<?php

namespace Praveen\Grid\Model\ResourceModel\Grid;


use Praveen\Grid\Model\Grid;
use Praveen\Grid\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    
protected $_idFieldName = 'id';
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}