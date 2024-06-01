<?php
namespace Morres\Greeting\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    protected $resultPageFactory;
    protected $scopeConfig;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        $greetingMessage = $this->scopeConfig->getValue('greeting_section/general/greeting_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getLayout()->getBlock('greeting')->setData('greeting_message', $greetingMessage);
        return $resultPage;
    }
}
