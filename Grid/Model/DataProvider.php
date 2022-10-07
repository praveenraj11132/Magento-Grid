<?php
namespace Praveen\Grid\Model;
use Praveen\Grid\Model\ResourceModel\Grid\CollectionFactory;
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $gridCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $gridCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
   
    public function getData()
    {
        return [];
    }
}