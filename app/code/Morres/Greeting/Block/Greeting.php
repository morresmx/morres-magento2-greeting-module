<?php
namespace Morres\Greeting\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Greeting extends Template
{
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getGreetingMessage()
    {
        return $this->scopeConfig->getValue(
            'greeting_section/general/greeting_message',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
