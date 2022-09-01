<?php
namespace Dev2studio\ModuleList\Controller\Adminhtml\Index;
//use Magento\Shipping\Model\Rate\ResultFactory;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $post_data = $this->getRequest()->getParams();
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Extension list'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Dev2studio_ModuleList::menu');
    }
}
