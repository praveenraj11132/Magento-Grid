<?php

namespace Praveen\Grid\Controller\Adminhtml\Grid;
class Save extends \Magento\Backend\App\Action
{
    
    var $gridFactory;
  
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Praveen\Grid\Model\GridFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->gridFactory = $gridFactory;
    }
  
    public function execute()
    {
 
        $data = $this->getRequest()->getParam('addnew');
        if (!$data) {
            $this->_redirect('grid/grid/index');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('grid/grid/index');
    }
   
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Praveen_Grid::save');
    }
}